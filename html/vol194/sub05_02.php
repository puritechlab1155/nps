<!doctype html>
<html lang="ko">
<head>
	<title>이벤트1 | 내 곁에 국민연금</title>
	<meta property="og:image" content="../../img/logosns/logosns_vol194.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="../../css/vol194/contents.css">
</head>
<body>
<?php include("../../inc/accessibility.php"); ?>
<div id="wrap">
	
	<!-- header & aside nav -->
	<?php include("../../inc/header194.php"); ?>
	<!-- //header & aside nav --> 

	<!-- contents -->
	<section id="contents">
		<div class="content_header">
			<?php include("../../inc/share_group_194.php"); ?>
		</div>
		<div class="cont_block event1">
			<div class="event_header">
				<h3><img src="../../img/vol194/sub/event1_img1.png" alt="MZ도 잡고 숨은 글자도 찾아라!"></h3>
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
						<img src="../../img/vol194/sub/event1_img2.png" alt="step01.내곁에 국민연금(PC,모바일)에 접속해 숨겨진 배너를 찾아 클릭,step02. 숨겨진 M, Z 글자를 찾아 단어를 조합해 이벤트 참여하기에 신청하기">
					</div>				
				</div>	
                <form action="sub05_02_insert.php" method="post" enctype="multipart/form-data" name="quiz" id="quiz">	
				<div class="hint">
					<h3>정답 힌트</h3>
					<p>
						<span>M</span> : 국민연금제도의 건전성과 안정성을 5년마다 검토하고<br>
						국민연금의 지속가능성을 확인하는 과정,  2023년도에 시행 예정<br>
						<span>Z</span> : 대한민국 20대 생태관광지 중 한 곳으로, 태화강대공원 서쪽 끝자락인 오산에서<br>
						출발해 동쪽 끝자락인 태화루 못 미쳐 십리대밭교 부근에 이른다
					</p>
                    <? if($tot_rows <= 0){ ?>
					<div class="correct_input">
						<ul>
							<li>
								<p>숨은 글자 정답을 적어주세요. M: OOOO Z:OOOOO</p>
								<input name="text1" type="text" id="text1" placeholder="M:OOOO  Z:OOOOO" title="숨은 글자 정답을 적어주세요.">
							</li>
							<li>
								<p>이메일 주소를 입력해 주세요.</p>
								<input name="text2" type="text" id="text2" placeholder="abcdef@naver.com" title="이메일 주소를 입력해 주세요.">
							</li>
						</ul>
					</div>	
                    <? }else{ ?>
                    <div class="correct_input">
						<ul>
							<li>
								<p style="font-size:1.5em; color:#f1c158;letter-spacing:1px;">* 이벤트에 참여 하셨습니다. *</p>
							</li>
							<li>
								
							</li>
						</ul>
					</div>	
                    <? } ?>
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

	$sql = "SELECT * FROM `quiz` WHERE wip='$wip'";
$result = $conn->query($sql);
$rows = $result->fetch_array(MYSQLI_ASSOC);
if($rows){
	?>
	</div>
	
	
	
	<br>
	
	<? }else{ ?>
									
						
				<div class="btn_event mt25">
					<a onClick="init()" style="cursor:pointer;">이벤트 신청하기</a>
				</div>
	<? }; ?>	
                </form>
				<p class="how_txt mt30">당첨자 발표 및 경품 발송 : 2023. 02. 28. 이후</p>
			</div>
			<div class="event_goods">
				<h3><span>이벤트 상품</span></h3>
				<ul>
					<li>
						<dl>
							<dt>응모 기간</dt>
							<dd>2022. 12. 21. ~ 2023. 01. 31.</dd>
							<dt>당첨자 발표</dt>
							<dd>[내곁에 국민연금 웹진]<br> 2023 Vol. 195호 공지 및 개별통보</dd>
						</dl>
					</li>
					<li>
						<img src="../../img/vol194/sub/event1_goods.png" alt="스타벅스 아메리카노 T">
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
		<br/><br/>
		<div class="text_center"><img src="../../img/vol194/sub/event1_img3.jpg" alt="당첨자 발표 / yke***9@naver.com, pjs0***1@paran.com, seve***h@naver.com,tach***n@naver.com, gwanche***m3@gmail.com, eungu***0@naver.com, khemm***2@naver.com, ne7er***d@naver.com, java***m@naver.com, ke***0@naver.com, jhan***3@naver.com, jangmin***3@naver.com, nono***5@naver.com, aquari***2@naver.com, moon***i@naver.com, wik***g@naver.com, hanstar***t@naver.com, yang***7@naver.com, ejrwhddl***4@naver.com, gur***s@naver.com"></div>
	</section>
	<!-- contents -->
    
    <!-- quiz submit -->
    <script>
	function init(){
		var text1 = document.getElementById("text1").value;
		var text2 = document.getElementById("text2").value;

		if(text1==""){
			alert("숨은글자 정답을 입력해 주세요."); 
			return;  
		};
		if(text2==""){
			alert("이메일을 입력해 주세요."); 
			return;  
		};
		if(!CheckEmail(text2))	{
			alert("이메일 형식이 잘못되었습니다");
			return;
		} 

		document.getElementById("quiz").submit();
	}	
	
	function CheckEmail(str){                                                 
     var reg_email = /^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;
     if(!reg_email.test(str)) {                            
        return false;         
     }else {                       
        return true;         
     }                            
}
	</script>
    

	<!-- like & share -->
	<?php include("../../inc/like_share194.php"); ?>
	<!-- //like & share -->
	
	<!-- quick_menu -->
	<?php include("../../inc/quick_menu194.php"); ?>
	<!-- //quick_menu -->

	<!-- page ctrl -->
	<div class="page_ctrl">
		<div class="page_move">
			<a href="sub05_03.php" class="page_next">다음페이지</a>
			<a href="sub05_01.php" class="page_prev">이전페이지</a>
		</div>
		<?php include("../../inc/page_ctrl_194.php"); ?>
	</div>
	<!-- //page ctrl -->

	<!-- page ctrl mobile -->
	<div class="page_ctrl_mobile">
		<div class="page_move">
			<a href="sub05_01.php" class="page_prev">이전페이지</a>
			<a href="sub05_03.php" class="page_next">다음페이지</a>
		</div>
		<?php include("../../inc/page_ctrl_mobile_194.php"); ?>		
	</div>
	<!-- //page ctrl mobile -->

	<!-- footer -->
	<?php include("../../inc/footer.php"); ?>
	<!-- //footer --> 

</div>
</body>
</html>
