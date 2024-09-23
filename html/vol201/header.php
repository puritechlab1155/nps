<link rel="stylesheet" href="/css/xeicon.min.css">

<?php
// 현재 페이지의 URL 가져오기
$current_url = $_SERVER['REQUEST_URI'];

// 메뉴 항목과 URL 매핑
$menu_items = array(
    "/html/vol201/index.php" => "MAIN",
    "/html/vol201/sub01.php" => "NPS 뉴스",
    "/html/vol201/sub02.php" => "NPS 칼럼",
    "/html/vol201/sub03.php" => "M&Z일상수다",
    "/html/vol201/sub04.php" => "꼬리에 꼬리를 무는 문화탐구",
    "/html/vol201/sub05.php" => "모두의 여행",
    "/html/vol201/sub06.php" => "연금엔씨네마",
    "/html/vol201/sub07.php" => "키워드로 보는 세상",
    "/html/vol201/sub08.php" => "헬스 앤 라이프",
    "/html/vol201/sub09.php" => "오늘의 레시피",
    "/html/vol201/sub10.php" => "독자 목소리",
    "/html/vol201/sub11.php" => "빈칸 퀴즈",
    "/html/vol201/sub12.php" => "최애 콘텐츠를 뽑아라!",
	"/html/vol201/sub13.php" => "구독자 사다리 이벤트",
    "/html/vol201/sub14.php" => "OX 퀴즈"
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
			<a href="#" class="vol_tit">2024 Vol.201</a>
			<div class="vol_list">
				<ul>
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
                        <a href="<?php echo $url; ?>" 
                        class="menu-item" data-url="<?php echo $url; ?>"
                        target="<?php echo $target; ?>">
                        <?php echo $label; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="overlay" id="overlay"></div>
    </label>
</header><!-- //header -->


<!-- -------------------- -------------------- -------------------- -->

<!-- -------------------- -------------------- -------------------- -->

    
<script>
    // JavaScript to close menu when overlay is clicked
    document.getElementById('overlay').addEventListener('click', function () {
        document.getElementById('menuToggle').blur();
    });
    // JavaScript to close menu when close button is clicked
    document.getElementById('close').addEventListener('click', function () {
        document.getElementById('menuToggle').blur();
    });


 // 메뉴 항목에 대한 마우스 오버 이벤트 처리!-- -------------------- -------------------- -------------------- -->
 document.querySelectorAll('.menu-item').forEach(function(menuItem) {
        menuItem.addEventListener('mouseover', function(event) {
            // href 속성에 있는 URL로 즉시 이동
            const url = menuItem.getAttribute('href');
            window.location.href = url;
        });
    });


</script>




<!-- <script>
let lastScrollTop = 0; // 이전 스크롤 위치를 저장할 변수를 초기화합니다.

window.addEventListener("scroll", function() {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

  // 스크롤 방향에 따라 헤더의 위치를 조정합니다.
  if (currentScroll > lastScrollTop) {
    // 아래로 스크롤할 때: 헤더를 숨깁니다.
    document.getElementById("header").classList.remove("sticky");
  } else {
    // 위로 스크롤할 때: 헤더를 고정합니다.
    document.getElementById("header").classList.add("sticky");
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // 스크롤이 맨 위에 도달하면 초기화합니다.
});


</script> -->