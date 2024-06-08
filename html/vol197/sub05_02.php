<!doctype html>
<html lang="ko">
<head>
	<title>이벤트1 | 내 곁에 국민연금</title>
	<meta property="og:image" content="../../img/logosns/logosns_vol197.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="../../css/vol197/contents.css">
</head>
<body>
<?php include("../../inc/accessibility.php"); ?>
<div id="wrap">
	
	<!-- header & aside nav -->
	<?php include("../../inc/header197.php"); ?>
	<!-- //header & aside nav --> 

	<!-- contents -->
	<section id="contents">
		<div class="content_header">
			<?php include("../../inc/share_group_197.php"); ?>
		</div>
		<div class="cont_block event1">
			<div class="event_header">
				<h3 class="mt100"><img src="../../img/vol197/sub/event1_img1.png" alt="MZ도 잡고 숨은 글자도 찾아라!"></h3>
				<dl>
					<dt>
						웹진에 떠다니는  M, Z 속 숨겨져 있는 글을 찾아서<br>
						조합해 만든 두 개의 단어를 아래 이벤트 신청하기에 신청해주세요~<br>
						추첨을 통해 스타벅스 아메리카노 T 1잔 기프티콘을 드립니다.
					</dt>
				</dl>
			</div>
			<div class="event_guide">
				<div class="how_box">
					<h3>응모방법</h3>
					<div class="img">
						<img src="../../img/vol197/sub/event1_img2.png" alt="step01.내곁에 국민연금(PC,모바일)에 접속해 숨겨진 배너를 찾아 클릭,step02. 숨겨진 M, Z 글자를 찾아 단어를 조합해 이벤트 참여하기에 신청하기">
					</div>
				</div>
                <form action="sub05_02_insert.php" method="post" enctype="multipart/form-data" name="quiz" id="quiz">
                <?php 
				$servername = "localhost";
				$username = "nps2022";
				$password = "nps2022!@";
				$dbname = "nps2022";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 


					$wip=$_SERVER['REMOTE_ADDR'];

					$sql = "SELECT * FROM `quiz4` WHERE wip='$wip'";
				$result = $conn->query($sql);
				$rows = $result->fetch_array(MYSQLI_ASSOC);
				$tot_rows = mysqli_num_rows($result);?>
				<div class="hint">
					<h3>정답 힌트</h3>
					<p>
						<span>M</span> : 여수 장도에 위치한 다리<br>
						<span>Z</span> : 수급 연령에 도달하면 평생 지급되는 연금
					</p>
                    <? if($tot_rows <= 0){ ?>

					<div class="correct_input">
						<ul>
							<li>
								<p>숨은 글자 정답을 적어주세요.</p>
								<input name="text1" id="text1" type="text" placeholder="M : OOOO  Z : OOOO" title="숨은 글자 정답을 적어주세요.">
							</li>
							<li>
								<p>전화번호를 입력해 주세요.</p>
								<div class="input_group">
									<input name="text3" id="text3" type="text" placeholder="홍길순" title="이름를 입력해 주세요." class="name">
									<input name="text2" id="text2" type="text" placeholder="010-0000-0000" title="전화번호를 입력해 주세요.">
								</div>
							</li>
						</ul>
					</div>
                     <? }else{ ?>
                    <div class="correct_input">
						<ul>
							<li>
								<p style="font-size:1.5em; color:#333;letter-spacing:1px;">* 이벤트에 참여 하셨습니다. *</p>
							</li>
							<li>
								
							</li>
						</ul>
					</div>	
                    <? }; ?>
                    </div>
					<?php


					if($rows){
						?>
						
						
					<? }else{ ?>
				
				<div class="btn_event mt55">
					<a onClick="init()" style="cursor:pointer;">이벤트 신청하기</a>
				</div>
                
                <? }; ?>	
                </form>
				<p class="how_txt mt30">당첨자 발표 및 경품 발송 : 2023. 11. 30. 이후</p>
			</div>
			<div class="event_goods">
				<h3><span>이벤트 상품</span></h3>
				<ul>
					<li>
						<dl>
							<dt>응모 기간</dt>
							<dd>2023. 09. 20. ~ 2023. 11. 20.</dd>
							<dt>당첨자 발표</dt>
							<dd>[내곁에 국민연금 웹진]<br>2023 Vol. 197호 공지 및 개별통보</dd>
						</dl>
					</li>
					<li>
						<img src="../../img/vol197/sub/event1_goods.png" alt="스타벅스 아메리카노 T">
						<p class="mt10">스타벅스 아메리카노 T</p>
					</li>
				</ul>
			</div>
			<div class="event_note">
				<h3>이벤트 유의사항</h3>
				<ul>
					<li>본 이벤트 경품은 당사 사정에 따라 변경될 수 있습니다.</li>
					<li>이벤트 응모 시 개인정보 활용 동의에 동의한 것으로 간주됩니다.</li>
					<li>부정행위를 통해 이벤트 참여 시 제재를 받으며, 당첨 경품도 취소됩니다.</li>
					<li>많은 분들께 이벤트 혜택을 드리기 위해 중복 당첨 시 경품 지급은 한 번만 이뤄집니다.</li>
					<li>당첨자에 한해 개인정보가 경품 발송 대행사에 전달되며 경품 발송 후 즉시 폐기됩니다.</li>
					<li>정확하지 않은 개인정보로 인해 당첨자 연락이 되지 않거나 확인이 불가능할 경우, 당첨 취소됩니다.</li>
				</ul>
			</div>
		</div>
		<div class="text_center mt50"><img src="../../img/vol197/sub/sub05_02_img01.jpg" alt="당첨자 발표 / 숨은글자를 이벤트 참여해주신 모든 분께 감사드립니다. 이*우010-****-5639, 채*희010-****-1230, 김*남010-****-5413, 박*수010-****-9465, 이*화010-****-4224, 임*은010-****-6027, 정*아010-****-9744, 김*진010-****-1086, 정*예010-****-9582, 이*빈010-****-6970, 백*선010-****-2414, 홍*랑010-****-7764, 김*수010-****-7598, 원*유010-****-6084, 남*현010-****-5357,이*애010-****-7871, 연*기010-****-3371, 인*래010-****-1477, 장*경010-****-1115, 이*혜010-****-7805"></div>
	</section>
	<!-- contents -->
    
    <!-- quiz submit -->
    <script>
	function init(){
		var text1 = document.getElementById("text1").value;
		var text2 = document.getElementById("text2").value;
		var text3 = document.getElementById("text3").value;
		

		if(text1==""){
			alert("숨은글자 정답을 입력해 주세요."); 
			return;  
		};
		if(text2==""){
			alert("전화번호를 입력해 주세요."); 
			return;  
		};
		if(!CheckNum(text2))	{
			alert("전화번호 형식이 잘못되었습니다 '-' 기호를 넣어주세요");
			return;
		}
		if(text3==""){
			alert("이름을 입력해 주세요."); 
			return;  
		};
		/*if(!CheckEmail(text2))	{
			alert("이메일 형식이 잘못되었습니다");
			return;
		}*/

		document.getElementById("quiz").submit();
	}	
	
	//이메일 체크 기능 시작 20230914 비활성화
	/*function CheckEmail(str){                                                 
     var reg_email = /^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;
     if(!reg_email.test(str)) {                            
        return false;         
     }else {                       
        return true;         
     }                            
}*/

//이메일 체크 기능 끝 20230914 비활성화
// 핸드폰 체크기능
function CheckNum(str){                                                 
	var re_phone = /^\d{2,3}-\d{3,4}-\d{4}$/;
     if(!re_phone.test(str)) {                            
        return false;         
     }else {                       
        return true;         
     }                            
}
	</script>
    

	<!-- like & share -->
	<?php include("../../inc/like_share197.php"); ?>
	<!-- //like & share -->
	
	<!-- quick_menu -->
	<?php include("../../inc/quick_menu197.php"); ?>
	<!-- //quick_menu -->

	<!-- page ctrl -->
	<div class="page_ctrl">
		<div class="page_move">
			<a href="sub05_01.php" class="page_prev">이전페이지</a>
			<a href="sub05_03.php" class="page_next">다음페이지</a>			
		</div>
		<?php include("../../inc/page_ctrl_197.php"); ?>
	</div>
	<!-- //page ctrl -->

	<!-- page ctrl mobile -->
	<div class="page_ctrl_mobile">
		<div class="page_move">
			<a href="sub05_01.php" class="page_prev">이전페이지</a>
			<a href="sub05_03.php" class="page_next">다음페이지</a>
		</div>
		<?php include("../../inc/page_ctrl_mobile_197.php"); ?>		
	</div>
	<!-- //page ctrl mobile -->

	<!-- footer -->
	<?php include("../../inc/footer.php"); ?>
	<!-- //footer --> 

</div>
</body>
</html>
