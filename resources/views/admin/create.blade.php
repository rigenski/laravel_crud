@extends('../layouts/master')
@section('title', 'Siswa')
@section('header', 'Siswa')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Tambah Siswa</h4>
      </div>
      <form action="/siswa/store" method="post">
        @csrf()
        <div class="card-body row">
          <div class="col-md-6 col-12">
          <div class="form-group{{$errors->has('nisn') ? ' has-error' : ''}}">
            <label>NISN</label>
            <input type="text" class="form-control" name="nisn" value="{{old('nisn')}}">
            @if($errors->has('nisn'))
                <span class="help-block text-danger">{{$errors->first('nisn')}}</span>
            @endif
          </div>
          <div class="form-group{{$errors->has('nama_lengkap') ? ' has-error' : ''}}">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" value="{{old('nama_lengkap')}}">
            @if($errors->has('nama_lengkap'))
                <span class="help-block text-danger">{{$errors->first('nama_lengkap')}}</span>
            @endif
          </div>
          <div class="form-group{{$errors->has('tempat') ? ' has-error' : ''}}">
            <label>Tempat</label>
            <input type="text" class="form-control" name="tempat" value="{{old('tempat')}}">
            @if($errors->has('tempat'))
                <span class="help-block text-danger">{{$errors->first('tempat')}}</span>
            @endif
          </div>
        
          <div class="form-group{{$errors->has('tempat_lahir') ? ' has-error' : ''}}">
            <label>Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanggal_lahir" value="{{old('tempat')}}">
            @if($errors->has('tanggal_lahir'))
                <span class="help-block text-danger">{{$errors->first('tanggal_lahir')}}</span>
            @endif
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="form-group{{$errors->has('gender') ? ' has-error' : ''}}">
            <label>Gender</label>
            <select class="form-control" name="gender">
              <option value="Laki-Laki" @if(old('tempat') == 'Laki-Laki') selected @endif>Laki-Laki</option>
              <option value="Perempuan" @if(old('tempat') == 'Perempuan') selected @endif>Perempuan</option>
            </select>
          </div>
          <div class="form-group{{$errors->has('no_wa') ? ' has-error' : ''}}">
            <label>No. WA</label>
            <input type="text" class="form-control" name="no_wa" value="{{old('no_wa')}}">
            @if($errors->has('no_wa'))
                <span class="help-block text-danger">{{$errors->first('no_wa')}}</span>
            @endif
          </div>
          <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="{{old('email')}}">
            @if($errors->has('email'))
                <span class="help-block text-danger">{{$errors->first('email')}}</span>
            @endif
          </div>
          <div class="form-group{{$errors->has('alamat') ? ' has-error' : ''}}">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}">
            @if($errors->has('alamat'))
                <span class="help-block text-danger">{{$errors->first('alamat')}}</span>
            @endif
          </div>
        </div>
      </div>
        <div class="card-footer text-right">
          <button class="btn btn-primary px-4">Tambah Siswa</button>
        </div>
      </form>
    </div>
@endsection