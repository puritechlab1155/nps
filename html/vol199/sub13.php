<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">

	<!-- kruddo add -->
	<?
		$vol_idx = "199";		// kruddo modify - 호차 번호. 191호가 아닌경우 변경, inc/like_share.php 에서도 변경

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
		$resutl_count = mysqli_num_rows($result);


		if($max_winner_count <= $resutl_count){ // '현재 당첨자 수'가 '최대 당첨자 수'와 같거나 크다면..
			// 룰렛 이벤트 종료 선언 여부
			$roulette_event_close = true;
		}
	?>
</head>
<body>

<div id="wrap" class="sub13">

	<!-- header -->
	<?php include("header.php"); ?>
	<!-- //header -->

	<!-- contents -->
	<style>
		.subscriptionbutton {position: absolute; top: 50%; left: 50%; transform: translateX(-50%); width: 100%; max-width: 173px; max-width: 17.7%;}
		.roulette {position: absolute; top: 57%; left: 50%; transform: translateX(-50%); width: 100%; max-width: 655px; max-width: 66%;}
		.roulette .roulette_wheel {width: 100%; height: 100%;}
		.roulette .arrow.upper {position: absolute; top: calc(50% - 100px); top: 30px; left: 50%; transform: translateX(-50%); border-bottom: 0 solid transparent; border-top: 80px solid #c74757; border-left: 30px solid transparent; border-right: 30px solid transparent;}
		.roulette .arrow.middle {position: absolute; top: calc(50% - 22%); left: 50%; transform: translateX(-50%); border-bottom: 80px solid #c74757; border-top: 0 solid transparent; border-left: 30px solid transparent; border-right: 30px solid transparent;}
		.roulette .start_button {position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: unset; width: 100%; max-width: 21.7%; transition-duration: .3s; cursor: pointer;}
		.roulette .start_button:hover {transform: translate(-50%, -50%) scale(1.05); filter: hue-rotate(250deg);}

		.roulette_result_modal_bg {display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background: rgb(26 26 26 / 60%); z-index: 999;}
		.roulette_result_modal_bg .roulette_result_modal {position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; max-width: 498px; height: auto; background: #fff; border-radius: 20px; overflow: hidden;}
		.roulette_result_modal_bg .roulette_result_modal img {display: none; width: 100%; cursor: pointer;}


		.roulette_result_modal_bg .roulette_result_modal .winning_form {display: none; color: #000; text-align: center; padding: 20px 30px;}
		.roulette_result_modal_bg .roulette_result_modal .winning_form .header {margin-bottom: 20px;}
		.roulette_result_modal_bg .roulette_result_modal .winning_form .header .main_txt {font-size: 1.4em; font-family: 'WavvePADO'; margin-bottom: 10px; color: #8eb3df; }
		.roulette_result_modal_bg .roulette_result_modal .winning_form .header .sub_txt {font-size: .9em; line-height: 20px;}

		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .label { width: 20%; float: left; text-align: left; height: 46px; line-height: 46px; }
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .value { width: 80%; float: right; height: 46px; line-height: 46px; display: flex;  }
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area input:not([type="checkbox"]) {width: 100%; border: 1px solid #ccc; text-align: center; padding: 5px 10px; margin: 4px 0; border-radius: 8px; }
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area input:not([type="checkbox"])::placeholder {color: #888; /*text-align: center;*/}

		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .winning_tel1 { width: 250px; border: 1px solid #ccc; padding: 0 5px; height: 38px; margin-top: 4px; border-radius: 8px; }
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .winning_tel2 { width:34%; }
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .winning_tel3 { width:34%; }

		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .이용약관 {text-align: left; margin-top: 20px; margin-bottom: 30px; display: inline-block; }
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .이용약관 .title {font-size: .9em; font-weight: bold; margin-bottom: 5px;}
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .이용약관 .content {font-size: .8em; background: #eef0f0; height: 130px; padding: 10px; overflow-y: scroll;}
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .이용약관 label {display: inline-block; font-size: .8em;}
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .이용약관 label input[type="checkbox"] {position: relative; top: -1px;}
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .이용약관 label,
		.roulette_result_modal_bg .roulette_result_modal .winning_form .input_area .이용약관 label input[type="checkbox"] {cursor: pointer;}

		.roulette_result_modal_bg .roulette_result_modal .winning_form .submit_btn {display: inline-block; font-family: 'WavvePADO'; color: #fff; background: #81aedc; border-radius: 50px; padding: 10px 60px; cursor: pointer;}
		.roulette_result_modal_bg .roulette_result_modal .winning_form .submit_btn:hover {opacity: .75;}



		.roulette_result_modal_bg .roulette_result_modal .winning_form_result {display: none; color: #000; text-align: center; padding: 20px 30px;}
		.roulette_result_modal_bg .roulette_result_modal .winning_form_result .header {margin-bottom: 40px;}
		.roulette_result_modal_bg .roulette_result_modal .winning_form_result .header .main_txt {font-size: 1.4em; font-family: 'WavvePADO'; color: #8eb3df; }

		.roulette_result_modal_bg .roulette_result_modal .winning_form_result .txt1 {font-size: 18px; line-height: 1.5; margin-bottom: 10px; font-family: 'WavvePADO'; }
		.roulette_result_modal_bg .roulette_result_modal .winning_form_result .txt2 {font-size: 16px; line-height: 1.5; margin-bottom: 20px;}

		.roulette_result_modal_bg .roulette_result_modal .winning_form_result .close_btn {display: inline-block; color: #fff; background: #b3b2b2; border-radius: 50px; padding: 10px 60px; cursor: pointer; font-family: 'WavvePADO';}
		.roulette_result_modal_bg .roulette_result_modal .winning_form_result .close_btn:hover {opacity: .75;}


		.roulette_result_modal_bg .roulette_result_modal .roulette_event_close {display: none; color: #000; text-align: center; padding: 20px 30px;}

		.roulette_result_modal_bg .roulette_result_modal .roulette_event_close .txt {font-size: 30px; line-height: 1.5; margin-bottom: 20px; font-family: 'WavvePADO'; }

		.roulette_result_modal_bg .roulette_result_modal .roulette_event_close .close_btn {display: inline-block; color: #fff; background: #b3b2b2; border-radius: 50px; padding: 10px 60px; cursor: pointer; font-family: 'WavvePADO';}
		.roulette_result_modal_bg .roulette_result_modal .roulette_event_close .close_btn:hover {opacity: .75;}


		@media (max-width: 767px){
			.roulette_result_modal_bg .roulette_result_modal {max-width: 80%;}
			.roulette .arrow.upper {position: absolute; top: calc(50% - 100px); top: 30px; left: 50%; transform: translateX(-50%); border-bottom: 0 solid transparent; border-top: 50px solid #c74757; border-left: 20px solid transparent; border-right: 20px solid transparent;}
			.roulette .arrow.middle {position: absolute; top: calc(50% - 22%); left: 50%; transform: translateX(-50%); border-bottom: 50px solid #c74757; border-top: 0 solid transparent; border-left: 20px solid transparent; border-right: 20px solid transparent;}
		}
	</style>

	<section id="contents">
		<div class="section01 wow fadeBigInUp">
			<div class="content">
				<img src="img/sub13/event4_bg.svg">
				<div class="subscriptionbutton"><a href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'><img src="img/sub13/subscriptionbutton.svg"></a></div>
				<div class="roulette">
					<img class="roulette_wheel" src="img/sub13/roulette.png">

					<div class="arrow middle"></div>

					<button class="start_button" onclick="roulette_start()">
						<img src="img/sub13/roulette_spin.svg">
					</button>
				</div>
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


		<div class="roulette_result_modal_bg">
			<div class="roulette_result_modal">
				<?php if(!$roulette_event_close){?>
					<img class="boom" src="img/sub13/boom.svg" onclick="roulette_result_modal('close')">
					<img class="already" src="img/sub13/already.svg" onclick="roulette_result_modal('close')">

					<?php for($i=1; $i<=4; $i++){?>
						<img class="winning_<?php echo $i?>" src="img/sub13/winning0<?php echo $i?>.jpg" onclick="roulette_result_modal('winning')">
					<?php }?>

					<form class="winning_form">
						<div class="header">
							<div class="main_txt">
								당첨자 정보
							</div>

							<div class="sub_txt">
								폼을 작성하여 제출해주세요.<br>
								제출한 번호로 개별 연락드릴 예정입니다.
							</div>
						</div>

						<div class="input_area">
							<div class="label">이름</div><div class="value"><input type="text" name="winning_name" placeholder=""></div>
							<div class="label">연락처</div><div class="value">
							<select id="phonePrefix" name="winning_tel1" class="winning_tel1">
  								<option value="010" selected>010</option>
  								<option value="011">011</option>
  								<option value="016">016</option>
  								<option value="017">017</option>
  								<option value="018">018</option>
  								<option value="019">019</option>
							</select>
							-<input type="text" name="winning_tel2" class="winning_tel2" maxlength="4" placeholder="">
							-<input type="text" name="winning_tel3"  class="winning_tel3" maxlength="4" placeholder="">
							</div>
							<div class="label">이메일</div><div class="value"><input type="email" name="winning_email" placeholder=""></div>

							<input type="hidden" name="winning_product" value="">
							<input type="hidden" name="winning_ip" value="<?php echo $current_ip?>">
							<input type="hidden" name="vol_idx" value="<?php echo $vol_idx?>">

							<div class="이용약관">
								<div class="title">
									개인보호정책 및 이용약관 동의
								</div>

								<div class="content">
									<b>개인정보 수집 및 이용 동의</b><br>
									수집하는 개인정보 항목: 이름, 연락처, 이메일<br>
									수집 및 이용 목적: 이벤트 참여자 확인 및 당첨자 안내<br>
									보유 및 이용 기간: 당첨자 발표 후 1개월<br><br>

									<b>개인정보 제3자 제공 동의</b><br>
									동의를 거부할 수 있으나, 이 경우 이벤트 참여가 불가능합니다.<br>
									제공받는 자: 큐라인<br>
									제공받는 자의 이용 목적: 이름, 연락처, 이메일<br>
									제공하는 항목: 이름, 연락처, 이메일<br>
									제공받는 자의 보유 및 이용기간: 당첨자 발표 후 1개월<br>
								</div>

								<label for="winning_agree">
									<input type="checkbox" id="winning_agree" name="winning_agree" value="동의함">
									동의합니다.
								</label>
							</div>
						</div>

						<div class="submit_btn" onclick="winning_form_submit()">
							등록!
						</div>
					</form>


					<div class="winning_form_result">
						<div class="header">
							<div class="main_txt">
								등록완료
							</div>
						</div>

						<div class="txt1">
							정상적으로 제출되었습니다.<br>
							제출한 번호로 개별 연락드릴 예정입니다.<br>
							감사합니다.
						</div>
						<div class="txt2">
							*경품 발송 시, <내 곁에 국민연금>의 구독자가 아닐 경우<br>
							당첨이 취소됩니다.
						</div>
						<div class="close_btn" onclick="roulette_result_modal('winning_form_result_close')">
							닫기
						</div>
					</div>
				<?php }else{?>
					<div class="roulette_event_close">
						<div class="txt">
							당첨 정원이 충족돼<br>
							이벤트가 종료됐습니다.
						</div>
						<div class="close_btn" onclick="roulette_result_modal('close')">
							닫기
						</div>
					</div>
				<?php }?>
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

	<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- //footer -->
</body>
</html>