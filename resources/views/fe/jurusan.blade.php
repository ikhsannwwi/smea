@extends('fe.layouts.header')

@section('content')
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('{{asset('tampilan/img/banner/smkn1.jpg')}}');">
        <div class="container">
            <div class="pagination-area">
                <h1>Kompetensi Keahlian</h1>
                <ul>
                <li>Daftar Kompetensi Keahlian Yang Tersedia</li>
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
                    
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-img-holder">
                                    <img src="{{asset('tampilan/gambar/jurusan.png')}}" class="img-responsive" alt="research">
                                    <ul class="news-date2">
                                       
                                    </ul>
                                </div>
                                <h3 class="title-news-left-bold"><a href="#">Nama Jurusan</a></h3>
                                <ul class="title-bar-high news-comments">
                                   
                                    <li ><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><p style="color:black">Deskripsi Jurusan</p></a></li>
                                   
                                       
                                   
                                </ul>
                               
                              
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-img-holder">
                                    <img src="{{asset('tampilan/gambar/jurusan.png')}}" class="img-responsive" alt="research">
                                    <ul class="news-date2">
                                       
                                    </ul>
                                </div>
                                <h3 class="title-news-left-bold"><a href="#">Nama Jurusan</a></h3>
                                <ul class="title-bar-high news-comments">
                                   
                                    <li ><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><p style="color:black">Deskripsi Jurusan</p></a></li>
                                   
                                       
                                   
                                </ul>
                               
                              
                              </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-img-holder">
                                    <img src="{{asset('tampilan/gambar/jurusan.png')}}" class="img-responsive" alt="research">
                                    <ul class="news-date2">
                                       
                                    </ul>
                                </div>
                                <h3 class="title-news-left-bold"><a href="#">Nama Jurusan</a></h3>
                                <ul class="title-bar-high news-comments">
                                   
                                    <li ><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><p style="color:black">Deskripsi Jurusan</p></a></li>
                                   
                                       
                                   
                                </ul>
                               
                              
                              </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-img-holder">
                                    <img src="{{asset('tampilan/gambar/jurusan.png')}}" class="img-responsive" alt="research">
                                    <ul class="news-date2">
                                       
                                    </ul>
                                </div>
                                <h3 class="title-news-left-bold"><a href="#">Nama Jurusan</a></h3>
                                <ul class="title-bar-high news-comments">
                                   
                                    <li ><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><p style="color:black">Deskripsi Jurusan</p></a></li>
                                   
                                       
                                   
                                </ul>
                               
                              
                              </div>
                        </div>
                        
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="pagination-center">
                            <?php //echo $page;?>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar">
                        
                        <div class="sidebar-box">
                            <div class="sidebar-box-inner">
                                <h3 class="sidebar-title">Link Terkait</h3>
                                <ul class="sidebar-categories">
                                
                                <li><a href="guru">Staf Guru</a><li>
                              <li><a href="pegawai">Staf Pegawai</a><li>
                              <li><a href="https://www.smknegeri1garut.sch.id/ppdbs/">Info PPDB</a></li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- News Page Area End Here -->
@endsection