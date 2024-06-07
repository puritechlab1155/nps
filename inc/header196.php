	<!-- header -->
    <header id="header">
		<h1><a href="index.php">내곁에 국민연금</a></h1>
		<div class="vol">
			<a href="#" class="vol_tit">2023 Vol.196</a>
			<div class="vol_list">
				<ul>
				<li><a href="/html/vol197/index.php">2023 Vol.197</a></li>
				<li><a href="/html/vol196/index.php">2023 Vol.196</a></li>
				<li><a href="/html/vol195/index.php">2023 Vol.195</a></li>	
				<li><a href="/html/vol194/index.php">2022 Vol.194</a></li>
					<li><a href="/html/vol193/index.php">2022 Vol.193</a></li>
					<li><a href="/html/vol192/index.php">2022 Vol.192</a></li>
					<li><a href="/html/vol191/index.php">2022 Vol.191</a></li>
				</ul>
			</div>
		</div>
		<a href="#menu_open" class="btn_menu"><span>MENU</span><i></i></a>
	</header>
    <!-- //header -->
    <!-- aside nav -->
	<nav class="aside_nav">
		<div class="aside_inner">
			<div class="aside_header">
				<a href="/html/vol196/index.php" class="ico_home">홈</a>
				<span class="group">
					<span class="pc_only">
						<a href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target="_blank" class="btn_subscribe">구독신청</a><!--#subscribe   btn_layer-->
					</span>
					<span class="mobile_only">
						<a href="https://m.nps.or.kr/jsppage/mobile/ne/subscribe/intro.jsp?hrnkMenuId=MW_NE&menuId=MW_NE_006&depth=2" target="_blank" class="btn_subscribe">구독신청</a>
					</span>
					<a href="http://npswebzine.kr/html/vol195/" target="_blank" class="last_vol">지난호보기</a><!--#lastvol-->
					<a href="#menu_close" class="btn_menu">닫기</a>
				</span>
			</div>
			<div class="lnb">
				<h2>행복한 일상</h2>
				<ul class="menu01">
					<li><a href="/html/vol196/sub01_01.php">북퀘스트</a></li>
					<li><a href="/html/vol196/sub01_02.php">요즘 이슈</a></li>
					<li><a href="/html/vol196/sub01_03.php">M&Z 일상수다</a></li>
					<li><a href="/html/vol196/sub01_04.php">힐링레시피</a></li>
					<li><a href="/html/vol196/sub01_05.php">행복한 나눔</a></li>
				</ul>
				<h2>NPS와 함께</h2>
				<ul class="menu02">
					<li><a href="/html/vol196/sub02_01.php">NPS 뉴스</a></li>
					<li><a href="/html/vol196/sub02_02.php">NPS 쇼츠</a></li>
					<li><a href="/html/vol196/sub02_03.php">NPS 키워드</a></li>
					<li><a href="/html/vol196/sub02_04.php">NPS칼럼</a></li>
				</ul>
				<h2>더 나은 미래</h2>
				<ul class="menu03">
					<li><a href="/html/vol196/sub03_01.php">팝콘 경제</a></li>
					<li><a href="/html/vol196/sub03_02.php">Easy선다 퀴즈</a></li>
					<li><a href="/html/vol196/sub03_03.php">키워드트렌드</a></li>
				</ul>
				<h2>즐거운 인생</h2>
				<ul class="menu04">
					<li><a href="/html/vol196/sub04_01.php">대한민국 테마여행</a></li>
					<li><a href="/html/vol196/sub04_02.php">오도이촌</a></li>
					<li><a href="/html/vol196/sub04_03.php">대신 일하고 올게</a></li>
				</ul>
				<h2>독자 이벤트</h2>
				<ul class="menu05">
					<li><a href="/html/vol196/sub05_01.php">독자 목소리</a></li>
					<li><a href="/html/vol196/sub05_02.php">이벤트 1</a></li>
					<li><a href="/html/vol196/sub05_03.php">이벤트 2</a></li>
				</ul>
			</div>
			<div class="aside_btm">
				<span class="logo">내곁에 국민연금</span>
			</div>
		</div>
	</nav>
	<div class="page_overlay"></div>
	<!-- //aside nav -->
     <?
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
	
	$wip2=$_SERVER['REMOTE_ADDR'];
	
	$sql = "SELECT * FROM `quiz2` where wip='$wip2'";
	$result = $conn->query($sql);
	$tot_rows = mysqli_num_rows($result);
	if($tot_rows <= 0){


	?>
    
    	<!-- hidden keyword M -->
         <?
		$basename=basename($_SERVER["PHP_SELF"]);
		if($basename!="index.php"){
       $ran = rand(1, 4);
		?>
        
	<div class="hidden_keyword keyword_M">
		<img src="../../img/vol196/sub/ico_characterm.png" alt="M" class="character">
		<div class="keyword_wrap keyword1">
			<div class="keyword">?</div>
		</div>
		<div class="keyword_wrap keyword2">
			<div class="keyword">
             <? if($ran==1){
				echo "미";
			}else{
				echo "?";	
			};
			?>
            </div>
			<div class="keyword">
            <? if($ran==2){
				echo "닝";
			}else{
				echo "?";	
			};
			?>
            </div>
			<div class="keyword">
            <? if($ran==3){
				echo "아";
			}else{
				echo "?";	
			};
			?>
            </div>
            <div class="keyword">
            <? if($ran==4){
				echo "웃";
			}else{
				echo "?";	
			};
			?>
            </div>

		</div>
		<img src="../../img/vol196/sub/ico_cursor.png" alt="cursor" class="cursor">
		<a href="sub05_02.php" class="btn_request">이벤트 신청하기 →</a>
		<button type="button" class="close">닫기</button>
	</div>
	<!-- //hidden keyword M -->

	<!-- hidden keyword Z -->
    <?
       $ran2 = rand(1, 4);
		?>
	<div class="hidden_keyword keyword_Z">
		<img src="../../img/vol196/sub/ico_characterz.png" alt="Z" class="character">
		<div class="keyword_wrap keyword1">
			<div class="keyword">?</div>
		</div>
		<div class="keyword_wrap keyword2">
						<div class="keyword">
             <? if($ran2==1){
				echo "안";
			}else{
				echo "?";	
			};
			?>
            </div>
			<div class="keyword">
            <? if($ran2==2){
				echo "심";
			}else{
				echo "?";	
			};
			?>
            </div>
			<div class="keyword">
            <? if($ran2==3){
				echo "통";
			}else{
				echo "?";	
			};
			?>
            </div>
            <div class="keyword">
            <? if($ran2==4){
				echo "장";
			}else{
				echo "?";	
			};
			?>
            </div>
		</div>
		<img src="../../img/vol196/sub/ico_cursor.png" alt="cursor" class="cursor">
		<a href="sub05_02.php" class="btn_request">이벤트 신청하기 →</a>
		<button type="button" class="close">닫기</button>
	</div><? };};?>
	<!-- //hidden keyword Z -->

	<!-- animation -->
	<div class="animation">
		<div class="rotate1"><img src="../../img/common/text01.png" alt="NPS WEBZINE" class="rotate"></div>
		<div class="rotate2"><img src="../../img/common/text02.png" alt="NPS WEBZINE" class="rotate"></div>
		<div class="character1"><img src="../../img/vol196/main/character1.png" alt="M기자" class="loop1"></div>
		<div class="character2"><img src="../../img/vol196/main/character2.png" alt="Z앵커" class="loop2"></div>
		<!--div class="character3"><img src="../../img/vol196/main/character3.png" alt="X국장" class="loop3"></div-->
	</div>
	<!-- //animation -->