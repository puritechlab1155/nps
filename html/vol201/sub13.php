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
$query = "SELECT * FROM `stair_event_list` WHERE `vol_idx`={$vol_idx}";
$result = mysqli_query($connect, $query);

if (!$result) {
    die('Error fetching stair_event_list: ' . mysqli_error($connect));
}

//총 응모자 수
$all_count = mysqli_num_rows($result);

//쿼리
$query = "SELECT * FROM `stair_event_list` WHERE `vol_idx`={$vol_idx} AND `product_name`!='꽝'";
$result = mysqli_query($connect, $query);

if (!$result) {
    die('Error fetching stair_event_list: ' . mysqli_error($connect));
}

$current_count = mysqli_num_rows($result); //현재 당첨자 수

$my_query = "SELECT * FROM `stair_event_list` WHERE `vol_idx`={$vol_idx} AND `ip`='{$current_ip}' AND `device`='{$current_device}'";
$result = mysqli_query($connect, $my_query);

if (!$result) {
    die('Error fetching my_query: ' . mysqli_error($connect));
}

if ($max_count <= $current_count) { //최대 당첨자 수를 넘을 경우
	$event_close = true; // 이벤트 종료 선언
} else {
	$reward = (($all_count + 1) % 20 == 0);
} 

$reward = ($random_number <= 30); //count 방식을 변경해야 겠음.

$my_regno = mysqli_num_rows($result); //내가 투표한지 여부
if($my_regno > 0) {
	$vote = true; //투표 금지
	$event_close = true; //이벤트 실행 금지
	$reward = false; //상품 금지
}

?>
<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>
	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">
    <!-- <script src="js/main.js"></script> -->
</head>

<body>
    <div id="wrap" class="sub13">
        <!-- header -->
        <?php include("header.php"); ?>
        <!-- //header -->

    <!-- contents -->
    <section id="contents">
        <div class="section01 wow fadeBigInUp">
            <div class="content">
                <div class="title"><img src="img/sub13/sub13_01.png" class="pc_display"><img src="img/sub13/sub13_01_mo.png" class="mobile_display"></div>
                <div class="text mobile_display">
                    내곁에 국민연금을 방문해 주신 구독자 여러분께 감사의 마음을 담아 사다리 타기 이벤트를 준비했습니다. 이벤트 기간 내 사다리를 타신 구독자님들 중 100분께 5천원 상당의 기프티콘을 드립니다.
                </div>
            </div>
            <div class="gift"><div><img src="img/sub13/sub13_02.png" class="pc_display"><img src="img/sub13/sub13_02_mo.png" class="mobile_display"></div></div>
        </div><!-- //section01 -->

        <div class="section02 wow fadeBigInUp">
            <div class="content">
                <div class="howto">
                    <img src="img/sub13/sub13_03.svg" class="pc_display">
                    <img src="img/sub13/sub13_03_mo.svg" class="mobile_display">
                </div>
                <div class="date_area">
                    <div class="top"><span>응모 기간</span><em>9월 13일 오후 2시 ~ <br class="mobile_display">11월 3일 오후 11시 30분</em></div>
                    <div><span>경품 발송</span><em>11월 11일 오후 5시</em></div>
                </div>
                <div class="button"><a class="subscribe" href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target='_blank'>구독하기</a> <span class="end" href="#">마감되었습니다</span></div>

                <div class="event_wrap">
                    <div class="event_cont">
                        <ul class="ladder_select img_list_ul" id="ladder_text_image">
                            <li id="img1Id" class="imagDom img1" style="background: url('img/sub13/sub13_ladder01.png') no-repeat; background-size: 100%;" index=0></li>
                            <li id="img2Id" class="imagDom img2" style="background: url('img/sub13/sub13_ladder02.png') no-repeat; background-size: 100%;" index=1></li>
                            <li id="img3Id" class="imagDom img3" style="background: url('img/sub13/sub13_ladder03.png') no-repeat; background-size: 100%;" index=2></li>
                            <li id="img4Id" class="imagDom img4" style="background: url('img/sub13/sub13_ladder04.png') no-repeat; background-size: 100%;" index=3></li>
                        </ul>

                        <div class="ladder" id="ladder_body">
                            <img src="img/sub13/sub13_ladder_body.png" id="backimage01">
                            <img src="img/sub13/sub13_ladder_body02.png" id="backimage02">

                            <ul class="ladder_list">
                                <li class="ladder-line1"><img src="img/sub13/sub13_ladder_rline01.png"></li>
                                <li class="ladder-line2"><img src="img/sub13/sub13_ladder_rline02.png"></li>
                                <li class="ladder-line3"><img src="img/sub13/sub13_ladder_rline03.png"></li>
                                <li class="ladder-line4"><img src="img/sub13/sub13_ladder_rline04.png"></li>
                            </ul>
                        </div>

                        <div class="button_list">
                            <ul id="destination_list">
                                <li class="dest1">
                                    <div class="goods_result">
                                        <div class="winner"><img src="./img/sub13/sub13_winner.png" alt=""></div>
                                        <div class="fail"><img src="./img/sub13/sub13_fail.jpg" alt=""></div>
                                    </div>
                                </li>
                                <li class="dest2">
                                    <div class="goods_result">
                                        <div class="winner"><img src="./img/sub13/sub13_winner.png" alt=""></div>
                                        <div class="fail"><img src="./img/sub13/sub13_fail.jpg" alt=""></div>
                                    </div>
                                </li>
                                <li class="dest3">
                                    <div class="goods_result">
                                        <div class="winner"><img src="./img/sub13/sub13_winner.png" alt=""></div>
                                        <div class="fail"><img src="./img/sub13/sub13_fail.jpg" alt=""></div>
                                    </div>
                                </li>
                                <li class="dest4">
                                    <div class="goods_result">
                                        <div class="winner"><img src="./img/sub13/sub13_winner.png" alt=""></div>
                                        <div class="fail"><img src="./img/sub13/sub13_fail.jpg" alt=""></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- //event_cont -->
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
                        <li>많은 분께 이벤트 혜택을 드리기 위해 중복 당첨 시 경품 지급은 한 번만 이뤄집니다.</li>
                        <li>당첨자에 한해 개인정보가 경품 발송 대행사에 전달되며 경품 발송 후 즉시 폐기됩니다.</li>
                        <li>정확하지 않은 개인정보로 인해 당첨자 연락이 되지 않거나 확인이 불가능할 경우, 당첨 취소됩니다.</li>
                    </ul>
                </div>
            </div>
        </div><!-- //section02 -->


        <!-- 이벤트 참여 상태에 따른 팝업 -->
            <?php if($vote) { #echo '투표한 경우';// 투표한 경우 ?>
            <div class="popUp result_modal04" style="display:block;">
                <div class="modal">
                    <div class="content">
                        <p>이미 응모하셨습니다.</p>
                        <div class="button modal-close">확인</div>
                    </div>
                </div>
            </div>
            <?php } else if(!$event_close && $reward) { #echo '성공한 경우'; // 성공한 경우 ?>

                <!--  이벤트에 당첨된 경우 로직 -->
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
                            <p>CU 편의점 모바일 상품권 5천원</p>
                        </div>
                        <div class="text_box">
                            <span>폼을 작성하여 제출해주세요.<br>제출한 번호로 개별 연락드릴 예정입니다.</span>
                            <p>*경품 발송 시, &lt;내 곁에 국민연금&gt;의 구독자가 아닐 경우 당첨이 취소됩니다.</p>
                        </div>
                        <div class="button modal-close">클릭!</div>
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
            <div class="popUp result_modal06">
                <div class="modal">
                    <div class="content">
                        <p>당첨 정원이 충족돼<Br />이벤트가 종료됐습니다.</p>
                        <div class="button modal-close">닫기</div>
                    </div>
                </div>
            </div>
            <?php } ?>

            <div class="popUp result_modal02" style="display:none;">
                <div class="modal">
                    <div class="content">
                        <form class="winning_form">
                            <div class="header">
                                <div class="main_txt">당첨자 정보</div>
                                <div class="sub_txt">
                                    폼을 작성하여 제출해주세요.<br>제출한 번호로 개별 연락드릴 예정입니다.<br>
                                    *경품 발송 시, &lt;내 곁에 국민연금&gt;의 구독자가 아닐 경우 당첨이 취소됩니다.
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
                                    <input type="hidden" name="product" value="CU카드">
                                    <input type="hidden" name="ip" value="<?php echo $current_ip?>">
                                    <input type="hidden" name="device" value="<?php echo $current_device?>">
                                    <input type="hidden" name="vol_idx" value="<?php echo $vol_idx?>">
                                </div>

                                <div class="agreement">
                                    <div class="title">개인보호정책 및 이용약관 동의</div>
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
                            <div class="submit_btn">등록!</div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="popUp result_modal03" style="display:none;">
                <div class="modal">
                    <div class="content">
                        <div class="main_text">등록 완료</div>
                        <p>
                            정상적으로 제출되었습니다.<br>
                            제출한 번호로 개별 연락드릴 예정입니다.<br>
                            감사합니다.
                        </p>
                        <span>*경품 발송 시, &lt;내 곁에 국민연금&gt;의 구독자가 아닐 경우 <br class="mobile_display">당첨이 취소됩니다. </span>
                        <div class="button modal-close">닫기</div>
                    </div>
                </div>
            </div>
    </section>

    <!-- page ctrl -->
	<div class="page_ctrl">
		<?php include("page_ctrl.php"); ?>
	</div>
	<!-- //page ctrl -->

    <script>

	$('.popUp').hide();

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
        "vol": "201",
        "award": "CU카드",
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

    <script>

document.addEventListener('DOMContentLoaded', function () {
            // 이미지 클릭 이벤트 리스너를 설정
            const ladderItems = document.querySelectorAll('.ladder_select li');

            // 클릭 이벤트 설정
            ladderItems.forEach(function (item) {
                item.addEventListener('click', function () {
                    const clickedIndex = item.getAttribute('index'); // 클릭된 이미지의 인덱스 추출

                    // 나머지 이미지들의 배경을 img-change로 변경
                    ladderItems.forEach(function (otherItem) {
                        const otherIndex = otherItem.getAttribute('index');
                        if (otherIndex !== clickedIndex) {
                            switch (otherIndex) {
                                case '0':
                                    otherItem.style.background = "url('img/sub13/sub13_ladder01__01.png') no-repeat";
                                    otherItem.style.backgroundSize = '100%';
                                    break;
                                case '1':
                                    otherItem.style.background = "url('img/sub13/sub13_ladder02__02.png') no-repeat";
                                    otherItem.style.backgroundSize = '100%';
                                    break;
                                case '2':
                                    otherItem.style.background = "url('img/sub13/sub13_ladder03__03.png') no-repeat";
                                    otherItem.style.backgroundSize = '100%';
                                    break;
                                case '3':
                                    otherItem.style.background = "url('img/sub13/sub13_ladder04__04.png') no-repeat";
                                    otherItem.style.backgroundSize = '100%';
                                    break;
                            }
                        }
                    });
                });
            });
        });


document.addEventListener('DOMContentLoaded', function () {
    // 초기 상태 설정 등 나머지 코드를 여기에 포함시킵니다.
    document.getElementById('backimage02').style.display = 'none';
    const ladderListItems = document.querySelectorAll('.ladder_list li');
    const destinationListItems = document.querySelectorAll('#destination_list li');

    // 모든 goods_result의 이미지를 숨김
    const goodsResults = document.querySelectorAll('.goods_result img');
    goodsResults.forEach(function (img) {
        img.style.display = 'none';
    });

    // 초기 설정: destination_list의 배경 이미지를 설정
    destinationListItems.forEach(function (destItem) {
        destItem.style.background = "url('img/sub13/sub13_ladder_rbtn.png') no-repeat";
        destItem.style.backgroundSize = '100%';
        destItem.style.position = 'relative';
    });

    let gamePlayed = false; // 게임이 한 번 실행되었는지 확인하는 변수



    // var hasVoted = false;  // 이벤트에 참여하지 않은 상태로 테스트
    // var hasVoted = true;  // 이벤트에 이미 참여한 상태로 테스트




   // 이미 이벤트에 참여했는지 확인
//    var hasVoted = <?php //echo json_encode($vote); ?>;



    
    // ladder_select 클릭 이벤트 설정
    document.querySelectorAll('.ladder_select li').forEach(function (item) {
        item.addEventListener('click', function () {




            // if (hasVoted) {
            //     // 이미 참여한 경우 팝업을 표시하고 더 이상 진행하지 않음
            //     console.log("User has already participated. Showing modal 4.");
            //     openModal('result_modal04');
            //     return;
            // }




            if (gamePlayed) return; // 게임이 이미 실행되었다면 더 이상 진행하지 않음
            gamePlayed = true; // 게임이 실행되었음을 표시

            // 첫 번째 이미지 변경
            document.getElementById('backimage01').style.display = 'none';
            document.getElementById('backimage02').style.display = 'block';

            // 모든 ladder_list 이미지를 숨김
            ladderListItems.forEach(function (listItem) {
                listItem.classList.remove('show');
            });

            // 클릭된 항목에 따라 ladder_list 이미지 표시
            let index;
            if (item.classList.contains('img1')) {
                index = 2;
            } else if (item.classList.contains('img2')) {
                index = 3;
            } else if (item.classList.contains('img3')) {
                index = 0;
            } else if (item.classList.contains('img4')) {
                index = 1;
            }

            // ladder_list 항목을 지연 후 표시
            if (index !== undefined) {
                setTimeout(function () {
                    ladderListItems[index].classList.add('show');
                    
                    // ladder_list 이미지가 표시된 후 1초 뒤에 goods_result를 표시
                    setTimeout(function () {
                        const goodsResult = destinationListItems[index].querySelector('.goods_result');

                        if (goodsResult) {
                            // 3분의 1 확률로 winner 이미지 표시
                            const isWinner = <?php echo json_encode($reward); ?>;

                            console.log("Index:", index, "Is Winner:", isWinner);

                            // 선택된 goods_result의 이미지를 표시하고 나머지는 숨김
                            if (isWinner) {
                                goodsResult.querySelector('.winner img').style.display = 'block';
                                goodsResult.querySelector('.fail img').style.display = 'none';
                                // .8초 지연 후 모달1 표시
                                setTimeout(function () {
                                    openModal('result_modal01'); // "축하합니다! 당첨되셨습니다." 팝업 열기
                                }, 800); // 모달 표시 지연 시간 (.8초)



                            } else {
                                goodsResult.querySelector('.winner img').style.display = 'none';
                                goodsResult.querySelector('.fail img').style.display = 'block';

                                console.log('Fail modal should open'); // 디버깅용 로그
                                // .8초 지연 후 모달5 표시
                                setTimeout(function () {
                                    openModal('result_modal04'); // "당첨되지 않았습니다." 팝업 열기
                                }, 800); // 모달 표시 지연 시간 (.8초)
                            }

                            // 선택된 goods_result를 보이게 함
                            goodsResult.style.display = 'block';

                        } else {
                            console.error("goodsResult가 null입니다. HTML 구조를 확인하세요.");
                        }
                    }, 700); // ladder_list 이미지가 표시된 후 .7초 뒤에 goods_result 표시
                }, 500); // ladder_list 이미지가 표시된 후 0.5초 지연
            }
        });
    });

    // 팝업 닫기 버튼에 이벤트 리스너 추가
    document.querySelectorAll('.modal-close').forEach(function (button) {
        button.addEventListener('click', function (event) {
            closeModal(event);
        });
    });


     // 모달1의 버튼을 클릭하면 모달2(폼 작성 모달)를 열기
     document.querySelector('.result_modal01 .modal-close').addEventListener('click', function () {
        closeModal(event);  // 모달1 닫기
        setTimeout(function () {
            openModal('result_modal02');  // 모달2 열기
        }, 500); // 모달2가 0.5초 뒤에 열리도록 설정
    });

});


// 팝업 열기 함수는 DOMContentLoaded 이벤트 핸들러 밖에서 정의.
function openModal(modalClass) {
    const modalElement = document.querySelector('.' + modalClass);
    if (modalElement) {
        console.log(`Modal with class ${modalClass} found`);  // 모달이 찾아졌는지 확인
        modalElement.style.display = 'block';
        modalElement.style.zIndex = '10000'; // 항상 위로 설정
    } else {
        console.error(`Modal with class ${modalClass} not found`);
    }
}

// 팝업 닫기 함수
function closeModal(event) {
    // 현재 클릭된 버튼의 부모 요소 중 .popUp 클래스를 가진 요소를 찾아서 닫음
    var modal = event.target.closest('.popUp');
    if (modal) {
        modal.style.display = 'none';
    }
}



// 현재 날짜와 비교하여 send와 end 클래스를 제어하는 함수
function controlSendEnd() {
    // 현재 날짜 및 시간 객체 생성
    var currentDate = new Date();

    // 비교할 날짜와 시간 설정 (2024년 11월 03일 23시 30분 00초)
    var targetDate = new Date("2024-11-03T23:30:00");

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



<!-- //footer -->
<?php include("footer.php"); ?>
</body>
</html>
