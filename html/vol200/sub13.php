<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">

	<script src="script.js"></script>
	<!-- kruddo add -->
	<?
		$vol_idx = "200";		// kruddo modify - 호차 번호. 191호가 아닌경우 변경, inc/like_share.php 에서도 변경
		$hostname = "localhost";
		$username = "nps2022";
		$password = "nps2022!@";
		$database = "nps2022";

		$connect = mysqli_connect($hostname, $username, $password, $database);
		mysqli_select_db($connect, $database) or die('DB 선택 실패');

		$current_ip = $_SERVER['REMOTE_ADDR'];

		// 중복 참여 허용 여부
		$duplicate_participation = false; // true: 중복 참여 가능해짐 / false: 중복 참여 불가능해짐
		// 최대 당첨자 수
		$max_winner_count = 150;
		// 당첨자 주기
		$periodic_of_winner = 50; // 해당 값 배수의 순번에 응모하는 사람은 무조건 당첨, 그 외에는 무조건 꽝. / 예: 20 이라면 20명 당 한 번 꼴로 당첨되는 식
		// 당첨자 주기 적용 여부
		$periodic_of_winner_whether = true; // true: 적용되게 됨 / false: 미적용되게 됨

		$challengers_where = "`vol_idx`={$vol_idx}";
		$challengers_query = "SELECT * FROM `roulette_winner_list` WHERE {$challengers_where}";

		$challengers_result = mysqli_query($connect, $challengers_query);
		// 총 응모자 수(꽝, 당첨 모두 포함)
		$challengers_resutl_count = mysqli_num_rows($challengers_result);

		// ip를 대조하여 이미 당첨된 내역이 있는지 여부를 가리기 위한 쿼리
		$duplicate_where = "`vol_idx`={$vol_idx} AND `ip`='{$current_ip}'";
		$duplicate_query = "SELECT * FROM `roulette_winner_list` WHERE {$duplicate_where}";

		$duplicate_result = mysqli_query($connect, $duplicate_query);
		$duplicate_row = mysqli_fetch_assoc($duplicate_result);

		$duplicate_regno = $duplicate_row['regno'];


		// '현재 당첨자 수'와 '최대 당첨자 수'를 대조하여 이벤트 종료를 가리기 위한 쿼리
		$where = "`vol_idx`={$vol_idx} AND `product_name`!='꽝'";
		$query = "SELECT * FROM `roulette_winner_list` WHERE {$where}";

		$result = mysqli_query($connect, $query);
		// 현재 총 당첨자 수
		$result_count = mysqli_num_rows($result);


		if($max_winner_count <= $result_count){ // '현재 당첨자 수'가 '최대 당첨자 수'와 같거나 크다면..
			// 이벤트 이벤트 종료 선언 여부
			$roulette_event_close = true;
		}
	?>

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
							<input type="hidden" name="winning_product" value="">
							<input type="hidden" name="winning_ip" value="<?php echo $current_ip?>">
							<input type="hidden" name="vol_idx" value="<?php echo $vol_idx?>">
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

					<div class="submit_btn" onclick="winning_form_submit()">
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
	<?php if(!$duplicate_participation){?>
		<?php if(!$duplicate_regno){?>
			// 새로 참여하는 사람인지 여부
			var new_challenger = true;
		<?php }else{?>
			var new_challenger = false;
		<?php }?>
	<?php }else{?>
		var new_challenger = true;
	<?php }?>


	// 룰렛이 멈춰있음을 체크하기 위한 변수
	var roulette_stoping = true;

	function roulette_start(){
		<?php if(!$roulette_event_close){?>
			if(roulette_stoping){
				if(new_challenger){
					roulette_stoping = false;


					// 룰렛을 돌리는 시간
					const spinTime = 2000; // 1000 = 1초
					// 룰렛의 회전 속도
					const spinSpeed = 10;
					// 룰렛의 섹션 수
					const roulette_section_count = 8;
					// 룰렛의 현재 각도
					let angle = 0;
					// 결과 값을 랜덤하게 생성
					let result = Math.floor(Math.random() * roulette_section_count);

					// 룰렛 애니메이션 실행
					function spin(){
						angle += spinSpeed;
						jQuery('.roulette_wheel').css('transform', `rotate(${angle}deg)`);
						if (angle >= 360) angle -= 360;
					}
					// 일정 시간 후 룰렛을 멈추고 결과 반환
					function stop(){
						clearInterval(spinInterval);
						// 결과 처리 함수 호출
						game_result(result, roulette_section_count);

						roulette_stoping = true;
					}
					// 룰렛을 돌리는 애니메이션 시작
					let spinInterval = setInterval(spin, spinSpeed);
					// 일정 시간 후 애니메이션을 멈추고 결과 반환
					setTimeout(stop, spinTime);
				}else{
					roulette_result_modal('open');
					jQuery('.roulette_result_modal_bg .already').show();
				}
			}
		<?php }else{?>
			roulette_result_modal('open');
			jQuery('.roulette_result_modal_bg .roulette_event_close').show();
		<?php }?>
	}


	function game_result(roulette_val, roulette_section_count){
		// 룰렛이 돌아가는 최대 각도 (한 바퀴 도는 각도)
		const maxAngle = 360;
		<?php if($periodic_of_winner_whether){?>
			<?php if($challengers_resutl_count % $periodic_of_winner == 0){?>
				if(roulette_val % 2 != 0){
					if(roulette_val >= roulette_section_count - 1){
						roulette_val = 0;
					}else{
						roulette_val++;
					}
				}
			<?php }else{?>
				if(roulette_val % 2 == 0){
					if(roulette_val == 0){
						roulette_val++;
					}else{
						roulette_val--;
					}
				}
			<?php }?>
		<?php }?>

		// 결과 값에 따른 회전 각도 계산
		let rotateAmount = (maxAngle / roulette_section_count) * roulette_val,
			correction_rotate = 25;
			rotateAmount += correction_rotate;

		jQuery('.roulette_wheel').css('transform', `rotate(${rotateAmount}deg)`);

		console.log("게임 결과: " + roulette_val);


		roulette_result_modal('open');

		switch(roulette_val){
			case 0 : var img_class_name = 'winning_1'; jQuery('[name="winning_product"]').val('스타벅스 카페 아메리카노 T'); break;
			case 1 : var img_class_name = 'boom'; boom_save(); break;
			case 2 : var img_class_name = 'winning_2'; jQuery('[name="winning_product"]').val('CU 편의점 모바일 상품권 5천원'); break;
			case 3 : var img_class_name = 'boom'; boom_save(); break;
			case 4 : var img_class_name = 'winning_3'; jQuery('[name="winning_product"]').val('다이소 모바일 금액권 5천원'); break;
			case 5 : var img_class_name = 'boom'; boom_save(); break;
			case 6 : var img_class_name = 'winning_4'; jQuery('[name="winning_product"]').val('예스24 도서문구상품권 5천원권'); break;
			case 7 : var img_class_name = 'boom'; boom_save(); break;
		}

		if(img_class_name == 'boom'){
			jQuery('.roulette_result_modal_bg').attr('onclick', "roulette_result_modal('close')");
		}else{
			jQuery('.roulette_result_modal_bg').attr('onclick', '');
		}

		jQuery('.roulette_result_modal_bg .'+img_class_name).show();


		<?php if(!$duplicate_participation){?>
			new_challenger = false;
		<?php }?>
	}


	function roulette_result_modal(mode){
		if(mode == 'open'){
			jQuery('.roulette_result_modal_bg').fadeIn();
		}

		if(mode == 'close'){
			jQuery('.roulette_result_modal_bg').fadeOut();
			jQuery('.roulette_result_modal_bg img').fadeOut();
		}

		if(mode == 'winning'){
			jQuery('.roulette_result_modal_bg img').hide();
			jQuery('.roulette_result_modal_bg .winning_form').show();
		}

		if(mode == 'winning_form_result_close'){
			jQuery('.roulette_result_modal_bg').fadeOut();
			jQuery('.roulette_result_modal_bg .roulette_result_modal .winning_form_result').fadeOut();
		}
	}


	<?php if($duplicate_participation || (!$duplicate_participation && !$duplicate_regno)){ // '중복 허용'이거나 '중복 허용'이 안된다면 '응모 내역(regno)'이 없다면..?>
	function winning_form_submit(){
		var winning_name = jQuery('[name="winning_name"]').val(),
			winning_tel1 = jQuery('[name="winning_tel1"]').val(),
			winning_tel2 = jQuery('[name="winning_tel2"]').val(),
			winning_tel3 = jQuery('[name="winning_tel3"]').val(),
			winning_tel = winning_tel1+'-'+winning_tel2+'-'+winning_tel3,
			winning_email = jQuery('[name="winning_email"]').val(),
			winning_product = jQuery('[name="winning_product"]').val(),
			winning_ip = jQuery('[name="winning_ip"]').val(),
			winning_agree = jQuery('[name="winning_agree"]').prop('checked');

		if(winning_name == ''){
			alert('성명을 입력해주세요');
			jQuery('[name="winning_name"]').focus();

			return;
		}

		if(winning_tel2 == '' || winning_tel3 == ''){
			alert('휴대폰 번호를 입력해주세요');
			jQuery('[name="winning_tel2"]').focus();

			return;
		}

		if(winning_email == ''){
			alert('이메일 주소를 입력해주세요');
			jQuery('[name="winning_email"]').focus();

			return;
		}

		if(!winning_agree){
			alert('개인보호정책 및 이용약관 동의가 필요합니다.');
			jQuery('[name="winning_agree"]').focus();

			return;
		}

		var param = {
			'mode' : 'winner_save',
			'vol_idx' : jQuery('[name="vol_idx"]').val(),
			'name' : winning_name,
			'tel' : winning_tel,
			'email' : winning_email,
			'product_name' : winning_product,
			'ip' : winning_ip,
			'agree' : jQuery('[name="winning_agree"]').val(),
		};

		jQuery.ajax({
			type: "POST",
			url: 'roulette_ajax.php',
			timeout: 0,
			data: param,
			cache: false,
			dataType: "text",
			error: function(xhr, textStatus, errorThrown) { console.log("전송에 실패했습니다."); console.log(xhr, textStatus, errorThrown) },
			success: function (res){
				if(res == 'success'){
					jQuery('.roulette_result_modal_bg .roulette_result_modal .winning_form').hide();
					jQuery('.roulette_result_modal_bg .roulette_result_modal .winning_form_result').show();
				}else{
					console.log(res);
				}
			}
		});
	}
	<?php }?>


	// '꽝'인 유저 ip 저장을 위한 메서드 (중복 응모를 막기 위함)
	function boom_save(){
		<?php if(!$duplicate_participation){?>
			var winning_ip = jQuery('[name="winning_ip"]').val();

			var param = {
					'mode' : 'boom_save',
					'vol_idx' : jQuery('[name="vol_idx"]').val(),
					'product_name' : '꽝',
					'ip' : winning_ip,
				};

			jQuery.ajax({
				type: "POST",
				url: 'roulette_ajax.php',
				timeout: 0,
				data: param,
				cache: false,
				dataType: "text",
				error: function(xhr, textStatus, errorThrown) { console.log("전송에 실패했습니다."); console.log(xhr, textStatus, errorThrown) },
				success: function (res){
					if(res == 'success'){
						console.log(res);
					}else{
						console.log(res);
					}
				}
			});
		<?php }?>
	}
</script>
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

<!-- footer -->
<?php include("footer.php"); ?>
	<!-- //footer -->
</body>
</html>