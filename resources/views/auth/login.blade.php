@extends('layouts.contact')
@section('title','KIRISH')

@section('content')

<div class="page-info-section set-bg" data-setbg="img/bg_1.jpg">
      <div class="container">
        <div class="site-breadcrumb">
          <a href="{{ route('home') }}">Bosh sahifa</a>
          <span>Kirish</span>
        </div>
      </div>
    </div>


    <section class="search-section ss-other-page">
      <div class="container-fliud">
        <div class="search-warp">
          <div class="section-title text-white">
            <h2><span>Kirish</span></h2>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <div class="contact-form-warp">
                    <form method="POST" action="{{ route('login') }}" class="contact-form bg-white">
                        @csrf
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control py-4 px-3" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="password">Parol</label>
                        <input id="password" type="password" class="form-control py-4 px-3" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Parolni eslab qolish</label>
                        </div>
                        <button type="submit" class="site-btn mt-3">Kirish</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    
@endsection
