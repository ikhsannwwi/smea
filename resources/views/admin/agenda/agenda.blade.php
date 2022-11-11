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
        <h1>Dashboard</h1>
        <ul class="breadcrumb">
          <li>
            <a href="#">Dashboard</a>
          </li>
          <li><i class='bx bx-chevron-right' ></i></li>
          <li>
            <a class="active" href="#">Home</a>
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
        <a href="admin-tambahekskuls" class="tambahbtn btn__">
          <i class='bx bx-folder-plus'></i>
          <span class="text">Tambah Data</span>
        </a>
        <div class="head mt-5">
          <h3>Jumlah Guru</h3>
          <i class='bx bx-search' ></i>
          <i class='bx bx-filter' ></i>
        </div>
        <table>
          <thead>
            <tr>
              {{-- <th>No</th> --}}
              <th>Username</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
              
              
            </tr>
          </thead>
          <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($ekskul as $row)
            <tr>
              {{-- <td>{{$no++}}</td> --}}
              <td>
                <img  src="{{asset('images/foto_ekskul/'.$row->ekskul_photo)}}">
                <p>{{$row->ekskul_judul}}</p>
              </td>
              <td>{{$row->ekskul_deskripsi}}</td>
              <td class="">
                <a href="/admin-editekskuls/{{$row->id}}" id="edit" class="btn btn-warning"><i class='bx bx-edit bx-sm bx-tada-hover'></i></a>
                <a href="#"  data-id="{{$row->id}}" data-nama="{{$row->ekskul_judul}}"  id="delete"><i class='bx bx-folder-minus bx-sm bx-tada-hover delete' ></i></a>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <div class="link">
          {{ $ekskul->links('admin.layouts.paginator') }}
        </div>
      </div>
      
    </div>


    {{-- <section id="formtambah">
        <div class="container">
          <form>
            <div class="row">
              <h4>Account</h4>
              <div class="input-group input-group-icon">
                <input type="text" placeholder="Full Name"/>
                <div class="input-icon"><i class="fa fa-user"></i></div>
              </div>
              <div class="input-group input-group-icon">
                <input type="email" placeholder="Email Adress"/>
                <div class="input-icon"><i class="fa fa-envelope"></i></div>
              </div>
              <div class="input-group input-group-icon">
                <input type="password" placeholder="Password"/>
                <div class="input-icon"><i class="fa fa-key"></i></div>
              </div>
            </div>
            
          </form>
        </div>
    </section> --}}


  </main>
  <!-- MAIN -->
</section>
<!-- CONTENT -->

@push('script')

<script>
  $('.delete').click(function () {
      var ekskulid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');
      swal({
          title: "Yakin ?",
          text: "Kamu akan menghapus data pegawai dengan nama " + nama + " ",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
          .then((willDelete) => {
              if (willDelete) {
                  window.location = "/admin-deleteekskuls/" + ekskulid + ""
                  swal("Data" + nama + "berhasil di hapus", {
                      icon: "success",
                  });
              } else {
                  swal("Data " + nama + " tidak jadi dihapus");
              }
          });
  });
</script>

<script>
  if (Session:: has('success'))
    toastr.success("{{ Session::get('success') }}")
  endif
</script>
@endpush


@endsection

