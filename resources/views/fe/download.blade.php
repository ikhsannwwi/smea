@extends('fe.layouts.header')

@section('content')
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('tampilan/img/banner/smkn1.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>Informasi</h1>
                <ul>
                <li>Daftar Download Informasi SMK 1 Garut</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- News Page Area Start Here -->
    <div class="news-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="row">
                    <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-striped" id="display">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Berkas</th>
                  <th>Tanggal</th>
                  <th>Oleh</th>
                  <th style="text-align:right;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=1;
                  foreach ($download as $row):
                ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $row->file_judul;?></td>
                  <td><?php echo $row->file_tanggal;?></td>
                  <td><?php echo $row->file_oleh;?></td>
                  <td style="text-align:right;"><a href="download/get_file/'.{{$row->file_id}}" class="btn btn-info">Download</a></td>
                </tr>
              <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>

                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- News Page Area End Here -->
@endsection