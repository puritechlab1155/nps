<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>

	<!-- GSAP -->
	<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/contents.css">

	<script>
		document.addEventListener("DOMContentLoaded", (event) => {

			// 페이지 로드 시 애니메이션
			gsap.fromTo(".year", 
				{ y: 300, },
				{
					y: 0,
					duration: 1,
					easy: "circ.out",
				}
			);

			gsap.fromTo(".chr01", 
				{ y: 10, },
				{
					y: 0,
					duration: 2,
					ease: "power1.inOut",
					yoyo: true,
					repeat: -1,
				}
			);
			gsap.fromTo(".chr02", 
				{ y: -20, },
				{
					y: 0,
					duration: 2,
					ease: "power1.inOut",
					yoyo: true,
					repeat: -1,
				}
			);
			gsap.fromTo(".chr03", 
				{ y: 20, },
				{
					y: 0,
					duration: 2,
					ease: "power1.inOut",
					yoyo: true,
					repeat: -1,
				}
			);
			gsap.fromTo(".chr04", 
				{ y: -10, },
				{
					y: 0,
					duration: 2,
					ease: "power1.inOut",
					yoyo: true,
					repeat: -1,
				}
			);
		});
	</script>
</head>
<body>

<div id="wrap" class="sub12">

	<!-- header -->
	<?php include("header.php"); ?>
	<!-- //header -->

	<!-- contents -->
	<section id="contents">
		<div class="section01 wow fadeBigInUp">
			<div class="content">
				<div class="title">
					<div class="objs">
						<img src="img/sub12/objects.svg" class="objs-item pc_display">
						<img src="img/sub12/objects-mo.svg" class="objs-item mobile_display">
						<img src="img/sub12/character01.svg" class="chr chr01">
						<img src="img/sub12/character02.svg" class="chr chr02">
						<img src="img/sub12/character03.svg" class="chr chr03">
						<img src="img/sub12/character04.svg" class="chr chr04">
					</div>
					<img src="img/sub12/2024.svg" class="year">
					<img src="img/sub12/trophy-front.png" class="trophy01">
					<img src="img/sub12/trophy-back.png" class="trophy02">
					<p class="text">
						최고의 <br>
						콘텐츠를 <br>
						뽑아라!
					</p>
				</div>
				<div class="text_box">
					<ul class="rect_item_top">
						<li class="rect_item"></li>
						<li class="rect_item"></li>
						<li class="rect_item"></li>
					</ul>
					<p class="pc_display">
						올 한 해, 구독자분들의 마음을 사로잡은 <br>
						&lt;내 곁에 국민연금&gt; 콘텐츠를 선정해 주세요!<br>
						기억에 남는 이야기 혹은 지인에게 보여주는 싶은 이야기 등을 <br>
						그 이유와 함께 메시지로 보내주시길 바랍니다.<br>
						추첨을 통해 선정된 15분께는 3만 원 상당의 피자 기프티콘을 드립니다.
					</p>
					<p class="mobile_display">
						올 한 해, 구독자분들의 마음을 사로잡은 <br>
						&lt;내 곁에 국민연금&gt; 콘텐츠를 선정해 주세요! 기억에 남는 이야기 혹은 지인에게 보여주는 싶은 이야기 등을 그 이유와 함께 메시지로 보내주시길 바랍니다. 추첨을 통해 선정된 15분께는 3만 원 상당의 피자 기프티콘을 드립니다.
					</p>
					<ul class="rect_item_bottom">
						<li class="rect_item"></li>
						<li class="rect_item"></li>
						<li class="rect_item"></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="section02 wow fadeBigInUp">
			<div class="content">
				<div class="date_area">
					<div class="top"><span>응모 기간</span><em>11월 25일 오후 2시 ~ <br class="mobile_display">12월 22일 오후 11시 30분</em></div>
					<div><span>경품 발송</span><em>12월 30일 오후 5시</em></div>
				</div>
				<div class="gift"><img src="img/sub12/gift.png"></div>
				<div class="button"><a class="subscribe" href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'>구독하기</a> <a class="send" href="https://naver.me/GfCTlu8W" target="_blank">의견 보내기</a><span class="end" href="#" >마감되었습니다</span></div>
				<div class="info">
					<ul>
					    <li><span>&lt;내 곁에 국민연금&gt; 웹진 이벤트 5종에 대한 중복 당첨은 불가합니다.</span></li>
						<li><span>본 이벤트 경품은 당사 사정에 따라 변경될 수 있습니다.</span></li>
						<li><span>이벤트 응모 시 개인정보 활용에 동의한 것으로 간주됩니다.</span></li>
						<li><span>부정행위를 통해 이벤트 참여 시 제재를 받으며, 당첨 경품도 취소됩니다.</span></li>
						<li><span>많은 분께 이벤트 혜택을 드리기 위해 중복 당첨 시 경품 지급은 한 번만 이뤄집니다.</span></li>
						<li><span>당첨자에 한해 개인정보가 경품 발송 대행사에 전달되며 경품 발송 후 즉시 폐기됩니다.</span></li>
						<li><span>정확하지 않은 개인정보로 인해 당첨자 연락이 되지 않거나 확인이 불가능할 경우, 당첨 취소됩니다.</span></li>
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
<script>
    // 현재 날짜와 비교하여 send와 end 클래스를 제어하는 함수
    function controlSendEnd() {
        // 현재 날짜 및 시간 객체 생성
        var currentDate = new Date();

        // 비교할 날짜와 시간 설정 (2024년 12월 22일 23시 30분 00초)
        var targetDate = new Date("2024-12-22T23:30:00");

        // 현재 날짜가 지정한 날짜보다 이후인 경우
        if (currentDate > targetDate) {
            // send 클래스 비활성화, end 클래스 활성화
            document.querySelector('.send').style.display = 'none';
            document.querySelector('.end').style.display = 'block';
        } else {
            // send 클래스 활성화, end 클래스 비활성화
            document.querySelector('.send').style.display = 'block';
            document.querySelector('.end').style.display = 'none';
        }
    }

    // 페이지가 로드될 때 controlSendEnd 함수 호출
    window.onload = controlSendEnd;
</script>

<script>
	// scroll event
	$(window).scroll(function(){
		var st = $(this).scrollTop();
		var evTop = $('.gift').offset().top - 500;

		if(st>=evTop){
			$('.gift img').addClass('on');
		}
	});
</script>

<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- //footer -->
</body>
</html>