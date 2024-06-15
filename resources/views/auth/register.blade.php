@extends('layouts.contact')
@section('title','Ro\'yhatdan o\'tish')

@section('content')

<div class="page-info-section set-bg" data-setbg="img/bg_1.jpg">
      <div class="container">
        <div class="site-breadcrumb">
          <a href="{{ route('home') }}">Bosh sahifa</a>
          <span>Ro'yhatdan o'tish</span>
        </div>
      </div>
    </div>


    <section class="search-section ss-other-page">
      <div class="container-fliud">
        <div class="search-warp">
          <div class="section-title text-white">
            <h2><span>Ro'yhatdan o'tish</span></h2>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <div class="contact-form-warp">
                    <form method="POST" action="{{ route('register') }}" class="bg-white p-5">
                        @csrf
                        <label for="name">Ismingiz</label>
                        <input id="name" type="text" class="form-control py-4 px-3" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="phone" class="mt-3">Telefon raqmingiz</label>
                        <input id="phone" type="text" class="form-control py-4 px-3" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="email" class="mt-3">Email</label>
                        <input id="email" type="email" class="form-control py-4 px-3" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password" class="mt-3">Parol( 8 belgidan kam bo'lmasin)</label>
                        <input id="password" type="password" class="form-control py-4 px-3" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password-confirm" class="mt-3">Parolni yakrorlang</label>
                        <input id="password-confirm" type="password" class="form-control py-4 px-3" name="password_confirmation" required autocomplete="new-password">
                        <button type="submit" class="site-btn mt-3">
                            Ro'yhatdan o'tish
                        </button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    
@endsection
