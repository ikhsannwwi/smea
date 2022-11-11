@extends('fe.layouts.header')

@section('content')
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('tampilan/img/banner/pegawai.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>Kepengurusan Sekolah</h1> 
                <ul>
                
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Lecturers Page 1 Area Start Here -->
    <div class="lecturers-page1-area">
        <div class="container">
          
            <div class="row">
            <?php foreach ($pegawai as $row) : ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                
                    <div class="single-item">
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                               
                            <?php if(empty($row->pegawai_photo)):?>
              <img src="{{asset('assets/images/blank.png')}}"  class="img-responsive" alt="team" style="width:300px; height: 200px">
              <?php else:?>
              <img src="{{asset('assets/images/'.$row->pegawai_photo)}}"  class="img-responsive" alt="team" style="width:300px; height: 200px">
                      <?php endif;?>

                               
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title" style="font-size:17px"><a href="#"><?php echo $row->pegawai_nama;?></a></h3>
                                <span class="item-designation" style="font-size:14px"><?php echo $row->pegawai_jabatan;?></span>  
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
                <?php endforeach;?>
               
                
                
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="pagination-center">
                    <?php //echo $page;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Lecturers Page 1 Area End Here -->
@endsection