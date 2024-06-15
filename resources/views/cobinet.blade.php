@extends('layouts.contact')
@section('title','Shaxsiy kabinet')

@section('content')

    <div class="page-info-section set-bg" data-setbg="img/bg_1.jpg">
      <div class="container">
        <div class="site-breadcrumb">
          <a href="{{ route('home') }}">Bosh sahifa</a>
          <span>Shaxsiy kabinet</span>
        </div>
      </div>
    </div>

    <section class="search-section ss-other-page">
      <div class="container-fliud">
        <div class="search-warp">
          <div class="section-title text-white">
            <h2><span>Parolni tiklash</span></h2>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <div class="contact-form-warp">
                  <div class="contact-form bg-white py-5 px-3">
                    <p href="" class="w-100">
                      <b>Ismingiz:</b>
                      <span style="float: right; color: green">{{ Auth::user()->name }}</span>
                    </p>
                    <p href="" class="w-100">
                      <b>Email addres:</b>
                      <span style="float: right; color: green">{{ Auth::user()->email }}</span>
                    </p>
                    <p href="" class="w-100">
                      <b>Telefon raqam:</b>
                      <span style="float: right; color: green">{{ Auth::user()->phone }}</span>
                    </p>
                    <p href="" class="w-100">
                      <b>Ro'yhatdan o'tdingiz:</b>
                      <span style="float: right; color: green">{{ Auth::user()->created_at }}</span>
                    </p>
                    <div class="w-100 text-center pt-1">
                      <a class="site-btn m-0" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Chiqish</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

