@extends('layouts.contact')
@section('title','Mening kurslarim')


    @section('content')

    <div class="page-info-section set-bg" data-setbg="img/bg_1.jpg">
      <div class="container">
        <div class="site-breadcrumb">
          <a href="{{ route('home') }}">Bosh sahifa</a>
          <span>Mening kurslarim</span>
        </div>
      </div>
    </div>

    <section class="search-section ss-other-page">
      <div class="container-fliud">
        <div class="search-warp">
          <div class="section-title text-white">
            <h2><span>Mening kurslarim</span></h2>
          </div>
          <div class="course-warp">
            <div class="row course-items-area">
              <!-- course -->
              @foreach($cours as $item)
                @if($item->user_id == Auth::user()->user_id)
                <div class="mix col-lg-4 col-md-6 col-sm-12 finance">
                  <div class="course-item">
                    <a href="{{ route('mycours.show', $item->id  )}}">
                      <div class="course-thumb set-bg" data-setbg="{{ $item->cours_image }}" style="min-height: 200px" >
                        <div class="price">Muddat: {{ $item->end }}</div>
                      </div>
                      <div class="course-info" style="min-height: 60px; max-height: 100px" >
                        <div class="course-text text-center py-1">
                          <h5>{{ $item->cours_name }}</h5>
                          <p>{{ $item->cours_about }}</p>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>



    @endsection