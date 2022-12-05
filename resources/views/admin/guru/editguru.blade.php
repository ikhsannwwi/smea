@extends('admin.layouts.header')
{{--  --}}
@section('content')
<!-- CONTENT -->
<section id="content">
  <!-- NAVBAR -->
  <nav>
    <i class='bx bx-menu' ></i>
    <a href="#" class="nav-link">Categories</a>
    <form action="#">
      <div class="form-input">
        <input type="search" placeholder="Search...">
        <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
      </div>
    </form>
    {{-- <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label> --}}
    <a href="#" class="notification">
      <i class='bx bxs-bell' ></i>
      <span class="num">8</span>
    </a>
    <a href="#" class="profile">
      <img src="img/people.png">
    </a>
  </nav>
  <!-- NAVBAR -->

  <!-- MAIN -->
  <main>
    <div class="head-title">
      <div class="left">
        <h1>Ekstrakulikuler</h1>
        <ul class="breadcrumb">
          <li>
            <a href="#">Ekstrakulikuler</a>
          </li>
          <li><i class='bx bx-chevron-right' ></i></li>
          <li>
            <a class="active" href="#">Edit Ekstrakulikuler</a>
          </li>
        </ul>
      </div>
      <a href="#" class="btn-download">
        <i class='bx bxs-cloud-download' ></i>
        <span class="text">Download PDF</span>
      </a>
    </div>

    


    <div class="table-data ">
        <div class="order">
            <div class="form-style-6">
                
              <form action="/admin-updateguru/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Guru</label>
                        <input required type="text" class="form-control" value="{{$data->guru_nama}}" name="guru_nama" id="exampleInputEmail1" placeholder="Masukan Nama Guru">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nip Guru</label>
                      <input required type="number" class="form-control" value="{{$data->guru_nip}}" name="guru_nip" id="exampleInputPassword1" placeholder="Masukan Nip Guru">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectRounded0">Jenis Kelamin</label>
                      <select required class="custom-select rounded-0 form-control" name="guru_jenkel" id="exampleSelectRounded0">
                        <option>{{$data->guru_jenkel}}</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input required type="text" class="form-control" value="{{$data->guru_tmp_lahir}}" name="guru_tmp_lahir" id="exampleInputEmail1" placeholder="Masukan Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input required type="date" class="form-control" value="{{$data->guru_tgl_lahir}}" name="guru_tgl_lahir" id="exampleInputEmail1" placeholder="Masukan Tanggal Lahir">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Pendidikan</label>
                      <input required type="text" class="form-control" value="{{$data->pendidikan_guru}}" name="pendidikan_guru" id="exampleInputEmail1" placeholder="Masukan Pendidikan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mata Pelajaran</label>
                    <input required type="text" class="form-control" value="{{$data->guru_mapel}}" name="guru_mapel" id="exampleInputEmail1" placeholder="Masukan Mata Pelajaran">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Guru</label>
                  <input type="file" class="form-control" value="{{$data->guru_photo}}" name="guru_photo" >
                </div>
                    
                </div>
                <!-- /.card-body -->
  
                <div class="card-footer">
                  <button type="submit" class="btn__ btn--border">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>
  </main>
  <!-- MAIN -->
</section>
<!-- CONTENT -->

@endsection

