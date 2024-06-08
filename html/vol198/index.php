<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>
	<meta property="og:image" content="../../img/logosns/logosns_vol198.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="../../css/vol198/contents.css">

	<!-- kruddo add -->
	<?
		$vol_idx = "198";		// kruddo modify - 호차 번호. 191호가 아닌경우 변경, inc/like_share.php 에서도 변경

		$hostname = "localhost";
		$username = "nps2022";
		$password = "nps2022!@";
		$database = "nps2022";

		$connect = mysqli_connect($hostname, $username, $password, $database);
		mysqli_select_db($connect, $database) or die('DB 선택 실패');


	?>

	<script type="text/javascript">
		/*
		var vol_idx = "191";		// kruddo modify - 호차 번호. 191호가 아닌경우 변경, inc/like_share.php 에서도 변경

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
<?php include("../../inc/accessibility.php"); ?>
<div id="wrap" class="main"> 
  
	<!-- header & aside nav -->
	<?php include("../../inc/header198.php"); 
	
	//플로팅 배너 배제용 문구 현재 0보다 작거나 같으면 표시됨

	$tot_rows = 3;
	?>
	<!-- //header & aside nav --> 

<?
		$retArr = array();
		$sql_cnt = "select vol_idx, board_seq, board_sub_seq, ifnull(like_count, 0) like_count from km_like where vol_idx='".$vol_idx."'";
		$result_cnt =  mysqli_query($connect, $sql_cnt);

		$like_cnt_1_1 = $like_cnt_1_2 = $like_cnt_1_3 = $like_cnt_1_4 = $like_cnt_1_5 = $like_cnt_1_6 = $like_cnt_1_7 = $like_cnt_1_8 = $like_cnt_1_9 = $like_cnt_1_10 = 0;
		$like_cnt_2_1 = $like_cnt_2_2 = $like_cnt_2_3 = $like_cnt_2_4 = $like_cnt_2_5 = $like_cnt_2_6 = $like_cnt_2_7 = $like_cnt_2_8 = $like_cnt_2_9 = $like_cnt_2_10 = 0;
		$like_cnt_3_1 = $like_cnt_3_2 = $like_cnt_3_3 = $like_cnt_3_4 = $like_cnt_3_5 = $like_cnt_3_6 = $like_cnt_3_7 = $like_cnt_3_8 = $like_cnt_3_9 = $like_cnt_3_10 = 0;
		$like_cnt_4_1 = $like_cnt_4_2 = $like_cnt_4_3 = $like_cnt_4_4 = $like_cnt_4_5 = $like_cnt_4_6 = $like_cnt_4_7 = $like_cnt_4_8 = $like_cnt_4_9 = $like_cnt_4_10 = 0;
		$like_cnt_5_1 = $like_cnt_5_2 = $like_cnt_5_3 = $like_cnt_5_4 = $like_cnt_5_5 = $like_cnt_5_6 = $like_cnt_5_7 = $like_cnt_5_8 = $like_cnt_5_9 = $like_cnt_5_10 = 0;

		while($row_cnt = mysqli_fetch_array($result_cnt)){
			if($row_cnt["board_seq"] == "1" && $row_cnt["board_sub_seq"] == "1")	$like_cnt_1_1 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "1" && $row_cnt["board_sub_seq"] == "2")	$like_cnt_1_2 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "1" && $row_cnt["board_sub_seq"] == "3")	$like_cnt_1_3 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "1" && $row_cnt["board_sub_seq"] == "4")	$like_cnt_1_4 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "1" && $row_cnt["board_sub_seq"] == "5")	$like_cnt_1_5 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "1" && $row_cnt["board_sub_seq"] == "6")	$like_cnt_1_6 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "1" && $row_cnt["board_sub_seq"] == "7")	$like_cnt_1_7 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "1" && $row_cnt["board_sub_seq"] == "8")	$like_cnt_1_8 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "1" && $row_cnt["board_sub_seq"] == "9")	$like_cnt_1_9 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "1" && $row_cnt["board_sub_seq"] == "10")	$like_cnt_1_10 = $row_cnt["like_count"];

			else if($row_cnt["board_seq"] == "2" && $row_cnt["board_sub_seq"] == "1")	$like_cnt_2_1 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "2" && $row_cnt["board_sub_seq"] == "2")	$like_cnt_2_2 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "2" && $row_cnt["board_sub_seq"] == "3")	$like_cnt_2_3 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "2" && $row_cnt["board_sub_seq"] == "4")	$like_cnt_2_4 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "2" && $row_cnt["board_sub_seq"] == "5")	$like_cnt_2_5 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "2" && $row_cnt["board_sub_seq"] == "6")	$like_cnt_2_6 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "2" && $row_cnt["board_sub_seq"] == "7")	$like_cnt_2_7 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "2" && $row_cnt["board_sub_seq"] == "8")	$like_cnt_2_8 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "2" && $row_cnt["board_sub_seq"] == "9")	$like_cnt_2_9 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "2" && $row_cnt["board_sub_seq"] == "10")	$like_cnt_2_10 = $row_cnt["like_count"];

			else if($row_cnt["board_seq"] == "3" && $row_cnt["board_sub_seq"] == "1")	$like_cnt_3_1 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "3" && $row_cnt["board_sub_seq"] == "2")	$like_cnt_3_2 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "3" && $row_cnt["board_sub_seq"] == "3")	$like_cnt_3_3 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "3" && $row_cnt["board_sub_seq"] == "4")	$like_cnt_3_4 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "3" && $row_cnt["board_sub_seq"] == "5")	$like_cnt_3_5 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "3" && $row_cnt["board_sub_seq"] == "6")	$like_cnt_3_6 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "3" && $row_cnt["board_sub_seq"] == "7")	$like_cnt_3_7 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "3" && $row_cnt["board_sub_seq"] == "8")	$like_cnt_3_8 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "3" && $row_cnt["board_sub_seq"] == "9")	$like_cnt_3_9 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "3" && $row_cnt["board_sub_seq"] == "10")	$like_cnt_3_10 = $row_cnt["like_count"];

			else if($row_cnt["board_seq"] == "4" && $row_cnt["board_sub_seq"] == "1")	$like_cnt_4_1 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "4" && $row_cnt["board_sub_seq"] == "2")	$like_cnt_4_2 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "4" && $row_cnt["board_sub_seq"] == "3")	$like_cnt_4_3 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "4" && $row_cnt["board_sub_seq"] == "4")	$like_cnt_4_4 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "4" && $row_cnt["board_sub_seq"] == "5")	$like_cnt_4_5 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "4" && $row_cnt["board_sub_seq"] == "6")	$like_cnt_4_6 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "4" && $row_cnt["board_sub_seq"] == "7")	$like_cnt_4_7 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "4" && $row_cnt["board_sub_seq"] == "8")	$like_cnt_4_8 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "4" && $row_cnt["board_sub_seq"] == "9")	$like_cnt_4_9 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "4" && $row_cnt["board_sub_seq"] == "10")	$like_cnt_4_10 = $row_cnt["like_count"];

			else if($row_cnt["board_seq"] == "5" && $row_cnt["board_sub_seq"] == "1")	$like_cnt_5_1 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "5" && $row_cnt["board_sub_seq"] == "2")	$like_cnt_5_2 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "5" && $row_cnt["board_sub_seq"] == "3")	$like_cnt_5_3 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "5" && $row_cnt["board_sub_seq"] == "4")	$like_cnt_5_4 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "5" && $row_cnt["board_sub_seq"] == "5")	$like_cnt_5_5 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "5" && $row_cnt["board_sub_seq"] == "6")	$like_cnt_5_6 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "5" && $row_cnt["board_sub_seq"] == "7")	$like_cnt_5_7 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "5" && $row_cnt["board_sub_seq"] == "8")	$like_cnt_5_8 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "5" && $row_cnt["board_sub_seq"] == "9")	$like_cnt_5_9 = $row_cnt["like_count"];
			else if($row_cnt["board_seq"] == "5" && $row_cnt["board_sub_seq"] == "10")	$like_cnt_5_10 = $row_cnt["like_count"];
		}
		
?>
	<!-- contents -->
	<section id="contents">
		<div class="main_section1 wow fadeBigInUp">
			<div class="main_slider_wrap">
				<ul class="main_slider1">
				<li>
						<a href="sub01_03.php">
							<div class="thumb">
								<img src="../../img/vol198/main/main_visual01.jpg" alt="NPS 쇼츠">
							</div>
							<div class="txt_group">
								<p class="txt"><!--[국민연금공단 X 1분 뮤지컬] Ep2. 나의 국민연금, 알면 알수록--></p>
								<p class="tit">MZ 일상수다</p>
							</div>							
						</a>
					</li>
					<li>
						<a href="sub02_01.php">
							<div class="thumb">
								<img src="../../img/vol198/main/main_visual02.jpg" alt="NPS 뉴스">
							</div>
							<div class="txt_group">
								<p class="txt"><!--국민연금의 핫뉴스만 모았습니다.--></p>
								<p class="tit">NPS 뉴스</p>
							</div>						
						</a>
					</li>
					<li>
						<a href="sub02_02.php">
							<div class="thumb">
								<img src="../../img/vol198/main/main_visual03.jpg" alt="NPS쇼츠">
							</div>
							<div class="txt_group">
								<p class="txt"><!--초고령 사회로 향하는<br>대한민국초고령 사회로 사회로--></p>
								<p class="tit">NPS쇼츠</p>
							</div>
						</a>
					</li>
					<li>
						<a href="sub02_03.php">
							<div class="thumb">
								<img src="../../img/vol198/main/main_visual04.jpg" alt="NPS 키워드">
							</div>
							<div class="txt_group">
								<p class="txt"><!--가을 ‘솔로’는 광(光)인가 꽝인가?--></p>
								<p class="tit">NPS 키워드</p>
							</div>						
						</a>
					</li>
					<li>
						<a href="sub02_04.php">
							<div class="thumb">
								<img src="../../img/vol198/main/main_visual05.jpg" alt="NPS칼럼">
							</div>
							<div class="txt_group">
								<p class="txt"><!--M과 Z가 알려주는 알쏭달쏭 NPS키워드--></p>
								<p class="tit">NPS칼럼</p>
							</div>						
						</a>
					</li>
					<li>
						<a href="sub04_02.php">
							<div class="thumb">
								<img src="../../img/vol198/main/main_visual06.jpg" alt="M&M 감성여행">
							</div>
							<div class="txt_group">
								<p class="txt"><!--서로의 꿈을 응원해~ 엄마와 딸이 함께 영주로 떠나는 꿈의 여정--></p>
								<p class="tit">오도이촌</p>
							</div>						
						</a>
					</li>
					
				</ul>
				<div class="ctrl_wrap">
					<span class="dots"></span>
					<button type="button" class="btn_pause">정지</button>
					<button type="button" class="btn_play">재생</button>
					<div class="sns_group">
						<a href="https://post.naver.com/pro_nps" target="_blank" title="새창" class="naverpost">네이버포스트</a>
						<a href="https://www.instagram.com/accounts/login/?next=/npstagram/" target="_blank" title="새창" class="instagram">인스타그램</a>
						<a href="https://www.facebook.com/proNPS" target="_blank" title="새창" class="facebook">페이스북</a>
						<a href="https://www.youtube.com/user/NaionalPensionServic" target="_blank" title="새창" class="youtube">유튜브</a>
						<a href="https://tv.naver.com/npstv" target="_blank" title="새창" class="navertv">네이버TV</a>
						<a href="https://blog.naver.com/pro_nps" target="_blank" title="새창" class="blog">블로그</a>
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

			<ul class="main_slider2 owl-carousel">
			<li>
					<a href="/html/vol198/sub01_01.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu01.jpg" alt="북퀘스트"></div>
						<p>북퀘스트</p>
					</a>
				</li>	
			<li>
					<a href="/html/vol198/sub01_02.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu02.jpg" alt="요즘 이슈"></div>
						<p>요즘 이슈</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub01_03.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu03.jpg" alt="M&Z 일상수다"></div>
						<p>M&Z 일상수다</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub01_04.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu04.jpg" alt="힐링 레시피"></div>
						<p>힐링 레시피</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub01_05.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu05.jpg" alt="행복한 나눔"></div>
						<p>행복한 나눔</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub02_01.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu06.jpg" alt="NPS 뉴스"></div>
						<p>NPS 뉴스</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub02_02.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu07.jpg" alt="NPS 쇼츠"><i class="vod">영상</i></div>
						<p>NPS 쇼츠</p>
					</a>
				</li>
								<li>
					<a href="/html/vol198/sub02_03.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu08.jpg" alt="NPS 키워드"></div>
						<p>NPS 키워드</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub02_04.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu09.jpg" alt="NPS칼럼"></div>
						<p>NPS칼럼</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub03_01.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu10.jpg" alt="팝콘 경제"><i class="vod">영상</i></div>
						<p>팝콘 경제</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub03_02.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu11.jpg" alt="Easy선다 퀴즈"></div>
						<p>Easy선다 퀴즈</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub03_03.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu12.jpg" alt="키워드 트렌드"></div>
						<p>키워드 트렌드</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub04_01.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu13.jpg" alt="대한민국 테마여행"></div>
						<p>테마여행</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub04_02.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu14.jpg" alt="오도이촌"></div>
						<p>오도이촌</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub04_03.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu15.jpg" alt="대신 일하고 올게"></div>
						<p>대신 일하고 올게</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub05_01.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu16.jpg" alt="독자 목소리"></div>
						<p>독자 목소리</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub05_02.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu17.jpg" alt="이벤트1"></div>
						<p>이벤트1</p>
					</a>
				</li>
				<li>
					<a href="/html/vol198/sub05_03.php">
						<div class="thumb"><img src="../../img/vol198/main/all_menu18.jpg" alt="이벤트2"></div>
						<p>이벤트2</p>
					</a>
				</li>
			</ul>
			<script>
				var owl = $('.owl-carousel');
			    owl.owlCarousel({
			        loop:true,
			        nav:false,
			        dots: false,
			        autoplay:true,
				    autoplayTimeout:5300, 
				    autoplaySpeed:500,
				    autoplayHoverPause:false,
			        responsive:{  
			        	0:{
			                items:3.5,
			                margin:10
			            },
			            480:{
			                items:4.8,
			                margin:10
			            },  
			            640:{
			                items:5.8,
			                margin:10
			            },         
			            767:{     
			            	items:5.8,          
			                margin:18			                
			            }
			        }
			    });
			</script>
		</div>

		<div class="main_section2 wow fadeBigInUp">
			<h2 class="section_tit">행복한 일상</h2>
			<div class="main_slider_wrap">
				<div class="slider_tab1"></div>
				<ul class="main_slider3">
				   <li data-title="북퀘스트" class="item1 wow fadeUp">
						<a href="sub01_01.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_1_1;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu01_01.jpg" alt="북퀘스트">
								<span class="cover like"><i></i></span>
							</div>
							<p class="txt">“모습은 달라도 간절한 마음은 같아요.” 책으로 만나는 ‘나만의 행복 찾기’</p>
							<p class="tit">북퀘스트</p>							
						</a>
					</li>	
				   <li data-title="요즘 이슈" class="item1 wow fadeUp">
						<a href="sub01_02.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_1_2;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu01_02.jpg" alt="요즘 이슈">
								<span class="cover like"><i></i></span>
							</div>
							<p class="txt">“행복한 경험을 팝니다!” MZ세대 놀이터, 팝업스토어</p>
							<p class="tit">요즘 이슈</p>							
						</a>
					</li>
					<li data-title="M&Z 일상수다" class="item2 wow fadeUp">
						<a href="sub01_03.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_1_3;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu01_03.jpg" alt="M&Z 일상수다">
								<span class="cover like"><i></i></span>
							</div>
							<p class="txt">N잡러 시대를 사는 MZ의 자세</p>
							<p class="tit">M&Z 일상수다</p>
						</a>
					</li>
					<li data-title="힐링 레시피" class="item3 wow fadeUp">
						<a href="sub01_04.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_1_4;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu01_04.jpg" alt="힐링 레시피">
								<span class="cover like"><i></i></span>
								<!--<i class="vod">영상</i>-->
							</div>
							<p class="txt">낡은 트럭에서 찾은 이 맛! 삶의 ‘터닝 포인트’를 찾아주는 영화 [아메리칸 셰프]</p>
							<p class="tit">힐링 레시피</p>
						</a>
					</li>
					<li data-title="행복한 나눔" class="item4 wow fadeUp">
						<a href="sub01_05.php">		<!-- // kruddo modify -->
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_1_5;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu01_05.jpg" alt="행복한 나눔">
								<span class="cover like"><i></i></span>
								<!--<i class="vod">영상</i>-->
							</div>
							<p class="txt">혁신 기술과 함께 성장하는 비대면·디지털 자원봉사</p>
							<p class="tit">행복한 나눔</p>
						</a>
					</li>
				</ul>
				<div class="ctrl_wrap">
					<span class="slider_dots"></span>
					<button type="button" class="btn_pause">정지</button>
					<button type="button" class="btn_play">재생</button>					
				</div>
				<ul class="as_slider1">
					<li></li><li></li><li></li><li></li><li></li>
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
					touchThreshold: 100,
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
			<h2 class="section_tit">NPS와 함께</h2>
			<div class="main_slider_wrap">
				<div class="slider_tab2"></div>
				<ul class="main_slider4">
					<li data-title="NPS뉴스" class="item1 wow fadeUp">
						<a href="sub02_01.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_2_1;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu02_01.jpg" alt="NPS뉴스">
								<span class="cover fun"><i></i></span>
								<!--<i class="vod">영상</i>-->
							</div>
							<p class="txt">국민연금의 핫뉴스만 모았습니다.</p>
							
							<p class="tit">NPS뉴스</p>							
						</a>
					</li>
					<li data-title="NPS 쇼츠" class="item2 wow fadeUp">
						<a href="sub02_02.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_2_2;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu02_02.jpg" alt="NPS 쇼츠">
								<span class="cover fun"><i></i></span>
								<i class="vod">영상</i>
							</div>
							<p class="txt">[수어 포함] 프리랜서의 세금 혜택💸 국민연금</p>
							<p class="tit">NPS 쇼츠</p>
						</a>
					</li>
					<li data-title="NPS키워드" class="item4 wow fadeUp">
						<a href="sub02_03.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_2_3;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu02_03.jpg" alt="NPS키워드">
								<span class="cover fun"><i></i></span>
							</div>
							<p class="txt">X와 Z가 알려주는 알쏭달쏭 NPS키워드</p>
							<p class="tit">NPS키워드</p>
						</a>
					</li>
					<li data-title="NPS칼럼" class="item5 wow fadeUp">
						<a href="sub02_04.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_2_4;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu02_04.jpg" alt="NPS칼럼">
								<span class="cover fun"><i></i></span>
							</div>
							<p class="txt">국민연금 납입을 돕는 사회보험 지원제도</p>
							<p class="tit">NPS칼럼</p>
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
					touchThreshold: 100,
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
			<h2 class="section_tit">더 나은 미래</h2>
			<div class="main_slider_wrap">
				<div class="slider_tab3"></div>
				<ul class="main_slider5 fixed_size">
				<li data-title="팝콘 경제" class="item1 wow fadeUp">
						<a href="sub03_01.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_3_1;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu03_01.jpg" alt="팝콘 경제">
								<span class="cover good"><i></i></span>
								<i class="vod">영상</i>
							</div>
							<p class="txt">누구나 한번은 박수받을 자격이 있다 영화 '원더'</p>
							<p class="tit">팝콘 경제</p>
						</a>
					</li>
					<li data-title="Easy선다 퀴즈" class="item2 wow fadeUp">
						<a href="sub03_02.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_3_2;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu03_02.jpg" alt="Easy선다 퀴즈">
								<span class="cover good"><i></i></span>
							</div>
							<p class="txt">이지(EASY)선다 경제 상식 퀴즈</p>
							<p class="tit">Easy선다 퀴즈</p>
						</a>
					</li>
					<li data-title="키워드 트렌드" class="item3 wow fadeUp">
						<a href="sub03_03.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_3_3;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu03_03.jpg" alt="키워드 트렌드">
								<span class="cover good"><i></i></span>
							</div>
							<p class="txt">‘알뜰한 소비층, 체리슈머들의 신소비가 뜬다</p>
							<p class="tit">키워드 트렌드</p>
						</a>
					</li>
					
				</ul>
				<div class="ctrl_wrap">
					<span class="slider_dots3"></span>
					<button type="button" class="btn_pause">정지</button>
					<button type="button" class="btn_play">재생</button>					
				</div>
				<ul class="as_slider3">
					<li></li><li></li><li></li>
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
				 	// slidesToShow: 3,
					variableWidth: true,//추가
				 	pauseOnHover: false,
				 	pauseOnDotsHover: false,
				 	pauseOnFocus: false,
					touchThreshold: 100,
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

		<div class="main_section6 wow fadeBigInUp">
			<h2 class="section_tit">즐거운 인생</h2>
			<div class="main_slider_wrap">
				<div class="slider_tab4"></div>
				<ul class="main_slider6 fixed_size">
					<li data-title="대한민국 테마여행" class="item1 wow fadeUp">
						<a href="sub04_01.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_4_1;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu04_01.jpg" alt="대한민국 테마여행">
								<span class="cover ok"><i></i></span>
							</div>
							<p class="txt">향수를 자극하는 레트로 감성, 서천</p>
							<p class="tit">대한민국 테마여행</p>
						</a>
					</li>
					<li data-title="오도이촌" class="item2 wow fadeUp">
						<a href="sub04_02.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_4_2;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu04_02.jpg" alt="오도이촌">
								<span class="cover ok"><i></i></span>
							</div>
							<p class="txt">혼자가 어렵다면 성공적인 오도이촌 생활을 도와드립니다</p>
							<p class="tit">오도이촌</p>
						</a>
					</li>
					<li data-title="대신 일하고 올게" class="item2 wow fadeUp">
						<a href="sub04_03.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_4_2;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu04_03.jpg" alt="대신 일하고 올게">
								<span class="cover ok"><i></i></span>
							</div>
							<p class="txt">사회와 환경을 두루두루 이롭게하는 소셜벤처 ‘그레이프 랩’</p>
							<p class="tit">대신 일하고 올게</p>
						</a>
					</li>
				</ul>
				<div class="ctrl_wrap">
					<span class="slider_dots4"></span>
					<button type="button" class="btn_pause">정지</button>
					<button type="button" class="btn_play">재생</button>
				</div>
				<ul class="as_slider4">
					<li></li><li></li><li></li>
				</ul>
			</div>
			<script>
				var $mainSlider6 = $('.main_slider6');
				$mainSlider6.slick({
				 	dots: true,
				 	appendDots: $('.slider_tab4'),
				 	asNavFor:'.as_slider4',
				 	arrows: false,
				 	autoplay: true,
				 	autoplaySpeed: 5000,
				 	speed: 500,
				 	// slidesToShow: 3,
					variableWidth: true,//추가
				 	pauseOnHover: false,
				 	pauseOnDotsHover: false,
				 	pauseOnFocus: false,
					touchThreshold: 100,
					//infinite:false,
					//draggable:false,
				 	customPaging: function(slider, index) {
						var title = $(slider.$slides[index]).attr('data-title');							
						return "<button>" + title + "</button>";
					}
				});
				$('.as_slider4').slick({
					asNavFor:'.main_slider6',
					dots: true,
					appendDots: $('.slider_dots4'),
					arrows: false
				});
				$('.main_section6 .ctrl_wrap .btn_pause').click(function() {
					$mainSlider6.slick('slickPause');
					$(this).hide().next('.btn_play').show().focus();
				});
				$('.main_section6 .ctrl_wrap .btn_play').click(function() {
					$mainSlider6.slick('slickPlay');
					$(this).hide().prev('.btn_pause').show().focus();
				});				
			</script>
		</div>

		<div class="main_section7 wow fadeBigInUp">
			<h2 class="section_tit">독자 이벤트</h2>
			<div class="main_slider_wrap">
				<div class="slider_tab5"></div>
				<ul class="main_slider7 fixed_size">
					<li data-title="독자 목소리" class="item1 wow fadeUp">
						<a href="sub05_01.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_5_1;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu05_01.jpg" alt="독자 목소리">
								<span class="cover ev"><i></i></span>
							</div>
							<p class="txt">독자 여러분의 의견을 들려주세요.</p>
							<p class="tit">독자 목소리</p>
						</a>
					</li>
					<li data-title="이벤트1" class="item2 wow fadeUp">
						<a href="sub05_02.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_5_2;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu05_02.jpg" alt="이벤트1">
								<span class="cover ev"><i></i></span>
							</div>
							<p class="txt">MZ도 잡고 숨은 글자도 찾아라!</p>
							<p class="tit">이벤트1</p>
						</a>
					</li>
					<li data-title="이벤트2" class="item3 wow fadeUp">
						<a href="sub05_03.php">
							<div class="thumb">
								<span class="like_num"><em>♥</em> <?=$like_cnt_5_3;?></span>		<!-- // kruddo modify -->
								<img src="../../img/vol198/main/main_menu05_03.jpg" alt="이벤트2">
								<span class="cover ev"><i></i></span>
							</div>
							<p class="txt">초성퀴즈 이벤트 많이 참여해주세요^^</p>
							<p class="tit">이벤트2</p>
						</a>
					</li>
				</ul>
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
				var $mainSlider7 = $('.main_slider7');
				$mainSlider7.slick({
				 	dots: true,
				 	appendDots: $('.slider_tab5'),
				 	asNavFor:'.as_slider5',
				 	arrows: false,
				 	autoplay: true,
				 	autoplaySpeed: 5000,
				 	speed: 500,
				 	// slidesToShow: 3,
					variableWidth: true,//추가
				 	pauseOnHover: false,
				 	pauseOnDotsHover: false,
				 	pauseOnFocus: false,
					touchThreshold: 100,
				 	customPaging: function(slider, index) {
						var title = $(slider.$slides[index]).attr('data-title');							
						return "<button>" + title + "</button>";
					}
				});
				$('.as_slider5').slick({
					asNavFor:'.main_slider7',
					dots: true,
					appendDots: $('.slider_dots5'),
					arrows: false
				});
				$('.main_section7 .ctrl_wrap .btn_pause').click(function() {
					$mainSlider7.slick('slickPause');
					$(this).hide().next('.btn_play').show().focus();
				});
				$('.main_section7 .ctrl_wrap .btn_play').click(function() {
					$mainSlider7.slick('slickPlay');
					$(this).hide().prev('.btn_pause').show().focus();
				});				
			</script>
		</div>

		<div class="main_section5 wow fadeBigInUp">
			<h2><span>국민연금</span><i class="emoticon2"></i><em class="hot">HOT CLIP</em><i class="emoticon"></i></h2>	
			<ul class="list">
				<li class="item1 wow fadeUp">
					<a href="https://www.youtube.com/watch?v=SrEzG4FLjyE" target="_blank">
						<div class="thumb">
							<i class="vod">영상</i>
							<img src="../../img/vol198/main/youtube_img1.jpg" alt="국민연금이 가장 많이 투자한 주식 종목은?👀">
						</div>
						<dl>
							<dt></dt>
							<dd>국민연금이 가장 많이 투자한 주식 종목은?👀</dd>
						</dl>
					</a>
				</li>
				<li class="item2 wow fadeUp">
					<a href="https://www.youtube.com/watch?v=SrEzG4FLjyE" target="_blank">
						<div class="thumb">
							<i class="vod">영상</i>
							<img src="../../img/vol198/main/youtube_img2.jpg" alt="국민연금이 가장 많이 투자한 주식 종목은?👀">
						</div>
						<dl>
							<dt></dt>
							<dd>국민연금은 왜 해외투자를 늘리고 있을까?🤔</dd>
						</dl>
					</a>
				</li>
				<li class="item3 wow fadeUp">
					<a href="https://www.youtube.com/watch?v=oBEEoFh_RZw" target="_blank">
						<div class="thumb">
							<i class="vod">영상</i>
							<img src="../../img/vol198/main/youtube_img3.jpg" alt="국민연금기금 2023년 2분기 운용수익금 84조 원 달성!🎊">
						</div>
						<dl>
							<dt></dt>
							<dd>국민연금기금 2023년 2분기 운용수익금 84조 원 달성!🎊</dd>
						</dl>
					</a>
				</li>
				<li class="item4 wow fadeUp">
					<a href="https://www.youtube.com/watch?v=o2XjqPjyoHk" target="_blank">
						<div class="thumb">
							<i class="vod">영상</i>
							<img src="../../img/vol198/main/youtube_img4.jpg" alt="국민의 든든한 평생 파트너, 인생연금 국민연금💚">
						</div>
						<dl>
							<dt></dt>
							<dd>국민의 든든한 평생 파트너, 인생연금 국민연금💚</dd>
						</dl>
					</a>
				</li>
			</ul>
			<a href="https://www.youtube.com/@NPS_kr" target="_blank" class="more">MORE</a>
		</div>
	</section>
	<!-- contents -->

	<!-- page ctrl -->
	<div class="page_ctrl">
		<!--<div class="page_move">
			<a href="#" class="page_next">다음페이지</a>
			<a href="#" class="page_prev">이전페이지</a>
		</div>-->
		<?php include("../../inc/page_ctrl.php"); ?>
	</div>
	<!-- //page ctrl -->

	<!-- page ctrl mobile -->
	<div class="page_ctrl_mobile">
		<!--<div class="page_move">
			<a href="#" class="page_prev">이전페이지</a>
			<a href="#" class="page_next">다음페이지</a>
		</div>-->
		<?php include("../../inc/page_ctrl_mobile_198.php"); ?>		
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

	<!-- event 
	<div class="main_event" id="event_layer">
		<div class="main_event_wrap">
			<div class="inner">
				<div class="event_header">
					<a href="javascript:fn_closeEvent('1');" class="event_stop">다시보지않기</a>
					<a href="javascript:fn_closeEvent();" class="event_close">닫기</a>
				</div>
				<div class="thumb">
					<ul class="event_slider">
						<li>
							<a href="sub05_02.php">
								<img src="../../img/vol198/main/event_pc.jpg" alt="국민연금x롯데월드 댓글 이벤트" class="pc">
								<img src="../../img/vol198/main/event_m.jpg" alt="국민연금x롯데월드 댓글 이벤트" class="mobile">
							</a>
						</li>
						<li>
							<a href="sub05_03.php">
								<img src="../../img/vol198/main/event2_pc.jpg" alt="초성퀴즈 이벤트" class="pc">
								<img src="../../img/vol198/main/event2_m.jpg" alt="초성퀴즈 이벤트" class="mobile">
							</a>
						</li>
						<li>
							<a href="sub05_01.php">
								<img src="../../img/vol198/main/event3_pc.jpg" alt="독자의견" class="pc">
								<img src="../../img/vol198/main/event3_m.jpg" alt="독자의견" class="mobile">
							</a>
						</li>
					</ul>
					<script>
						$('.event_slider').slick({
							dots: false,
							arrows: false,
							autoplay: true,
							autoplaySpeed: 5000,
							speed: 500,
							slidesToScroll: 1
						});
					</script>
				</div>
			</div>
		</div>
		<div class="event_overlay"></div>
	</div>	-->
	<!-- //event -->
  
</div>
</body>
</html>
