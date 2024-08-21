<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">
    <!-- GSAP Library -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

   <!-- <script>
        // DOM 로드 후 애니메이션 실행
        document.addEventListener("DOMContentLoaded", () => {
            var tl = gsap.timeline({ repeat: -1, yoyo: false });

            // 이미지가 사용자 중심으로 3D 원근감을 주며 360도 회전하는 애니메이션
            tl.to(".motion1", { 
                duration: 3, 
                rotationY: 360, 
                z: -150,   // 이미지가 화면에서 멀어지는 효과
                ease: "power2.inOut"
            });

            // 회전이 끝나고 멈추는 애니메이션 (원래 위치로 돌아가기)
            tl.to(".motion1", { 
                duration: 1, 
                z: 0,  // 원래 위치로 돌아감
                scale: 1,
                ease: "none"
            });

            gsap.to(".motion2", {duration: 3, rotatio: 360, x: 100,  y: 100, yoyo: false, repeat: -1})
            gsap.to(".motion2", {duration: 3, rotation: 360, x: 100,  y: 100, yoyo: false, repeat: -1})

        });
    </script> -->

<!-- 

    <style>
        .sub12 .section01 .content .title { 
            perspective: 400px; 
        }
        .sub12 .section01 .content .title .motion1 { 
            transform-style: preserve-3d; /* 자식 요소에 3D 변형 적용 */
            transform-origin: center center; /* 회전 중심을 이미지의 중앙으로 설정 */
            position: relative; /* 이미지가 원형 궤도를 돌 수 있게 함 */}
        .sub12 .section01 .content .title .motion2
         {  width: 500px; height: 426px; 
           position: absolute; left: -10%; top: 40%; z-index: 1; 
        }

    </style>   -->

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        // 타임라인 생성
        var tl = gsap.timeline({ repeat: -1, yoyo: false });

        // motion1: 돋보기가 360도 회전하며 원근감을 주는 애니메이션
        tl.to(".motion1", { 
            duration: 3, 
            rotationY: 360, 
            z: -200,   // 이미지가 화면에서 멀어지는 효과
            ease: "power2.inOut"
        })
        .to(".motion1", { 
            duration: 1, 
            z: 0,  // 원래 위치로 돌아감
            scale: 1,
            ease: "none"
        });

        // motion2: 이미지가 x, y 방향으로 회전하면서 움직이는 애니메이션
        tl.to(".motion2", { 
            duration: 3, 
            rotation: 360,  // 회전 효과
            x: 100,   // x축 이동
            ease: "power2.inOut"
        }, 0);  // 타임라인의 시작과 동시에 motion2가 작동
    });
</script>

<style>
    .sub12 .section01 .content .title { 
        perspective: 800px; /* 원근감을 위한 관점 설정 */
    }
    .sub12 .section01 .content .title .motion1 { 
        transform-style: preserve-3d; /* 자식 요소에 3D 변형 적용 */
        transform-origin: center center; /* 회전 중심을 이미지의 중앙으로 설정 */
        position: relative;
    }
    .sub12 .section01 .content .title .motion2 { 
        position: absolute; 
        width: 500px; height: 426px; 
        position: absolute; left: -10%; z-index: 1;
        /* top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); 이미지가 중앙에서 시작되도록 설정 */
    }
</style>



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
                    <img class="motion1" src="img/sub12/sub12_title.png">
                    <img class="motion2"src="img/sub12/sub12_star.png" alt="">
                </div>

				<div class="tit_img">
                    <img src="img/sub12/sub12_02.svg" class="pc_display tit_img_main">
                    <img src="img/sub12/sub12_02_mo.svg" class="mobile_display">
                    <img src="img/sub12/sub12_02_item.svg" class="tit_img_item">
                </div>
				
                <div class="text_box">
					<ul class="rect_item_top">
						<li class="rect_item"></li>
						<li class="rect_item"></li>
						<li class="rect_item"></li>
					</ul>
					<p class="pc_display">
						&lt;내곁에 국민연금&gt; 가을호 중 구독자분들의 마음을 <br>
						사로잡은 이야기는 무엇인가요? <br>
						가을호 콘텐츠 중 구독자분들의 원픽 콘텐츠는 무엇이며, <br>
						그 이유를 메시지로 보내주시는 분들 중 추첨을 통해 선정된
					</p>
					<p class="mobile_display">
						&lt;내곁에 국민연금&gt; 가을호 중 구독자분들의 마음을 사로잡은 이야기는 무엇인가요? <br>
						가을호 콘텐츠 중 구독자분들의 원픽 콘텐츠는 무엇이며, 그 이유를 메시지로 보내주시는 분들 중 추첨을 통해 선정된
					</p>
					<span>15분께는 3만원 상당의 <br class="mobile_display">치킨 기프티콘을 드립니다.</span>
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
					<div class="top"><span>응모 기간</span><em>9월 11일 오후 2시 ~ <br class="mobile_display">11월 3일 오후 11시 30분</em></div>
					<div><span>경품 발송</span><em>11월 11일 오후 5시</em></div>
				</div>
				<div class="gift"><img src="img/sub12/sub12_03.png"></div>
				<div class="button"><a class="subscribe" href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'>구독하기</a> <a class="send" href="https://naver.me/GDa9F1hT" target="_blank">의견 보내기</a><span class="end" href="#" >마감되었습니다</span></div>
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
			$('.gift img').addClass('on');
		}
	});
</script>

<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- //footer -->
</body>
</html>