@extends('layouts.contact')
@section('title','Online kurslar')


    @section('content')
    <div class="page-info-section set-bg" data-setbg="../img/bg_1.jpg">
      <div class="container">
        <div class="site-breadcrumb">
          <a href="{{ route('home') }}">Bosh sahifa</a>
          <a href="{{ route('cours') }}">Online kurslar</a>
          <span>Online kurs</span>
        </div>
      </div>
    </div>

    <section class="search-section ss-other-page">
      <div class="container-fliud">
        <div class="search-warp">
          <div class="section-title text-white">
            <h2><span>Online kurs</span></h2>
          </div>
            <div class="container bg-white p-2">
              <div class="row">
                <div class="col-lg-9">
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
                        <div class="video">
                            <video src="{{ $Cours->cours_video }}" id="myvideo" controls muted controlsList="nodownload"></video>
                        </div>
                    </div>
                    <h3>{{ $Cours->cours_name }}</h3>
                    <p>{{ $Cours->cours_text }}</p>
                  </div>
                </div>
                <div class="col-lg-3 sidebar">
                  <div class="sb-widget-item text-center mb-0">
                    <img src="../{{ $Cours->techer_image }}" style="border-radius: 50%; width: 120px; height: 120px" />
                    <h4 class="sb-w-title text-center mb-0">O'qituvchi</h4>
                    <span>{{ $Cours->techer }}</span>
                  </div>
                  <hr />
                  <div class="container">
                    <p class="w-100">
                      <b>Mavzular</b>
                      <span style="float: right">{{ $Static['Mavzular'] }}</span>
                    </p>
                    <p class="w-100">
                      <b>Davomiyligi</b>
                      <span style="float: right">{{ $Cours->cours_length }}</span>
                    </p>
                    <p class="w-100">
                      <b>A'zolikning davomiyligi:</b>
                      <span style="float: right">{{ $Cours->cours_days }} kun</span>
                    </p>
                    <p class="w-100">
                      <b>Talabalar</b>
                      <span style="float: right">{{ $Static['Talabalar'] }}</span>
                    </p>
                  </div>
                  <hr />
                  <div class="text-center">
                    <h5>Kurs narxi</h5>
                    <h3 class="text-success">{{ $Cours->price }} so'm</h3>
                  </div>
                  @if($Status==1)
                    <div class="text-center w-100 pt-3">
                    <a href="{{ route('mycours.show', $Cours->id  )}}" class="site-btn readmore bg-success">Darslarni boshlash</a>
                    </div>
                  @else
                  <div class="w-100 text-center mt-2">
                    <form action="{{ route('coursPay')}}" method="post">
                      @csrf 
                      <input type="hidden" name="cours_id" value="{{ $Cours->cours_id }}">
                      @auth
                      <input type="hidden" name="user_id" value="{{ Auth::user()->user_id }}">
                      @endauth
                      <button type="submit" class="site-btn readmore">Sotib olish</button>
                    </form>
                  </div>
                  @endif
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>



    @endsection