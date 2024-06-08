<!doctype html>
<html lang="ko">
<head>
	<title>내곁에 국민연금</title>
	<meta property="og:image" content="../../img/logosns/logosns_vol191.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="../../css/vol191/contents.css">
</head>
<body>
<?php include("../../inc/accessibility.php"); ?>
<div id="wrap" class="main"> 
  
	<!-- header & aside nav -->
	<?php include("../../inc/header191.php"); ?>
	<!-- //header & aside nav --> 

	<!-- contents -->
	<section id="contents">
		<div class="main_section1 wow fadeBigInUp">
			<div class="main_slider_wrap">
				<ul class="main_slider1">
					<li>
						<a href="#">
							<div class="thumb">
								<img src="../../img/vol191/main/main_visual01.jpg" alt="M.Z Story">
							</div>
							<div class="txt_group">
								<p class="txt">초고령 사회로 향하는<br>대한민국초고령 사회로 사회로</p>
								<p class="tit">M&Z 일상수다</p>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="thumb">
								<img src="../../img/vol191/main/main_visual02.jpg" alt="M.Z Story">
							</div>
							<div class="txt_group">
								<p class="txt">초고령 사회로 향하는<br>대한민국초고령 사회로 사회로</p>
								<p class="tit">M&Z 일상수다</p>
							</div>							
						</a>
					</li>
					<li>
						<a href="#">
							<div class="thumb">
								<img src="../../img/vol191/main/main_visual03.jpg" alt="M.Z Story">
							</div>
							<div class="txt_group">
								<p class="txt">초고령 사회로 향하는<br>대한민국초고령 사회로 사회로</p>
								<p class="tit">M&Z 일상수다</p>
							</div>						
						</a>
					</li>
				</ul>
				<div class="ctrl_wrap">
					<span class="dots"></span>
					<button type="button" class="btn_pause">정지</button>
					<button type="button" class="btn_play">재생</button>
					<div class="sns_group">
						<a href="#" target="_blank" title="새창" class="naverpost">네이버포스트</a>
						<a href="#" target="_blank" title="새창" class="instagram">인스타그램</a>
						<a href="#" target="_blank" title="새창" class="facebook">페이스북</a>
						<a href="#" target="_blank" title="새창" class="youtube">유튜브</a>
						<a href="#" target="_blank" title="새창" class="navertv">네이버TV</a>
						<a href="#" target="_blank" title="새창" class="blog">블로그</a>
					</div>
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
				 	slidesToShow: 2,
				 	pauseOnHover: false,
				 	pauseOnDotsHover: false,
				 	pauseOnFocus: false
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

			<ul class="main_slider2">
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu01.jpg" alt="M.Z Story"></div>
						<p>M.Z Story</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu02.jpg" alt="M&Z 일상수다"></div>
						<p>M&Z 일상수다</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu03.jpg" alt="NPS 쇼츠"><i class="vod">영상</i></div>
						<p>NPS 쇼츠</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu04.jpg" alt="Z대리가 간다!"></div>
						<p>Z대리가 간다!</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu05.jpg" alt="요즘 MZ"></div>
						<p>요즘 MZ</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu06.jpg" alt="팝콘 경제"></div>
						<p>팝콘 경제</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu07.jpg" alt="Easy선다 퀴즈"></div>
						<p>Easy선다 퀴즈</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu08.jpg" alt="M&M 여행"></div>
						<p>일상수다</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu09.jpg" alt="힐링레시피"></div>
						<p>힐링레시피</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu10.jpg" alt="데일리홈트"></div>
						<p>데일리홈트</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu11.jpg" alt="NPS 뉴스"></div>
						<p>NPS 뉴스</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu12.jpg" alt="그곳N 그들이"></div>
						<p>그곳N 그들이</p>
					</a>
				</li><li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu13.jpg" alt="NPS 키워드"></div>
						<p>NPS 키워드</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu14.jpg" alt="독자의견"></div>
						<p>독자의견</p>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb"><img src="../../img/vol191/main/all_menu15.jpg" alt="이벤트"></div>
						<p>이벤트</p>
					</a>
				</li>
			</ul>
			<script>
				var $mainSlider2 = $('.main_slider2');
				$mainSlider2.slick({				 	
				 	arrows: false,
				 	autoplay: true,
				 	autoplaySpeed: 5000,
				 	speed: 500,
				 	slidesToShow: 6,
				 	slidesToScroll: 1,
				 	pauseOnHover: false,
				 	pauseOnDotsHover: false,
				 	pauseOnFocus: false,
				 	responsive: [
						{
							breakpoint: 767,
							settings: {
								slidesToShow: 5,
							}
						},
						{
							breakpoint: 480,
							settings: {
								slidesToShow: 4,
							}
						}
					]
				});
				$('.main_section2 .ctrl_wrap .btn_pause').click(function() {
					$mainSlider2.slick('slickPause');
					$(this).hide().next('.btn_play').show().focus();
				});
				$('.main_section2 .ctrl_wrap .btn_play').click(function() {
					$mainSlider2.slick('slickPlay');
					$(this).hide().prev('.btn_pause').show().focus();
				});				
			</script>					
		</div>

		<div class="main_section2 wow fadeBigInUp">
			<div class="main_slider_wrap">
				<div class="slider_tab1"></div>
				<ul class="main_slider3">
					<li data-title="M.Z Story">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu01_01.jpg" alt="M.Z Story">
								<span class="cover like"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">M.Z Story</p>							
						</a>
					</li>
					<li data-title="M&Z 일상수다">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu01_02.jpg" alt="M&Z 일상수다">
								<span class="cover fun"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">M&Z 일상수다</p>
						</a>
					</li>
					<li data-title="NPS 쇼츠">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu01_03.jpg" alt="NPS 쇼츠">
								<span class="cover good"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">NPS 쇼츠</p>
						</a>
					</li>
					<li data-title="Z대리가 간다!">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu01_04.jpg" alt="Z대리가 간다!">
								<span class="cover good"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">Z대리가 간다!</p>
						</a>
					</li>
				</ul>
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
				var $mainSlider3 = $('.main_slider3');
				$mainSlider3.slick({
				 	dots: true,
				 	appendDots: $('.slider_tab1'),
				 	asNavFor:'.as_slider1',
				 	arrows: false,
				 	autoplay: true,
				 	autoplaySpeed: 5000,
				 	speed: 500,
				 	slidesToShow: 3,
				 	pauseOnHover: false,
				 	pauseOnDotsHover: false,
				 	pauseOnFocus: false,
				 	customPaging: function(slider, index) {
						var title = $(slider.$slides[index]).attr('data-title');							
						return "<button>" + title + "</button>";
					}
				});
				$('.as_slider1').slick({
					asNavFor:'.main_slider3',
					dots: true,
					appendDots: $('.slider_dots'),
					arrows: false
				});
				$('.main_section2 .ctrl_wrap .btn_pause').click(function() {
					$mainSlider3.slick('slickPause');
					$(this).hide().next('.btn_play').show().focus();
				});
				$('.main_section2 .ctrl_wrap .btn_play').click(function() {
					$mainSlider3.slick('slickPlay');
					$(this).hide().prev('.btn_pause').show().focus();
				});				
			</script>
		</div>

		<div class="main_section3 wow fadeBigInUp">
			<div class="main_slider_wrap">
				<div class="slider_tab2"></div>
				<ul class="main_slider4">
					<li data-title="요즘 MZ">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu02_01.jpg" alt="요즘 MZ">
								<span class="cover like"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">요즘 MZ</p>							
						</a>
					</li>
					<li data-title="팝콘 경제">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu02_02.jpg" alt="팝콘 경제">
								<span class="cover like"><i></i></span>
								<i class="vod">영상</i>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">팝콘 경제</p>
						</a>
					</li>
					<li data-title="Easy선다 퀴즈">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu02_03.jpg" alt="Easy선다 퀴즈">
								<span class="cover good"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">Easy선다 퀴즈</p>
						</a>
					</li>
					<li data-title="M&M 여행">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu02_04.jpg" alt="M&M 여행">
								<span class="cover like"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">M&M 여행</p>
						</a>
					</li>
				</ul>
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
				var $mainSlider4 = $('.main_slider4');
				$mainSlider4.slick({
				 	dots: true,
				 	appendDots: $('.slider_tab2'),
				 	asNavFor:'.as_slider2',
				 	arrows: false,
				 	autoplay: true,
				 	autoplaySpeed: 5000,
				 	speed: 500,
				 	slidesToShow: 3,
				 	pauseOnHover: false,
				 	pauseOnDotsHover: false,
				 	pauseOnFocus: false,
				 	customPaging: function(slider, index) {
						var title = $(slider.$slides[index]).attr('data-title');							
						return "<button>" + title + "</button>";
					}
				});
				$('.as_slider2').slick({
					asNavFor:'.main_slider4',
					dots: true,
					appendDots: $('.slider_dots2'),
					arrows: false
				});
				$('.main_section3 .ctrl_wrap .btn_pause').click(function() {
					$mainSlider4.slick('slickPause');
					$(this).hide().next('.btn_play').show().focus();
				});
				$('.main_section3 .ctrl_wrap .btn_play').click(function() {
					$mainSlider4.slick('slickPlay');
					$(this).hide().prev('.btn_pause').show().focus();
				});				
			</script>
		</div>

		<div class="main_section4 wow fadeBigInUp">
			<div class="main_slider_wrap">
				<div class="slider_tab3"></div>
				<ul class="main_slider5">
					<li data-title="힐링레시피">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu03_01.jpg" alt="힐링레시피">
								<span class="cover like"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">힐링레시피</p>							
						</a>
					</li>
					<li data-title="데일리홈트">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu03_02.jpg" alt="데일리홈트">
								<span class="cover fun"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">데일리홈트</p>
						</a>
					</li>
					<li data-title="NPS 뉴스">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu03_03.jpg" alt="NPS 뉴스">
								<span class="cover good"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">NPS 뉴스</p>
						</a>
					</li>
					<li data-title="그곳N 그들이">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu03_04.jpg" alt="그곳N 그들이">
								<span class="cover like"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">그곳N 그들이</p>
						</a>
					</li>
					<li data-title="NPS 키워드">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu03_05.jpg" alt="NPS 키워드">
								<span class="cover fun"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">NPS 키워드</p>
						</a>
					</li>
					<li data-title="독자의견">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu03_06.jpg" alt="독자의견">
								<span class="cover good"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">독자의견</p>
						</a>
					</li>
					<li data-title="이벤트">
						<a href="#">
							<div class="thumb">
								<span class="like_num"><em>♥</em> 251</span>
								<img src="../../img/vol191/main/main_menu03_07.jpg" alt="이벤트">
								<span class="cover like"><i></i></span>
							</div>
							<p class="txt">MZ세대들의 올시즌 관심사로 떠오르는 이슈를 찾아내서...</p>
							<p class="tit">이벤트</p>
						</a>
					</li>
				</ul>
				<div class="ctrl_wrap">
					<span class="slider_dots3"></span>
					<button type="button" class="btn_pause">정지</button>
					<button type="button" class="btn_play">재생</button>					
				</div>
				<ul class="as_slider3">
					<li></li><li></li><li></li><li></li><li></li><li></li><li></li>
				</ul>
			</div>
			<script>
				var $mainSlider5 = $('.main_slider5');
				$mainSlider5.slick({
				 	dots: true,
				 	appendDots: $('.slider_tab3'),
				 	asNavFor:'.as_slider3',
				 	arrows: false,
				 	autoplay: true,
				 	autoplaySpeed: 5000,
				 	speed: 500,
				 	slidesToShow: 3,
				 	pauseOnHover: false,
				 	pauseOnDotsHover: false,
				 	pauseOnFocus: false,
				 	customPaging: function(slider, index) {
						var title = $(slider.$slides[index]).attr('data-title');							
						return "<button>" + title + "</button>";
					}
				});
				$('.as_slider3').slick({
					asNavFor:'.main_slider5',
					dots: true,
					appendDots: $('.slider_dots3'),
					arrows: false
				});
				$('.main_section4 .ctrl_wrap .btn_pause').click(function() {
					$mainSlider5.slick('slickPause');
					$(this).hide().next('.btn_play').show().focus();
				});
				$('.main_section4 .ctrl_wrap .btn_play').click(function() {
					$mainSlider5.slick('slickPlay');
					$(this).hide().prev('.btn_pause').show().focus();
				});				
			</script>
		</div>

		<div class="main_section5 wow fadeBigInUp">
			<h2><span>국민연금공단NPS</span><i class="emoticon"></i></h2>	
			<ul class="list">
				<li>
					<a href="#">
						<div class="thumb">
							<i class="vod">영상</i>
							<img src="../../img/vol191/main/youtube_img1.jpg" alt="국민연금 직장인 브이로그(vlog)">
						</div>
						<dl>
							<dt>#국민연금 #국민연금공단 #브이로그</dt>
							<dd>국민연금 직장인 브이로그(vlog) 국민연금 직장인 브이로그(vlog) 국민연금 직장인 브이로그(vlog)</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb">
							<i class="vod">영상</i>
							<img src="../../img/vol191/main/youtube_img2.jpg" alt="국민연금 직장인 브이로그(vlog)">
						</div>
						<dl>
							<dt>#국민연금 #국민연금공단 #브이로그</dt>
							<dd>국민연금 직장인 브이로그(vlog) 국민연금 직장인 브이로그(vlog)</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb">
							<i class="vod">영상</i>
							<img src="../../img/vol191/main/youtube_img3.jpg" alt="국민연금 직장인 브이로그(vlog)">
						</div>
						<dl>
							<dt>#국민연금 #국민연금공단 #브이로그</dt>
							<dd>국민연금 직장인 브이로그(vlog) 국민연금 직장인 브이로그(vlog)</dd>
						</dl>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="thumb">
							<i class="vod">영상</i>
							<img src="../../img/vol191/main/youtube_img4.jpg" alt="국민연금 직장인 브이로그(vlog)">
						</div>
						<dl>
							<dt>#국민연금 #국민연금공단 #브이로그</dt>
							<dd>국민연금 직장인 브이로그(vlog) 국민연금 직장인 브이로그(vlog)</dd>
						</dl>
					</a>
				</li>
			</ul>
			<a href="#" class="more">MORE</a>
		</div>
	</section>
	<!-- contents -->

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

	<script>
		$(document).ready(function () {
			fn_openEvent();
		});
		function fn_closeEvent(flag) {
			if (flag == "1") {
			setCookie("event", "done", 1);
			}
			$('#event_layer').css('display', 'none');
			$('.event_overlay').css('display', 'none');
		}
		function fn_openEvent() {
		if (getCookie("event") == "done")
			$('#event_layer').css('display', 'none');
		else
			$('#event_layer').css('display', '');
		}
		function setCookie(name, value, expiredays) {
			var todayDate = new Date();
			todayDate.setDate(todayDate.getDate() + expiredays);
			document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
		}
		function getCookie(name) {
			var nameOfCookie = name + "=";
			var x = 0;
			while (x <= document.cookie.length) {
			var y = (x + nameOfCookie.length);
			if (document.cookie.substring(x, y) == nameOfCookie) {
				if ((endOfCookie = document.cookie.indexOf(";", y)) == -1)
				endOfCookie = document.cookie.length;
				return unescape(document.cookie.substring(y, endOfCookie));
			}
			x = document.cookie.indexOf(" ", x) + 1;
			if (x == 0)
			break;
		}
			return "";
		}
	</script>

	<!-- event -->
	<div class="main_event" id="event_layer">
		<div class="main_event_wrap">
			<div class="inner">
				<div class="event_header">
					<a href="javascript:fn_closeEvent('1');" class="event_stop">다시보지않기</a>
					<a href="javascript:fn_closeEvent();" class="event_close">닫기</a>
				</div>
				<div class="thumb">
					<img src="../../img/vol191/main/event_pc.jpg" alt="캠핑하로 떠나자~" class="pc">
					<img src="../../img/vol191/main/event_m.jpg" alt="캠핑하로 떠나자~" class="mobile">
				</div>
			</div>
		</div>
		<div class="event_overlay"></div>
	</div>	
	<!-- //event -->
  
</div>
</body>
</html>
