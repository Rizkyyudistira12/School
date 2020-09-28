<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_siswa = \App\Siswa::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        } else{

            $data_siswa = \App\siswa::all();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'nama_depan' => 'required|min:5',
            'nama_belakang' => 'required|min:5',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nisn' => 'required|min:10',
            'tlp' => 'required|min:12',
            'jurusan' => 'required',
            'avatar' => 'mimes:jpg,jpeg,png'

        ]);
        //INSERT KE TABLE USER
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('12345');
        $user->remember_token = str_random(60);
        $user->save();

        //INSERT KE TABLE SISWA
        $request->request->add(['user_id' => $user->id ]);
        $siswa = \App\Siswa::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses','Data Berhasil Diinput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa/edit',['siswa' => $siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Siswa $siswa)
    {
        $siswa->delete();
        return redirect('/siswa')->with('sukses', 'Data Siswa Berhasil Dihapus ! ');
    }

    public function profile(Siswa $siswa)
    {
        $matapelajaran = \App\Mapel::all();
        // Menyiapkan data untuk chart
        $categories = [];
        $data = [];
        foreach($matapelajaran as $mp){
            if ($siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()){
                $categories[] = $mp->nama;
                $data[] = $siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()->pivot->nilai;
            }
        }   
        return view('siswa.profile',['siswa' => $siswa,'matapelajaran' => $matapelajaran,'categories' => $categories,'data' => $data]);
    }

    public function addnilai(Request $request,$idsiswa)
    {
        $siswa = \App\Siswa::find($idsiswa);
        if($siswa->mapel()->where('mapel_id','$request->mapel') ->exists()){
            return redirect('siswa/'.$idsiswa.'/profile')->with('Error', 'Nilai Sudah Ada !');
        }
        $siswa->mapel()->attach($request->mapel,['nilai' => $request->nilai]);
        return redirect('siswa/'.$idsiswa.'/profile')->with('sukses', 'Nilai Berhasil Dimasukkan !');
    }

    public function deletenilai($idsiswa,$idmapel)
    {
        $siswa = \App\Siswa::find($idsiswa);
        $siswa->mapel()->detach($idmapel);
        return redirect()->back()->with('sukses', 'Nilai Berhasil Dihapus !');
    }

    public function exportExcel() 
    {
        return Excel::download(new SiswaExport, 'Siswa.xlsx');
    }

    public function exportPdf() 
    {
        $siswa = \App\Siswa::all();
        $pdf = PDF::loadView('export.siswapdf',['siswa' => $siswa]);
        return  $pdf->download('siswa.pdf');
    }

    public function profilsaya()
    {
        $siswa = auth()->user()->siswa;
        return view('siswa.profilsaya',compact(['siswa']));
    }


}
