<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">

	<script src="script.js"></script>

</head>

<body>
<!--w	<audio id="background-sound" src="img/sub13/sea_sound.mp3" loop></audio>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
            var sound = document.getElementById('background-sound');

            // 페이지 로드 후 1초 뒤에 오디오 재생 시도
            setTimeout(function() {
                sound.play().catch(function(error) {
                    console.log('Autoplay was prevented by the browser:', error);
                });
            }, 100);
        });
	</script> -->

<div id="wrap" class="sub13">

	<!-- header -->
	<?php include("header.php"); ?>
	<!-- //header -->

	<!-- contents -->
	<section id="contents" >
	
		<div class="section01 wow fadeBigInUp">
			<div class="content">
				<div class="title">
					<!-- <img src="img/sub13/sub13_01.svg" class="cv_bg pc_display">
					<img src="img/sub13/sub13_01_mo.svg" class="mobile_display"> -->
					<!-- <div class="sub_box" id="hover-area"> -->
					<div class="sub_box" >
						<div class="main_title"><img src="img/sub13/sub13_01-title.svg"></div>
						<div class="text1">덥다 더워~ 행운 잡고,<br> 무더위 날리자~</div>
						<div class="text2">
							내곁에 국민연금을 방문해 주신 구독자 여러분께 <br>
							감사의 마음을 담아 뽑기 이벤트를 준비했습니다. <br>
							이벤트 기간 내 뽑기를 해 주신 구독자님들 중 100분께 경품을 드립니다.
						</div>
						<div class="img_box"><img src="img/sub13/sub13_02.png" class="prize"></div>
					</div>
				</div>
				
				<div class="howto">
					<img src="img/sub13/sub13_03.svg" class="pc_display">
					<img src="img/sub13/sub13_03_mo.svg" class="mobile_display">
				</div>
				<div class="date_area">
					<div class="top"><span>응모 기간</span><em>7월 10일 오후 2시 ~ <br>8월 25일 오후 11시 30분</em></div>
					<div class="mid"><span>당첨 발표</span><em>9월 2일 오전 1시</em></div>
					<div><span>경품 발송</span><em>9월 2일 오후 5시</em></div>
				</div>
				<div class="button"><a class="subscribe" href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'>구독하기</a> <span class="end" href="#" >마감되었습니다</span></div>
				<!-- <a class="send" href="https://naver.me/FZWH1Fh4" target="_blank">의견 보내기</a> -->
				
				<div id="playSoundButton" >

					<audio id="click-sound" src="img/sub13/sea_sound.mp3"></audio>
					<script>
						var sound = document.getElementById('click-sound');
						var playSoundButton = document.getElementById('playSoundButton');
						
						playSoundButton.addEventListener('click', function() {
							sound.currentTime = 0; // 오디오를 처음부터 재생
							sound.play();

							// 3초 후에 멈추기
							setTimeout(function() {
								sound.pause();
								sound.currentTime = 0; // 오디오를 처음으로 되돌림
							}, 3000);
						});
					</script>

				<div class="draw">
					<div><img src="img/sub13/sub13_05-blue.svg"></div>
					<div><img src="img/sub13/sub13_05-red.svg"></div>
					<div><img src="img/sub13/sub13_05-yellow.svg"></div>
					<div><img src="img/sub13/sub13_05-red.svg"></div>
					<div><img src="img/sub13/sub13_05-yellow.svg"></div>
					<div><img src="img/sub13/sub13_05-blue.svg"></div>
					<div><img src="img/sub13/sub13_05-yellow.svg"></div>
					<div><img src="img/sub13/sub13_05-blue.svg"></div>
					<div><img src="img/sub13/sub13_05-red.svg"></div>
					<div><img src="img/sub13/sub13_05-blue.svg"></div>
					<div><img src="img/sub13/sub13_05-red.svg"></div>
					<div><img src="img/sub13/sub13_05-yellow.svg"></div>
				</div>

				</div>

				<div class="text">
					<ul>
						<li>내 곁에 국민연금 구독자가 아닐 경우, 차후에 당첨이 취소되오니 반드시 구독 후 이벤트에 참여해 주세요.</li>
						<li>본 이벤트는 같은 이메일 주소, 같은 IP, 같은 이름, 같은 전화번호를 포함해 한 번만 응모 가능하며, 중복 참여는 불가능합니다.</li>
					</ul>
				</div>
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

	<div class="popUp result_modal01">
		<div class="modal">
			<div class="content">
				<div class="message">
					<div class="img_box"><img src="img/sub13/sub13_modal01.svg"></div>
					<div class="main_text">축하합니다!</div>
					<div class="sub_text">이벤트에 당첨되셨습니다.</div>
				</div>
				<div class="gift_area">
					<div class="img_box"><img src="img/sub13/sub13_modal_gift.png"></div>
					<p>CU 편의점 모바일 상품권 5천원 </p>
				</div>
				<div class="text_box">
					<span>폼을 작성하여 제출해주세요.<br>제출한 번호로 개별 연락드릴 예정입니다.</span>
					<p>*경품 발송 시, &lt;내 곁에 국민연금&gt;의 구독자가 <br>아닐 경우 당첨이 취소됩니다. </p>
				</div>
				<div class="button">클릭!</div>
			</div>
		</div>
	</div>

	<div class="popUp result_modal02">
		<div class="modal">
			<div class="content">
				<form class="winning_form">
					<div class="header">
						<div class="main_txt">
							당첨자 정보
						</div>

						<div class="sub_txt">
							폼을 작성하여 제출해주세요.<br>제출한 번호로 개별 연락드릴 예정입니다.<br>
							*경품 발송 시, &lt;내 곁에 국민연금&gt;의 구독자가 아닐 경우 <br>당첨이 취소됩니다.
						</div>
					</div>

					<div class="input_area">
						<div class="winner_info">
							<div class="winner_name"><label for="winning_name">성명</label><input type="text" name="winning_name" placeholder=""></div>
							<div class="winner_phone">
								<label>휴대폰 번호</label>
								<div class="sel">
									<select name="winning_tel1" class="winning_tel1">
										<option value="010" selected>010</option>
										<option value="011">011</option>
										<option value="016">016</option>
										<option value="017">017</option>
										<option value="018">018</option>
										<option value="019">019</option>
									</select>
									- <input type="text" name="winning_tel2" class="winning_tel2" maxlength="4" placeholder="">
									- <input type="text" name="winning_tel3"  class="winning_tel3" maxlength="4" placeholder="">
								</div>
							</div>
							<div class="winner_email"><label for="winning_email">E-mail</label><input type="email" name="winning_email" placeholder=""></div>
						</div>

						<div class="agreement">
							<div class="title">
								개인보호정책 및 이용약관 동의
							</div>

							<div class="cont">
								<dl>
									<dt>개인정보 수집 및 이용 동의</dt>
									<dd>수집하는 개인정보 항목: 이름, 연락처, 이메일</dd>
									<dd>수집 및 이용 목적: 이벤트 참여자 확인 및 당첨자 안내</dd>
									<dd>보유 및 이용 기간: 당첨자 발표 후 1개월</dd>
									<br>
									<dt>개인정보 제3자 제공 동의</dt>
									<dd>동의를 거부할 수 있으나, 이 경우 이벤트 참여가 불가능합니다.</dd>
									<dd>제공받는 자: 큐라인</dd>
									<dd>제공받는 자의 이용 목적: 이름, 연락처, 이메일</dd>
									<dd>제공하는 항목: 이름, 연락처, 이메일</dd>
									<dd>제공받는 자의 보유 및 이용기간: 당첨자 발표 후 1개월</dd>
								</dl>
							</div>

							<div class="winner_agree">
								<input type="checkbox" id="winning_agree" name="winning_agree" value="동의함">
								<label for="winning_agree">동의합니다</label>
							</div>
						</div>
					</div>

					<div class="submit_btn">등록!</div>
				</form>
			</div>
		</div>
	</div>

	<div class="popUp result_modal03">
		<div class="modal">
			<div class="content">
				<div class="main_text">등록 완료</div>
				<p>
					정상적으로 제출되었습니다.<br>
					제출한 번호로 개별 연락드릴 예정입니다.<br>
					감사합니다.
				</p>
				<span>*경품 발송 시, &lt;내 곁에 국민연금&gt;의 구독자가 아닐 경우 <br>당첨이 취소됩니다. </span>
				<div class="button">닫기</div>
			</div>
		</div>
	</div>
	<script>
		$('.popUp').hide();

		$('.draw div').click(function(){
			$('.result_modal01').show();
			$('.result_modal02').hide();
			$('.result_modal03').hide();
		});
		$('.result_modal01 .button').click(function(){
			$('.result_modal01').hide();
			$('.result_modal02').show();
			$('.result_modal03').hide();
		});
		$('.result_modal02 .submit_btn').click(function(){
			$('.result_modal01').hide();
			$('.result_modal02').hide();
			$('.result_modal03').show();
		});
		$('.result_modal03 .button').click(function(){
			$('.popUp').hide();
		});
	</script>
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

        // 비교할 날짜와 시간 설정 (2024년 08월 25일 23시 59분 59초)
        var targetDate = new Date("2024-08-25T23:59:59");

        // 현재 날짜가 지정한 날짜보다 이후인 경우
        if (currentDate > targetDate) {
            // send 클래스 비활성화, end 클래스 활성화
            document.querySelector('.subscribe').style.display = 'none';
            document.querySelector('.end').style.display = 'block';
        } else {
            // send 클래스 활성화, end 클래스 비활성화
            document.querySelector('.subscribe').style.display = 'block';
            document.querySelector('.end').style.display = 'none';
        }
    }

    // 페이지가 로드될 때 controlSendEnd 함수 호출
    window.onload = controlSendEnd;
</script>

<<<<<<< HEAD
<!-- footer -->
<?php include("footer.php"); ?>
	<!-- //footer -->
=======
<!— footer —>
<?php include("footer.php"); ?>
	<!— //footer —>
>>>>>>> 3e7e216d0ddcc26d0023589ac69b1aed6969692e
</body>
</html>