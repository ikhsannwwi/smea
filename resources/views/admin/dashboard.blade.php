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

    <ul class="box-info">
      <li>
          <i class='bx bxs-group' ></i>
          <span class="text">
              <h3>@php
                  echo $total_guru
                  @endphp</h3>
          <p>Jumlah Guru</p>
          <button id="guruBtn" onclick="guruBtn()" class="button__">View</button>
        </span>
      </li>
      <li>
        <i class='bx bxs-calendar-check' ></i>
        <span class="text">
          <h3>@php
            echo $total_agenda
            @endphp</h3>
          <p>Jumlah Agenda</p>
          <button id="agendaBtn" class="button__">View</button>
        </span>
      </li>
      <li>
        <i class='bx bxs-food-menu' ></i>
        <span class="text">
          <h3>@php
            echo $total_jurusan
            @endphp</h3>
          <p>Kompetensi Keahlian</p>
          <button id="jurusanBtn" class="button__">View</button>
        </span>
      </li>
      <li>
        <i class='bx bxs-dollar-circle' ></i>
        <span class="text">
          <h3>@php
            echo $total_pegawai
            @endphp</h3>
          <p>Kepengurusan Sekolah</p>
          <button id="pegawaiBtn" class="button__">View</button>
        </span>
      </li>
    </ul>


    <div   id="dashboard_guru" class="table-data ">
      <div class="order">
        <div class="head">
          <h3>Jumlah Guru</h3>
          <i class='bx bx-search' ></i>
          <i class='bx bx-filter' ></i>
        </div>
        <table>
          <thead>
            <tr>
              {{-- <th>No</th> --}}
              <th>Nama Guru</th>
              <th>NIP Guru</th>
              <th>Tempat/Tanggal-Lahir</th>
              <th>Pendidikan</th>
              <th>MataPelajaran</th>
              
            </tr>
          </thead>
          <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($gurus as $row)
            <tr>
              {{-- <td>{{$no++}}</td> --}}
              <td>
                <img  src="{{asset(''.$row->guru_photo)}}">
                <p>{{$row->guru_nama}}</p>
              </td>
              <td>{{$row->guru_nip}}</td>
              <td>{{$row->guru_tmp_lahir}}/{{$row->guru_tgl_lahir}}</td>
              <td>{{$row->pendidikan_guru}}</td>
              <td>{{$row->guru_mapel}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <div id="linkGuru" class="link">
          {{ $gurus->links('admin.layouts.paginator') }}
        </div>
      </div>
      
    </div>
    <div style="display:none;" id="dashboard_agenda" class="table-data ">
      <div class="order">
        <div class="head">
          <h3>Agenda</h3>
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
              <th>Waktu</th>
              <th>Keterangan</th>
              <th>Author</th>
              
            </tr>
          </thead>
          <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($agendas as $row)
            <tr>
              {{-- <td>{{$no++}}</td> --}}
              
              <td>{{$row->agenda_nama}}</td>
              <td>{{$row->agenda_deskripsi}}</td>
              <td>{{$row->agenda_tempat}}</td>
              <td>{{$row->agenda_waktu}}</td>
              <td>{{$row->agenda_keterangan}}</td>
              <td>{{$row->agenda_author}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <div id="linkAgenda" class="link">
          {{ $agendas->links('admin.layouts.paginator') }}
        </div>
      </div>
      
    </div>
    <div style="display:none;" id="dashboard_jurusan" class="table-data ">
      <div class="order">
        <div class="head">
          <h3>Kompetensi Keahlian</h3>
          <i class='bx bx-search' ></i>
          <i class='bx bx-filter' ></i>
        </div>
        <table>
          <thead>
            <tr>
              {{-- <th>No</th> --}}
              <th>Nama Jurusan</th>
              <th>Deskripsi</th>
              <th>Author</th>
              
            </tr>
          </thead>
          <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($jurusan as $row)
            <tr>
              {{-- <td>{{$no++}}</td> --}}
              <td>
                <img  src="{{asset(''.$row->jurusan_photo)}}">
                <p>{{$row->jurusan_judul}}</p>
              </td>
              <td>{{$row->jurusan_deskripsi}}</td>
              <td>{{$row->jurusan_author}}</td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
        <div id="linkJurusan" class="link">
          {{ $jurusan->links('admin.layouts.paginator') }}
        </div>
      </div>
      
    </div>
    <div style="display:none;" id="dashboard_pegawai" class="table-data ">
      <div class="order">
        <div class="head">
          <h3>Kepengurusan Sekolah</h3>
          <i class='bx bx-search' ></i>
          <i class='bx bx-filter' ></i>
        </div>
        <table>
          <thead>
            <tr>
              {{-- <th>No</th> --}}
              <th>Nama Guru</th>
              <th>NIP Guru</th>
              <th>Jabatan</th>
              <th>Jenis Kelamin</th>
              
            </tr>
          </thead>
          <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($pegawai as $row)
            <tr>
              {{-- <td>{{$no++}}</td> --}}
              <td>
                <img  src="{{asset(''.$row->pegawai_photo)}}">
                <p>{{$row->pegawai_nama}}</p>
              </td>
              <td>{{$row->pegawai_nip}}</td>
              <td>{{$row->pegawai_jabatan}}</td>
              <td>{{$row->pegawai_jenkel}}</td>
            </tr>
            @endforeach
            
            
          </tbody>
        </table>
        <div id="linkPegawai" class="link">
          {{ $pegawai->links('admin.layouts.paginator') }}
        </div>
      </div>
      
    </div>

    
    
    
    

  </main>
  <!-- MAIN -->
</section>
<!-- CONTENT -->






<script>
const guruBtn =  document.getElementById('guruBtn');
const agendaBtn =  document.getElementById('agendaBtn');
const jurusanBtn =  document.getElementById('jurusanBtn');
const pegawaiBtn =  document.getElementById('pegawaiBtn');

const divGuru = document.getElementById('dashboard_guru');
const divAgenda = document.getElementById('dashboard_agenda');
const divJurusan = document.getElementById('dashboard_jurusan');
const divPegawai = document.getElementById('dashboard_pegawai');

guruBtn.addEventListener('click', () => {
	
		divGuru.style.display = 'block';
		divAgenda.style.display = 'none';
		divJurusan.style.display = 'none';
		divPegawai.style.display = 'none';
	
})
agendaBtn.addEventListener('click', () => {
	
		divAgenda.style.display = 'block';
    divGuru.style.display = 'none';
		divJurusan.style.display = 'none';
		divPegawai.style.display = 'none';
	
})
jurusanBtn.addEventListener('click', () => {
	
		divJurusan.style.display = 'block';
    divAgenda.style.display = 'none';
		divGuru.style.display = 'none';
		divPegawai.style.display = 'none';
	
})
pegawaiBtn.addEventListener('click', () => {
	
		divPegawai.style.display = 'block';
    divAgenda.style.display = 'none';
		divJurusan.style.display = 'none';
		divGuru.style.display = 'none';
	
})
</script>
@endsection

