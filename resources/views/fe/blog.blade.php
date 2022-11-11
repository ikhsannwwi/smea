@extends('fe.layouts.header')

@section('content')
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('tampilan/img/banner/smkn1.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>Berita Sekolah</h1>
                <ul>
                <li>Daftar Berita SMKN 1 Garut</li>
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
                    <?php foreach ($blog as $row) : ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-img-holder">
                                    <img src="{{asset('assets/images/'.$row->tulisan_gambar)}}" style="width:200px; height:200px" class="img-responsive" alt="research">
                                    <ul class="news-date2">
                                        <li><?php echo date("d M", strtotime($row->tulisan_tanggal));?></li>
                                        <li><?php echo date("Y", strtotime($row->tulisan_tanggal));?></li>
                                    </ul>
                                </div>
                                <h3 class="title-news-left-bold"><a href="artikel/'.{{$row->tulisan_slug}}"><?php echo $row->tulisan_judul;?></a></h3>
                                <ul class="title-bar-high news-comments">
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>Oleh : <p style="color:black"></span><?php echo $row->tulisan_author;?></p></a></li>
                                    <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><p style="color:black"><?php echo $row->tulisan_kategori_nama;?></p></a></li>
                                    <p><?php echo $row->tulisan_isi;?></p>
                                </ul>
                                
                              
                              </div>
                        </div>
                        <?php endforeach;?>

                        
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
                                <h3 class="sidebar-title">Daftar Kategori Berita</h3>
                                <ul class="sidebar-categories">
                                <?php foreach ($blog as $row) : ?>
                                    <li><?php echo $row->kategori_nama;?></li>
                                    
                                    <?php endforeach;?>
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