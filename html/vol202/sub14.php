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
</head>
<body>

<div id="wrap" class="sub14">

	<!-- header -->
	<?php include("header.php"); ?>
	<!-- //header -->

	<!-- contents -->
	<section id="contents">
		<div class="section01 wow fadeBigInUp">
			<div class="content">
				<div class="title">
					<img src="img/sub14/title-main.svg" class="main-img pc_display">
					<img src="img/sub14/title-main-mo.svg" class="main-img mobile_display">
					<img src="img/sub14/title-ribbon.svg" class="ribbon">
					<img src="img/sub14/bell-left.svg" class="bell01">
					<img src="img/sub14/bell-right.svg" class="bell02">
					<div class="text_box">
						<img src="img/sub14/text-sub.svg">
						<h3>
							연말<br>
							응원<br>
							이벤트
						</h3>
					</div>
				</div>
				<div class="text pc_display">
					2024년, 구독자 여러분들께서는 어떻게 보내셨나요? 올해를 돌아보고, <br>
					내년을 기약하는 말 한 마디 또는 &lt;내 곁에 국민연금&gt;에 대한 응원을 보내주시면 <br>
					추첨을 통해 10분에게 3만원 상당의 케이크 기프티콘을 드립니다.
				</div>
				<div class="text mobile_display">
					2024년, 구독자 여러분들께서는 어떻게 보내셨나요? 올해를 돌아보고, 내년을 기약하는 말 한 마디 또는 &lt;내 곁에 국민연금&gt;에 대한 응원을 보내주시면 추첨을 통해 10분에게 3만원 상당의 케이크 기프티콘을 드립니다.
				</div>

				<div class="gift"><img src="img/sub14/gift.png"></div>

				<div class="date_area">
					<div class="top"><span>응모 기간</span><em>11월 28일 오후 2시 ~ <br class="mobile_display">12월 22일 오후 11시 30분</em></div>
					<div><span>경품 발송</span><em>12월 30일 오후 5시</em></div>
				</div>
				
				<div class="button"><a class="subscribe" href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'>구독하기</a> <a class="send" href="https://naver.me/GJT42wg3" target="_blank">응원 보내기</a><span class="end" href="#" >마감되었습니다</span></div>
				<div class="info">
					<ul class="pc_display">
					    <li><span>&lt;내 곁에 국민연금&gt; 웹진 이벤트 5종에 대한 중복 당첨은 불가합니다.</span></li>
						<li><span>본 이벤트 경품은 당사 사정에 따라 변경될 수 있습니다.</span></li>
						<li><span>이벤트 응모 시 개인정보 활용에 동의한 것으로 간주됩니다.</span></li>
						<li><span>부정행위를 통해 이벤트 참여 시 제재를 받으며, 당첨 경품도 취소됩니다.</span></li>
						<li><span>많은 분께 이벤트 혜택을 드리기 위해 중복 당첨 시 경품 지급은 한 번만 이뤄집니다.</span></li>
						<li><span>당첨자에 한해 개인정보가 경품 발송 대행사에 전달되며 경품 발송 후 즉시 폐기됩니다.</span></li>
						<li><span>정확하지 않은 개인정보로 인해 당첨자 연락이 되지 않거나 확인이 불가능할 경우, 당첨 취소됩니다.</span></li>
					</ul>
					<ul class="mobile_display">
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
		var evTop = $('.gift').offset().top - 600;

		if(st>=evTop){
			$('.gift > img').addClass('on');
		}
	});
</script>

<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- //footer -->
</body>
</html>