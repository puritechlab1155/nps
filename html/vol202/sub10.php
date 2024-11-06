<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="css/contents.css"> -->
    <link rel="stylesheet" type="text/css" href="css/contents.css?v=1.0">

<script>

    document.addEventListener("DOMContentLoaded", (event) => {

   // .motion1 애니메이션 (서서히 나타남 + 반복 애니메이션)
    gsap.fromTo(".motion1", 
        { opacity: 0, scale: 0 }, // 시작 상태: 불투명도 0, 크기 0
        { 
            opacity: 1,           // 최종 상태: 불투명도 1
            duration: 4, 
            scale: 1.1, 
            // repeat: 1
            scrollTrigger: {
                trigger: ".motion1",  // 트리거 요소
                start: "bottom 20%",     // 스크롤 트리거 위치 (top부터 80% 아래에서 트리거 시작)
                toggleActions: "restart none none none", //
                immediateRender: false // 첫 로드 시 즉시 렌더링 방지, 스크롤로 트리거됨
            }
        }
    );


    // .motion2 애니메이션 (서서히 나타남 + 반복 애니메이션)
    gsap.fromTo(".motion2", 
        { opacity: 0, scale: 0 }, // 시작 상태: 불투명도 0, 크기 0
        { 
            opacity: 1,           // 최종 상태: 불투명도 1
            duration: 3, 
            scale: 0.9, 
            // repeat: 1,
            scrollTrigger: {
                trigger: ".motion2",  // 트리거 요소
                start: "bottom 20%",     // 스크롤 트리거 위치
                toggleActions: "restart none none none", // 
                immediateRender: false // 첫 로드 시 즉시 렌더링 방지, 스크롤로 트리거됨
            }

        }
    );

    // 페이지 로드 시 애니메이션
    gsap.fromTo(".motion1", 
        { opacity: 0, scale: 0 }, 
        { 
            opacity: 1, 
            duration: 3, 
            scale: 1.1 
        }
    );

    gsap.fromTo(".motion2", 
        { opacity: 0, scale: 0 }, 
        { 
            opacity: 1.5, 
            duration: 1, 
            scale: 0.9 
        }
    );

        gsap.to(".motion3", { 
            duration: 2, 
            rotationY: 10, 
            scale: 1.1, 
            x: 10, 
            yoyo: true, 
            repeat: -1 
        });

        gsap.to(".motion4", { 
            duration: 2, 
            rotationY: 10, 
            scale: 0.9, 
            x: 10, 
            yoyo: true, 
            repeat: -1 
        });
    });
</script>
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
				<div class="title">

                    <div class="img_box img_box01"><img src="img/sub10/window.png"></div>
                    <div class="img_box img_box02"><img src="img/sub10/title-text.svg"></div>
                    <div class="img_box img_box03"><img src="img/sub10/speech-bubble-wh.svg"></div>
                    <div class="img_box img_box04"><img src="img/sub10/speech-bubble-red.svg"></div>
                    
                </div>
				
                <div class="title_txt">
					독자 여러분의 목소리에 귀 기울여 <br>
					늘 행복한 내곁에 국민연금을 만들어 가겠습니다.
				</div>
				<div class="subtitle">좋은 의견을 남겨 주신 10분께는 1만원 상당의 <br class="mobile_display">베이커리 기프티콘을 보내 드립니다.</div>
				<div class="text">
					독자 여러분이 남겨 주신 다양한 의견을 소개합니다. 국민연금 가을호 웹진에 대한 리뷰, 국민연금 제도에 대한 희망이 담긴 조언, 기대감 등 독자 여러분의 목소리를 기다리고 있겠습니다. 늘 관심을 갖고 웹진을 아껴 주시는 독자 여러분께 감사의 말씀을 전합니다.
				</div>
				<div class="date_area">
					<!-- TODO br처리에 pc, mobile을 나눈다 -->
					<div class="top"><span>응모 기간</span><em>9월 13일 오후 2시 ~ <br class="mobile_display">11월 3일 오후 11시 30분</em></div>
					<div><span>경품 발송</span><em>11월 11일 오후 5시</em></div>
				</div>
				<div class="gift"><img src="img/sub10/sub10_02.png"></div>
				<div class="button"><a class="subscribe" href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'>구독하기</a><a class="send" href="https://naver.me/FN779uYp" target="_blank">의견 보내기</a><span class="end" href="#" >마감되었습니다</span></div>
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

        // 비교할 날짜와 시간 설정 (2024년 11월 03일 23시 30분 00초)
        var targetDate = new Date("2024-11-03T23:30:00");

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
			$('.gift > img').addClass('on');
		}
	});
</script>

<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- //footer -->
</body>
</html>