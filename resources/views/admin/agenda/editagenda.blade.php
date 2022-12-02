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
        <h1>Agenda</h1>
        <ul class="breadcrumb">
          <li>
            <a href="#">Agenda</a>
          </li>
          <li><i class='bx bx-chevron-right' ></i></li>
          <li>
            <a class="active" href="#">Edit Agenda</a>
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
                
                <form action="/admin-updateagenda/{{$data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Agenda</label>
                        <input required value="{{$data->agenda_nama}}" type="text" class="form-control" name="agenda_nama" id="exampleInputEmail1" placeholder="Masukan Nama Agenda">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi</label>
                        <textarea required name="agenda_deskripsi" class="form-control" placeholder="Masukan Deskripsi">{{$data->agenda_deskripsi}}</textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Tempat</label>
                          <input required value="{{$data->agenda_tempat}}" type="text" class="form-control" name="agenda_tempat" id="exampleInputPassword1" placeholder="Masukan Tempat">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Keterangan</label>
                          <input required value="{{$data->agenda_keterangan}}" type="text" class="form-control" name="agenda_keterangan" id="exampleInputPassword1" placeholder="Masukan Keterangan">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal-Mulai</label>
                        <input required value="{{$data->agenda_mulai}}" type="date" class="form-control" name="agenda_mulai" id="exampleInputPassword1" placeholder="Masukan Tanggal Mulai">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Tanggal-Selesai</label>
                          <input required value="{{$data->agenda_selesai}}" type="date" class="form-control" name="agenda_selesai" id="exampleInputPassword1" placeholder="Masukan Tanggal Selesai">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Waktu</label>
                          <input required value="{{$data->agenda_waktu}}" type="text" class="form-control" name="agenda_waktu" id="exampleInputPassword1" placeholder="Masukan dengan Format Waktu (07.30 - Selesai)">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Author</label>
                          <input required value="{{$data->agenda_author}}" type="text" class="form-control" name="agenda_author" id="exampleInputPassword1" placeholder="Masukan Author">
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

