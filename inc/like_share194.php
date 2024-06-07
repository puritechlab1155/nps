<!-- kruddo add //-->

<script type="text/javascript">
	
	var vol_idx = "194";
	var curpage_url = "<?=basename($_SERVER['PHP_SELF'])?>";
	
	var curl = curpage_url.replace("sub", "").replace(".php", "");
	var curl_split = curl.split("_");
	var board_seq = parseInt(curl_split[0]);
	var board_sub_seq = parseInt(curl_split[1]);

	$(function () {
		getLikeCnt();
	});

	function getLikeCnt(){
		var data = {vol_idx:vol_idx, board_seq:board_seq, board_sub_seq:board_sub_seq, ins:"N"}
		$.ajax({
			type: "POST",
			url : "../_php_inc/inc_like_exe.php",
			data: data,
			dataType:"json",
			success : function(data, status, xhr) {
				console.log(data);
				var like_cnt = 0;
				if(data.like_cnt != null && data.like_cnt != undefined && data.like_cnt != "undefiend")	like_cnt = data.like_cnt;
				$("#like_cnt").text(parseInt(like_cnt));
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(jqXHR.responseText);
			}
		});
	}

	function like_click() {
		var data = {vol_idx:vol_idx, board_seq:board_seq, board_sub_seq:board_sub_seq, ins:"Y"}
		$.ajax({
			type: "POST",
			url : "../_php_inc/inc_like_exe.php",
			data: data,
			dataType:"json",
			success : function(data, status, xhr) {
				console.log(data);
				var like_cnt = 0;
				if(data.like_cnt != null && data.like_cnt != undefined && data.like_cnt != "undefiend")	like_cnt = data.like_cnt;
				$("#like_cnt").text(parseInt(like_cnt));
				if(data.ins_yn == "N")	alert("이미 좋아요!를 한 게시물입니다.");
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(jqXHR.responseText);
			}
		});
	}
</script>
<!-- kruddo add //-->

<div class="like_wrap">
	<p class="like_desc">이 콘텐츠가 즐거우셨다면 아래  <strong>‘최고’</strong>  를 꾸욱 눌러주세요!!</p>
	<a href="javascript:like_click()"><span class="like" id="like_cnt">0</span></a>
</div>

<div class="share_block">
	<span class="tit">공유하기</span>
	<span class="sns_share">
		<a href="javascript:void(0)" onclick="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u=' +encodeURIComponent(document.URL)+'&t='+encodeURIComponent(document.title), 'facebooksharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="새창" class="facebook">페이스북</a>
		<a href="#" onclick="javascript:window.open('http://share.naver.com/web/shareView.nhn?url=' +encodeURIComponent(document.URL)+'&title='+encodeURIComponent(document.title), 'naversharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="새창" class="blog">블로그</a>
		<a href="javascript:void(0)" onclick="javascript:window.open('https://story.kakao.com/s/share?url=' +encodeURIComponent(document.URL), 'kakaostorysharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes, height=400,width=600');return false;" target="_blank" title="새창" class="kakaostory">카카오 스토리</a>
		<a href="javascript:void(0)" onclick="javascript:window.open('https://twitter.com/intent/tweet?text=[%EA%B3%B5%EC%9C%A0]%20' +encodeURIComponent(document.URL)+'%20-%20'+encodeURIComponent(document.title), 'twittersharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="새창" class="twitter">트위터</a>
		<a href="javascript:void(0)" onclick="javascript:window.open('https://band.us/plugin/share?route='+encodeURIComponent(document.URL)+'&body='+encodeURIComponent(document.title)+encodeURIComponent(document.URL), 'bandsharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="새창" class="band">밴드</a>
		<a href="#url" class="url" onclick="copy(this.href);">URL</a>
	</span>
	<span>
		<span class="pc_only">
			<a href="https://www.nps.or.kr/jsppage/cyber_pr/subscribe/intro.jsp" target="_blank" class="btn_subscribe" title="새창">구독신청</a><!--*#subscribe   btn_layer*/-->	
		</span>
		<span class="mobile_only">
			<a href="https://m.nps.or.kr/jsppage/mobile/ne/subscribe/intro.jsp?hrnkMenuId=MW_NE&menuId=MW_NE_006&depth=2" target="_blank" class="btn_subscribe" title="새창">구독신청</a>
		</span>
	</span>
</div>