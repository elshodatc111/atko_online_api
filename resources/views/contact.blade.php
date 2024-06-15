@extends('layouts.contact')
@section('title','Bo\'glanish')
    <div class="page-info-section set-bg" data-setbg="img/bg_1.jpg">
      <div class="container">
        <div class="site-breadcrumb">
          <a href="{{ route('home') }}">Bosh sahifa</a>
          <span>Bog'lanish</span>
        </div>
      </div>
    </div>

@section('content')
<section class="search-section ss-other-page">
      <div class="container-fliud">
        <div class="search-warp">
          <div class="section-title text-white">
            <h2><span>Biz bilan bog'lanish</span></h2>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="contact-form-warp">
                  <form class="contact-form" action="{{ route('contactCreate') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Ismingiz" requires />
                    <input type="text" name="email" placeholder="Email adres" requires />
                    <input type="text" name="phone" placeholder="Telefon raqamingiz" requires />
                    <textarea placeholder="Xabar matni" name="text"  requires></textarea>
                    <button class="site-btn" type="submit">Xabarni yuborish</button>
                  </form>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-info-area">
                  <div class="phone-number p-0 mb-2">
                    <span style="font-size: 36px" class="text-white">Telefon raqam</span>
                    <h5 class="text-white">+998 91 950 1101</h5>

                    <span style="font-size: 36px" class="text-white">Email addres</span>
                    <h5 class="text-white">atkoteams@gmail.com</h5>

                    <span style="font-size: 36px" class="text-white">Manzilimiz</span>
                    <h5 class="text-white">
                      Qarshi shahar, Mustaqillik shox ko'chasi 2-uy
                    </h5>
                  </div>
                  <div class="social-links p-0 m-0">
                    <a href="https://t.me/atko_teams" class="text-white" style="font-size: 24px"><i class="bi bi-telegram"></i></a>
                    <a href="https://www.facebook.com/atkoteams/" class="text-white" style="font-size: 24px"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/atko_teams/?igshid=OGQ5ZDc2ODk2ZA%3D%3D" class="text-white" style="font-size: 24px"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white" style="font-size: 24px"><i class="bi bi-youtube"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection