<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/contents.css">


<script>
document.addEventListener("DOMContentLoaded", (event) => {
    var tl = gsap.timeline({ repeat: -1 });

    // 애니메이션이 시작되기 전 opacity를 1로 설정하여 이미지가 나타나도록 함
    tl.set(".motion1, .motion2", { opacity: 1 });

    // motion1: 돋보기가 먼저 축소되고 다시 커지는 애니메이션
    tl.to(".motion1", { 
        duration: 1,  // 시간을 단축함
        scale: 0.8, 
        ease: "circ.out"
    })

    // motion2: 텍스트가 돋보기와 맞춰서 커지는 애니메이션
    tl.to(".motion2", { 
        duration: 0.5,  // 시간을 단축함
        scale: 0.9, 
        ease: "circ.out"
    }, 0);  // 처음부터 동시에 작동

    tl.to(".motion1", { 
        duration: 2,  // 시간을 단축함
        scale: 1.1, 
        ease: "circ.out"
    });

    tl.to(".motion2", { 
        duration: 2,  // 시간을 단축함
        scale: 1.4, 
        ease: "circ.out"
    });
});
</script>



<style>
/* 기본 스타일 (PC용) */
.sub11 .section01 .content .title {
    position: relative;
    text-align: center; /* 중앙 정렬 */
    display: flex;
    justify-content: center;
    align-items: center;
    left: 3%;
}

.sub11 .section01 .content .title .motion1 {
    position: relative; 
    width: 100%; 
    max-width: 629px; 
    z-index: 9;
    opacity: 0; /* 애니메이션 전에는 숨김 */
}

.sub11 .section01 .content .title .motion2 { 
    position: absolute;
    width: 50%;
    max-width: 300px;
    top: 40%;
    left: 48%;
    transform: translate(-50%, -50%);
    opacity: 0; /* 애니메이션 전에는 숨김 */
}

/* 반응형 스타일 */
@media (max-width: 1920px) {
    .sub11 .section01 .content .title .motion1 {
        width: 70%;
    }

    .sub11 .section01 .content .title .motion2 { 
        left: 47.5%;
    }
}
@media (max-width: 1200px) {
    .sub11 .section01 .content .title .motion1 {
        width: 70%;
    }

    .sub11 .section01 .content .title .motion2 { 
        left: 46%;
    }
}

@media (max-width: 800px) {
    .sub11 .section01 .content .title .motion1 {
        width: 70%;
    }

    .sub11 .section01 .content .title .motion2 { 
        width: 40%;
        max-width: 300px;
        left: 46%;
        top: 49%;
    }
}

@media (max-width: 768px) {
    .sub11 .section01 .content .title .motion1 {
        width: 70%;
    }

    .sub11 .section01 .content .title .motion2 { 
        width: 37%;
        max-width: 300px;
        left: 47%;
        top: 47%;
    }
}

@media (max-width: 650px) {
    .sub11 .section01 .content .title .motion1 {
        width: 70%;
    }

    .sub11 .section01 .content .title .motion2 { 
        width: 40%;
        max-width: 300px;
        left: 46%;
        top: 60%;
    }
}


@media (max-width: 480px) {
    .sub11 .section01 .content .title .motion1 {
        width: 80%;
        left: -1%;
        top: -1%;
    }

    .sub11 .section01 .content .title .motion2 { 
        width: 40%;
        max-width: 150px;
        left: 45%;
        top: 40%;
    }
}

@media (max-width: 360px) {
    .sub11 .section01 .content .title .motion1 {
        width: 80%;
        left: -1%;
    }

    .sub11 .section01 .content .title .motion2 { 
        width: 40%;
        max-width: 150px;
        left: 45%;
        top:70%;
    }
}
</style>

</head>
<body>

<div id="wrap" class="sub11">

	<!-- header -->
	<?php include("header.php"); ?>
	<!-- //header -->

	<!-- contents -->
	<section id="contents">
		<div class="section01 wow fadeBigInUp">
			<div class="content">

				<div class="title">

                    <img id="backgroundImage" class="motion1"src="img/sub11/sub11_vis2.png" class="pc_display">
                    <img class="motion2"src="img/sub11/sub11_text2.png" class="pc_display">

                </div>

				<div class="text pc_display">
					내곁에 국민연금 가을호를 잘 읽어 보셨나요?<br>
					여러분이 읽은 웹진 속에 정답이 숨어 있습니다.<br>
					빈칸을 맞추신 분들 중 추첨을 통해 선정된 15분께는 <br>
					1만원 상당의 커피 기프티콘을 드립니다.
				</div>
				<div class="text mobile_display">
					내곁에 국민연금 가을호를 잘 읽어 보셨나요? 여러분이 읽은 웹진 속에 정답이 숨어 있습니다. 빈칸을 맞추신 분들 중 추첨을 통해 선정된 15분께는 1만원 상당의 커피 기프티콘을 드립니다.
				</div>
			</div>
		</div>
		<div class="gift">
			<div class="img_box"><img src="img/sub11/sub11_02.png"></div>
			<div class="text_box">이디야커피 디지털 상품권 1만원권</div>
		</div>
		<div class="section02 wow fadeBigInUp">
			<div class="content">
				<div class="date_area">
					<div class="top"><span>응모 기간</span><em>9월 11일 오후 2시 ~ <br class="mobile_display">11월 3일 오후 11시 30분</em></div>
					<div><span>경품 발송</span><em>11월 11일 오후 5시</em></div>
				</div>
				<div class="quiz">
					<div class="img_box"><img src="img/sub11/sub11_03.svg"></div>
					<div class="quiz_cont">
						<div class="q_title pc_display"><img src="img/sub11/sub11_04.svg"></div>
						<div class="q_title mobile_display"><img src="img/sub11/sub11_04_mo.svg"></div>
						<div class="q_text pc_display">
							국민연금의 기초가 되는 급여로 국민연금 가입자가 나이가 들어 소득활동에 <br>
							종사하지 못할 경우 생활안정과 복지증진을 위하여 지급되는 급여로서 <br>
							가입기간(연금보험료 납부기간)이 10년 이상이면 출생연도별 지급개시연령<br>
							이후부터 평생 동안 매월 지급받는 연금은?
						</div>
						<div class="q_text mobile_display">
							국민연금의 기초가 되는 급여로 국민연금 가입자가 나이가 들어 소득활동에 종사하지 못할 경우 생활안정과 복지증진을 위하여 지급되는 급여로서 가입기간(연금보험료 납부기간)이 10년 이상이면 출생연도별 지급개시연령 이후부터 평생 동안 매월 지급받는 연금은?
						</div>
						<div class="blank_box">
							<ul>
								<li>ㄴ</li>
								<li>ㄹ</li>
								<li>ㅇ</li>
								<li>ㄱ</li>
							</ul>
						</div>
						<div class="hint_box">
							<div class="hint">힌트</div>
							<div class="text">NPS 칼럼</div>
						</div>
					</div>
				</div>
				<div class="button"><a class="subscribe" href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'>구독하기</a> <a class="send" href="https://naver.me/G656SnKA" target="_blank">의견 보내기</a><span class="end" href="#" >마감되었습니다</span></div>
				<div class="info">
					<ul>
					    <li><span>&lt;내 곁에 국민연금&gt; 웹진 이벤트 5종에 대한 중복 당첨은 불가합니다.</span></li>
						<li>본 이벤트 경품은 당사 사정에 따라 변경될 수 있습니다.</li>
						<li>이벤트 응모 시 개인정보 활용에 동의한 것으로 간주됩니다.</li>
						<li>부정행위를 통해 이벤트 참여 시 제재를 받으며, 당첨 경품도 취소됩니다.</li>
						<li>많은 분께 이벤트 혜택을 드리기 위해 중복 당첨 시 경품 지급은 한 번만 이뤄집니다.</li>
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