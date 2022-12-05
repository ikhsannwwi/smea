@extends('fe.layouts.header')

@section('content')
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background-image: url('tampilan/img/banner/mengajar.jpg');">
        <div class="container">
            <div class="pagination-area">
                <h1>Guru Kami</h1> 
                <ul>
                <li>Kami Memiliki Guru - Guru Berkualitas Di Bidang Masing - Masing</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Lecturers Page 1 Area Start Here -->
    <div class="lecturers-page1-area">
        <div class="container">
          
            <div class="row">
            
                @foreach ($guru as $item)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                
                    <div class="single-item">
                            
                        <div class="lecturers1-item-wrapper">
                            <div class="lecturers-img-wrapper">
                               

                               
                            <img src="{{asset('images/foto-guru/'.$item->guru_photo)}}"  class="img-responsive" alt="team" style="width:300px; height: 200px">
              

                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title" style="font-size:17px"><a href="#">{{$item->guru_nama}}</a></h3>
                                <span class="item-designation" style="font-size:14px">{{$item->guru_mapel}}</span>  
                                Pendidikan Terakhir : 
                                <span class="item-designation"style="font-size:14px">{{$item->guru_pendidikan}}</span>
                            </div>

                            
                        </div>
                        
                        
                    </div>
                    
                    
                    
                </div>
                
                @endforeach
               
                
                
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