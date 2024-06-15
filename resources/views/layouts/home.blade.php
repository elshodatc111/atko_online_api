
	@extends('layouts.head')
	@extends('layouts.menu')
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<h2>ATKO koreys tili markazi</h2>
				<p>Yurtimizning eng yetakchi o‘qituvchilari tomonidan tayyorlangan
					videodarslarni tomosha qilib, siz nafaqat ishonchli o‘qituvchi
					qidirishdan holi bo‘lasiz, balki noyob metodika orqali darslarni qiziq va
					oson yo‘llar bilan o‘zlashtirishingiz mumkin.</p>
			</div>
			
			@if (Route::has('login'))
				@auth
					
				@else
					@if (Route::has('register'))
						<div class="row">
							<div class="col-lg-4 offset-lg-4 text-center">
								<form class="intro-newslatter">
									<a href="{{ route('register') }}" class="site-btn">Ro'yhatdan o'tish</a>
								</form>
							</div>
						</div>
					@endif
				@endauth
			@endif
			
		</div>
	</section>
	@yield('content')
	@extends('layouts.footer');

	

