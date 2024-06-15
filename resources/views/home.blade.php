@extends('layouts.home')
@section('title',"Bosh sahifa")
@section('content')
    <section class="search-section mt-3">
		<div class="container">
			<div class="search-warp text-center p-1 px-2">
				<video class="video-fluid z-depth-1" style="width: 100%;height: auto;margin:0 auto" loop controls muted>
					<source src="https://atko.tech/video/kirish.mp4" type="video/mp4" />
				</video>
			</div>
		</div>
	</section>
	<section class="course-section spad pb-0 pt-0">
		<div class="course-warp">
			<div class="featured-courses">
				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="img/01.jpg"></div>
					<div class="row">
						<div class="col-lg-6 offset-lg-6 pl-0">
							<div class="course-info p-4">
								<div class="course-text">
									<div class="fet-note">Koreys tili alifbosi kursi!</div><br>
									<h5>Bu kursimiz 9 darsdan iborat</h5>
									<p>Bu kursimizda:
										Koreys alifbosi, Koreys tilida erkin o'qish, Koreys tilida yozish, Sodda so'zlarni eshitib tushunish,
										Sodda gaplar tuzish, Bo'g'inlarni to'g'ri o'qish va Koreys tilida sanash o'rganiladi., (Har bir kurs
										davomiyligi to'lov qilgan kuningizdan boshlab 60 kun)
									</p>
									<br>
									<a href="{{ route('cours.index','hangil') }}" class="site-btn">Kurs haqida</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="img/02.jpg"></div>
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="course-info p-4">
								<div class="course-text">
									<div class="fet-note">(Bu kursni o`tishdan oldin hangil kursini o'tish tavsiya etiladi.)</div><br>
									<h5>Koreya ish imtixoni uchun maxsus kurslar jamlanmasi!</h5>
									<p>Bu jamlanmada:
										Koreya tomonidan ishlab chiqilgan maxsus kitoblar tahlili, Ish imtixoniga kerek bo'ladigan
										maxsus lug'atlar Imtixonda savollarda keladigan madaniyat ma'lumotlari, Ish imtixoni ehtimoliy
										testlar, ularni yechimi va tahlili (EPS-TOPIK 50/60, EPS-TOPIK test 960, 600)
										(Har bir kurs davomiyligi tulov qilgan kuningizdan boshlab 60 kun)
									</p>
									<br>
									<a href="{{ route('cours.index','imtihon') }}" class="site-btn">Kurs haqida</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="featured-courses">
				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="img/03.jpg"></div>
					<div class="row">
						<div class="col-lg-6 offset-lg-6 pl-0">
							<div class="course-info p-4">
								<div class="course-text">
									<div class="fet-note">(Bu kursni o`tishdan oldin hangil kursini o'tish tavsiya etiladi.)</div><br>
									<div class="fet-note">Featured Course</div>
									<h5>ATKO Koreys tili markazi o'quv qo'llanmalari.</h5>
									<p>Bu jamlanmada:
										ATKO koreys tili markazi o`quv qo'llanmalari gramatika qismi video qo'llanma tarzida yozib chiqilgan.
										Unda Gramatik tushuntirishlar, Madaniyat ma`lumotlari, Yangi so`zlar o'rin olgan.
										(bu kursni o`qishdan oldin Hangil kursini o'qish tavsiya etiladi)
										(Har bir Kurs davomiyligi tulov qilgan kuningizdan boshlab 60 kun!)</p>
									<br>
									<a href="{{ route('cours.index','markaz') }}" class="site-btn">Kurs haqida</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="img/04.jpg"></div>
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="course-info p-4">
								<div class="course-text">
									<div class="fet-note">(Bu kursni o`tishdan oldin hangil kursini o'tish tavsiya etiladi.)</div><br>
									<h5>Topik II</h5>
									<p>Bu kursda:
										O`rta va yuqori daraja gramatikasi va ularga sharhlar O`rta va yuqori daraja so`zlar, antonim, sinonim, omonim so`zlar O`rta va yuqori daraja testlari va u testlar tahlili o`rin olgan
										(Har bir kurs davomiyligi tulov qilgan kuningizdan boshlab 60 kun)</p>
									<br>
									<a href="{{ route('cours.index','topik') }}" class="site-btn">Kurs haqida</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection