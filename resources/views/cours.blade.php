@extends('layouts.contact')
@section('title','Online kurslar')

    @section('content')
    <div class="page-info-section set-bg" data-setbg="img/bg_1.jpg">
      <div class="container">
        <div class="site-breadcrumb">
          <a href="{{ route('home') }}">Bosh sahifa</a>
          <span>Online kurslar</span>
        </div>
      </div>
    </div>
    <section class="search-section ss-other-page">
      <div class="container-fliud">
        <div class="search-warp">
          <div class="section-title text-white">
            <h2><span>Online kurslar</span></h2>
          </div>
          <div class="course-warp">
            <div class="row course-items-area">
              <!-- course -->
              @foreach($Cours as $item)
              <div class="mix col-lg-4 col-md-6 col-sm-12 finance">
                <div class="course-item">
                  <a href="{{ route('cours.show', $item->id )}}">
                    <div class="course-thumb set-bg" data-setbg="{{ $item->cours_image }}" style="min-height: 200px" >
                      <div class="price">Kurs narxi: {{ $item->price }} so'm</div>
                    </div>
                    <div class="course-info" style="min-height: 200px; max-height: 200px" >
                      <div class="course-text text-center">
                        <h5>{{ $item->cours_name }}</h5>
                        <p>{{ $item->cours_about }}</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>


    @endsection