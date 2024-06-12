<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">
</head>
<body>

<div id="wrap" class="sub10">

	<!-- header -->
	<?php include("header.php"); ?>
	<!-- //header -->

	<!-- contents -->
	<section id="contents">
		<div class="section01 wow fadeBigInUp">
			<div class="content">
				<div class="title"><img src="img/sub10/sub10_01.svg" class="pc_display"><img src="img/sub10/sub10_01_mo.svg" class="mobile_display"></div>
				<div class="title_txt">
					독자 여러분의 목소리에 귀 기울여 <br>
					늘 행복한 내곁에 국민연금을 만들어 가겠습니다.
				</div>
				<div class="subtitle">좋은 의견을 남겨 주신 10분께는 1만원 상당의 <br>아이스크림 기프티콘을 보내 드립니다.</div>
				<div class="text">
					독자 여러분이 남겨 주신 다양한 의견을 소개합니다. 국민연금 여름호 웹진에 대한 리뷰, 여름호 중 가장 좋았던 콘텐츠 선정, 국민연금 제도에 대한 희망이 담긴 조언, 기대감 등 독자 여러분의 목소리를 기다리고 있겠습니다. 늘 관심을 갖고 웹진을 아껴 주시는 독자 여러분께 감사의 말씀을 전합니다.<br>
				</div>
				<div class="date_area">
<!-- TODO br처리에 pc, mobile을 나눈다 -->
					<div class="top"><span>응모 기간</span><em>7월 10일 오후 2시 ~ <br>8월 25일 오후 11시 30분</em></div>
					<div class="mid"><span>당첨 발표</span><em>9월 2일 오전 1시</em></div>
					<div><span>경품 발송</span><em>9월 2일 오후 5시</em></div>
				</div>
				<div class="gift"><img src="img/sub10/sub10_03.png"></div>
				<div class="button"><a class="subscribe" href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'>구독하기</a> <a class="send" href="https://naver.me/Fu6dXCjB" target="_blank">의견 보내기</a><span class="end" href="#" >마감되었습니다</span></div>
				<div class="info">
					<ul>
						<li>본 이벤트 경품은 당사 사정에 따라 변경될 수 있습니다.</li>
						<li>이벤트 응모 시 개인정보 활용에 동의한 것으로 간주됩니다.</li>
						<li>부정행위를 통해 이벤트 참여 시 제재를 받으며, 당첨 경품도 취소됩니다.</li>
						<li>많은 분들께 이벤트 혜택을 드리기 위해 중복 당첨 시 경품 지급은 한 번만 이뤄집니다.</li>
						<li>당첨자에 한해 개인정보가 경품 발송 대행사에 전달되며 경품 발송 후 즉시 폐기됩니다.</li>
						<li>정확하지 않은 개인정보로 인해 당첨자 연락이 되지 않거나 확인이 불가능할 경우, 당첨 취소됩니다.</li>
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

        // 비교할 날짜와 시간 설정 (2024년 06월 23일 23시 59분 59초)
        var targetDate = new Date("2024-06-23T23:59:59");

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

<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- //footer -->
</body>
</html>