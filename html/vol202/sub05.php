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
					겨울 바다의 낭만과 <br class="mobile_display">설산의 품속으로 <br>
					강원도 고성·속초
				</div>
				<div class="subcopy">
					강원도에서 나고 자란 이들은 본능적으로 안다. 바람이 차가워질수록 바다는 깊고 진한 푸른색을 띤다는 것을. 설악산 사이 불 밝힌 스키장 야경도 잊을 수 없다. 이런 풍경은 오직 겨울에 만날 수 있는 낭만이다.
				</div>
				<img src="img/sub05/day1-map.svg" class="pc_display">
				<img src="img/sub05/day1-map-mo.svg" class="mobile_display">
			</div>
		</div><!-- //.section02 -->

		<div class="section03 wow fadeBigInUp">
			<div class="content">

				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-1.svg"></div>
					<span>다시 금강산을 꿈꾸다</span>
					<h3>통일전망대·DMZ박물관</h3>
				</div>

				<div class="text fadeBigInUp">
					『조선왕조실록』에는 ‘조선을 찾은 중국 사신들이 금강산을 꼭 보려 한다’라고 태종이 불평했다는 내용이 기록되어 있다. 일찍이 송나라 시인도 ‘한 번만이라도 금강산을 보고 싶다’라는 시를 남겼다고 하니 금강산의 명성은 우리나라에만 한정되지는 않았던 모양이다. 『한국과 그 이웃 나라들』을 쓴 영국 여행작가 이사벨라 버드 비숍(Isabella Bird Bishop)도 “아름다움의 모든 요소로 가득 찬 금강산은 너무도 황홀하여 사람을 마비시킬 지경”이라고 표현했다. 세계의 명산들을 두루 둘러보았을 그녀조차도 이렇게 예찬할 정도이니 금강산의 아름다움은 독보적이라고 해도 과언이 아니다. <br>
					고성에 자리한 통일전망대에 오르면 금강산 전경을 한눈에 감상할 수 있다. 금강산을 조금 더 선명하게 보고 싶다면 통일전망타워에 오르길 추천한다. 금강산의 웅장한 산자락을 가깝게 만날 수 있을 뿐만 아니라 분단의 역사와 이산가족의 아픔, 통일된 미래를 꿈꿔볼 수 있는 전시관도 함께 둘러볼 수 있다.<br>
					통일전망대에서 1km 남짓 떨어진 거리엔 DMZ박물관이 자리한다. 비극적인 전쟁으로 만들어진 DMZ이지만, 그 안에서는 여전히 수많은 생명이 자유롭게 어우러지며 살아가고 있다. 이러한 자연의 모습을 감상하며 평화와 통일의 의미를 되새겨 보기도 좋다. 야외전시장에는 1960년대 동부전선에 설치됐다가 2010년 철거된 실제 철책과 대북 선전 장비, 통일을 기원하는 강원도 지역 학생들의 그림이 전시돼 있어 관람객들의 눈길을 사로잡는다.
				</div>

				<div class="slider_wrap slide1-1">
					<ul class="slider1-1">
						<li class="item"><img src="img/sub05/sub05_11.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_12.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_13.jpg"></li>
					</ul>
					<div class="phototitle">통일전망대</div>
					<div class="ctrl_wrap">
						<span class="slider_dots1-1"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div> 
					<ul class="as_slider1-1">
						<li></li><li></li><li></li>
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

				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="info_loca">통일전망대</div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>강원 고성군 현내면 금강산로 481</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg">운영시간</span><em>09:00~18:00</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>033-682-0088</div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg">이용요금</span><em>성인 3천 원</em></div>
						</div>
					</div>
				</div>

				<div class="slider_wrap slide1-2">
					<ul class="slider1-2">
						<li class="item"><img src="img/sub05/sub05_14.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_15.jpg"></li>
					</ul>
					<div class="phototitle">DMZ박물관</div>
					<div class="ctrl_wrap">
						<span class="slider_dots1-2"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div> 
					<ul class="as_slider1-2">
						<li></li><li></li>
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
							<div class="info_loca">DMZ박물관</div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>강원 고성군 현내면 통일전망대로 369</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg">운영시간</span><em>하절기 09:00~18:00, 동절기 09:00~17:00</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>033-681-0625</div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg">이용요금</span><em>무료</em></div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //.section03 -->

		<div class="section04 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-2.svg"></div>
					<span>모두가 탐낼 만한 풍경</span>
					<h3>화진포</h3>
				</div>
				<div class="text fadeBigInUp">
					화진포(花津浦)는 지명에 ‘바닷가’라는 뜻인 ‘포(浦)’자가 들어가 배가 드나드는 포구로 생각할 수 있지만, 석호(潟湖)이다. 석호는 만의 입구에 토사가 쌓여 바다로부터 분리된 호수이다. 대표적으로 강릉 경포호, 주문진 향호, 속초 청초호 등이 잘 알려져 있다. 화진포는 둘레 16Km, 넓이 2.3㎢로 국내 최대 규모를 자랑한다. <br>
					화진포는 남호와 북호로 나뉜다. 남호에는 갈대밭 등 자연 탐방 지대가 자리하고, 북호에는 옛 유명인사들의 별장과 각종 전시관 등 관광시설이 있다. 그중에서도 김일성 별장으로 불리는 ‘화진포의 성’을 비롯해 ‘이승만 초대 대통령 별장’과 당시 부통령을 지낸 ‘이기붕 별장’이 북호에 자리한다. <br>
					‘화진포의 성’은 우리나라 최초 결핵 전문 요양병원을 설립하고 크리스마스실을 도입했던 선교사 셔우드 홀(Sherwood Hall) 부부가 살던 석조건물이다. 이국적인 건물과 그 앞에 펼쳐진 화진포 바다 풍경이 아름답다. 김일성도 1948년부터 1950년까지 이곳에서 가족들과 여름휴가를 보냈다고 해서 김일성 별장으로 더 많이 불린다. 당시 어린 김정일이 이곳 돌계단에서 찍은 사진도 남아있다. 성 내부엔 셔우드 홀 부부와 북한 관련 자료들도 전시되어 있다.<br>
					‘화진포의 성’에서 도보로 2~3분 거리에 ‘이기붕 별장’이 자리한다. 이 또한 외국인 선교사들이 지은 건물로, 규모는 크지 않으나 돌을 쌓아 올린 외관이 멋스럽다. 북한 공산당 간부 휴양소였던 곳을 휴전 후 이기붕 아내가 개인 별장으로 사용했으며, 내부에 집무실과 응접실 등이 재현돼 있다.<br>
					이승만 별장도 근거리에 자리한다. 유족에게 기증받은 물품들로 전시관이 꾸며져 있는데, 정치적으로 대립 관계에 놓였던 백범 김구에게 보낸 편지도 전시돼 눈길을 끈다.
				</div>
				<div class="slider_wrap">
					<ul class="slider2">
						<li class="item"><img src="img/sub05/sub05_21.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_22.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_23.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_24.jpg"></li>
					</ul>
					<div class="phototitle">화진포</div>
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
							<div class="info_loca">화진포의 성 김일성 별장</div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>강원 고성군 거진읍 화진포길 280</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg">운영시간</span><em>하절기 09:00~18:00, <br class="mobile_display">동절기 09:00~17:30</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>033-680-3677</div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg">이용요금</span><em>성인 3천 원</em></div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //.section04 -->

		<div class="section05 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-3.svg"></div>
					<span>고성의 새로운 명소</span>
					<h3>가진해변</h3>
				</div>
				<div class="text fadeBigInUp">
					가진해변은 지역민들이 한가롭게 물놀이를 즐기던 작고 오붓한 해변이었다. 그러나 최근 피크닉 카페 ‘테일’의 인기로 젊은이의 발길이 끊이지 않는 관광지가 됐다. 낡고 오래된 주택을 리모델링한 카페는 마치 제주의 어느 바닷가 마을을 떠올리게 하는 소박하고 정다운 매력을 풍긴다. 인기 메뉴는 피크닉 바구니와 매트, 보온병에 담긴 진한 커피와 달콤한 마들렌을 함께 제공하는 ‘피크닉 세트’다. 방문객은 피크닉 바구니가 준비되면 근처 해변에 매트를 깔고 앉아 하얀 파도를 바라보며 커피 한 잔의 여유를 즐길 수 있다. <br>
					가진해변에는 ‘테일’ 외에도 탁 트인 바다 전망을 자랑하는 카페들이 문을 열고 있다. 지역민들이 추천하는 식당도 곳곳에 숨어 있으니, 고성의 새로운 명소에서 맛있는 식사와 감성 넘치는 커피 한잔을 즐겨 봐도 좋겠다.
				</div>
				<div class="slider_wrap">
					<ul class="slider3">
						<li class="item"><img src="img/sub05/sub05_31.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_32.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_33.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_34.jpg"></li>
					</ul>
					<div class="phototitle">가진해변</div>
					<div class="ctrl_wrap">
						<span class="slider_dots3"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider3">
						<li></li><li></li><li></li><li></li>
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
							<div class="info_loca">가진해변</div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>강원 고성군 죽왕면 가진해변길</em></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section06 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-4.svg"></div>
					<span>자연과 건축, 예술이 한데 어우러진</span>
					<h3>바우지움조각미술관</h3>
				</div>
				<div class="text fadeBigInUp">
					아름다운 자연과 감각적인 건축, 유려한 곡선의 조각 작품들이 한데 어우러진 바우지움조각미술관도 빼놓을 수 없는 공간이다. 미술관 내부에는 소나무정원, 물의 정원, 돌의 정원, 잔디정원, 테라코타 정원이 각각의 테마로 꾸며져 있어 느긋하게 산책하듯 둘러보기 좋다. <br>
					‘바우’는 바위를 뜻하는 강원도 사투리다. 이름에 걸맞게 건물 곳곳에 돌이 많이 사용되었는데, 대관령 터널 공사 당시 나온 파편도 바우지움조각미술관 건축 재료로 쓰였다.<br>
					입장권에는 따뜻한 커피 한잔이 포함되어 있어, 관람 후 미술관 건너편 카페에서 커피를 마실 수 있다. 아트숍에선 작가들의 작품은 물론 나만의 컵 만들기 등 체험 프로그램도 운영한다.
				</div>
				<div class="slider_wrap">
					<ul class="slider4">
						<li class="item"><img src="img/sub05/sub05_41.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_42.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_43.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_44.jpg"></li>
					</ul>
					<div class="phototitle">바우지움조각미술관</div>
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
							<div class="info_loca">바우지움조각미술관</div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>강원 고성군 토성면 원암온천길 3길 37</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg">운영시간</span><em>하절기 09:00~18:00, <br class="mobile_display">동절기 09:00~17:30</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>033-632-6632</div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg">이용요금</span>성인 9천 원</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section08 wow fadeBigInUp">
			<div class="content">
					<img src="img/sub05/day2-map.svg" class="pc_display">
					<img src="img/sub05/day2-map-mo.svg" class="mobile_display">
			</div>
		</div>

		<div class="section09 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-1.svg"></div>
					<span>가장 쉽게 겨울 산을 즐기는 방법</span>
					<h3>설악케이블카·신흥사</h3>
				</div>
				<div class="text fadeBigInUp">
					설악산을 처음 찾았다면 케이블카를 타고 오르는 권금성 코스를 추천한다. 권금성 코스는 깎아지른 봉우리들이 아찔한 절벽을 이루어 환상적인 풍경을 자랑한다. 고려시대에 쌓은 산성으로 알려진 권금성은 워낙 높은 곳에 있어서인지 성벽 대부분이 허물어져 터만 남고 사람들의 발길이 끊어졌었다. 그러나 1970년 10분이면 해발 700m 높이의 하차장에 닿는 설악케이블카가 설치되면서 다시 이름을 알리게 되었다. <br>
					하차장에서 내려 평평한 바위가 이어진 길을 10~20분 정도 걸으면 권금성에 오른다. 권금성 정상에서는 설악산의 비경으로 꼽히는 울산바위와 토왕성 폭포, 푸른 동해까지 볼 수 있다.<br>
					권금성을 둘러본 후에는 신라 승려 자장이 창건한 것으로 알려지는 신흥사로 향하자. 신흥사는 완만한 평지에 자리에 사찰이라 산책하듯 둘러볼 수 있다. 사찰내부에 자리한 청동 불좌상은 바라보기만해도 압도적인 경건함이 느껴진다.
				</div>
				<div class="slider_wrap">
					<ul class="slider6">
						<li class="item"><img src="img/sub05/sub05_51.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_52.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_53.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_54.jpg"></li>
					</ul>
					<div class="phototitle">설악케이블카 · 신흥사</div>
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
							<div class="info_loca">설악케이블카</div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>강원 속초시 설악산로 1085</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg">운영시간</span><em>07:30~17:00<br class="mobile_display">(기상 상황에 따라 변동)</em></div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>033-636-4300</div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg">이용요금</span>성인 1만 5천 원</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section10 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-2.svg"></div>
					<span>볼거리 알찬 박물관 여행</span>
					<h3>속초시립박물관·국립산악박물관</h3>
				</div>
				<div class="text fadeBigInUp">
					속초시립박물관에 들어서면 가장 먼저 실향민문화촌이 반겨준다. 정면에는 한때 북한 원산까지 이어졌던 동해북부선의 기차역인 옛 속초역이 재현돼 있다. 옛 속초역은 한국전쟁 중 대규모 폭격으로 철로가 파괴되면서 기차역의 기능을 잃게 되었는데, 국군이 북진할 때는 화장장으로 쓰였고 미군정 당시엔 취사장과 댄스홀로 사용되기도 하는 등 아이러니한 역사를 가지고 있다. <br>
					지난 2014년에 문을 연 국립산악박물관은 세계적인 산악 강국인 우리나라 등산의 역사와 문화를 한눈에 볼 수 있는 곳이다. 특히 2층에 자리한 산악체험실이 눈길을 끈다. 이곳에서는 10m 높이 인공 암벽을 오르거나 해발 3,000~5,000m 같은 환경 조건에서 러닝머신을 걷는 등 다양한 산악 경험을 체험할 수 있다.
				</div>
				<div class="slider_wrap">
					<ul class="slider7">
						<li class="item"><img src="img/sub05/sub05_71.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_72.jpg"></li>
					</ul>
					<div class="phototitle">속초시립박물관</div>
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
							<div class="info_loca">속초시립박물관</div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>강원 속초시 신흥2길 16</em></div>
							<div class="list">
								<span><img src="img/sub05/sub05_icon4.svg">운영시간</span>
								<em>
									하절기 09:00~18:00, <br class="mobile_display">동절기 09:00~17:00
								</em>
							</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>033-639-2974</div>
							<div class="list">
								<span><img src="img/sub05/sub05_icon5.svg">이용요금</span>
								<em>성인 2천 원</em>
							</div>
						</div>
					</div>
				</div>

				<div class="slider_wrap slider_wrap10-2">
					<ul class="slider7-2">
						<li class="item"><img src="img/sub05/sub05_73.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_74.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_75.jpg"></li>
					</ul>
					<div class="phototitle">국립산악박물관</div>
					<div class="ctrl_wrap">
						<span class="slider_dots7-2"></span>
						<button type="button" class="btn_pause btn_pause2">정지</button>
						<button type="button" class="btn_play btn_play2">재생</button>
					</div>
					<ul class="as_slider7-2">
						<li></li><li></li><li></li>
					</ul>
				</div>
				<script>
					var $mainSlider72 = $('.slider7-2');
						$mainSlider72.slick({
						dots: true,
						appendDots: $('.slider_tab7-2'),
						asNavFor:'.as_slider7-2',
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
					$('.as_slider7-2').slick({
						asNavFor:'.slider7-2',
						dots: true,
						appendDots: $('.slider_dots7-2'),
						arrows: false
					});
					$('.section10 .ctrl_wrap .btn_pause2').click(function() {
						$mainSlider72.slick('slickPause');
						$(this).hide().next('.btn_play2').show().focus();
					});
					$('.section10 .ctrl_wrap .btn_play2').click(function() {
						$mainSlider72.slick('slickPlay');
						$(this).hide().prev('.btn_pause2').show().focus();
					});
				</script>

				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="info_loca">국립산악박물관</div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span><em>강원 속초시 미시령로 3054</em></div>
							<div class="list">
								<span><img src="img/sub05/sub05_icon4.svg">운영시간</span>
								<em>
									하절기 09:00~18:00, <br class="mobile_display">동절기 09:00~17:00
								</em>
							</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>033-638-4459</div>
							<div class="list">
								<span><img src="img/sub05/sub05_icon5.svg">이용요금</span>
								<em>무료</em>
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
					<span>희망과 그리움으로 일군 실향민 마을</span>
					<h3>아바이마을</h3>
				</div>
				<div class="text fadeBigInUp">
					한국전쟁 당시 함경도 지역 피난민들은 아바이마을에 움막을 짓고 모여 살기 시작했다. 이들이 속초에 정착한 이유는 단 하나, 고향으로 돌아가기에 제일 가까운 곳이기 때문이다. 아바이마을은 오랫동안 사람이 살지 않았던 척박한 땅이었기에, 쫓겨날 걱정이 없으니 피난민들에게는 보금자리가 되어주었다. 남자들은 고깃배를 타고, 여자들은 포구에서 생선을 손질해 주고 받은 내장으로 젓갈을 담가서 시장에 내다 팔았다. 원래는 함경도 지역 음식이었으나 지금은 속초의 이색 먹거리로 통하는 명태식해와 회냉면, 아바이순대 등이 유명해진 이유이기도 하다. <br>
					분단의 아픔과 실향민들의 애환이 서린 아바이마을이 관광명소로 유명해진 건 드라마 &lt;가을동화&gt; 덕분이었다. 드라마에서 은서(송혜교 분)가 사는 동네가 아바이마을이었는데, 남녀주인공이 갯배를 타고 스쳐 지나가는 장면이 방송된 이후 이곳은 속초 여행의 필수코스가 되었다.
				</div>
				<div class="slider_wrap">
					<ul class="slider8">
						<li class="item"><img src="img/sub05/sub05_81.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_82.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_83.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_84.jpg"></li>
					</ul>
					<div class="phototitle">아바이마을</div>
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
							<div class="info_loca">아바이마을</div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span>강원 속초시 청호로 122</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //section11 -->

		<div class="section12 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-4.svg"></div>
					<span>속초만의 감성 가득 골목길</span>
					<h3>소호거리</h3>
				</div>
				<div class="text fadeBigInUp">
					과거 속초의 중심지였던 소호거리가 청년들에 의해 변화하고 있다. 소호거리에서는 오래된 여관을 리모델링해 오픈한 게스트하우스와 낡은 주택을 개조한 동네 책방을 만날 수 있다. 주민들의 정다운 사랑방이었던 방앗간은 커뮤니티 기능을 담은 살롱으로, 작은 슈퍼마켓은 식당으로 변신하면서 속초만의 감성을 듬뿍 담은 골목길을 여행할 수 있다. 다양한 여행 프로그램과 지역 청년들이 직접 운영하는 책방 등 다채로운 매력을 만날 수 있다.
				</div>
				<div class="slider_wrap">
					<ul class="slider9">
						<li class="item"><img src="img/sub05/sub05_91.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_92.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_93.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_94.jpg"></li>
					</ul>
					<div class="phototitle">소호거리</div>
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
							<div class="info_loca">소호거리</div>
							<div class="list">
								<span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span>
								<em>강원 속초시 수복로259번길 11(소호259호스텔) 일대</em>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //section12 -->

		<div class="section13 wow fadeBigInUp">
			<div class="content">
				<div class="num_title fadeBigInUp">
					<div class="number"><img src="img/sub05/sub05_title-5.svg"></div>
					<span>분단의 아픔을 간직한 해안 산책로</span>
					<h3>외옹치바다향기로</h3>
				</div>
				<div class="text fadeBigInUp">
					지난 2018년에 완공된 외옹치바다향기로는 속초해수욕장에서 외옹치항까지 1.74km에 걸쳐 이어진 해안 산책로이다. 어른 걸음으로 20~30분 정도면 완주할 수 있지만, 에메랄드 바다에 마음을 빼앗기면 1시간도 부족하게 느껴진다. 산책로 곳곳에 자리한 바위 안내판도 볼거리이다. 주민들이 배를 타고 나가 소풍을 즐겼다는 마당바위, 물개들이 쉬어 간다는 해구바위 같은 재미있는 이름들을 볼 수 있다. <br>
					산책로 중간에 남아있는 해안초소와 철책선도 눈길을 끈다. 사실 이 지역은 1968년 울진·삼척 무장 공비 침투 사건의 영향으로 일반인들이 접근할 수 없었던 곳이지만 남북의 화해 분위기가 조성되고 언덕에 대형 리조트가 들어서면서 개방되었다. 그러나 여전히 군 작전지역에 속해 개방 시간이 정해져 있다. 바다와 가까워 기상 상황에 따라 출입이 안 될 수도 있으니, 방문 전 개방 여부를 확인해야 한다.
				</div>
				<div class="slider_wrap">
					<ul class="slider5">
						<li class="item"><img src="img/sub05/sub05_101.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_102.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_103.jpg"></li>
					</ul>
					<div class="phototitle">외옹치바다향기로</div>
					<div class="ctrl_wrap">
						<span class="slider_dots5"></span>
						<button type="button" class="btn_pause btn_pause5">정지</button>
						<button type="button" class="btn_play btn_play5">재생</button>
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
						$('.section13 .ctrl_wrap .btn_pause5').click(function() {
							$mainSlider5.slick('slickPause');
							$(this).hide().next('.btn_play5').show().focus();
						});
						$('.section13 .ctrl_wrap .btn_play5').click(function() {
							$mainSlider5.slick('slickPlay');
							$(this).hide().prev('.btn_pause5').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title">INFO</div>
						<div class="info_list">
							<div class="info_loca">외옹치바다향기로</div>
							<div class="list">
								<span><img src="img/sub05/sub05_icon2.svg">주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span>
								<em>강원 속초시 대포동</em>
							</div>
							<div class="list">
								<span><img src="img/sub05/sub05_icon4.svg">운영시간</span>
								<em>
									06:00~19:30<br class="mobile_display">(기상 악화 시 통제)
								</em>
							</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg">전화번호</span>033-639-2362</div>
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
