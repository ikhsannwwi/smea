@extends('admin.siswa.header')

@section('content')
<div class="container">
    <h3 class="mb-5">Tambah Data</h3>
    <form action="/updatesiswa/{{$data->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">NISN</label>
          <input value="{{$data->nisn}}" required type="text" name="nisn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
          <input value="{{$data->nama}}" required type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <label for="exampleInputEmail1" class="form-label">Jurusan</label>
        <select required class="form-select mb-3" value="{{$data->jurusan}}" name="jurusan" aria-label="Default select example">
            <option value="{{$data->jurusan}}" selected>{{$data->jurusan}}</option>
            <option value="Sistem Informatika Jaringan dan Aplikasi">Sij</option>
            <option value="MultiMedia">MM</option>
            <option value="Teknik Komputer dan Jaringan">Tkj</option>
        </select>
        <div class="form-group mb-3">
            <label for="exampleInputFile">Foto Siswa</label>
            <input value="{{$data->foto_siswa}}" type="file" class="form-control" name="foto_siswa" >
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection