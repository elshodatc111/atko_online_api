    <div id="preloder">
		<div class="loader"></div>
	</div>
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<a href="{{ route('home') }}"><h2  style="color:#fff;font-weight:700">ATKO</h2></a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-12">
					
					<style>
						.main-menus{
							padding-top:10px;
							font-weight:700;
							text-align:right;
						}
						.main-menus>li{
							display: inline;
							padding-top:15px;
							margin:0 10px;
						}
						.main-menus>li>a{
							color:#fff;
							font-size:16px;
						}
						.main-menus>li>a:hover{
							color:#D72A4E;
						}
					</style>
					<nav class="w-100">
						<ul class="main-menus">
							<li><a href="{{ route('home') }}">Bosh sahifa</a></li>
							<li><a href="{{ route('cours') }}">Kurslar</a></li>
							<li><a href="{{ route('contact') }}">Bog'lanish</a></li>
							@if (Route::has('login'))
								@auth
                                    <li><a href="{{ route('mycours') }}">Mening kurslarim</a></li>
								@endauth
							@endif
							@if (Route::has('login'))
								@auth
									<li><a href="{{ route('cobinet') }}" >Kabinet</a></li>
								@else
									<li><a href="{{ route('login') }}">Kirish</a></li>
								@endauth
							@endif
						</ul>
					</nav>
					

					
				</div>
			</div>
		</div>
	</header>