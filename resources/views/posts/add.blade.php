@extends('layout.main')

@section('title', 'Edit Data Siswa')

@section('content1')

<h1>Tambah Postingan</h1>
          <div class="row">
              <div class="col-md-8">
                <form action="/siswa/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="title" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" value="{{ old('title') }}">
                            @if($errors->has('title'))
                            <div class="alert alert-danger" role="alert">
                                <span class="help-block">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Content</label>
                                <textarea class="form-control" name="content" id="content" rows="3" {{ old('alamat') }}></textarea>
                            </div>
                        </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="filepath">
                                  </div>
                                  <img id="holder" style="margin-top:15px;max-height:100px;">
                            </div>
                   </form>
              </div>
          </div>
@endsection

@section('footer')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector( '#content' ) )
        .catch(error => {
            console.error( error );
        });
    $(document).ready(function(){
    $('#lfm').filemanager('image');
    });
</script>
@endsection


 

          
