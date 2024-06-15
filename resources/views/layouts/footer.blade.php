    @if (Route::has('login'))
		@auth
			
		@else
			@if (Route::has('register'))
				<section class="banner-section spad">
					<div class="container">
						<div class="section-title mb-0 pb-2">
							<h2>Siz ro'yhatdan o'tmagansizmi?</h2>
							<p>Hoziroq ro'yhatdan o'ting va ko'plab imkoniyatlarga ega bo'ling!!!</p>
						</div>
						<div class="text-center pt-5">
							<a href="{{ route('register') }}" class="site-btn">Ro'yhatdan o'tish</a>
						</div>
					</div>
				</section>
			@endif
		@endauth
	@endif
    
    
    <footer class="footer-section spad p-0">
		<div class="footer-bottom m-0">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="{{ route('home') }}">Bosh sahifa</a></li>
					<li><a href="{{ route('cours') }}">Kurslar</a></li>
					<li><a href="{{ route('contact') }}">Bog'lanish</a></li>
				</ul>
				<div class="copyright">ATKO koreys til markazi &copy;<script>document.write(new Date().getFullYear());</script></div>
			</div>
		</div>
	</footer> 
    <script src="https://atko.tech/webuni-gh-pages/js/jquery-3.2.1.min.js"></script>
    <script src="https://atko.tech/webuni-gh-pages/js/bootstrap.min.js"></script>
    <script src="https://atko.tech/webuni-gh-pages/js/mixitup.min.js"></script>
    <script src="https://atko.tech/webuni-gh-pages/js/circle-progress.min.js"></script>
    <script src="https://atko.tech/webuni-gh-pages/js/owl.carousel.min.js"></script>
    <script src="https://atko.tech/webuni-gh-pages/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".phone").inputmask("999 99 999 9999");
        $(".pasport").inputmask("AA 9999999");
        $(".pnfl").inputmask("99999999999999");
        $(".kodes").inputmask("9 9 9 9 9 9");
      });
    </script>
	<script>
        $(function(){
            $('#myvideo').bind('contextmenu',function(){return false;});
        });
        $(function(){
            $('#body').bind('contextmenu',function(){return false;});
        });
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.onkeydown = function (e) {
            if(e.keyCode == 123) {return false;}
            if(e.ctrlKey && e.shiftKey && e.keyCode == 73){return false;}
            if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {return false;}
            if(e.ctrlKey && e.keyCode == 85) {return false;}
        }
    </script>
</body>
</html>