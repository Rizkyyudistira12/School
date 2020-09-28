<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['user_id', 'nama_depan', 'nama_belakang', 'jenis_kelamin', 'agama', 'alamat', 'avatar', 'tempat_lahir', 'tanggal_lahir', 'nama_ayah', 'nama_ibu', 'nisn', 'tlp', 'jurusan'];
    public function getAvatar()
    {
        // if avatar null
        if(!$this->avatar){
            return asset('images/default.jpg');
        }
        // if avatar available
        return asset('images/'.$this->avatar);
    }
    public function mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai'])->withTimestamps();
    }
    public function rataRataNilai()
    {
        //Ambil Nilai
        $total = 0;
        $hitung = 0;
        if($this->mapel->isNotEmpty()){
            foreach($this->mapel as $mapel){
                $total += $mapel->pivot->nilai;
                $hitung++;
            }
            return round($total/$hitung);
        }
    }
        

    public function nama_lengkap()
    {
        return $this->nama_depan.' '.$this->nama_belakang;
    }
    
}
