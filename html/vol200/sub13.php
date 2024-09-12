<?php
include_once("config.php");

//변수
$max_count = 100; //최대 당첨자 수
$event_close = false; 
$vote = false;
$random_number = mt_rand(1, 100); 

//데이터 불러오기
$vol_idx = mysqli_real_escape_string($connect, $vol_idx);

//쿼리
$query = "SELECT * FROM `ocean_event_list` WHERE `vol_idx`={$vol_idx}";
$result = mysqli_query($connect, $query);

if (!$result) {
    die('Error fetching ocean_event_list: ' . mysqli_error($connect));
}

//총 응모자 수
$all_count = mysqli_num_rows($result);
//쿼리
$query = "SELECT * FROM `ocean_event_list` WHERE `vol_idx`={$vol_idx} AND `product_name`!='꽝'";
$result = mysqli_query($connect, $query);

if (!$result) {
    die('Error fetching ocean_event_list: ' . mysqli_error($connect));
}

$current_count = mysqli_num_rows($result); //현재 당첨자 수
$my_query = "SELECT * FROM `ocean_event_list` WHERE `vol_idx`={$vol_idx} AND `ip`='{$current_ip}' AND `device`='{$current_device}'";
$result = mysqli_query($connect, $my_query);

if (!$result) {
    die('Error fetching my_query: ' . mysqli_error($connect));
}

if ($max_count <= $current_count) { //최대 당첨자 수를 넘을 경우
	$event_close = true; // 이벤트 종료 선언
} else {
	$reward = (($all_count + 1) % 20 == 0);
} 

$reward = ($random_number <= 50); //count 방식을 변경해야 겠음.

$my_regno = mysqli_num_rows($result); //내가 투표한지 여부
echo $my_regno . 'hello world';
if($my_regno > 0) {
	$vote = true;
	$event_close = true;
	$reward = false;
}

?>
<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>
	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">
	<script src="script.js"></script>
</head>
<style>
	@media only all and (max-width:767px) {
	.result_modal02 .modal .content .winning_form .input_area .winner_name input {
		width: 270px;
	}

.result_modal02 .modal .content .winning_form .input_area .winner_phone .sel select {  width: 70px;  }
.result_modal02 .modal .content .winning_form .input_area .winner_phone .sel input { width: 70px;  }

	}

	@media only all and (max-width: 767px) {
		.result_modal01 .modal { width: 100%; max-width: 250px; height: auto; }
		.result_modal01 .modal .content { padding: 20px 15px; }
		.result_modal01 .modal .content .message .main_text { font-size: 25px; margin: -25px auto 5px; }
		.result_modal01 .modal .content .message .sub_text { font-size: 18px; }
		.result_modal01 .modal .content .gift_area { padding: 10px 0 5px; margin: 10px auto; }
		.result_modal01 .modal .content .gift_area p { font-size: 12px; margin-top: 8px; }
		.result_modal01 .modal .content .text_box span { font-size: 13px; }
		.result_modal01 .modal .content .text_box p { font-size: 11px; margin: 10px auto 15px; }
		.result_modal01 .modal .content .button { font-size: 20px; }

		.result_modal02 .modal { width: 100%; max-width: 250px; height: auto; }
		.result_modal02 .modal .content { padding: 20px 15px; }
		.result_modal02 .modal .content .winning_form .header .main_txt { font-size: 20px; }
		.result_modal02 .modal .content .winning_form .header .sub_txt { font-size: 10px; margin: 8px auto 15px; }
		.result_modal02 .modal .content .winning_form .input_area > div label { font-size: 12px; }
		.result_modal02 .modal .content .winning_form .input_area .winner_name { align-items: center; }
		.result_modal02 .modal .content .winning_form .input_area .winner_name input { width: 150px; height: 25px; }
		.result_modal02 .modal .content .winning_form .input_area .winner_phone { margin: 8px 0; align-items: center; }
		.result_modal02 .modal .content .winning_form .input_area .winner_phone .sel select { width: 40px; height: 25px; }
		.result_modal02 .modal .content .winning_form .input_area .winner_phone .sel input { width: 40px; height: 25px; }
		.result_modal02 .modal .content .winning_form .input_area .winner_email { align-items: center; }
		.result_modal02 .modal .content .winning_form .input_area .winner_email input { width: 150px; height: 25px; }
		.result_modal02 .modal .content .winning_form .agreement .title { font-size: 11px; margin: 10px 0 0; }
		.result_modal02 .modal .content .winning_form .agreement .cont { height: 100px; padding: 5px; }
		.result_modal02 .modal .content .winning_form .agreement .cont dl dt { font-size: 10px; }
		.result_modal02 .modal .content .winning_form .agreement .cont dl dd { font-size: 10px; }
		.result_modal02 .modal .content .winning_form .agreement .winner_agree input { width: 20px; height: 20px; }
		.result_modal02 .modal .content .winning_form .submit_btn { font-size: 20px; }

		.result_modal03 .modal { width: 100%; max-width: 250px; height: auto; }
		.result_modal03 .modal .content { padding: 20px 15px; }
		.result_modal03 .modal .content .main_text { font-size: 25px; }
		.result_modal03 .modal .content p { font-size: 13px; margin: 20px auto 15px; }
		.result_modal03 .modal .content span { font-size: 10px; }
		.result_modal03 .modal .content .button { font-size: 20px; }

		.result_modal04 .modal { width: 100%; max-width: 250px; height: auto; }
		.result_modal04 .modal .content { padding: 20px 15px; }
		.result_modal04 .modal .content .message .img_box { width: 150px; margin: 20px auto 15px; }
		.result_modal04 .modal .content .message .img_box img { width: 100%; }
		.result_modal04 .modal .content .main_text { font-size: 25px; }
		.result_modal04 .modal .content .sub_text { font-size: 18px; }
		.result_modal04 .modal .content .button { font-size: 20px; }
	}

</style>

<body>
<div id="wrap" class="sub13">
	<!-- header -->
	<?php include("header.php"); ?>
	<!-- //header -->
	<!-- contents -->
	<section id="contents" >
		<div class="section01 wow fadeBigInUp">
			<div class="content">
				<div class="title">
					<div class="sub_box" >
						<div class="main_title"><img src="img/sub13/sub13_01-title.svg"></div>
						<div class="text1">덥다 더워~ 행운 잡고,<br> 무더위 날리자~</div>
						<div class="text2">
							<?php 
								echo '내가 투표한지 여부:' . $vote . $current_count . '내 결과:' . $reward . ' 총 응모자 수:' . $all_count . ' 현재 당첨자 수:'; ?>
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
				<div class="click_text">아래에서 원하는 물음표를 눌러 주세요!</div>
				<div id="playSoundButton">
					<audio id="click-sound" src="img/sub13/sea_sound.mp3"></audio>
					<script>
						document.getElementById('playSoundButton').addEventListener('click', function() {
							var audio = document.getElementById('click-sound');
							audio.play();
							setTimeout(function() {
							audio.pause();
							audio.currentTime = 0;  // 오디오 재생 위치를 처음으로 설정
						}, 3000);  // 3초 후에 오디오를 정지

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
					    <li><span>&lt;내 곁에 국민연금&gt; 웹진 이벤트 5종에 대한 중복 당첨은 불가합니다.</span></li>
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
	<?php if($vote) { #echo '투표한 경우';// 투표한 경우 ?>
		<div class="popUp result_modal04">
		<div class="modal">
			<div class="content">
				<p>
				이미 응모하셨습니다.
				</p>
				<div class="button">확인</div>
			</div>
		</div>
	</div>
	<?php } else if(!$event_close && $reward) { #echo '성공한 경우'; // 성공한 경우 ?>
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
					<p>스타벅스 카드 1만원 </p>
				</div>
				<div class="text_box">
					<span>폼을 작성하여 제출해주세요.<br>제출한 번호로 개별 연락드릴 예정입니다.</span>
					<p>*경품 발송 시, &lt;내 곁에 국민연금&gt;의 구독자가 <br>아닐 경우 당첨이 취소됩니다. </p>
				</div>
				<div class="button" >클릭!</div>
			</div>
		</div>
	</div>
	<?php  } else if(!$event_close && !$reward) { #echo '실패한 경우'; //실패한 경우 ?>
	<div class="popUp result_modal04">
		<div class="modal">
			<div class="content">
				<div class="message">
					<div class="img_box"><img src="img/sub13/fail.svg"></div>
					<div class="main_text">당첨되지 않았습니다.</div>
					<div class="sub_text">다음에 다시 참여해주세요.</div>
				</div>
				<div class="button" onclick="boom_submit()">확인</div>
			</div>
		</div>
	</div>
	<?php } else { // 더이상 신청이 불가한 경우 ?>
		<div class="popUp result_modal04">
		<div class="modal">
			<div class="content">
				<p>
				당첨 정원이 충족돼<Br />
이벤트가 종료됐습니다.
				</p>
				<div class="button">닫기</div>
			</div>
		</div>
	</div>
	<?php } ?>

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
							<div class="winner_name"><label for="winning_name">성명</label><input type="text" name="name" placeholder=""></div>
							<div class="winner_phone">
								<label>휴대폰 번호</label>
								<div class="sel">
									<select name="tel1" class="winning_tel1">
										<option value="010" selected>010</option>
										<option value="011">011</option>
										<option value="016">016</option>
										<option value="017">017</option>
										<option value="018">018</option>
										<option value="019">019</option>
									</select>
									- <input type="text" name="tel2" class="winning_tel2" maxlength="4" placeholder="">
									- <input type="text" name="tel3"  class="winning_tel3" maxlength="4" placeholder="">
								</div>
							</div>
							<div class="winner_email"><label for="winning_email">E-mail</label><input type="email" name="email" placeholder=""></div>
							<input type="hidden" name="product" value="스타벅스">
							<input type="hidden" name="ip" value="<?php echo $current_ip?>">
							<input type="hidden" name="device" value="<?php echo $current_device?>">
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
								<input type="checkbox" id="winning_agree" name="agree" value="동의함">
								<label for="winning_agree">동의합니다</label>
							</div>
						</div>
					</div>
					<div class="submit_btn">
    				등록!
					</div>
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
			var event_close = <?php echo json_encode($event_close); ?>;
    var reward = <?php echo json_encode($reward); ?>;
    console.log(event_close);

    if (!event_close && reward) {
        $('.result_modal01').show();
        $('.result_modal02').hide();
        $('.result_modal03').hide();
        $('.result_modal04').hide();
    } else if (!event_close && !reward) { 
        $('.result_modal01').hide();
        $('.result_modal02').hide();
        $('.result_modal03').hide();
        $('.result_modal04').show();  // This block should show result_modal04
    } else {
        $('.result_modal01').hide();
        $('.result_modal02').hide();
        $('.result_modal03').hide();
        $('.result_modal04').show();  // This block should also show result_modal04 if none of the above conditions match
    }
		});
	$('.result_modal01 .button').click(function(){
			$('.result_modal01').hide();
			$('.result_modal02').show();
			$('.result_modal03').hide();
		});
	$('.result_modal02 .submit_btn').click(function(event) {
    event.preventDefault();

    var name = $('[name="name"]').val();
    var tel1 = $('[name="tel1"]').val();
    var tel2 = $('[name="tel2"]').val();
    var tel3 = $('[name="tel3"]').val();
    var tel = tel1 + '-' + tel2 + '-' + tel3;
    var email = $('[name="email"]').val();
    var product = $('[name="product"]').val();
    var ip = $('[name="ip"]').val();
    var device = $('[name="device"]').val();
    var agree = $('[name="agree"]').prop('checked');

    if (name == '') {
        alert('성명을 입력해주세요');
        $('[name="name"]').focus();
        return;
    }

    if (tel2 == '' || tel3 == '') {
        alert('휴대폰 번호를 입력해주세요');
        $('[name="tel2"]').focus();
        return;
    }

    if (email == '') {
        alert('이메일 주소를 입력해주세요');
        $('[name="email"]').focus();
        return;
    }

    if (!agree) {
        alert('개인보호정책 및 이용약관 동의가 필요합니다.');
        $('[name="agree"]').focus();
        return;
    }

    var param = {
        'mode': 'winner_save',
        'vol_idx': $('[name="vol_idx"]').val(),
        'name': name,
        'tel': tel,
        'email': email,
        'product_name': product,
        'ip': ip,
        'device': device,
        'agree': agree
    };

		var param2 = {
        'vol': $('[name="vol_idx"]').val(),
        'name': name,
        'phone': tel,
        'email': email,
        'award': product,
        'wip': ip,
        'device': device,
        'agree': agree
    };

    $.ajax({
        type: "POST",
        url: 'ajax.php', 
        data: param,
        cache: false,
        dataType: "text",
        error: function(xhr, textStatus, errorThrown) {
            console.log("전송에 실패했습니다.");
            console.log(xhr, textStatus, errorThrown);
        },
        success: function(res) {
					console.log('success');
                // Show success message or handle accordingly
								$('.result_modal01').hide();
        				$('.result_modal02').hide();
        				$('.result_modal03').show();
        				$('.result_modal04').hide();
        }
    });

});
		$('.result_modal03 .button').click(function(){
			$('.popUp').hide();
			location.reload();
		});
		$('.result_modal04 .button').click(function(){
			$('.popUp').hide();
			location.reload();
		});

function boom_submit() {
	
	var ip = $('[name="ip"]').val();
	var device = $('[name="device"]').val();
	var param = {
					'mode' : 'boom_save',
					'vol_idx' : jQuery('[name="vol_idx"]').val(),
					'product_name' : '꽝',
					'ip' : ip,
					'device' : device
				};

				var param2 = {
        "vol": "200",
        "award": "스타벅스",
        "name": "홍길동",
        "phone": "0101255444",
        "email": "githn1111@gmail.com",
        "agree": 1
    };

		$.ajax({
				type: "POST",
				url: 'ajax.php',
				timeout: 0,
				data: param,
				cache: false,
				dataType: "text",
				error: function(xhr, textStatus, errorThrown) { console.log("전송에 실패했습니다."); console.log(xhr, textStatus, errorThrown) },
				success: function (res){
					$.ajax({
                type: "POST",
                url: 'http://ec2-13-209-64-4.ap-northeast-2.compute.amazonaws.com/api/prizes',
                data: JSON.stringify(param2),
                dataType: "json",
                contentType: "application/json",
                processData: false,
                cache: false,
                headers: {
                    'Accept': 'application/json'
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log("Second AJAX request failed.");
                    console.log(xhr, textStatus, errorThrown);
                }
            });
				
				}
			});

}

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
	<!-- contents -->

	<!-- page ctrl -->
	<div class="page_ctrl">
		<?php include("page_ctrl.php"); ?>
	</div>
	<!-- //page ctrl -->
</div>

<!-- footer -->
<?php include("footer.php"); ?>
	<!-- //footer -->
</body>
</html>