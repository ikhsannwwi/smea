@extends('admin.layouts.header')
{{--  --}}
@section('content')
<!-- CONTENT -->
<section id="content">
  <!-- NAVBAR -->
  <nav class="primary-navigation">
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
    <ul>
      <li>
        <a href="#" class="profile">
          <img src="img/people.png">
        </a>
        <ul class="dropdown">
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Illustration</a></li>
          <li><a href="#">Iconography</a></li>
        </ul>
      </li>
    </ul>
    
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
        <a href="admin-tambahagenda" class="tambahbtn btn__">
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
              <th>Nama Agenda</th>
              <th>Deskripsi</th>
              <th>Tempat</th>
              <th>Keterangan</th>
              <th>Tanggal</th>
              <th>Mulai</th>
              <th>Selesai</th>
              <th>Waktu</th>
              <th>Author</th>
              <th>Aksi</th>
              
              
            </tr>
          </thead>
          <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($agenda as $row)
            <tr>
              {{-- <td>{{$no++}}</td> --}}
              <td>
                <p>{{$row->agenda_nama}}</p>
              </td>
              <td>{{$row->agenda_deskripsi}}</td>
              <td>{{$row->agenda_tempat}}</td>
              <td>{{$row->agenda_keterangan}}</td>
              <td>{{$row->agenda_tanggal}}</td>
              <td>{{$row->agenda_mulai}}</td>
              <td>{{$row->agenda_selesai}}</td>
              <td>{{$row->agenda_waktu}}</td>
              <td>{{$row->agenda_author}}</td>
              <td class="">
                <a href="/admin-editagenda/{{$row->id}}" id="edit" class="btn btn-warning"><i class='bx bx-edit bx-sm bx-tada-hover'></i></a>
                <a href="#" class="delete" data-id="{{$row->id}}" data-nama="{{$row->agenda_nama}}"  id="delete"><i class='bx bx-folder-minus bx-sm bx-tada-hover ' ></i></a>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <div class="link">
          {{ $agenda->links('admin.layouts.paginator') }}
        </div>
      </div>
      
    </div>




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
                  window.location = "/admin-deleteagenda/" + ekskulid + ""
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

