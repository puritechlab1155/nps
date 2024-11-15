<link rel="stylesheet" href="/css/xeicon.min.css">

<?php
// 현재 페이지의 URL 가져오기
$current_url = $_SERVER['REQUEST_URI'];

// 메뉴 항목과 URL 매핑
$menu_items = array(
    "/html/vol202/index.php" => "MAIN",
    "/html/vol202/sub01.php" => "NPS 뉴스",
    "/html/vol202/sub02.php" => "NPS 칼럼",
    "/html/vol202/sub03.php" => "M&Z일상수다",
    "/html/vol202/sub04.php" => "꼬리에 꼬리를 무는 문화탐구",
    "/html/vol202/sub05.php" => "모두의 여행",
    "/html/vol202/sub06.php" => "연금엔씨네마",
    "/html/vol202/sub07.php" => "키워드로 보는 세상",
    "/html/vol202/sub08.php" => "헬스 앤 라이프",
    "/html/vol202/sub09.php" => "오늘의 레시피",
    "/html/vol202/sub10.php" => "독자 목소리",
    "/html/vol202/sub11.php" => "빈칸 채우기",
    "/html/vol202/sub12.php" => "최고의 콘텐츠를 뽑아라!",
	"/html/vol202/sub13.php" => "산타의 양말을 찾아라~!",
    "/html/vol202/sub14.php" => "연말 응원 이벤트"
);

// 현재 페이지의 키 가져오기
$current_key = array_search($current_url, array_keys($menu_items));

// 이전 페이지 및 다음 페이지 URL 설정
$prev_page = "";
$next_page = "";

// 현재 페이지가 메뉴 항목 중 하나인지 확인하고, 이전 및 다음 페이지 URL 설정
if ($current_key !== false) {
    $keys = array_keys($menu_items);
    $prev_index = $current_key - 1;
    $next_index = $current_key + 1;

    // 이전 페이지 URL 설정
    while ($prev_index >= 0) {
        if ($menu_items[$keys[$prev_index]] !== "MAIN") {
            $prev_page = $keys[$prev_index];
            break;
        }
        $prev_index--;
    }

    // 다음 페이지 URL 설정
    while ($next_index < count($keys)) {
        if ($menu_items[$keys[$next_index]] !== "MAIN") {
            $next_page = $keys[$next_index];
            break;
        }
        $next_index++;
    }
}
?>

<!-- header -->
<header id="header">
    <div class="vol">
			<a href="#" class="vol_tit">2024 Vol.202</a>
			<div class="vol_list">
				<ul>
                    <li><a href="/html/vol201/index.php" target='_blank'>2023 Vol.201</a></li>
                    <li><a href="/html/vol200/index.php" target='_blank'>2023 Vol.200</a></li>
                    <li><a href="/html/vol199/index.php" target='_blank'>2023 Vol.199</a></li>
                    <li><a href="/html/vol198/index.php" target='_blank'>2023 Vol.198</a></li>
			        <li><a href="/html/vol197/index.php" target='_blank'>2023 Vol.197</a></li>
				    <li><a href="/html/vol196/index.php" target='_blank'>2023 Vol.196</a></li>
				    <li><a href="/html/vol195/index.php" target='_blank'>2023 Vol.195</a></li>
				    <li><a href="/html/vol194/index.php" target='_blank'>2022 Vol.194</a></li>
					<li><a href="/html/vol193/index.php" target='_blank'>2022 Vol.193</a></li>
					<li><a href="/html/vol192/index.php" target='_blank'>2022 Vol.192</a></li>
					<li><a href="/html/vol191/index.php" target='_blank'>2022 Vol.191</a></li>
				</ul>
			</div>
    </div>
    <div class="top_logo"><a href="index.php"><img src="img/nps_logo.svg"></a></div>
    <label id="menuToggle" for="menuCheckbox">
        <input type="checkbox" id="menuCheckbox">
        <span class="bar1"></span>
        <span class="bar2"></span>
        <span class="bar3"></span>
        <div id="menu">
            <div class="close"><i class="xi-close-thin"></i></div>
            <div class="subscribe"><a href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp"  target='_blank'><img src="img/subscribe_bottom.svg"></a></div>
        
               <ul>
               <?php foreach ($menu_items as $url => $label) { ?>
                    <?php
                        $is_external = strpos($url, "https://") !== false;
                        $target = $is_external ? '_blank' : '_self';
                    ?>
                    <li <?php if ($current_url == $url) echo 'class="current"'; ?>>
                        <a href="<?php echo $url; ?>"><?php echo $label; ?></a>
                    </li>
                <?php } ?>
            </ul>

        </div>
        <div class="overlay" id="overlay"></div>
    </label>
</header><!-- //header -->



<script>

document.getElementById('overlay').addEventListener('click', function () {
        document.getElementById('menuToggle').blur();
    });

    // #menuToggle에 마우스가 올라가면 #menu가 보이도록
    document.getElementById('menuToggle').addEventListener('mouseenter', function () {
        document.getElementById('menu').style.display = 'block'; // 메뉴 보이기
    });

    // #menuToggle에서 마우스가 벗어나면 #menu가 다시 숨겨지도록
    document.getElementById('menuToggle').addEventListener('mouseleave', function () {
        document.getElementById('menu').style.display = 'none'; // 메뉴 숨기기
    });

    // .close 클래스를 클릭했을 때 #menu를 숨기도록
    document.querySelector('.close').addEventListener('click', function () {
        document.getElementById('menu').style.display = 'none'; // 메뉴 숨기기
    });
</script>



