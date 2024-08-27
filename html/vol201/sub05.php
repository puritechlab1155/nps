<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">
</head>
<body>
<div id="wrap" class="sub05">

	<!-- header  -->
	<?php include("header.php"); ?>
	<!-- //header -->
	<!-- contents -->
	<section id="contents">
		<div class="section01 wow fadeBigInUp">
			<div class="content">
				<div class="cover_title">모두의 여행</div>
				<div class="cover_text">글·사진. 권다현 여행작가</div>
				<div class="angle-down"><img src="../../img/common/ico_angle_down_wh.svg"></div>
			</div>
		</div><!-- //.section01 -->

		<div class="section02 wow fadeBigInUp">
			<div class="content">
				<div class="title">
					초가을에 거닐기 좋은 <br>
					완주·전주
				</div>
				<div class="subcopy">
					웅장한 산자락 깊숙이 맑고 깨끗한 자연이 품은 멋스러운 고택과 근대사의 아픈 상처를 딛고 일어선 찬연한 예술공간이 어우러진 완주의 속살은 붉은 단풍보다 더 곱고 아름답다. 이웃한 전주에도 고즈넉한 매력의 한옥마을과 개성 넘치는 예술가 마을이 기다린다. 잘 여문 가을을 꼭 닮은 이곳을, 사랑하는 부모님과 함께 사이좋게 걸어보면 어떨까.
				</div>
				<img src="img/sub05/sub05_01.svg" class="pc_display">
				<img src="img/sub05/sub05_01_mo.svg" class="mobile_display">
			</div>
		</div><!-- //.section02 -->

		<div class="section03 wow fadeBigInUp">
			<div class="content">

				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-1.svg"></div>
					<span>BTS도 반했다는</span>
					<h3>위봉산성·위봉사</h3>
				</div>

				<div class="text fadeBigInUp">
					완주 위봉산성은 조선시대에 쌓은 것으로 알려진다. 전쟁이나 병란이 발생했을 때 전주 경기전에서 태조 이성계의 어진을 모셔 와 봉안하려는 목적으로 축조되었다. 위봉산 능선을 따라 성곽을 쌓고 행궁을 설치했는데, 동학농민운동 당시 전주부성이 함락되자 이곳으로 옮겨진 일이 있었다고 한다. 원래 길이 16km에 달하는 대규모 성곽이었으나 지금은 전주로 통하는 서문과 일부 성벽만 남아 있다. 문루도 없이 아치형 석문만 남은 형태이긴 하지만 옛 성곽의 웅장함을 짐작하기엔 충분하다. 짙푸른 산자락을 배경으로 자리한 석문은 케이팝 아이돌그룹 BTS가 여름휴가를 보내며 사진 촬영을 했던 곳으로 유명하다. BTS 멤버 정국은 “영화에서나 볼 법한 곳”이라며 그 풍경에 감탄했다. <br>
					위봉산성 내부에 위치하고 있는 위봉사는 낡은 행궁을 대신해 태조어진과 선조들의 위패가 이곳 대웅전에 모셔지면서 경기전의 말사가 되었다. 보물로 지정된 보광명전 내에는 화려한 후불벽화가 눈길을 끌고, 앞마당 한편에 자리한 멋스러운 소나무는 산자락에 둘러싸인 아늑한 사찰에 운치를 더한다. 위봉사는 일주문 우측 도로를 이용하면 휠체어나 유모차로도 이동할 수 있고, 보광명전에는 나무 데크 경사로가 설치돼 부모님도 부담 없이 둘러볼 수 있다.
				</div>

				<div class="slider_wrap slide1-1">
					<ul class="slider1-1">
						<li class="item"><img src="img/sub05/sub05_11.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_12.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_13.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_14.jpg"></li>
					</ul>
					<div class="phototitle">위봉산성</div>
					<div class="ctrl_wrap">
						<span class="slider_dots1-1"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div> 
					<ul class="as_slider1-1">
						<li></li><li></li><li></li><li></li>
					</ul>
				</div><!-- //.slider_wrap -->
					<script>
						var $mainSlider0 = $('.slider1-1');
							$mainSlider0.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab1-1'),
				 			asNavFor:'.as_slider1-1',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: true,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider1-1').slick({
							asNavFor:'.slider1-1',
							dots: true,
							appendDots: $('.slider_dots1-1'),
							arrows: false
						});
						$('.section03 .slide1-1 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider0.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section03 .slide1-1 .ctrl_wrap .btn_play').click(function() {
							$mainSlider0.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>

				<div class="slider_wrap slide1-2">
					<ul class="slider1-2">
						<li class="item"><img src="img/sub05/sub05_15.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_16.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_17.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_18.jpg"></li>
					</ul>
					<div class="phototitle">위봉사</div>
					<div class="ctrl_wrap">
						<span class="slider_dots1-2"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div> 
					<ul class="as_slider1-2">
						<li></li><li></li><li></li><li></li>
					</ul>
				</div><!-- //.slider_wrap -->
					<script>
						var $mainSlider1 = $('.slider1-2');
							$mainSlider1.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab1-2'),
				 			asNavFor:'.as_slider1-2',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: true,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider1-2').slick({
							asNavFor:'.slider1-2',
							dots: true,
							appendDots: $('.slider_dots1-2'),
							arrows: false
						});
						$('.section03 .slide1-2 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider1.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section03 .slide1-2 .ctrl_wrap .btn_play').click(function() {
							$mainSlider1.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="list point_list">
								<span class="point"><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span>
								<em>
									전북 완주군 소양면 위봉길 <br class="mobile_display">53(위봉사)<br>
									전북 완주군 소양면 송광수만로 <br class="mobile_display">706-9(위봉산성)
								</em>
							</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>063-243-7657(위봉사)</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //.section03 -->

		<div class="section04 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-2.svg"></div>
					<span>자연을 병풍 삼은 고즈넉한 고택</span>
					<h3>아원</h3>
				</div>
				<div class="text fadeBigInUp">
					소양면은 완주군 내에서도 풍성한 역사 유적을 간직한 지역이다. 최근에는 회화나 조각, 음악, 건축, 디자인 등 다양한 분야에서 활동하는 예술가들이 들어와 완주에서 가장 현대적이고 감각적인 공간들을 만들어냈다. 그 대표적인 곳이 아원이다.<br>
					경남 진주의 250년 된 한옥을 위봉산 자락으로 옮겨온 아원은 땅의 모양새에 따라 자연스레 건물을 배치해 어디서든 탁 트인 전망과 멀리 종남산의 사계절을 눈에 담을 수 있도록 했다. 특히 대청마루의 운치를 고스란히 간직한 만휴당과 소나무 한 그루가 그림처럼 자리한 연못이 내려다보이는 설화당은 전통 한옥의 아름다움과 품위를 제대로 느껴볼 수 있는 공간이다. 전통 한옥 사이에 자리한 현대 건축물인 천목다실과 뮤지엄은 이질감 없이 절묘하게 어우러진다. 뮤지엄은 갤러리와 카페, 음악감상실로 구성되는데 진공관으로 들리는 음악이 꽤 매력적이다. BTS가 숙소로 선택했다는 고택은 투숙객이 없는 시간 동안 관람이 가능하다. 뮤지엄이나 만휴당 대청마루에서는 차와 커피도 즐길 수 있다.
				</div>
				<div class="slider_wrap">
					<ul class="slider2">
						<li class="item"><img src="img/sub05/sub05_21.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_22.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_23.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_24.jpg"></li>
					</ul>
					<div class="phototitle">아원</div>
					<div class="ctrl_wrap">
						<span class="slider_dots2"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider2">
						<li></li><li></li><li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider2 = $('.slider2');
							$mainSlider2.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab2'),
				 			asNavFor:'.as_slider2',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: true,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider2').slick({
							asNavFor:'.slider2',
							dots: true,
							appendDots: $('.slider_dots2'),
							arrows: false
						});
						$('.section04 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider2.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section04 .ctrl_wrap .btn_play').click(function() {
							$mainSlider2.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>전북 완주군 소양면 송광수만로 <br class="mobile_display">516-7</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>063-241-8195</div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg">운영시간</span><em>아원고택 12:00~16:00, <br class="mobile_display">아원갤러리 12:00~17:00</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg">이용요금</span><em>아원갤러리 1인 10,000원 <br class="mobile_display">*8세 미만 입장 불가</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon1.svg">홈페이지</span><a href="http://www.awon.kr" target="_blank">awon.kr</a></div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //.section04 -->

		<div class="section05 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-3.svg"></div>
					<span>정다운 집에서 건강한 한 끼</span>
					<h3>기양초</h3>
				</div>
				<div class="text fadeBigInUp">
					옛 주택을 새롭게 단장한 식당은 외관부터 정다운 느낌이 든다. 내부도 좌식의 편안함을 그대로 살렸다. 부추를 뜻하는 기양초란 이름처럼 이곳에선 부추를 이용한 다양한 요리를 낸다. 그중에서도 다슬기와 콩 등을 넣고 갓 지은 돌솥밥과 새콤하고 매콤한 양념에 무쳐낸 부추를 함께 비벼 먹는 다슬기부추돌솥밥이 대표메뉴다. 쫄깃한 다슬기의 식감과 씹을수록 쌉쌀한 부추의 맛과 향이 의외로 잘 어울린다. 고소한 부추전도 별미다.
				</div>
				<div class="slider_wrap">
					<ul class="slider3">
						<li class="item"><img src="img/sub05/sub05_31.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_32.jpg"></li>
					</ul>
					<div class="phototitle">기양초</div>
					<div class="ctrl_wrap">
						<span class="slider_dots3"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider3">
						<li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider3 = $('.slider3');
							$mainSlider3.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab3'),
				 			asNavFor:'.as_slider3',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: true,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider3').slick({
							asNavFor:'.slider3',
							dots: true,
							appendDots: $('.slider_dots3'),
							arrows: false
						});
						$('.section05 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider3.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section05 .ctrl_wrap .btn_play').click(function() {
							$mainSlider3.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>전북 완주군 소양면 송광수만로 <br class="mobile_display">508</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>063-247-6667</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section06 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-4.svg"></div>
					<span>수탈의 역사가 예술로 꽃피다</span>
					<h3>삼례문화예술촌</h3>
				</div>
				<div class="text fadeBigInUp">
					완주 삼례는 과거 국가 통신 기관인 역참이 설치될 만큼 교통의 요지였다. “모든 길은 삼례로 통한다”는 말이 있을 정도였다. 게다가 만경강 상류에 자리해 일 년 내내 곡식이 풍성하고 물길이 마르지 않았다. 이 같은 천혜의 환경은 일제강점기에 접어들면서 비극의 원인이 되고 만다. 만경평야에서 생산되는 막대한 양곡에 편리한 교통요건까지 갖췄으니 군량미 수탈에 열을 올리던 일본의 눈을 피할 수 없었던 것. 일제는 삼례역을 짓고 철도를 이용해 근처 군산을 통해 대량의 쌀을 빼돌렸다. 삼례역 주변에는 농민들에게 빼앗은 쌀을 저장하기 위한 양곡 창고들이 세워졌고 밤마다 “한 말 한 섬” 쌀 세는 소리가 끊이지 않았다. 지금도 당시에 지어진 양곡 창고들이 삼례역 주변에 일부 남아 있다.<br>
					가슴 아픈 수탈의 역사를 담고 있는 이 양곡 창고들이 최근에는 책과 예술작품 등 색다른 볼거리들이 가득한 ‘삼례문화예술촌’으로 재탄생했다. 일본인 대지주가 사용했다는 삼례양곡창고는 다양한 장르의 작가를 소개하는 미술관으로, ‘협동생산 공동판매’란 글귀가 눈길을 끄는 삼례농협창고는 예술공연과 영화 상영이 이뤄지는 소극장으로 변신했다. 여행자들을 위한 휴식공간도 빼놓을 수 없다. 삼례로스터리는 오래된 나무골조 사이, 커피 향이 은은하게 나는 카페로 커피와 함께 색다른 분위기를 즐길 수 있다.
				</div>
				<div class="slider_wrap">
					<ul class="slider4">
						<li class="item"><img src="img/sub05/sub05_41.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_42.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_43.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_44.jpg"></li>
					</ul>
					<div class="phototitle">삼례문화예술촌</div>
					<div class="ctrl_wrap">
						<span class="slider_dots4"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider4">
						<li></li><li></li><li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider4 = $('.slider4');
							$mainSlider4.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab4'),
				 			asNavFor:'.as_slider4',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: true,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider4').slick({
							asNavFor:'.slider4',
							dots: true,
							appendDots: $('.slider_dots4'),
							arrows: false
						});
						$('.section06 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider4.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section06 .ctrl_wrap .btn_play').click(function() {
							$mainSlider4.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>전북 완주군 삼례읍 삼례역로 <br class="mobile_display">81-13</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>063-290-3862~3</div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg">운영시간</span>화~일요일 10:00~18:00</div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg">이용요금</span>무료</div>
							<div class="list"><span><img src="img/sub05/sub05_icon1.svg">홈페이지</span><a href="http://www.samnyecav.kr" target="_blank">samnyecav.kr</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section07 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-5.svg"></div>
					<span>삼례는 책이다</span>
					<h3>삼례책마을</h3>
				</div>
				<div class="text fadeBigInUp">
					삼례책마을도 놓쳐선 안 된다. 이곳 역시 일제강점기 양곡창고를 활용한 공간으로, 고서점과 헌책방 그리고 북카페가 서정적인 분위기를 자아낸다. 다양한 주제의 기획전시와 북 페스티벌, 학술 세미나가 열리기 때문에 미리 홈페이지에서 관련 정보를 확인하고 가면 더욱 알차게 즐길 수 있다. 이곳 또한 점자 안내도와 장애인 화장실을 설치하고 노약자들을 위한 휠체어가 비치되어있다. 2층까지 자유롭게 이동이 가능한 엘리베이터도 마련됐으며, 무엇보다 시각장애인들을 위한 자료실을 따로 조성해 유명 문학작품들을 누구나 즐길 수 있도록 배려한 점이 눈길을 끈다.
				</div>
				<div class="slider_wrap">
					<ul class="slider5">
						<li class="item"><img src="img/sub05/sub05_51.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_52.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_53.jpg"></li>
					</ul>
					<div class="phototitle">삼례책마을</div>
					<div class="ctrl_wrap">
						<span class="slider_dots5"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider5">
						<li></li><li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider5 = $('.slider5');
							$mainSlider5.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab5'),
				 			asNavFor:'.as_slider5',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: true,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider5').slick({
							asNavFor:'.slider5',
							dots: true,
							appendDots: $('.slider_dots5'),
							arrows: false
						});
						$('.section07 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider5.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section07 .ctrl_wrap .btn_play').click(function() {
							$mainSlider5.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>전북 완주군 삼례읍 삼례역로 <br class="mobile_display">68</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>063-291-7820</div>
							<div class="list"><span><img src="img/sub05/sub05_icon1.svg">홈페이지</span><a href="http://www.koreabookcity.com" target="_blank">koreabookcity.com</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section08 wow fadeBigInUp">
			<div class="content">
					<img src="img/sub05/sub05_05.svg" class="pc_display">
					<img src="img/sub05/sub05_05_mo.svg" class="mobile_display">
			</div>
		</div>

		<div class="section09 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-1.svg"></div>
					<span>한국 최초의 천주교 순교지</span>
					<h3>전동성당</h3>
				</div>
				<div class="text fadeBigInUp">
					‘전주의 명동성당’이라고도 불리는 전동성당, 붉은 벽돌과 로마네스크 양식의 종탑들이 어우러져 웅장한 건축미를 뽐낸다. 화려한 외관뿐 아니라 스테인드글라스로 장식한 내부가 아름다워 다수의 영화와 드라마 배경으로 등장했다. 하지만 전동성당을 단순히 아름다운 서양식 근대건축물로만 이해해선 안 된다. 이곳은 한국 최초의 천주교 순교자 윤지충과 권상연이 처형되었던 곳으로, 천주교 신자들에겐 숭고한 종교적 희생을 떠올리게 하는 의미 있는 장소이다. 이들 천주교 순교자의 희생을 기억하기 위해 100년이 지난 1891년 초대 주임신부인 보두네 신부가 순교 터 부지를 매입했으며, 실제 명동성당을 설계했던 프와넬 신부가 참여해 1914년 전동성당이 완공됐다. 지난 2011년엔 사제관 뒤편에 한국 최초 천주교 순교자 기념관을 지어 이들의 뜻을 기리고 있다.
				</div>
				<div class="slider_wrap">
					<ul class="slider6">
						<li class="item"><img src="img/sub05/sub05_63.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_62.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_61.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_64.jpg"></li>
					</ul>
					<div class="phototitle">전동성당</div>
					<div class="ctrl_wrap">
						<span class="slider_dots6"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider6">
						<li></li><li></li><li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider6 = $('.slider6');
							$mainSlider6.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab6'),
				 			asNavFor:'.as_slider6',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: true,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider6').slick({
							asNavFor:'.slider6',
							dots: true,
							appendDots: $('.slider_dots6'),
							arrows: false
						});
						$('.section09 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider6.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section09 .ctrl_wrap .btn_play').click(function() {
							$mainSlider6.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>전북 전주시 완산구 태조로 51</em></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section10 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-2.svg"></div>
					<span>이성계의 어진을 모시다</span>
					<h3>경기전</h3>
				</div>
				<div class="text fadeBigInUp">
					전주한옥마을은 단순히 오래된 한옥들만 모인 곳이 아니다. 500년 유구한 역사를 지닌 조선 왕조의 뿌리 ‘경기전’이 바로 이곳에 있다. 태종 10년 완산(전주), 계림(경주), 평양에 태조 이성계의 초상화를 모신 어용전이 지어졌는데, 세종 때는 소재지마다 이름을 달리하여 경기전, 집경전, 영종전이라 불렀다. ‘경기전’이란 이름은 ‘경사스러운 땅에 지어진 궁궐’이란 의미로 조선의 뿌리로서 전주가 가지는 역사성을 그대로 함축한다. 현존 유일 태조 어진은 국보로 지정되어 경기전 뒤편 어진박물관에 모셔져 있다. 여기엔 세종, 정조, 고종 등 역대 조선 임금의 초상화 7점이 함께 전시되어 있어 둘러보는 재미도 있다.
				</div>
				<div class="slider_wrap">
					<ul class="slider7">
						<li class="item"><img src="img/sub05/sub05_71.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_72.jpg"></li>
					</ul>
					<div class="phototitle">경기전</div>
					<div class="ctrl_wrap">
						<span class="slider_dots7"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider7">
						<li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider7 = $('.slider7');
							$mainSlider7.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab7'),
				 			asNavFor:'.as_slider7',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: true,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider7').slick({
							asNavFor:'.slider7',
							dots: true,
							appendDots: $('.slider_dots7'),
							arrows: false
						});
						$('.section10 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider7.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section10 .ctrl_wrap .btn_play').click(function() {
							$mainSlider7.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>전북 전주시 완산구 태조로 44</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>063-281-2788</div>
							<div class="list">
								<span><img src="img/sub05/sub05_icon4.svg">운영시간</span>
								<em>
									3~5월·9~10월 09:00~19:00, <br class="mobile_display">6~8월 09:00~20:00, <br class="mobile_display">11~2월 09:00~18:00
								</em>
							</div>
							<div class="list">
								<span><img src="img/sub05/sub05_icon5.svg">이용요금</span>
								<em class="pc_display">성인 3천 원 청소년 2천 원 어린이 1천 원 *65세 이상 무료</em>
								<em class="mobile_display">성인 3천 원 청소년 2천 원, <br>어린이 1천 원, *65세 이상 무료</em>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section11 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-3.svg"></div>
					<span>조선 인재들의 배움터</span>
					<h3>전주향교</h3>
				</div>
				<div class="text fadeBigInUp">
					고려시대 창건되었다고 전해지는 전주향교는 조선시대 수많은 인재가 학문을 닦던 배움터였다. 가을이면 노란 은행잎이 짙어지며 더욱 운치를 더하는 이곳은 지금도 지역 유림들이 모여 공자와 맹자 등 다섯 성인에 대한 예를 올리고 있다. 특히 매년 음력 2월과 8월 초정일에 치러지는 석전대제는 유교 의식 중 가장 규모가 큰 행사라 한 번쯤 참여해 볼 만하다. 전주향교 내에는 오래된 은행나무 4그루가 남아 있는데, 그중 일월문 앞에 자리한 수령 250년 된 은행나무의 은행을 따서 기도하면 과거에 급제한다는 이야기도 전해진다. 영화 &lt;YMCA 야구단&gt;, 드라마 &lt;성균관 스캔들&gt;의 촬영지이기도 하다. 현재 남아 있는 300여 개의 향교 중 가장 아름다운 전경을 간직한 곳으로 꼽힌다. 
				</div>
				<div class="slider_wrap">
					<ul class="slider8">
						<li class="item"><img src="img/sub05/sub05_81.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_82.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_83.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_84.jpg"></li>
					</ul>
					<div class="phototitle">전주향교</div>
					<div class="ctrl_wrap">
						<span class="slider_dots8"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider8">
						<li></li><li></li><li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider8 = $('.slider8');
							$mainSlider8.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab8'),
				 			asNavFor:'.as_slider8',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: true,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider8').slick({
							asNavFor:'.slider8',
							dots: true,
							appendDots: $('.slider_dots8'),
							arrows: false
						});
						$('.section11 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider8.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section11 .ctrl_wrap .btn_play').click(function() {
							$mainSlider8.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span>전북 전주시 완산구 향교길 139</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>063-288-4544</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //section11 -->

		<div class="section12 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-4.svg"></div>
					<span>전주천 건너 예술가들이 모여 산다</span>
					<h3>서학동예술마을</h3>
				</div>
				<div class="text fadeBigInUp">
					서학동에는 20여 명의 화가와 소설가, 음악가들이 모여 사는 예술인 창작마을이 있다. 각자의 작업에 열중하면서도 때론 함께 모여 문화반상회를 하는가 하면 주민들과도 격의 없이 소통하는 멋진 마을이다. ‘서학동 사진관’은 ‘계남정미소’ 기획전으로 큰 화제를 모았던 사진작가 김지연이 운영하고 있으며, 소박하고 친근한 예술공간으로 자리매김했다. ‘선재미술관’은 장자의 ‘호접몽’ 등 무위자연의 동양적 세계관을 현대적 감각으로 재해석해 주목받은 화가 이희춘의 대표작들을 만날 수 있다. 이곳은 화가의 작업실도 겸하고 있다. 아뜰리에 ‘적요 숨쉬다’는 독특한 화풍을 지닌 화가 이적요의 작품과 작업실을 둘러볼 수 있는 공간이다. 오픈 시간은 불규칙하지만, 인연이 닿는다면 따뜻한 커피 한잔에 속 깊은 이야기를 나눌 수 있는 특별한 공간이다.
				</div>
				<div class="slider_wrap">
					<ul class="slider9">
						<li class="item"><img src="img/sub05/sub05_91.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_92.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_93.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_94.jpg"></li>
					</ul>
					<div class="phototitle">서학동예술마을</div>
					<div class="ctrl_wrap">
						<span class="slider_dots9"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider9">
						<li></li><li></li><li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider9 = $('.slider9');
							$mainSlider9.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab9'),
				 			asNavFor:'.as_slider9',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: true,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider9').slick({
							asNavFor:'.slider9',
							dots: true,
							appendDots: $('.slider_dots9'),
							arrows: false
						});
						$('.section12 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider9.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section12 .ctrl_wrap .btn_play').click(function() {
							$mainSlider9.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="list">
								<span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span>
								<em>전북 전주시 완산구 서학3길 <br class="mobile_display">85(선재미술관) 일대</em>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //section12 -->

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
