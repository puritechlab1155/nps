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
				<div class="title">모두의 여행</div>
				<div class="text">글·사진. 권다현 여행작가</div>
				<div class="angle-down"><i class="xi-angle-down-min"></i></div>
			</div>
		</div>

		<div class="section02 wow fadeBigInUp">
			<div class="content">
					<div class="subtitle">온통 푸른 산과 호수 그리고 바람</div>
					<div class="title">제천</div>
					<div class="line"></div>
					<div class="subcopy">
						짙푸른 자연을 마주하면 절로 ‘청풍명월(淸風明月)’이란 단어를 떠올린다. <면앙정가>로 잘 알려진 조선시대 문인 송순이 초가집 한 칸을 짓고 반 칸에는 맑은 바람을, 나머지 반 칸에는 밝은 달을 들이겠다고 적은 시조에서 유래한 말이다. 청풍명월의 본향으로 꼽히는 제천은 이 무렵 찾으면 눈이 부시도록 푸른 산과 호수, 그리고 바람이 맞아준다.
					</div>
					<img src="img/sub05/sub05_01.svg">
			</div>
		</div>

		<div class="section03 wow fadeBigInUp">
			<div class="content">
				<div class="title fadeBigInUp">
					<img src="img/sub05/sub05_title11.svg">
				</div>
				<div class="text fadeBigInUp">
					1985년 충주댐 건설과 함께 조성된 인공호수인 청풍호는 무려 27억 5천 톤에 이르는 담수량 덕분에 ‘내륙의 바다’로 불린다. 공식 명칭은 충주호이지만 제천 사람들은 고집스레 청풍호란 이름을 지키는 중이다. 저 푸른 호수 아래로 사라진 마을과 추억을 기억하기 위함이다. 지난 2019년 개장한 케이블카에 청풍호반이란 이름이 붙은 것도 같은 이유다.<br>
					청풍호반케이블카는 제천의 매력을 가장 압도적으로 보여주는 곳이다. 청풍면 물태리에서 비봉산 정상까지 잇는 케이블카는 오르내리는 내내 청풍호의 아름다운 전경을 파노라마로 즐길 수 있다. 바닥이 투명한 크리스탈캐빈을 선택한다면 더욱 시원한 전망에 짜릿함까지 더한다. 에메랄드빛 호수 위에 섬처럼 떠 있는 산자락들을 보고 있노라면 마치 다도해의 하늘을 지나는 기분이다. 전망대에서 약초숲길을 따라 오색빛깔 파빌리온까지 이어지는 산책길도 추천하는데, 비봉산의 숨겨진 속살을 제대로 감상할 수 있는 코스다.<br>
					청풍호관광모노레일은 청풍호가 품은 초록빛 숲과 바람을 온전히 누리기 좋다. 온몸이 뒤로 기울어질 만큼 가파른 레일을 따라 비봉산 자락을 오르락내리락 탐하는 재미가 쏠쏠하다. 창문이 없는 오픈형 객차라 숲길 사이로 불어오는 상쾌한 바람이 곁을 어루만진다. 비봉산 전망대까지는 25분이 소요되는데, 시설 특성상 36개월 미만 유아나 임산부는 이용이 불가하니 예약 시 주의가 필요하겠다.
				</div>
				<div class="slider_wrap">
					<ul class="slider1">
						<li class="item"><img src="img/sub05/sub05_11.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_12.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_13.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_14.jpg"></li>
					</ul>
					<div class="phototitle">청풍호반케이블카</div>
					<div class="ctrl_wrap">
						<span class="slider_dots"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider1">
						<li></li><li></li><li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider1 = $('.slider1');
							$mainSlider1.slick({
				 			dots: true,
				 			appendDots: $('.slider_tab1'),
				 			asNavFor:'.as_slider1',
				 			arrows: false,
				 			autoplay: true,
				 			autoplaySpeed: 3000,
				 			speed: 500,
				 			slidesToShow: 1,
				 			pauseOnHover: false,
				 			pauseOnDotsHover: false,
				 			pauseOnFocus: false,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider1').slick({
							asNavFor:'.slider1',
							dots: true,
							appendDots: $('.slider_dots'),
							arrows: false
						});
						$('.section03 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider1.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section03 .ctrl_wrap .btn_play').click(function() {
							$mainSlider1.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="monorail">
					<div class="img"><img src="img/sub05/sub05_02.jpg"><img src="img/sub05/sub05_03.jpg"></div>
					<div class="phototitle">청풍호관광모노레일</div>
				</div>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title"><img src="img/sub05/sub05_info1.svg"></div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon1.svg"> 홈페이지</span> <a href="https://cheongpungcablecar.com" target="_blank">cheongpungcablecar.com</a></div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg"> 주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span> 충북 제천시 청풍면 문화재길 166</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg"> 전화번호</span> 043-643-7301</div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg"> 운영시간</span> 케이블카 09:30~18:30 모노레일 09:30~18:00</div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg"> 이용요금</span> 케이블카 일반캐빈 18,000원 크리스탈캐빈 23,000원 / 모노레일 12,000원 *대인왕복기준</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section04 wow fadeBigInUp">
			<div class="content">
				<div class="title fadeBigInUp">
					<img src="img/sub05/sub05_title12.svg">
				</div>
				<div class="text fadeBigInUp">
					청풍호를 배경으로 멋진 인생샷을 남기고 싶다면 이 카페를 놓쳐선 안 된다. 카페 규모는 그리 크지 않지만 길 건너 비밀스럽게 숨은 야외 포토존에 들어서면 누구든 탄성을 지를 수밖에 없다. 자연 그대로의 짙푸른 산과 호수, 이국적인 감성의 소품들이 어우러져 번잡한 도심의 일상은 거짓말처럼 잊히고 만다. 특히 호수 곁에 자리한 바위에 앉아 눈을 감으면 지나는 바람마저 달콤하다.
				</div>
				<div class="glueglue">
					<div class="img"><img src="img/sub05/sub05_04.jpg"></div>
					<div class="phototitle">글루글루</div>
				</div>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title"><img src="img/sub05/sub05_info1.svg"></div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg"> 주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span> 충북 제천시 수산면 옥순봉로10길 2</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg"> 전화번호</span> 0507-1358-2664</div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg"> 운영시간</span> 11:00~19:00</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section05 wow fadeBigInUp">
			<div class="content">
				<div class="title fadeBigInUp">
					<img src="img/sub05/sub05_title13.svg">
				</div>
				<div class="text fadeBigInUp">
					청풍호를 자동차로 달리다보면 호숫가에 우뚝 솟은 번지점프대가 눈길을 사로잡는다. 지난 2002년부터 운영 중인 청풍랜드다. 국내 최고 62m 높이를 자랑하는 이 시설은 번지점프 외에도 빅스윙과 이젝션시트 등 아찔한 어트랙션을 함께 즐길 수 있는 복합 멀티타워다. 여기에 집라인까지 추가되어 푸른 하늘을 가르며 마치 청풍호 속으로 풍덩 뛰어드는 기분을 느낄 수 있다. 모험을 즐길 용기가 나지 않는다면 언덕길을 따라 조각공원을 거닐어보는 것도 좋다. 수몰지역 주민들을 위해 조성된 이곳은 고향과 추억을 주제로 한 다양한 조각품이 걸음마다 애틋한 그리움을 불러일으킨다.
				</div>
				<div class="slider_wrap">
					<ul class="slider2">
						<li class="item"><img src="img/sub05/sub05_21.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_22.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_23.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_24.jpg"></li>
					</ul>
					<div class="phototitle">청풍랜드</div>
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
						var $mainSlider1 = $('.slider2');
							$mainSlider1.slick({
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
				 			pauseOnFocus: false,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider2').slick({
							asNavFor:'.slider2',
							dots: true,
							appendDots: $('.slider_dots2'),
							arrows: false
						});
						$('.section05 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider1.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section05 .ctrl_wrap .btn_play').click(function() {
							$mainSlider1.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title"><img src="img/sub05/sub05_info1.svg"></div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon1.svg"> 홈페이지</span> <a href="https://cheongpungland.com" target="_blank">cheongpungland.com</a></div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg"> 주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span> 충북 제천시 청풍면 청풍호로50길 6</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg"> 전화번호</span> 043-648-4151</div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg"> 운영시간</span> 화~일요일 10:00~17:00</div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg"> 이용요금</span> 번지점프 60,000원 집라인 35,000원 빅스윙·이젝션시트 25,000원</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section06 wow fadeBigInUp">
			<div class="content">
				<div class="title fadeBigInUp">
					<img src="img/sub05/sub05_title14.svg">
				</div>
				<div class="text fadeBigInUp">
					청풍랜드에는 청풍호의 아름다운 풍광을 보다 가까이에서 감상할 수 있는 유람선도 운영된다. 단양팔경의 하나로 꼽히는 구담봉은 유람선을 타야만 그 진수를 눈에 담을 수 있는데, 그 옆으로 대나무를 닮은 기암절벽 옥순봉과 금수산, 멀리는 월악산이 감싸고 있어 한 폭의 동양화를 연상케 한다. 퇴계 이황이 “중국의 소상팔경도 이보다 나을 수는 없을 것”이라며 감탄했던 풍광인 만큼 청풍호의 매력을 제대로 즐기고 싶다면 시간을 들여 꼭 둘러보길 추천한다.
				</div>
				<div class="slider_wrap">
					<ul class="slider3">
						<li class="item"><img src="img/sub05/sub05_31.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_32.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_33.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_34.jpg"></li>
					</ul>
					<div class="phototitle">청풍호유람선</div>
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
						var $mainSlider1 = $('.slider3');
							$mainSlider1.slick({
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
				 			pauseOnFocus: false,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider3').slick({
							asNavFor:'.slider3',
							dots: true,
							appendDots: $('.slider_dots3'),
							arrows: false
						});
						$('.section06 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider1.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section06 .ctrl_wrap .btn_play').click(function() {
							$mainSlider1.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title"><img src="img/sub05/sub05_info1.svg"></div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon1.svg"> 홈페이지</span> <a href="https://chungpoongferry.modoo.at" target="_blank">chungpoongferry.modoo.at</a></div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg"> 주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span> 충북 제천시 청풍면 청풍호로50길 6</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg"> 전화번호</span> 043-644-8859</div>
							<div class="list"><span><img src="img/sub05/sub05_icon4.svg"> 운영시간</span> 09:00~18:00</div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg"> 이용요금</span> 대인 15,000원 *온라인 할인가</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section07 wow fadeBigInUp">
			<div class="content">
				<div class="title fadeBigInUp">
					<img src="img/sub05/sub05_title15.svg">
				</div>
				<div class="text fadeBigInUp">
					청풍호에서 하룻밤 쉬어갈 예정이라면 뷰맛집 숙소로 통하는 청풍리조트를 추천한다. 객실에서 평온한 호수뷰를 즐길 수 있을 뿐 아니라, 국민연금공단에서 운영하기 때문에 국민연금 가입자 및 수급자에게 다양한 할인혜택을 제공한다. 특히 리조트 입구에서 이어지는 자드락 호수길은 청풍호를 배경으로 봄이면 흐드러진 벚꽃을, 여름에는 초록빛 신록을, 가을이면 붉디붉은 단풍을, 겨울엔 눈부신 설경을 감상할 수 있는 사계절 산책코스로 인기다.
				</div>
				<div class="slider_wrap">
					<ul class="slider4">
						<li class="item"><img src="img/sub05/sub05_41.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_42.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_43.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_44.jpg"></li>
					</ul>
					<div class="phototitle">청풍리조트</div>
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
						var $mainSlider1 = $('.slider4');
							$mainSlider1.slick({
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
				 			pauseOnFocus: false,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider4').slick({
							asNavFor:'.slider4',
							dots: true,
							appendDots: $('.slider_dots4'),
							arrows: false
						});
						$('.section07 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider1.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section07 .ctrl_wrap .btn_play').click(function() {
							$mainSlider1.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title"><img src="img/sub05/sub05_info1.svg"></div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon1.svg"> 홈페이지</span> <a href="https://cheongpungresort.co.kr" target="_blank">cheongpungresort.co.kr</a></div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg"> 주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span> 충북 제천시 청풍면 청풍호로 1798</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg"> 전화번호</span> 043-640-7000</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section08 wow fadeBigInUp">
			<div class="content">
					<img src="img/sub05/sub05_05.svg">
			</div>
		</div>

		<div class="section09 wow fadeBigInUp">
			<div class="content">
				<div class="title fadeBigInUp">
					<img src="img/sub05/sub05_title21.svg">
				</div>
				<div class="text fadeBigInUp">
					제천은 전국에서 유일하게 관광미식과가 운영되는 도시다. 예부터 이 지역에선 깨끗한 자연에서 나는 다양한 식재료로 맛과 멋이 빼어난 음식들을 즐겼다는데, 이 같은 미식의 즐거움을 관광상품으로 내세운 것이 가스트로(Gastro)투어다. 배, 위를 뜻하는 이탈리아어를 붙인 일종의 미식여행인 셈이다.<br>
					제천 가스트로투어는 중앙시장 일대 현지인 추천 맛집들을 2개 코스로 구성했다. 50년 전통의 수제찹쌀떡집 덩실분식, 차별화된 약선 메뉴인 하얀민들레밥을 선보이는 마당갈비, 봉평 메밀을 직접 반죽하고 뽑는 상동막국수, 매콤달콤 자꾸 생각나는 맛 빨간오뎅, 제천을 대표하는 수제맥주 솔티 등이 여기에 포함된다. 투어는 버스터미널 앞 광장에서 시작하고 문화해설사가 동행하며 제천 음식에 대한 다양한 이야기를 들려준다. 예약은 제천시티투어 홈페이지를 통해 가능하다.
				</div>
				<div class="slider_wrap">
					<ul class="slider5">
						<li class="item"><img src="img/sub05/sub05_51.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_52.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_53.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_54.jpg"></li>
					</ul>
					<div class="phototitle">가스트로투어</div>
					<div class="ctrl_wrap">
						<span class="slider_dots5"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider5">
						<li></li><li></li><li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider1 = $('.slider5');
							$mainSlider1.slick({
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
				 			pauseOnFocus: false,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider5').slick({
							asNavFor:'.slider5',
							dots: true,
							appendDots: $('.slider_dots5'),
							arrows: false
						});
						$('.section09 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider1.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section09 .ctrl_wrap .btn_play').click(function() {
							$mainSlider1.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title"><img src="img/sub05/sub05_info2.svg"></div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon1.svg"> 홈페이지</span> <a href="https://citytour.jecheon.go.kr" target="_blank">citytour.jecheon.go.kr</a></div>
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg"> 주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span> 충북 제천시 청풍면 청풍호로 1798</div>
							<div class="list"><span><img src="img/sub05/sub05_icon5.svg"> 이용요금</span> 1인 23,500원</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section10 wow fadeBigInUp">
			<div class="content">
				<div class="title fadeBigInUp">
					<img src="img/sub05/sub05_title22.svg">
				</div>
				<div class="text fadeBigInUp">
					기차역은 과거 마을을 들고나는 문이었다. 제천역 뒤편에 자리한 영천동은 철도관사가 세워질 만큼 번성했던 동네다. 그러나 찻길이 나고 기차 이용객이 줄어들면서 마을은 자꾸만 허물어져 갔다. 지난 2021년 기차마을로 새롭게 변신한 영천동에는 제천역을 담은 흑백사진들로 채워진 갤러리와 미니기차를 타고 레일 위를 달리는 기차공원이 들어섰다. 옛 철도관사를 리모델링한 게스트하우스도 세워졌다. 이곳 객실에선 창문 너머 제천역 플랫폼이 훤히 내려다보인다. 칙칙폭폭 분주하게 레일을 달리는 기차소리에 아이들은 물론 어른들도 정겨운 추억 속으로 내달린다.
				</div>
				<div class="slider_wrap">
					<ul class="slider6">
						<li class="item"><img src="img/sub05/sub05_61.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_62.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_63.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_64.jpg"></li>
					</ul>
					<div class="phototitle">영천동 기차마을</div>
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
						var $mainSlider1 = $('.slider6');
							$mainSlider1.slick({
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
				 			pauseOnFocus: false,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider6').slick({
							asNavFor:'.slider6',
							dots: true,
							appendDots: $('.slider_dots6'),
							arrows: false
						});
						$('.section10 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider1.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section10 .ctrl_wrap .btn_play').click(function() {
							$mainSlider1.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title"><img src="img/sub05/sub05_info2.svg"></div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg"> 주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span> 충북 제천시 청풍호로2가길 10</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg"> 전화번호</span> 043-644-3355</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section11 wow fadeBigInUp">
			<div class="content">
				<div class="title fadeBigInUp">
					<img src="img/sub05/sub05_title23.svg">
				</div>
				<div class="text fadeBigInUp">
					마을에 깊은 못이 있어 이름 붙었다는 진소마을은 찻길은커녕 기차역도 없어 철로를 따라 가까운 역을 오가야 했던 오지였다. 그러나 2000년에 개봉한 영화 <박하사탕> 촬영지로 알려지면서 조금씩 찾아오는 발길이 늘었다. 영화의 처음과 마지막에 주인공 영호(설경구 분)가 달려오는 기차를 향해 “나 다시 돌아갈래!” 절규하는 장면이 이곳 철교에서 촬영된 것. 1980년대 파란만장했던 현대사의 소용돌이 속에서 처절하게 무너져 내린 개인을 상징적으로 표현한 명장면으로 꼽히는 만큼 영화팬들은 물론 일반 관광객들도 색다른 감상에 젖게 만든다. 마을 곳곳에서 만나는 담백하고 소박한 풍경도 매력을 더한다.
				</div>
				<div class="slider_wrap">
					<ul class="slider7">
						<li class="item"><img src="img/sub05/sub05_71.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_72.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_73.jpg"></li>
				   		<li class="item"><img src="img/sub05/sub05_74.jpg"></li>
					</ul>
					<div class="phototitle">진소마을</div>
					<div class="ctrl_wrap">
						<span class="slider_dots7"></span>
						<button type="button" class="btn_pause">정지</button>
						<button type="button" class="btn_play">재생</button>
					</div>
					<ul class="as_slider7">
						<li></li><li></li><li></li><li></li>
					</ul>
				</div>
					<script>
						var $mainSlider1 = $('.slider7');
							$mainSlider1.slick({
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
				 			pauseOnFocus: false,
							touchThreshold: 15,
        					swipe: true
						});
						$('.as_slider7').slick({
							asNavFor:'.slider7',
							dots: true,
							appendDots: $('.slider_dots7'),
							arrows: false
						});
						$('.section11 .ctrl_wrap .btn_pause').click(function() {
							$mainSlider1.slick('slickPause');
							$(this).hide().next('.btn_play').show().focus();
						});
						$('.section11 .ctrl_wrap .btn_play').click(function() {
							$mainSlider1.slick('slickPlay');
							$(this).hide().prev('.btn_pause').show().focus();
						});
					</script>
				<div class="info_area">
					<div class="info_box">
						<div class="info_title"><img src="img/sub05/sub05_info2.svg"></div>
						<div class="info_list">
							<div class="list"><span><img src="img/sub05/sub05_icon2.svg"> 주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;소</span> 충북 제천시 백운면 애련로10길 153-4</div>
							<div class="list"><span><img src="img/sub05/sub05_icon3.svg"> 전화번호</span> 043-641-5513</div>
						</div>
					</div>
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
