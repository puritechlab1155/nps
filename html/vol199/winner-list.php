<!doctype html>
<html lang="ko">
<head>
	<title>내 곁에 국민연금</title>
	<meta property="og:image" content="../../img/logosns/logosns_vol199.jpg">
	<?php include("../../inc/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/contents.css">

	<!-- kruddo add -->
	<?
		$vol_idx = $_GET['vol_idx'] ? $_GET['vol_idx'] : "199";		// kruddo modify - 호차 번호. 191호가 아닌경우 변경, inc/like_share.php 에서도 변경

		$hostname = "localhost";
		$username = "nps2022";
		$password = "nps2022!@";
		$database = "nps2022";

		$connect = mysqli_connect($hostname, $username, $password, $database);
		mysqli_select_db($connect, $database) or die('DB 선택 실패');


	?>
</head>
<body>
<div id="wrap" class="winner-list">
	<!-- header -->
	<?php include("header.php"); ?>
	<!-- //header -->

	<div id="passwordForm">
  		<input type="password" id="password" placeholder="암호를 입력해 주세요">
  		<button onclick="checkPassword()">확인</button>
	</div>
	<div id="errorMessage" style="display:none;">
  		잘못된 암호입니다. 다시 시도하세요.
	</div>

	<!-- contents -->
	<section id="contents" style="display:none;">
		<div class="section01 wow fadeBigInUp">
			<div class="content">
				<div class="title">
					Vol.<?php echo $vol_idx?> 즉석당첨 룰렛이벤트 당첨자 리스트
				</div>


				<div class="challengers">
					<?php
					$challengers_where = "`vol_idx`={$vol_idx}";
					$challengers_query = "SELECT * FROM `roulette_winner_list` WHERE {$challengers_where}";

					$challengers_result = mysqli_query($connect, $challengers_query);
					$challengers_resutl_count = mysqli_num_rows($challengers_result);
					?>
					총 도전자수 : <?php echo number_format($challengers_resutl_count)?>명
				</div>

				<?php
				$keyword = $_GET['keyword'];
				$limit = $_GET['limit'] ? $_GET['limit'] : 15;
				$page_num = $_GET['page_num'] ? $_GET['page_num'] : 1;
				$offset = ($page_num - 1) * $limit;
				?>
				<div class="winner_list_top">
					<form class="search_form" method="GET" action="">
						<input type="hidden" name="page_num" value="<?php echo $_GET['page_num']?>">

						<input type="text" name="keyword" value="<?php echo $keyword?>" class="search_form_input" placeholder="성명/핸드폰 번호">
						<i class="xi-search" onclick="search_form_keyword_submit()"></i>
					</form>

					<div class="excel_down_btn" onclick="excel_down(<?php echo $vol_idx?>)">
						Excel 다운로드
					</div>
				</div>


				<div class="winner_list_area">
					<?php
					$where = "`vol_idx`={$vol_idx} AND `product_name`!='꽝'";
					if($keyword != ''){
						$where .= " AND (`name` LIKE '%{$keyword}%' OR `tel` LIKE '%{$keyword}%')";
					}

					$query = "SELECT * FROM `roulette_winner_list` WHERE {$where} LIMIT {$offset}, {$limit}";

					$result = mysqli_query($connect, $query);
					$resutl_count = mysqli_num_rows($result);
					?>

					<table class="winner_list">
						<?php
						$index_arr = [
										0 => [
												'index' => 'regno',
												'label' => 'No',
											],
										1 => [
												'index' => 'vol_idx',
												'label' => '회차',
											],
										2 => [
												'index' => 'name',
												'label' => '성명',
											],
										3 => [
												'index' => 'tel',
												'label' => '핸드폰번호',
											],
										4 => [
												'index' => 'email',
												'label' => '이메일주소',
											],
										5 => [
												'index' => 'agree',
												'label' => '개인정보 이용약관 동의',
											],
										6 => [
												'index' => 'product_name',
												'label' => '당첨상품',
											],
										7 => [
												'index' => 'ip',
												'label' => '접속IP',
											],
										8 => [
												'index' => 'reg_date',
												'label' => '등록일자',
											],
									];
						?>
						<thead>
							<tr>
								<?php for($i=0; $i<count($index_arr); $i++){
									$index = $index_arr[$i]['index'];
									$label = $index_arr[$i]['label'];
									?>
									<td class="<?php echo $index?>">
										<?php echo $label?>
									</td>
								<?php }?>
							</tr>
						</thead>

						<tbody>
							<?php
							// 결과 출력
							if($resutl_count > 0){
								$row_count = 1;
								while($row = mysqli_fetch_assoc($result)){?>
									<tr>
										<?php for($i=0; $i<count($index_arr); $i++){
											$index = $index_arr[$i]['index'];

											if($index == 'regno'){
												${$index} = $offset + $row_count;
											}else{
												${$index} = $row[$index];
											}
											?>
											<td class="<?php echo $index?>">
												<?php echo ${$index}?>
											</td>
										<?php }?>
									</tr>
								<?php
									$row_count++;
								}
							}else{?>
								<tr>
									<td class="no_result" colspan="<?php echo (count($index_arr) - 1)?>">
										<?php if($keyword != ''){?>'<b><?php echo $keyword?></b>'가(이) 포함되는 <?php }else{?>해당 <?php }?>데이터가 없습니다.
									</td>
								</tr>
							<?php }?>
						</tbody>
					</table>

					<!-- 페이지네이션 시작 -->
					<div class="pagination">
						<?php if($page_num > 1){?>
							<a class="page_btn first" href="javascript:go_page(1);" title="첫 페이지"><i class="xi-angle-left"></i></a> <a class="page_btn prev" href="javascript:go_page('prev');" title="이전 페이지"><i class="xi-angle-left-thin"></i></a>
						<?php }?>
						<?php
							$pagination_query = "SELECT * FROM `roulette_winner_list` WHERE {$where}";

							$pagination_result = mysqli_query($connect, $pagination_query);
							$pagination_result_count = mysqli_num_rows($pagination_result);


							$total_page_count = round($pagination_result_count / $limit);

							$page_echo_limit = 10;


							$a = round($total_page_count / $page_echo_limit);
							$page_echo_limit_multiple_x = 1;


							while($a + 1 >= $page_echo_limit_multiple_x){
								$page_echo_limit_multiple = $page_echo_limit * $page_echo_limit_multiple_x;

								if($total_page_count < $page_echo_limit_multiple){
									$page_echo_start_num = ($page_echo_limit * round($page_num / $page_echo_limit)) + 1;
									$page_echo_last_num = $total_page_count;

									break;
								}else{
									if($page_echo_limit_multiple_x >= $page_num / $page_echo_limit){
										$page_echo_start_num = ($page_echo_limit * round($page_num / $page_echo_limit)) + 1;
										$page_echo_last_num = $page_echo_limit * $page_echo_limit_multiple_x;
										if($page_echo_start_num > $page_echo_last_num){
											$page_echo_start_num = ($page_echo_limit * (round($page_num / $page_echo_limit) - 1)) + 1;
										}

										break;
									}
								}

								$page_echo_limit_multiple_x++;
							}

							for($i=$page_echo_start_num; $i<=$page_echo_last_num; $i++){?>
								<a class="page_btn<?php if($page_num == $i){?> current<?php }?>" href="<?php if($page_num != $i){?>javascript:go_page('<?php echo $i?>');<?php }?>"><?php echo $i?></a>
						<?php }?>
						<?php if($page_num != $total_page_count && $total_page_count != 0 && $total_page_count != 1){?>
							<a class="page_btn next" href="javascript:go_page('next');" title="다음 페이지"><i class="xi-angle-right-thin"></i></a> <a class="page_btn last" href="javascript:go_page(<?php echo $total_page_count?>);" title="마지막 페이지"><i class="xi-angle-right"></i></a>
						<?php }?>
					</div>
					<!-- 페이지네이션 끝 -->
				</div>
			</div>
		</div>
	</section>
	<!-- contents -->
<script>
// 페이지가 로드될 때 sessionStorage에서 암호를 가져와서 사용합니다.
window.onload = function() {
  var storedPassword = sessionStorage.getItem("password");
  if (storedPassword) {
    document.getElementById("password").value = storedPassword;
    checkPassword();
  }
};

function checkPassword() {
  var password = document.getElementById("password").value;
  sessionStorage.setItem("password", password);
  // 암호가 올바르지 않을 때 오류 메시지를 표시합니다.
  var errorMessage = document.getElementById("errorMessage");
  errorMessage.style.display = "none";
  if (password !== "nps2024!@&&") {
    errorMessage.style.display = "block";
  } else {
    document.getElementById("passwordForm").style.display = "none";
    document.getElementById("contents").style.display = "block";
  }
}


	jQuery(document).on('ready', function(){
		jQuery('.search_form').on('keypress', function(e){
			if(e.keyCode == 13){
				search_form_keyword_submit()
			}
		});
	});

	function search_form_keyword_submit(){
		jQuery('[name="page_num"]').val(1);
		jQuery('.search_form').submit();
	}


	// 페이지 이동 버튼
	function go_page(page){
		if(page == 'prev'){
			jQuery('[name="page_num"]').val(jQuery('[name="page_num"]').val() - 1);
		}else if(page == 'next'){
			jQuery('[name="page_num"]').val(jQuery('[name="page_num"]').val() + 1);
		}else{
			jQuery('[name="page_num"]').val(page);
		}

		jQuery('.search_form').submit();
	}


	function excel_down(vol_idx){
		location.href = 'winner-list-excel.php?vol_idx='+vol_idx;
	}
</script>
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
