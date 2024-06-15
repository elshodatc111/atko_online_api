@extends('layouts.contact')
@section('title','Online kurslar')

    @section('content')


    <div class="page-info-section set-bg" data-setbg="../../img/bg_1.jpg">
      <div class="container">
        <div class="site-breadcrumb">
          <a href="{{ route('home') }}">Bosh sahifa</a>
          <a href="{{ route('mycours') }}">Mening kurslarim</a>
          <span>Mening kursim</span>
        </div>
      </div>
    </div>

    <section class="search-section ss-other-page">
      <div class="container-fliud">
        <div class="search-warp">
          <div class="section-title text-white">
            <h2><span>Kursning nomi</span></h2>
          </div>
          <section class="blog-page spad pb-0 mt-0 pt-0">
            <div class="container bg-white p-2">
              <div class="row">
                <div class="col-lg-9">
                  <!-- blog post -->
                  <style>
                    .main-video{
                        background: #fff;
                        border-radius: 5px;
                        padding: 10px;
                    }
                    .main-video video{
                        width: 100%;
                        border-radius: 5px;
                    }
                  </style>
                  
                  <div class="blog-post">
                    <div class="main-video">
                        <div class="video" style="width:90%;margin-left:5%;">
                            <video src="{{ $Mavzu->mavzu_video }}" id="myvideo" controls muted controlsList="nodownload"></video>
                        </div>
                    </div>
                    <h3 class="mt-0 p-0 w-100 text-center">{{ $Mavzu->mavzu_name }}</h3>
                    <div class="container">
                      <p>{{ $Mavzu->mavzu_text }}</p>
                    </div>
                    <hr>
                  </div>
                </div>
                <div class="col-lg-3 sidebar pt-4">
                  <p class="w-100">
                    <h4 class="w-100 text-center">Mavzular</h4>
                  </p>
                  <div class="container">
                    @foreach($Mavzular as $item)
                    <div class="my-2">
                      <a href="{{ route('mycours.show.lessin', ['cours_id'=>$Cours->id, 'id'=>$item->id]  ) }}" class="w-100">
                        <b>{{ $item->mavzu_name }}</b>
                        <span style="float: right">{{ $item->mavzu_length }}</span>
                      </a>
                    </div>
                    @endforeach
                  </div>
                  <hr />
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>


    @endsection