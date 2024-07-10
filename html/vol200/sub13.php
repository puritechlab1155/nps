<?php


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
				<div id="playSoundButton">
					<audio id="click-sound" src="img/sub13/sea_sound.mp3"></audio>
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
	
	<script>
		var sound = document.getElementById('click-sound');
		var playSoundButton = document.getElementById('playSoundButton');
		
		playSoundButton.addEventListener('click', function() {
			sound.currentTime = 0; // 오디오를 처음부터 재생
			sound.play
			// 3초 후에 멈추기
			setTimeout(function() {
				sound.pause();
				sound.currentTime = 0; // 오디오를 처음으로 되돌림
			}, 3000);
		});

		$('.popUp').hide();
		$('.result_modal03 .button').click(function(){
			$('.popUp').hide();
			location.reload();
		});
		$('.result_modal04 .button').click(function(){
			$('.popUp').hide();
			location.reload();
		});

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
        $('.result_modal04').show(); 
    } else {
        $('.result_modal01').hide();
        $('.result_modal02').hide();
        $('.result_modal03').hide();
        $('.result_modal04').show();
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

						// Chain the second AJAX request here
						$.ajax({
            type: "POST",
            url: 'http://ec2-13-209-64-4.ap-northeast-2.compute.amazonaws.com/api/prizes', 
            data: param2,
            cache: false,
            dataType: "text",
            error: function(xhr, textStatus, errorThrown) {
                console.log("전송에 실패했습니다.");
                console.log(xhr, textStatus, errorThrown);
            },
            success: function(res) {
                console.log('Second AJAX request success');
            }
        });
        }
    });


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


			$.ajax({
				type: "POST",
				url: 'ajax.php',
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

		/*	$.ajax({
        type: "POST",
        url: 'http://ec2-13-209-64-4.ap-northeast-2.compute.amazonaws.com/api/prizes', 
        data: param,
        cache: false,
        dataType: "text",
        error: function(xhr, textStatus, errorThrown) {
            console.log("전송에 실패했습니다.");
            console.log(xhr, textStatus, errorThrown);
        },
        success: function(res) {
					console.log('success');
        }
    }); */
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