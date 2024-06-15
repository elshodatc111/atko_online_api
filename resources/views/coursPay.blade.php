@extends('layouts.contact')
@section('title','To\'lov')


@section('content')
  <div class="page-info-section set-bg" data-setbg="img/bg_1.jpg">
    <div class="container">
      <div class="site-breadcrumb">
        <a href="{{ route('home') }}">Bosh sahifa</a>
        <a href="{{ route('cours') }}">Online kurslar</a>
        <a href="{{ route('cours.show', $Cours->id )}}">Online kurs</a>
        <span>To'lov</span>
      </div>
    </div>
  </div>

    <section class="search-section ss-other-page">
      <div class="container-fliud">
        <div class="search-warp">
          <div class="section-title text-white">
            <h2><span>To'lov</span></h2>
          </div>
          <div class="container bg-white p-4">
            <div class="row">
              <div class="col-lg-12">
                <div class="blog-post p-4" style="border: 2px solid red">
                  <h2 class="text-center">ATKO kareys tili markazi</h2>
                  <div class="row">
                    <div class="col-4 mt-2"></div>
                    <div class="col-4 mt-2">
                      <div class="text-center mt-3 w-100">
                        <h5 class="mb-2 w-100 text-center">{{ $Cours->cours_name }}</h5>
                      </div>
                      <p class="w-100">
                        <b>Kursning narxi:</b>
                        <span class="text-success" style="float: right">{{ $Cours->price }} so'm</span>
                      </p>
                      <p class="w-100">
                        <b>A'zolikning davomiyligi:</b>
                        <span class="text-success" style="float: right">{{ $Cours->cours_days }} kun</span>
                      </p>
                      <p class="w-100">
                        <b>Buyurtma raqami</b>
                        <span class="text-success" style="float: right">{{ $order_id }}</span>
                      </p>
                      <div class="row">
                        <div class="text-center mt-3 w-100">
                          <h5 class="mb-2 w-100 text-center">To'lov turini tanlang</h5>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                          <form method="POST" action="https://checkout.paycom.uz">
                            <input type="hidden" name="merchant" value="656989b794dc4293bdd42b87"/>
                            <input type="hidden" name="amount" value="{{ $Cours->price.'00' }}"/>
                            <input type="hidden" name="account[order_id]" value="{{ $order_id}}"/>
                            <input type="hidden" name="lang" value="uz"/>
                            <input type="hidden" name="callback" value="https://atko.uz/mycours"/>
                            <input type="hidden" name="callback_timeout" value="{20}"/>
                            <input type="hidden" name="description" value="ATKO o'quv markaz online kurslari uchun to'lov"/>
                            <button type="submit" style="border: 1px solid green; border-radius: 5px" class="p-1"><img src="./img/payme.png" /></button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-lg-12 text-center sidebar">
                    <div class="w-100 text-center mt-2 mb-0">
                      <a href="{{ route('cours.show', 15 )}}" class="site-btn readmore">Kursga qaytish</a>
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