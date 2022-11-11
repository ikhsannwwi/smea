@extends('admin.siswa.header')

@section('content')
<div class="container">
    <a href="tambahsiswa" type="button" class="btn btn-success">Tambah Data</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NISN</th>
            <th scope="col">Name</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Foto Siswa</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @php
           $no = 1; 
        @endphp
            @foreach ($data as $row)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>00{{$row->nisn}}</td>
              <td>{{$row->nama}}</td>
              <td>{{$row->jurusan}}</td>
              <td>
                <img width="50px" src="{{asset('fotosiswa/'.$row->foto_siswa)}}" alt="{{$row->foto_siswa}}">
              </td>
              <td>
                <a class="btn btn-warning" href="editsiswa/{{$row->id}}">Edit</a>
                <a class="btn btn-danger delete" href="#" data-id="{{$row->id}}" data-nama="{{$row->nama}}"  id="delete">Delete</a>
              </td>
            </tr>
                
            @endforeach
          
        </tbody>
      </table>
</div>
    
@endsection

@push('script')
  <script>
    $('.delete').click(function () {
        var dataid = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');
        swal({
            title: "Yakin ?",
            text: "Kamu akan menghapus data Siswa dengan nama " + nama + " ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletesiswa/" + dataid + ""
                    swal("Data" + nama + "berhasil di hapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data " + nama + " tidak jadi dihapus");
                }
            });
    });
  </script>
@endpush

  

    


    