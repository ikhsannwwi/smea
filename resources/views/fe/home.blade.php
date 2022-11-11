@extends('fe.layouts.header')

@section('content')
    
<!-- Main Body Area Start Here -->

    
    <div class="slider1-area overlay-default">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides" title="#slider-direction" >
            
                <img src="{{asset('tampilan/gambar/welcome.jpeg')}}" alt="slider"   />
                
            </div>
            <div id="slider-direction"   class="t-cn slider-direction">
                <div class="slider-content s-tb slide-1">
                    
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
   
    <!-- Slider 1 Area End Here -->
    <!-- About 2 Area Start Here -->
    <div class="about2-area">
        <div class="container">
            <h1 class="about-title">Selamat Datang Di SMK Negeri 1 Garut</h1>
            <p class="about-sub-title"></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                    <div class="service-box2">
                        <div class="service-box-icon">
                            <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
                        </div>
                        <h3><a href="#">Lulusan Berkualitas</a></h3>
                        <p>Kami Mencetak lulusan berkualitas sesuai kebutuhan industri dengan program teaching factory.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">
                    <div class="service-box2">
                        <div class="service-box-icon">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        </div>
                        <h3><a href="#">Guru Berkompeten</a></h3>
                        <p>Kami Memiliki Guru - Guru berkompeten di bidangnya masing - masing.</p>
                        <br>
                        <br>
                        <br>
                        <a href="https://www.smknegeri1garut.sch.id/ppdbs/" style="position:center" class="view-all-accent-btn">Mari Bergabung</a>
     
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">
                    <div class="service-box2">
                        <div class="service-box-icon">
                            <a href="#"><i class="fa fa-book" aria-hidden="true"></i></a>
                        </div>
                        <h3><a href="#">Fasilitas Lengkap</a></h3>
                        <p>Kami Memiliki Fasilitas Sarana yang Lengkap untuk Menunjang proses pembelajaran </p>
                        
                       
                    </div>
                    
                </div>
                



            </div>
                
        </div>
    </div>
              
    <!-- About 2 Area End Here -->
    <!-- Featured Area Start Here -->
    
    <div class="courses1-area">
        <div class="container">
            <h2 class="title-default-left">Kompetensi Keahlian</h2>
        </div>
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
            
                <div class="courses-box1">
                    
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="{{asset('tampilan/gambar/jurusan.png')}}" alt="courses" style="width:200px; height:200px; position:center;">
                            
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title" style="position:center">Pengembangan Perangkat Lunak dan Gim</h3>
                            
                            
                        </div>

                        
                    
                </div>


                <div class="courses-box1">
                    
                    <div class="courses-img-wrapper hvr-bounce-to-bottom">
                        <img class="img-responsive" src="{{asset('tampilan/gambar/jurusan.png')}}" alt="courses" style="width:200px; height:200px; position:center;">
                        
                    </div>
                    <div class="courses-content-wrapper">
                        <h3 class="item-title" style="position:center">Pengembangan Perangkat Lunak dan Gim</h3>
                        
                        
                    </div>

                    
                
            </div>
                <div class="courses-box1">
                    
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="{{asset('tampilan/gambar/jurusan.png')}}" alt="courses" style="width:200px; height:200px; position:center;">
                            
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title" style="position:center">Sistem Informatika Jaringan dan Aplikasi</h3>
                            
                            
                        </div>

                        
                    
                </div>

                
                
                
            </div>
        </div>
    </div>
    </div>
    
    <!-- Featured Area End Here -->
    <!-- Lecturers Area Start Here -->
   
    <!-- Lecturers Area End Here -->
    <!-- Video Area Start Here -->
    <div class="video-area overlay-video bg-common-style" style="background-image: url('img/banner/1.jpg');">
        <div class="container">
            <div class="video-content">
                <h2 class="video-title">Melihat SMK Negeri 1 Garut Lebih Dekat</h2>
                <p class="video-sub-title">Melalui Video ini kami mempersembahkan 
                    <br>SMK Negeri 1 Garut</p>

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EWHu-SgCZmQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                        <br>
                        <br><br>
                        
                        <p class="video-sub-title"> <a href="https://www.youtube.com/channel/UClXQjtwnaRlwJV7-5kTNReQ" target="_blank" class="default-big-btn">Lihat Seluruh Video</a>
                        </p>
                    </div>
        </div>
    </div>
    <!-- Video Area End Here -->
    <!-- News and Event Area Start Here -->
    <div class="news-event-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                    <h2 class="title-default-left">Berita Dan Agenda Terbaru</h2>
                    <ul class="news-wrapper">
                    @foreach ($berita as $row)
                        <li>
                            <div class="news-img-holder">
                                <a href="#"><img src="{{asset('tampilan/gambar/smea.jpeg')}}" class="img-responsive" alt="news"></a>
                            </div>
                            &nbsp &nbsp &nbsp&nbsp
                            <div class="news-content-holder">
                                <h3><a href="artikel/{{$row->tulisan_slug}}">Ini Berita</a></h3>
                                <div class="post-date">Tanggal Berita</div>
                                <p>Tulisan Berita</p>
                            </div>
                        </li>
                        @endforeach
                        
                    </ul>
                    <div class="news-btn-holder">
                        <a href="blog" class="view-all-accent-btn">Lihat Semua Berita</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area">
                    <h2 class="title-default-left"></h2>
                    <ul class="event-wrapper">
                    @foreach($agenda as $row)
                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                            <div class="event-calender-wrapper">
                                <div class="event-calender-holder">
                                    <h3><?php echo date("d", strtotime($row->agenda_tanggal));?></h3>
                                    <p> <?php echo date("M", strtotime($row->agenda_tanggal));?></p>
                                    <span><?php echo date("Y", strtotime($row->agenda_tanggal));?></span>
                                </div>
                            </div>
                            <div class="event-content-holder">
                                <h3><a href="single-event.html">Nama Agenda</a></h3>
                                <p><?php echo $row->agenda_deskripsi;?></p>
                                <ul>
                                    <li><?php echo $row->agenda_waktu;?></li>
                                   
                                </ul>
                            </div>
                        </li>
                        
                        @endforeach
                    </ul>
                    <div class="event-btn-holder">
                        <a href="agenda" class="view-all-primary-btn">Lihat Semua Agenda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News and Event Area End Here -->
    <!-- Counter Area Start Here -->
    <div class="counter-area bg-primary-deep" >
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                    <h2 class="about-counter title-bar-counter" data-num="<?php echo $tot_guru;?>"><?php echo $tot_guru;?></h2>
                    <p>Guru Profesional</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                    <h2 class="about-counter title-bar-counter" data-num="<?php echo $tot_pegawai;?>"><?php echo $tot_pegawai;?></h2>
                    <p>Komite dan Staf Kependidikan SMKN 1 Garut</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                    <h2 class="about-counter title-bar-counter" data-num="<?php echo $tot_jurusan;?>"><?php echo $tot_jurusan;?></h2>
                    <p>Jumlah Kompetensi Keahlian</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                    <h2 class="about-counter title-bar-counter" data-num="<?php echo $tot_agenda;?>"><?php echo $tot_agenda;?></h2>
                    <p>Agenda Sekolah</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Area End Here -->
    <!-- Publications Area Start Here -->
    
    <!-- Publications Area End Here -->
    <!-- Students Join 2 Area Start Here -->
    <div class="courses1-area">
        <div class="container">
            <h2 class="title-default-left">Ekstrakurikuler</h2>
        </div>
        <div class="container">
            <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
            
                <div class="courses-box1">
                   
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">
                            <img class="img-responsive" src="{{asset('tampilan/gambar/jurusan.png')}}" alt="courses" style="width:200px; height:200px; position:center;">
                            
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title">Ekskul Coding</h3>
                            
                            
                        </div>
                    
                </div>
                <div class="courses-box1">
                   
                   <div class="courses-img-wrapper hvr-bounce-to-bottom">
                       <img class="img-responsive" src="{{asset('tampilan/gambar/jurusan.png')}}" alt="courses" style="width:200px; height:200px; position:center;">
                       
                   </div>
                   <div class="courses-content-wrapper">
                       <h3 class="item-title">Ekskul Coding</h3>
                       
                       
                   </div>
               
           </div>
           <div class="courses-box1">
                   
                   <div class="courses-img-wrapper hvr-bounce-to-bottom">
                       <img class="img-responsive" src="{{asset('tampilan/gambar/jurusan.png')}}" alt="courses" style="width:200px; height:200px; position:center;">
                       
                   </div>
                   <div class="courses-content-wrapper">
                       <h3 class="item-title">Ekskul Coding</h3>
                       
                       
                   </div>
               
           </div>
                
                
            </div>
        </div>
    </div>
    <!-- Students Join 2 Area End Here -->
    <!-- Brand Area Start Here -->
    
    <!-- Brand Area End Here -->
    
@endsection