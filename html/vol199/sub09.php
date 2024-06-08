<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>

	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">
</head>
<body>

<div id="wrap" class="sub09">

	<!-- header -->
	<?php include("header.php"); ?>
	<!-- //header -->

	<!-- contents -->
	<section id="contents">
		<div class="section01 wow fadeBigInUp">
			<div class="content">
				<div class="title">오늘의 레시피</div>
				<div class="text">일러스트. 강영지</div>
				<div class="angle-down"><i class="xi-angle-down-min"></i></div>
			</div>
		</div>

		<div class="section02 wow fadeBigInUp">
			<div class="content">
				<div class="content01 fadeBigInUp">
					<div class="subtitle">우리의 삶에 강한 생명력을 불어넣는 미나리</div>
					<div class="title">산뜻한 ‘미나리전’ 레시피</div>
					<div class="headcopy">
						만물이 생동하는 봄엔 황량했던 풍경이 오색으로 변한다.<br>
						시장을 거닐 때 숨결을 파고드는 산뜻한 미나리 향기도 괜스레 우리 마음을 들뜨게 한다.<br>
						푸른 줄기에 흐드러진 잎사귀를 가진 미나리 덕분에 우리는 봄이 왔음을 알아챈다.
					</div>
					<div class="line"></div>
					<div class="subcopy">
						<b>미나리가 얼마나 좋은 건데…</b><br>
						나이가 지긋한 할머니가 미국 시골의 한 개울가에 미나리 씨를 뿌리고 원더풀 노래를 부른다.
					</div>
				</div>
				<div class="content02 fadeBigInUp"><img src="img/sub09/sub09_02.jpg"></div>
				<div class="content03 fadeBigInUp">
					<div class="text">영화 <미나리> 속 순자의 이야기다. 순자는 미국으로 이민 간 딸 모니카의 요청으로 머나먼 땅으로 향한다. 이름도 낯선 아칸소의 어느 농장에 터를 꾸린 딸네 가족들을 위해 정성을 다하는 순자. 그러나 타지에서 살아 내기 위해 고군분투하는 딸과 사위는 현실의 벽 앞에 점점 팍팍해진다. 10년 전 아메리칸드림을 꿈꾸며 달려온 미국에서 점점 고립되는 사위와 고향을 그리워하는 딸과 달리 순자는 미나리 씨를 뿌림으로써 적응하기 시작한다. 순자는 왜 다른 식물이 아닌 미나리 씨를 뿌렸을까?</div>
					<div class="subitle">끈질긴 생명력의 메타포</div>
					<div class="text">미나리는 물만 있으면 어디서든 자란다. 보통 식물은 오염된 토양에서 자라진 못하는데, 미나리는 오염된 토양에서 자랄 뿐만 아니라 수질을 정화하는 역할까지 겸해 오래 전부터 끈질긴 생명력의 상징이었다. 2000년대 초반엔 경북 영덕에서 오염된 하천의 수질 정화를 위해 미나리를 심었고, 2003년부터 2017년까지는 서울 한강의 원효대교 북단에서 미나리를 수경 재배하며 수질 정화를 이루어 냈다. 이처럼 영화 속 미나리도 강한 생명력의 상징물로 쓰였다. 영화 <미나리>의 정이삭 감독은 미나리를 메타포로 활용해 미국에 적응한 순자, 뇌졸중임에도 굴하지 않는 순자, 가족 사랑을 더욱 단단하게 만든 순자를 보여주며 관람객에게 긍정적인 메시지를 던진다.</div>
					<div class="text_boldline">“미나리의 질긴 생명력과 적응력이 우리 가족과 닮았다. 미나리는 땅에 심고 1년은 지나야 잘 자란다. 미나리는 우리의 딸과 아들 세대가 행복하게 꿈을 심고 가꾸길 바라며 온 힘을 다해 살아가는 어느 한국 가족의 다정하고 유쾌한 서사시이다.” - 정이삭 감독</div>
					<div class="text">미나리를 보면, 나태주 시인의 시 <풀꽃1>이 떠오른다. “자세히 보아야 예쁘다. 오래 보아야 사랑스럽다. 너도 그렇다.” 라는 시구처럼 미나리는 그 자체로의 아름다운 상징과 훌륭한 역할을 해내는 식재료다.</div>
				</div>
				<div class="content04 fadeBigInUp">
				<div class="ring" id="ring">
    </div>

    <script>
        // 현재 해상도에 따라 이미지 개수를 결정하고 해당 이미지를 표시하는 함수
        function adjustImages() {
            var width = window.innerWidth; // 현재 창의 너비
            var count;

            // 해상도에 따라 이미지 개수 결정
            if (width >= 1000) {
                count = 11;
            } else if (width >= 940) {
                count = 9;
			} else if (width >= 820) {
                count = 8;
            } else if (width >= 760) {
                count = 7;
			} else if (width >= 680) {
                count = 6;
			} else if (width >= 580) {
                count = 5;
            } else if (width >= 480) {
                count = 4;
            } else {
                count = 3;
            }

            var ring = document.getElementById("ring");
            ring.innerHTML = ""; // 기존 내용 제거

            // 이미지 생성 및 추가
            for (var i = 0; i < count; i++) {
                var img = document.createElement("img");
                img.src = "img/sub09/sub09_03_1.svg"; // 이미지 소스 설정
                img.alt = "Ring Image"; // 대체 텍스트 설정
                ring.appendChild(img); // 이미지를 ring 요소에 추가
            }
        }

        // 페이지 로드시 및 창 크기 변경시 adjustImages 함수 호출
        window.onload = adjustImages;
        window.onresize = adjustImages;
    </script>
					<div class="box">
						<div class="title"><img src="img/sub09/sub09_03_4.svg"></div>
						<div class="title_img"><img src="img/sub09/sub09_03_5.png"></div>
						<div class="item_area">
							<li class="item01">
								<div class="item_title_img"><img src="img/sub09/sub09_03_6.png"></div>
								<div class="item_title">물미나리</div>
								<div class="item_line"></div>
								<div class="item_text">논에서 서식하는 개량종이다. 줄기 안쪽이 텅 비었으며 향이 약하고 식감이 부드럽다. 찌개, 국, 탕에서 주로 사용한다.</div>
							</li>
							<li class="item02">
								<div class="item_title_img"><img src="img/sub09/sub09_03_6.png"></div>
								<div class="item_title">돌미나리</div>
								<div class="item_line"></div>
								<div class="item_text">개울가나 밭에서 서식하는 재래종이다. 줄기가 짧고 잎사귀가 많으면서 향이 강하고 떫다. 식감이 좋아 생채 무침 등 생식 요리에 주로 쓰인다.</div>
							</li>
							<li class="item03">
								<div class="item_title_img"><img src="img/sub09/sub09_03_6.png"></div>
								<div class="item_title">불미나리</div>
								<div class="item_line"></div>
								<div class="item_text">산기슭에서 자라는 야생종으로 주로 전라남도 화순에서 재배된다. 줄기 색이 붉은 것이 특징이며 다른 미나리보다 향이 강하다.</div>
							</li>
						</div>
						<div class="info">
							<div class="info_title">미나리 향이 강한 이유?</div>
							<div class="info_text">미나리는 물이 있다면 어디서든 잘 자라기 때문에 다른 식재료보다 다종다양한 해충에게 피해를 입기도 한다. 미나리는 이런 해충 피해를 막기 위해 스스로 독특한 향을 내게 됐다. 강한 향은 식물의 원초적 방어 기제인 방향성 정유 성분에서 비롯됐는데, 이는 냄새를 통해 해충의 접근을 막고 번식을 유지하는 기능이다. 미나리 외에도 깻잎, 생강, 피톤치드 등이 방향성 정유 식물로 잘 알려져 있다.</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section03 wow fadeBigInUp">
			<div class="content">
				<div class="title fadeBigInUp">
					<img src="img/sub09/sub09_05.png">
				</div>
				<div class="item1 fadeBigInUp">
					<div class="item_title"><img src="img/sub09/sub09_07.svg"></div>
					<div class="item_text">미나리, 양파, 당근, 부침가루, 튀김가루, 소금, 식초, 올리브유 1큰술, 후추, 간장, 물</div>
					<div class="item_img"><img src="img/sub09/sub09_08.png"></div>
					<div class="item_img"><img src="img/sub09/sub09_17.png"></div>
				</div>
				<div class="item1 fadeBigInUp">
					<div class="item_title"><img src="img/sub09/sub09_09.svg"></div>
					<div class="item_text">미나리 잎 중 누렇게 뜨거나 검은 부분은 떼어내고 식초로 세척한다.<br>참고로 미나리는 줄기를 반쯤 잘라내고 연한 잎과 줄기 위주로 사용하는 게 좋다.</div>
					<div class="item_img"><img src="img/sub09/sub09_10.png"></div>
				</div>
				<div class="item1 fadeBigInUp">
					<div class="item_title"><img src="img/sub09/sub09_11.svg"></div>
					<div class="item_text">잎은 잘게 다지고 줄기는 길쭉하게 썰어 모양을 내는 용도로 사용한다.<br>나머지 채소는 길게 채를 썬다.</div>
					<div class="item_img"><img src="img/sub09/sub09_12.png"></div>
				</div>
				<div class="item1 fadeBigInUp">
					<div class="item_title"><img src="img/sub09/sub09_13.svg"></div>
					<div class="item_text">부침가루와 튀김가루를 3:2 비율로 계량하고 얼음물을 넣어 반죽 농도를 맞춘다.<br>미나리, 당근, 양파, 소금 한 꼬집을 넣고 걸쭉하게 섞는다.</div>
					<div class="item_img"><img src="img/sub09/sub09_14.png"></div>
				</div>
				<div class="item1 fadeBigInUp">
					<div class="item_title"><img src="img/sub09/sub09_15.svg"></div>
					<div class="item_text">프라이팬에 식용유를 넉넉히 두르고 반죽을 한 숟가락 퍼 납작하게 부치면 완성!<br>중간 불에서 천천히 부쳐야 겉은 바삭하고 속은 촉촉한 미나리 전을 맛볼 수 있다.</div>
					<div class="item_img"><img src="img/sub09/sub09_16.png"></div>
				</div>
			</div>
		</div>

		<!--div class="section04 wow fadeBigInUp">
			<div class="content">
				<div class="item fadeBigInUp">
					<img src="img/sub09/sub09_17.png">
				</div>
		</div-->
	</section>
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
