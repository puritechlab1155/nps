<a href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp"  target='_blank' class="subscribe"><img src="img/subscribe_text.svg"></a>
<a href="#" class="share"><img src="img/share_icon.svg" class="normal"><img src="img/share_icon_w.svg" class="hover"></a>
<div class="sns_share">
	<a href="javascript:void(0)" onclick="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u=' +encodeURIComponent(document.URL)+'&t='+encodeURIComponent(document.title), 'facebooksharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="새창" class="facebook">페이스북</a>
	<a href="#" onclick="javascript:window.open('http://share.naver.com/web/shareView.nhn?url=' +encodeURIComponent(document.URL)+'&title='+encodeURIComponent(document.title), 'naversharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"  class="blog">블로그</a>
	<a href="javascript:void(0)" onclick="javascript:window.open('https://story.kakao.com/s/share?url=' +encodeURIComponent(document.URL), 'kakaostorysharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes, height=400,width=600');return false;" target="_blank" title="새창"class="kakaostory">카카오 스토리</a>
	<a href="javascript:void(0)" onclick="javascript:window.open('https://twitter.com/intent/tweet?text=[%EA%B3%B5%EC%9C%A0]%20' +encodeURIComponent(document.URL)+'%20-%20'+encodeURIComponent(document.title), 'twittersharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="새창"class="twitter">트위터</a>
	<a href="javascript:void(0)" onclick="javascript:window.open('https://band.us/plugin/share?route='+encodeURIComponent(document.URL)+'&body='+encodeURIComponent(document.title)+encodeURIComponent(document.URL), 'bandsharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="새창" class="band">밴드</a>
	<a href="#url" class="url" onclick="copy(this.href);">URL</a>
</div>
<!---a href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target="_blank"  class="subscribe">구독</a--><!--#subscribe  btn_layer-->
<a href="https://www.nps.or.kr/jsppage/cyber_pr/webzine1.jsp" target="_blank"  class="last_vol">지난 호</a>
<!---a href="#top" class="top">TOP</a--->
<?php
// 이전 페이지 및 다음 페이지가 설정되었는지 확인하고 버튼 생성
echo "이전 페이지: $prev_page, 다음 페이지: $next_page<br>";

if ($prev_page !== "" && $prev_page !== "/html/vol201/index.php") {
    echo '<a class="prev_page" href="' . $prev_page . '"><i class="xi-angle-left-thin"></i></a>';
}
if ($next_page !== "" && $next_page !== "/html/vol201/index.php") {
    echo '<a class="next_page" href="' . $next_page . '"><i class="xi-angle-right-thin"></i></a>';
}
?>

<script>
// HTML 요소를 가져옵니다.
var snsShare = document.querySelector('.page_ctrl .sns_share');
var shareLink = document.querySelector('.page_ctrl .share');

// 바탕을 클릭할 때 이벤트 핸들러를 추가합니다.
document.addEventListener('click', function(event) {
    var targetElement = event.target; // 클릭한 요소

    // 만약 클릭한 요소가 .page_ctrl .sns_share 내의 요소이거나 .page_ctrl .sns_share 내의 요소의 하위 요소라면, 클릭한 것으로 처리하지 않습니다.
    if (targetElement.closest('.page_ctrl .sns_share') || targetElement.closest('.page_ctrl .share')) {
        return;
    }

    // .page_ctrl .sns_share.opened 클래스를 가진 요소에서 해당 클래스를 제거합니다.
    snsShare.classList.remove('opened');

    // .share의 "on" 클래스도 제거합니다.
    shareLink.classList.remove('on');
});

</script>