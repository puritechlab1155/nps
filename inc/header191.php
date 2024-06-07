	<!-- header -->
    <header id="header">
		<h1><a href="index.php">내곁에 국민연금</a></h1>
		<div class="vol">2022 Vol.190+1</div>
		<a href="#menu_open" class="btn_menu">전체메뉴</a>
	</header>
    <!-- //header -->
    <!-- aside nav -->
	<nav class="aside_nav">
		<div class="aside_inner">
			<div class="aside_header">
				<a href="/html/vol191/index.php" class="ico_home">홈</a>
				<span class="group">
					<span class="pc_only">
						<a href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target="_blank" class="btn_subscribe">구독신청</a><!--#subscribe   btn_layer-->
					</span>
					<span class="mobile_only">
						<a href="https://m.nps.or.kr/jsppage/mobile/ne/subscribe/intro.jsp?hrnkMenuId=MW_NE&menuId=MW_NE_006&depth=2" target="_blank" class="btn_subscribe">구독신청</a>
					</span>
					<a href="https://www.nps.or.kr/jsppage/cyber_pr/webzine1.jsp" target="_blank" class="last_vol">지난호보기</a><!--#lastvol-->
					<a href="#menu_close" class="btn_menu">닫기</a>
				</span>
			</div>
			<div class="lnb">
				<ul class="menu01">
					<li><a href="/html/vol191/sub01_01.php">M.Z Story</a></li>
					<li><a href="/html/vol191/sub01_02.php">M&Z 일상수다</a></li>
					<li><a href="/html/vol191/sub01_03.php">NPS 쇼츠</a>	</li>
					<li><a href="/html/vol191/sub01_04.php">Z대리가 간다!</a></li>
				</ul>
				<ul class="menu02">
					<li><a href="/html/vol191/sub02_01.php">요즘 MZ</a></li>
					<li><a href="/html/vol191/sub02_02.php">팝콘 경제</a></li>
					<li><a href="/html/vol191/sub02_03.php">Easy선다 퀴즈</a></li>
					<li><a href="/html/vol191/sub02_04.php">M&M 여행</a></li>
					<li><a href="/html/vol191/sub02_05.php">힐링레시피</a></li>
					<li><a href="/html/vol191/sub02_06.php">데일리홈트</a></li>
					<li><a href="/html/vol191/sub02_07.php">그곳N 그들이</a></li>
				</ul>
				<ul class="menu03">
					<li><a href="/html/vol191/sub03_01.php">NPS 키워드</a></li>
					<li><a href="/html/vol191/sub03_02.php">NPS 뉴스</a>	</li>
					<li><a href="/html/vol191/sub03_03.php">독자의견</a></li>
					<li><a href="/html/vol191/sub03_04.php">이벤트1</a></li>
					<li><a href="/html/vol191/sub03_05.php">이벤트2</a></li>
				</ul>
			</div>
			<div class="aside_btm">
				<span class="logo">내곁에 국민연금</span>
			</div>
		</div>
	</nav>
	<div class="page_overlay"></div>
	<!-- //aside nav -->
    	<!-- hidden keyword -->
         <?
		$basename=basename($_SERVER["PHP_SELF"]);
		if($basename!="index.php"){
       $ran = rand(1, 5);
		?>
	<div class="hidden_keyword" style="z-index:9999">
		<img src="../../img/vol191/sub/ico_character.png" alt="M&Z" class="character">
		<div class="keyword_wrap keyword1">
			<div class="keyword">?</div>
		</div>
		<div class="keyword_wrap keyword2">
			<div class="keyword">
            <? if($ran==1){
				echo "실";
			}else{
				echo "?";	
			};
			?>
            </div>
			<div class="keyword">
            <? if($ran==2){
				echo "업";
			}else{
				echo "?";	
			};
			?>
            </div>
			<div class="keyword">
            <? if($ran==3){
				echo "크";
			}else{
				echo "?";	
			};
			?>
            </div>
			<div class="keyword">
            <? if($ran==4){
				echo "레";
			}else{
				echo "?";	
			};
			?>
            </div>
			<div class="keyword">
            <? if($ran==5){
				echo "딧";
			}else{
				echo "?";	
			};
			?>
            </div>
		</div>
		<img src="../../img/vol191/sub/ico_cursor.png" alt="cursor" class="cursor">
		<a href="/html/vol191/sub03_04.php" class="btn_request">이벤트 참여하기 →</a>
		<button type="button" class="close">닫기</button> 
	</div><? };?>
	<!-- //hidden keyword -->

	<!-- animation -->
	<div class="animation">
		<div class="rotate1"><img src="../../img/common/text01.png" alt="NPS WEBZINE" class="rotate"></div>
		<div class="rotate2"><img src="../../img/common/text02.png" alt="NPS WEBZINE" class="rotate"></div>
		<div class="character1"><img src="../../img/vol191/main/character1.png" alt="M기자" class="loop1"></div>
		<div class="character2"><img src="../../img/vol191/main/character2.png" alt="Z앵커" class="loop2"></div>
	</div>
	<!-- //animation -->