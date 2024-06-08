<!doctype html>
<html lang="ko">
<head>
	<title>페이지명 | 내곁에 국민연금</title>
	<meta property="og:image" content="../../img/logosns/logosns_vol191.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="../../css/vol191/contents.css">
</head>
<body>
<?php include("../../inc/accessibility.php"); ?>
<div id="wrap">
	
	<!-- header & aside nav -->
	<?php include("../../inc/header191.php"); ?>
	<!-- //header & aside nav --> 

	<!-- contents -->
	<section id="contents">
		<div class="content_header">
			<?php include("../../inc/share_group.php"); ?>
			<h2>팝콘 경제</h2>
			<dl>
				<dt>“우리도 받을 수 있나요?”<br> 고령화 가족</dt>
				<dd>언제쯤이면 적자가 될 것이고 기금이 모두 소진될 것인지를 미리 예측하는 것이다. 이를 통해 필요하다면 연금개혁을 단행한다. 국민연금을 장기 전망하는 데는 여러 가지 변수가 고려되지만, 그중 가장 중요한 변수가 ‘저출산 고령화’다.</dd>
			</dl>	
		</div>
		<div class="cont_block sub01_01">
			<div class="slider_wrap">
				<ul class="item_slider1">
					<li>
						<img src="../../img/vol191/sub/sub01_01_img1.jpg" alt="네이버 영화 [고령화가족]">
					</li>
					<li>
						<img src="../../img/vol191/sub/sub01_01_img1.jpg" alt="네이버 영화 [고령화가족]">
					</li>
					<li>
						<img src="../../img/vol191/sub/sub01_01_img1.jpg" alt="네이버 영화 [고령화가족]">
					</li>
				</ul>
				<div class="ctrl_wrap">
					<span class="slider_dots"></span>
					<button type="button" class="btn_pause">정지</button>
					<button type="button" class="btn_play">재생</button>
				</div>
			</div>
			<div class="txt_desc right">↑출처 : 네이버 영화 [고령화가족]</div>
			<script>
				var $itemSlider1 = $('.item_slider1');
				$itemSlider1.slick({
					dots: true,
					arrows: false,
					appendDots: $('.slider_dots'),
					autoplay: true,
					autoplaySpeed: 5000,
					speed: 1000,
					pauseOnHover: false,
					pauseOnDotsHover: false,
					pauseOnFocus: false
				});
				$('.sub01_01 .slider_wrap .ctrl_wrap .btn_pause').click(function() {
					$itemSlider1.slick('slickPause');
					$(this).hide().next('.btn_play').show().focus();
				});
				$('.sub01_01 .slider_wrap .ctrl_wrap .btn_play').click(function() {
					$itemSlider1.slick('slickPlay');
					$(this).hide().prev('.btn_pause').show().focus();
				});
				$('.item_slider1').on('beforeChange', function(event, slick, currentSlide, nextSlide){
				  	$('.slider_dots button').html('');
				}).trigger('beforeChange');
			</script>
			<div class="cont_box mt50">
				<h3 class="h301">노령화의 기준 ‘중위연령’</h3>							
				<p class="ptxt">언제쯤이면 적자가 될 것이고 기금이 모두 소진될 것인지를 미리 예측하는 것이다. 이를 통해 필요하다면 연금개혁을 단행한다. 국민연금을 장기 전망하는 데는 여러 가지 변수가 고려되지만, 그중 가장 중요한 변수가 ‘저출산 고령화’다.</p>
				<div class="col_box mt55">
					<div class="col">
						<img src="../../img/vol191/sub/sub01_01_img2.jpg" alt="네이버 영화 [고령화가족]">
						<div class="txt_desc">↑출처 : 네이버 영화 [고령화가족]</div>
					</div>
					<div class="col">
						<p class="text_box1 text_green"><span>출산율 감소와 수명 연장으로<br> 8년 만인 현재, 대한민국의 중위연령은<br> 4세가량 높아졌다.</span></p>				
						<img src="../../img/vol191/sub/sub01_01_img3.jpg" alt="네이버 영화 [고령화가족]">
					</div>
				</div>	
				<p class="ptxt mt55">재밌는 것은 이 가족의 중위 나이가 한국 사회의 중위연령과 거의 똑같다는 것이다. 이 영화가 개봉한 2013년 당시 한국의 중위연령은 39.7세였다. 2021년 기준 한국의 중위연령은 44.3세다. 44.3세가 나이로 보면 딱 중간치의 한국인이라는 뜻이다. 출산율이 더 떨어지고 수명은 더 연장되면서 8년 만에 거의 4세가량 높아졌다. 한국 사회가 전체적으로 빠르게 노령화되고 있다는 뜻이다.</p>
			</div>
			<div class="video_box mt55">		
				<a href="#">			
					<img src="../../img/vol191/sub/sub01_01_img4.jpg" alt="네이버 영화 [고령화가족]">
					<span class="ico_play"></span>
				</a>
			</div>
			<div class="cont_box mt55">
				<h3 class="h301">초고령사회로 향하는 대한민국</h3>
				<p class="ptxt">국제기구에서는 인구를 나이에 따라 크게 세 그룹으로 구분한다. 0~14세까지 인구는 유소년인구라고 부른다. 이들 유소년 인구는 경제적인 측면에서는 노동력을 제공하기 어려운 대상이다. 15~64세 인구는 생산가능인구라고 부른다. 생산가능인구는 해당 경제활동에서 가장 중추적인 역할을 담당한다. 65세 이상의 인구는 고령인구라고 부른다.<br><br> 이 같은 구분을 바탕으로 UN은 고령화 사회·고령사회·초고령사회를 구분하는 기준을 제시했다. UN에 따르면, 65세 이상 인구, 즉 고령인구가 전체 인구에서 차지하는 비율이 7% 이상이면 해당 국가는 고령화사회다. 65세 이상 인구가 전체에서 차지하는 비율이 14% 이상이면 고령사회, 20% 이상이면 초고령사회다.</p>
			</div>
		</div>
	</section>
	<!-- contents -->
	
	<!-- like & share -->
	<?php include("../../inc/like_share.php"); ?>
	<!-- //like & share -->
	
	<!-- quick_menu -->
	<?php include("../../inc/quick_menu191.php"); ?>
	<!-- //quick_menu -->

	<!-- page ctrl -->
	<div class="page_ctrl">
		<div class="page_move">
			<a href="#" class="page_next">다음페이지</a>
			<a href="#" class="page_prev">이전페이지</a>
		</div>
		<?php include("../../inc/page_ctrl.php"); ?>
	</div>
	<!-- //page ctrl -->

	<!-- page ctrl mobile -->
	<div class="page_ctrl_mobile">
		<div class="page_move">
			<a href="#" class="page_prev">이전페이지</a>
			<a href="#" class="page_next">다음페이지</a>
		</div>
		<?php include("../../inc/page_ctrl_mobile.php"); ?>		
	</div>
	<!-- //page ctrl mobile -->

	<!-- footer -->
	<?php include("../../inc/footer.php"); ?>
	<!-- //footer --> 

</div>
</body>
</html>
