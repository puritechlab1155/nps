<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
<div id="wrap" class="sub07">

	<!-- header  -->
	<?php include("header.php"); ?>
	<!-- //header -->
	<!-- contents -->
	<section id="contents">
		<div class="section01 wow fadeBigInUp">
			<div class="content">
				<div class="title">키워드로 보는 세상</div>
				<div class="cover_text">참고 자료. 도서 『트렌드 코리아 2025』</div>
				<div class="angle-down"><img src="../../img/common/ico_angle_down_wh.svg"></div>
			</div>
		</div>

		<div class="section02 wow fadeBigInUp">
			<div class="content">
					<div class="subtitle_top">『트렌드 코리아 2025』 살펴보기</div>
					<div class="title">
						뱀처럼 예리한 감각으로 <br>
						기회를 포착한다
					</div>
					<div class="subcopy">
						2025년 대한민국의 소비 전망을 소개하는 『트렌드 코리아 2025』(김난도 저)가 나왔다. 책에 따르면, 내년은 큰 성장의 기회나 거대한 위기의 징후는 보이지 않을 것이고, 이와 같이 환경에 대한 기대가 높지 않을 때는 사소한 움직임이 중요하다고 한다. 『트렌드 코리아 2025』에서 제시된 키워드 10개를 둘러본다.
					</div>
			</div>
		</div>

		<div class="section03 wow fadeBigInUp">
			<div class="content">
				<div class="swiper s3-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="img/sub07/slide1.svg"></div>
						<div class="swiper-slide"><img src="img/sub07/slide2.svg"></div>
						<div class="swiper-slide"><img src="img/sub07/slide3.svg"></div>
						<div class="swiper-slide"><img src="img/sub07/slide4.svg"></div>
						<div class="swiper-slide"><img src="img/sub07/slide5.svg"></div>
					</div>
				</div>
				<div class="swiper-button-next"><img src="img/sub07/slide-next.svg"></div>
				<div class="swiper-button-prev"><img src="img/sub07/slide-prev.svg"></div>
			</div>
		</div>
		<script>
			var swiper = new Swiper(".s3-swiper", {
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
			});
		</script>

		<div class="section04 wow fadeBigInUp">
			<div class="content">
				<div class="stitle_area">
					<div class="img_box"><img src="img/sub07/stars.svg"></div>
					<span>『트렌드 코리아 2025』</span>
					<h3>10대 키워드</h3>
				</div>
				<div class="card-img fadeBigInUp">
					<ul>
						<li>
							<div class="basic"><img src="img/sub07/1f.svg"></div>
							<div class="hover"><img src="img/sub07/1b.svg"></div>
						</li>
						<li>
							<div class="basic"><img src="img/sub07/2f.svg"></div>
							<div class="hover"><img src="img/sub07/2b.svg"></div>
						</li>
						<li>
							<div class="basic"><img src="img/sub07/3f.svg"></div>
							<div class="hover"><img src="img/sub07/3b.svg"></div>
						</li>
						<li>
							<div class="basic"><img src="img/sub07/4f.svg"></div>
							<div class="hover"><img src="img/sub07/4b.svg"></div>
						</li>
						<li>
							<div class="basic"><img src="img/sub07/5f.svg"></div>
							<div class="hover"><img src="img/sub07/5b.svg"></div>
						</li>
						<li>
							<div class="basic"><img src="img/sub07/6f.svg"></div>
							<div class="hover"><img src="img/sub07/6b.svg"></div>
						</li>
						<li>
							<div class="basic"><img src="img/sub07/7f.svg"></div>
							<div class="hover"><img src="img/sub07/7b.svg"></div>
						</li>
						<li>
							<div class="basic"><img src="img/sub07/8f.svg"></div>
							<div class="hover"><img src="img/sub07/8b.svg"></div>
						</li>
						<li>
							<div class="basic"><img src="img/sub07/9f.svg"></div>
							<div class="hover"><img src="img/sub07/9b.svg"></div>
						</li>
						<li>
							<div class="basic"><img src="img/sub07/10f.svg"></div>
							<div class="hover"><img src="img/sub07/10b.svg"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</section>
	<!-- contents -->

	<!-- page ctrl -->
	<div class="page_ctrl">
		<?php include("page_ctrl.php"); ?>
	</div>
	<!-- //page ctrl -->
</div>

	<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- //footer -->
</body>
</html>
