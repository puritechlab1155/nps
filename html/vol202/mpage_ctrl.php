<div class="move">
<?php
// 이전 페이지 및 다음 페이지가 설정되었는지 확인하고 버튼 생성
if ($prev_page !== "" && $prev_page !== "/html/vol200/index.php") {
    echo '<a class="prev_page" href="' . $prev_page . '"><img src="img/mobile_buttom_before.svg"></a>';
}
if ($next_page !== "" && $next_page !== "/html/vol200/index.php") {
    echo '<a class="next_page" href="' . $next_page . '"><img src="img/mobile_buttom_next.svg"></a>';
}
?>
</div>
<div class="menu">
    <a href="index.php"><img src="img/mobile_buttom_home.svg"></a>
    <a href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target="_blank"  class="subscribe"><img src="img/mobile_buttom_subscribe.svg"></a>
    <a href="https://www.nps.or.kr/jsppage/cyber_pr/webzine1.jsp" target="_blank"  class="last_vol"><img src="img/mobile_buttom_last_issue.svg"></a>
    <a href="#top" class="top"><img src="img/mobile_buttom_top.svg"></a>
</div>