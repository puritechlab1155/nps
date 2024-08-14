

<?php


//변수
$max_count = 100; //최대 당첨자 수
$event_close = false; 
$vote = false;
$random_number = mt_rand(1, 100); 
$reward = ($random_number <= 30); //count 방식을 변경해야 겠음.



#echo '내가 투표한지 여부:' . $voteName . ' 총 응모자 수:' . $all_count . ' 현재 당첨자 수:' . $current_count;



?>
<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>
	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">
	<script src="script.js"></script>
    <script defer src="./js/main.js"></script>
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
                <div class="top"><span>응모 기간</span><em>9월 11일 오후 2시~<br class="mobile_display">11월 3일 오후 11시 30분</em></div>
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
</section>

<script>

document.addEventListener('DOMContentLoaded', function () {
    // 초기 상태 설정
    document.getElementById('backimage02').style.display = 'none';
    const ladderListItems = document.querySelectorAll('.ladder_list li');
    const destinationListItems = document.querySelectorAll('#destination_list li');

    // 모든 goods_result의 이미지를 숨김
    const goodsResults = document.querySelectorAll('.goods_result img');
    goodsResults.forEach(function(img) {
        img.style.display = 'none';
    });

    let gamePlayed = false; // 게임이 한 번 실행되었는지 확인하는 변수


    //초기 설정: destination_list의 배경 이미지를 설정
        destinationListItems.forEach(function(destItem) {
        destItem.style.background = "url('img/sub13/sub13_ladder_rbtn.png') no-repeat";
        destItem.style.backgroundSize = '100%';
        destItem.style.position = 'relative';
    });

    // ladder_select 클릭 이벤트 설정
    document.querySelectorAll('.ladder_select li').forEach(function (item) {
        item.addEventListener('click', function () {
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
                }, 100);

                // ladder_list 이미지가 표시된 후 해당 goods_result를 표시
                setTimeout(function () {
                    const goodsResult = destinationListItems[index].querySelector('.goods_result');

                    if (goodsResult) {
                        // 8분의 1 확률로 winner 이미지 표시
                        const isWinner = Math.random() < (1/8); 

                        console.log("Index:", index, "Is Winner:", isWinner);

                        // 선택된 goods_result의 이미지를 표시하고 나머지는 숨김
                        if (isWinner) {
                            goodsResult.querySelector('.winner').style.display = 'block';
                            goodsResult.querySelector('.fail').style.display = 'none';
                        } else {
                            goodsResult.querySelector('.winner').style.display = 'none';
                            goodsResult.querySelector('.fail').style.display = 'block';
                        }

                        // 선택된 goods_result를 보이게 함
                        goodsResult.style.display = 'block';
                    } else {
                        console.error("goodsResult가 null입니다. HTML 구조를 확인하세요.");
                    }
                }, 500); // ladder_list 이미지가 표시된 후 0.5초 지연
            }
        });
    });
});



</script>