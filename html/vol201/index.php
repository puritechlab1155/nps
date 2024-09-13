<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>
	<script src="js/swiper-bundle.min.js"></script>
	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">

	<!-- kruddo add -->
	<?
		$vol_idx = "201";		// kruddo modify - 호차 번호. 191호가 아닌경우 변경, inc/like_share.php 에서도 변경

		$hostname = "localhost";
		$username = "nps2022";
		$password = "nps2022!@";
		$database = "nps2022";

		$connect = mysqli_connect($hostname, $username, $password, $database);
		mysqli_select_db($connect, $database) or die('DB 선택 실패');


	?>

	<script type="text/javascript">
		/*
		var vol_idx = "199";		// kruddo modify - 호차 번호. 191호가 아닌경우 변경, inc/like_share.php 에서도 변경

		$(document).ready(function(){
			getLikeCnt();
		});

		// 모든 게시물의 좋아요 목록
		function getLikeCnt(){
			var data = {vol_idx:vol_idx}
			$.ajax({
				type: "POST",
				url : "../_php_inc/inc_like_list.php",
				data: data,
				dataType:"json",
				success : function(data, status, xhr) {
					console.log(data);
					for(var i=0; i<data.length; i++){
						var b_seq = data[i].board_seq;
						var b_sub_seq = data[i].board_sub_seq;
						$("#like_cnt_"+b_seq+"_"+b_sub_seq).text(data[i].like_count);
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(jqXHR.responseText);
				}
			});
		}
		*/

		// 서브 페이지로 이동 - 게시물 번호를 가지고 이동함
		/* 함수 사용 대신 직접 링크로 변경
		function getSubPage(board_seq, board_sub_seq){
			if(parseInt(board_seq) < 10)	board_seq = '0'+parseInt(board_seq);
			if(parseInt(board_sub_seq) < 10)	board_sub_seq = '0'+parseInt(board_sub_seq);
			location.href = "./sub"+board_seq+"_"+board_sub_seq+".php";
		}
		*/
	</script>

	<!-- kruddo add -->
</head>
<body>
<div id="wrap" class="main">
	<!-- header -->
	<?php include("header.php"); ?>
	<!-- //header -->

	<!-- contents -->
	<section id="contents">
		<div class="main_section1 wow fadeBigInUp">
			<div class="main_slider_wrap">
				<ul class="main_slider1">
					<li>
						<a href="sub02.php">
							<div class="thumb">
								<img src="img/main/main_visual01.jpg">
							</div>
						</a>
					</li>
					<li>
						<a href="sub04.php">
							<div class="thumb">
								<img src="img/main/main_visual02.jpg">
							</div>
						</a>
					</li>
					<li>
						<a href="sub01.php">
							<div class="thumb">
								<img src="img/main/main_visual03.jpg">
							</div>
						</a>
					</li>
					<li>
						<a href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'>
							<div class="thumb">
								<img src="img/main/main_visual04.jpg">
							</div>
						</a>
					</li>
				</ul>
				<div class="ctrl_wrap">
					<span class="dots"></span>
				</div>
			</div>
			<script>
				var $mainSlider1 = $('.main_slider1');
				$mainSlider1.slick({
				 	dots: true,
				 	arrows: false,
				 	autoplay: true,
				 	appendDots: $('.dots'),
				 	autoplaySpeed: 5000,
				 	speed: 500,
				 	slidesToShow: 1,
				 	pauseOnHover: false,
				 	pauseOnDotsHover: false,
				 	pauseOnFocus: false,
					touchThreshold: 100,
				});
				$('.main_section1 .ctrl_wrap .btn_pause').click(function() {
					$mainSlider1.slick('slickPause');
					$(this).hide().next('.btn_play').show().focus();
				});
				$('.main_section1 .ctrl_wrap .btn_play').click(function() {
					$mainSlider1.slick('slickPlay');
					$(this).hide().prev('.btn_pause').show().focus();
				});
			</script>
		</div>

		<div class="main_section2 wow fadeBigInUp pc_display">
			<div class="main_section2_container">
			<div class="sub_title fadeBigInUp"><img src="img/main/main_subtitle_icon.png">지금 주목할 만한 이야기</div>
			<div class="swiper story_Swiper">
				<div class="swiper-wrapper story_wrapper">
				   	<div data-title="NPS 뉴스" class="swiper-slide item1 wow fadeUp">
						<a href="sub01.php">
							<div class="thumb">
								<img src="img/main/main_story_img01.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">NPS 뉴스</p>
							<p class="txt">국민연금 주요 뉴스</p>
						</a>
					</div>
				   	<div data-title="NPS 칼럼" class="swiper-slide item2 wow fadeUp">
						<a href="sub02.php">
							<div class="thumb">
								<img src="img/main/main_story_img02.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">NPS 칼럼</p>
							<p class="txt">지속가능하고 튼튼한 버팀목 국민연금</p>
						</a>
					</div>
					<div data-title="M&Z일상수다" class="swiper-slide item3 wow fadeUp">
						<a href="sub03.php">
							<div class="thumb">
								<img src="img/main/main_story_img03.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">M&Z일상수다</p>
							<p class="txt">추석을 준비하는 다양한 방법!</p>
						</a>
					</div>
					<div data-title="알잘딱깔센! 세이브 머니" class="swiper-slide item4 wow fadeUp">
						<a href="sub04.php">
							<div class="thumb">
								<img src="img/main/main_story_img04.jpg">
								<span class="cover like"><i></i></span>
								<!--<i class="vod">영상</i>-->
							</div>
							<p class="tit">꼬리에 꼬리를 무는 문화탐구</p>
							<p class="txt">트로트를 신드롬으로 만든 임영웅이라는 세계</p>
						</a>
					</div>
					<div data-title="모두의 여행" class="swiper-slide item5 wow fadeUp">
						<a href="sub05.php">
							<div class="thumb">
								<img src="img/main/main_story_img05.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">모두의 여행</p>
							<p class="txt">초가을에 거닐기 좋은 완주·전주</p>
						</a>
					</div>
				   	<div data-title="연금엔씨네마" class="swiper-slide item6 wow fadeUp">
						<a href="sub06.php">
							<div class="thumb">
								<img src="img/main/main_story_img06.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">연금엔씨네마</p>
							<p class="txt">영화 &lt;오베라는 남자&gt;로 읽는 국민연금 실업 크레딧</p>
						</a>
					</div>
					<div data-title="키워드로 보는 세상" class="swiper-slide item7 wow fadeUp">
						<a href="sub07.php">
							<div class="thumb">
								<img src="img/main/main_story_img07.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">키워드로 보는 세상</p>
							<p class="txt">더 길게 더 멀리 보는 튼튼한 노후 자금 준비법</p>
						</a>
					</div>
					<div data-title="헬스 앤 라이프" class="swiper-slide item8 wow fadeUp">
						<a href="sub08.php">
							<div class="thumb">
								<img src="img/main/main_story_img08.jpg">
								<span class="cover like"><i></i></span>
								<!--<i class="vod">영상</i>-->
							</div>
							<p class="tit">헬스 앤 라이프</p>
							<p class="txt">계절성 우울증 예방법</p>
						</a>
					</div>
					<div data-title="오늘의 레시피" class="swiper-slide item9 wow fadeUp">
						<a href="sub09.php">
							<div class="thumb">
								<img src="img/main/main_story_img09.jpg">
								<span class="cover like"><i></i></span>
								<!--<i class="vod">영상</i>-->
							</div>
							<p class="tit">오늘의 레시피</p>
							<p class="txt">영양 듬뿍 담은 ‘송이버섯솥밥’ 레시피</p>
						</a>
					</div>
				</div>
			</div>
			<div class="main_story-pagination swiper-pagination"></div>
			<div class="main_story-button swiper-button-next"></div>
            <div class="main_story-button swiper-button-prev"></div>
			<script>
				document.addEventListener('DOMContentLoaded', function () {
    				var swiper = new Swiper('.story_Swiper', {
      					slidesPerView: '3.5',
      					spaceBetween: 20,
						loop: true,
						autoplay: {
            				delay: 2500,
            				disableOnInteraction: false,
        				},
      					navigation: {
        					nextEl: ".main_story-button.swiper-button-next",
	        				prevEl: ".main_story-button.swiper-button-prev",
          				},
        				pagination: {
            				el: ".swiper-pagination",
            				clickable: true,
        				},
						breakpoints: {
            				0: {
                				slidesPerView: 3,
								spaceBetween: 5,
            				},
            				767: {
                				slidesPerView: 3,
								spaceBetween: 5,
            				},
							1024: {
                				slidesPerView: 3.5,
            				},
        				},
      					on: {
        					reachEnd: function () {
					          	// 슬라이드의 오른쪽 끝에 도달했을 때 클래스를 추가하여 그라데이션 효과 숨기기
          						document.querySelector('.swiper').classList.add('hide-gradient');
        					},
        					reachBeginning: function () {
          						// 슬라이드의 왼쪽 끝에 도달했을 때 클래스를 제거하여 그라데이션 효과 보이기
          					document.querySelector('.swiper').classList.remove('hide-gradient');
        				}
      				},
    				});
				    var prevButton = document.querySelector('.swiper-button-prev');
						prevButton.addEventListener('click', function () {
      						// 왼쪽 버튼 클릭시 그라데이션 효과 살리기
      						document.querySelector('.swiper').classList.remove('hide-gradient');
    				});
  				});
			</script>

			</div>
		</div>

		<div class="main_section3 wow fadeBigInUp mobile_display">
			<div class="main_section3_container">
			<div class="sub_title fadeBigInUp"><img src="img/main/main_subtitle_icon.png">지금 주목할 만한 이야기</div>
			<div class="swiper story_Swiper_m1">
				<div class="swiper-wrapper story_wrapper_m1">
				   	<div data-title="NPS 뉴스" class="swiper-slide item1 wow fadeUp">
						<a href="sub01.php">
							<div class="thumb">
								<img src="img/main/main_story_img01.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">NPS 뉴스</p>
							<p class="txt">국민연금 주요 뉴스</p>
						</a>
					</div>
				   	<div data-title="NPS 칼럼" class="swiper-slide item2 wow fadeUp">
						<a href="sub02.php">
							<div class="thumb">
								<img src="img/main/main_story_img02.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">NPS 칼럼</p>
							<p class="txt">노후소득보장의 중추 지속가능하고 튼튼한 버팀목 국민연금</p>
						</a>
					</div>
					<div data-title="꼬리에 꼬리를 무는 문화탐구" class="swiper-slide item4 wow fadeUp">
						<a href="sub04.php">
							<div class="thumb">
								<img src="img/main/main_story_img04.jpg">
								<span class="cover like"><i></i></span>
								<!--<i class="vod">영상</i>-->
							</div>
							<p class="tit">꼬리에 꼬리를 무는 문화탐구</p>
							<p class="txt">트로트를 신드롬으로 만든 임영웅이라는 세계</p>
						</a>
					</div>
				   	<div data-title="연금엔씨네마" class="swiper-slide item6 wow fadeUp">
						<a href="sub06.php">
							<div class="thumb">
								<img src="img/main/main_story_img06.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">연금엔씨네마</p>
							<p class="txt">영화 &lt;오베라는 남자&gt;로 읽는 국민연금 실업 크레딧</p>
						</a>
					</div>
				</div>
			</div>
			<div class="main_story1-pagination swiper-pagination"></div>
			<script>
				var swiper = new Swiper('.story_Swiper_m1', {
      				slidesPerView: '2',
      				spaceBetween: 20,
					loop: true,
					autoplay: {
            			delay: 2500,
            			disableOnInteraction: false,
        			},
        			pagination: {
            			el: ".main_story1-pagination.swiper-pagination",
            			clickable: true,
        			},
  				});
			</script>

			</div>
		</div>

		<div class="main_section4 wow fadeBigInUp mobile_display">
			<div class="main_section4_container">
			<div class="sub_title fadeBigInUp"><img src="img/main/main_subtitle_icon.png">함께 알아가는 문화 트렌드</div>
			<div class="swiper story_Swiper_m2">
				<div class="swiper-wrapper story_wrapper_m2">
					<div data-title="M&Z일상수다" class="swiper-slide item3 wow fadeUp">
						<a href="sub03.php">
							<div class="thumb">
								<img src="img/main/main_story_img03.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">M&Z일상수다</p>
							<p class="txt">추석을 준비하는 다양한 방법!</p>
						</a>
					</div>
					<div data-title="모두의 여행" class="swiper-slide item5 wow fadeUp">
						<a href="sub05.php">
							<div class="thumb">
								<img src="img/main/main_story_img05.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">모두의 여행</p>
							<p class="txt">초가을에 거닐기 좋은 완주&middot;전주</p>
						</a>
					</div>
					<div data-title="키워드로 보는 세상" class="swiper-slide item7 wow fadeUp">
						<a href="sub07.php">
							<div class="thumb">
								<img src="img/main/main_story_img07.jpg">
								<span class="cover like"><i></i></span>
							</div>
							<p class="tit">키워드로 보는 세상</p>
							<p class="txt">더 길게 더 멀리 보는 튼튼한 노후 자금 준비법</p>
						</a>
					</div>
					<div data-title="헬스 앤 라이프" class="swiper-slide item8 wow fadeUp">
						<a href="sub08.php">
							<div class="thumb">
								<img src="img/main/main_story_img08.jpg">
								<span class="cover like"><i></i></span>
								<!--<i class="vod">영상</i>-->
							</div>
							<p class="tit">헬스 앤 라이프</p>
							<p class="txt">계절성 우울증 예방법</p>
						</a>
					</div>
					<div data-title="오늘의 레시피" class="swiper-slide item9 wow fadeUp">
						<a href="sub09.php">
							<div class="thumb">
								<img src="img/main/main_story_img09.jpg">
								<span class="cover like"><i></i></span>
								<!--<i class="vod">영상</i>-->
							</div>
							<p class="tit">오늘의 레시피</p>
							<p class="txt">영양 듬뿍 담은 ‘송이버섯솥밥’ 레시피</p>
						</a>
					</div>
				</div>
			</div>
			<div class="main_story2-pagination swiper-pagination"></div>
			<script>
				var swiper = new Swiper('.story_Swiper_m2', {
      				slidesPerView: '2',
      				spaceBetween: 20,
					loop: true,
					autoplay: {
            			delay: 2500,
            			disableOnInteraction: false,
        			},
        			pagination: {
            			el: ".main_story2-pagination.swiper-pagination",
            			clickable: true,
        			},
  				});
			</script>

			</div>
		</div>

<link rel="stylesheet" href="js/swiper-bundle.min.css" />

		<div class="main_section5 wow fadeBigInUp">
			<div class="sub_title fadeBigInUp"><img src="img/main/main_subtitle_icon.png">이벤트</div>
			<ul class="list">
				<li class="item1 wow fadeUp">
					<a href="sub10.php">
						<div class="thumb">
							<img src="img/main/main_event_img01.jpg">
							<span class="cover ok"><i></i></span>
						</div>
					</a>
				</li>
				<li class="item2 wow fadeUp">
					<a href="sub11.php">
						<div class="thumb">
							<img src="img/main/main_event_img02.jpg">
							<span class="cover ev"><i></i></span>
						</div>
					</a>
				</li>
				<li class="item3 wow fadeUp">
					<a href="sub12.php">
						<div class="thumb">
							<img src="img/main/main_event_img03.jpg">
							<span class="cover good"><i></i></span>
						</div>
					</a>
				</li>
				<li class="item4 wow fadeUp">
					<a href="sub13.php">
						<div class="thumb">
							<img src="img/main/main_event_img04.jpg">
							<span class="cover fun"><i></i></span>
						</div>
					</a>
				</li>
				<li class="item5 wow fadeUp">
					<a href="sub14.php">
						<div class="thumb">
							<img src="img/main/main_event_img05.jpg">
							<span class="cover good"><i></i></span>
						</div>
					</a>
				</li>
				<li class="item6 wow fadeUp">
					<a href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'>
						<div class="thumb">
							<img src="img/main/main_event_img06.jpg">
							<span class="cover ok"><i></i></span>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section>
	<!-- contents -->

	<!-- page ctrl -->
	<div class="page_ctrl">
		<?php include("page_ctrl.php"); ?>
	</div>

	<!-- //page ctrl -->

</div>
<style>
	.mpage_ctrl .move { display: none;}
</style>
	<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- //footer -->

</body>
</html>
