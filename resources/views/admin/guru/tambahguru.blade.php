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
            <a class="active" href="#">Insert Ekstrakulikuler</a>
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
                
                <form action="/admin-insertekskul" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ekstrakulikuler</label>
                            <input required type="text" class="form-control" name="ekskul_judul" id="exampleInputEmail1" placeholder="Masukan Nama Ekstrakulikuler">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Deskripsi</label>
                            <input required type="password" class="form-control" name="ekskul_deskripsi" id="exampleInputPassword1" placeholder="Masukan Deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto Ekstrakulikuler</label>
                            <input required type="file" class="form-control" name="ekskul_photo" >
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

