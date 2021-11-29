
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="PHP家教、博弈PHP助理工程師、PHP助理工程師、學習PHP、PHP轉正職、PHP遠端家教、程式語言家教、HTML家教、網頁學習、網頁家教、資料庫家教、SQL家教、MYSQL家教" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Lato:wght@400;500;600;700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>PHP Teacher</title>

	<style>
		@media (min-width: 992px) {
			.block-hero-14 .section-slider {
				position: absolute;
				top: 0;
				right: 0;
				min-width: 50%;
			}
		}

		.block-hero-14 .mix-text { mix-blend-mode: difference; }
		@supports not(mix-blend-mode: difference) {
		  .block-hero-14 .mix-text {
		    color: #222;
		  }
		}

		.block-hero-14 .slide-number {
			display: flex;
			flex-direction: row;
			align-items: center;
			opacity: 1;
			bottom: 0;
			left: auto;
			right: 0;
		    color: #222;
		    background-color: #FFF;
		    text-shadow: none;
		    width: auto;
		    height: 52px;
		    padding: 0 20px;
		}

		.block-hero-14 .slide-number-current,
		.block-hero-14 .slide-number-total {
			position: relative;
			top: auto;
			bottom: auto;
		}

		.block-hero-14 .slide-number span {
			position: relative;
			width: 40px;
			height: 1px;
			background-color: #777;
			margin: 0 10px;
		}

		.block-hero-14 .slider-arrow-left,
		.block-hero-14 .slider-arrow-right {
			display: inline-block;
			top: auto;
		    left: 0;
		    bottom: 0;
		    background: #FFF;
		    transform: translateY(0);
		    color: #333;
		}

		.block-hero-14 .slider-arrow-left:hover,
		.block-hero-14 .slider-arrow-right:hover {
			background-color: #FFF !important;
		}

		.block-hero-14 .slider-arrow-right {
			margin-left: 40px;
		}

		.block-hero-14 .slider-arrow-left i,
		.block-hero-14 .slider-arrow-right i {
		    color: #333;
		    text-shadow: none;
		    font-size: 28px;
		}
	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Hero Section
		============================================= -->
		<section id="slider" class="block-hero-14 slider-element overflow-visible">

			<div class="container">

				<div class="row min-vh-lg-100 align-items-center py-5 dark">
					<!-- Text -->
					<div class="col-lg-7 offset-lg-1" >
						<h3 class="font-secondary mb-4 ls1 h3 mix-text">- PHP 家教</h3>
						<h3 class="text-uppercase m-0 display-3 fw-bold mix-text position-relative z-2 mb-4">助理工程師</h3>
                        <h3 class="text-uppercase m-0 display-3 fw-bold mix-text position-relative z-2 mb-4">助理轉正</h3>
						<a href="https://www.instagram.com/php_teacher/" class="button button-black bg-danger button-xlarge m-0">聯絡我</a>
					</div>

				</div>

			</div>

			<div class="section-slider">
				<div class="swiper_wrapper overflow-visible min-vh-100" data-loop="false">

					<div class="swiper-container swiper-parent">
						<div class="swiper-wrapper">




							<!-- Slide 3 -->
							<div class="swiper-slide dark">
								<div class="container">
									<div class="slider-caption justify-content-end align-items-center" style="max-width: none;">
										<h3 data-animate="fadeInUpSmall">Image Caption 2</h3>
									</div>
								</div>
								<div class="swiper-slide-bg min-vh-100" style="background-image: url('images/blocks/preview/hero-14/3.jpg'); background-position: center center; background-size: cover;"></div>
							</div>

						</div>
					</div>

					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div class="slide-number font-secondary"><div class="slide-number-current"></div><span></span><div class="slide-number-total op-05"></div></div>
				</div>
			</div>

			<div class="d-flex flex-row position-absolute z-10 op-06" style="writing-mode: vertical-rl; top: 50%; transform: translateY(-50%) scale(-1); left: 40px">

				<a href="https://www.instagram.com/php_teacher/" class="my-3 text-black-50 ls1 text-uppercase text-smaller">Instagram</a>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">
				<div class="row justify-content-center align-items-center text-center min-vh-100">
					<div class="col-12 display-3">請在聯絡處提供你的程度、未來規劃、教學類型 <br>...</div>
				</div>
			</div>
		</section><!-- #content end -->


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.min.js') }}"></script>

	<script src="{{ asset('js/jquery.hotspot.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>

</body>
</html>
