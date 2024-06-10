<?php
date_default_timezone_set("Asia/Seoul");

$vol_idx = $_GET['vol_idx'];

if($vol_idx){
	header("Content-type: application/vnd.ms-excel");   
	header("Content-type: application/vnd.ms-excel; charset=utf-8");
	$filename = "[Vol.".$vol_idx."] 당첨자 목록 - ".date('Y-m-d').".xls";
	header("Content-Disposition: attachment; filename = $filename");   
	header("Content-Description: PHP4 Generated Data");   

	$hostname = "localhost";
	$username = "nps2022";
	$password = "nps2022!@";
	$database = "nps2022";

	$connect = mysqli_connect($hostname, $username, $password, $database);
	mysqli_select_db($connect, $database) or die('DB 선택 실패');


	ob_start();
	?>
		<table class="winner_list" border="1">
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
				$where = "`vol_idx`={$vol_idx} AND `product_name`!='꽝'";
				
				$query = "SELECT * FROM `roulette_winner_list` WHERE {$where}";
				
				$result = mysqli_query($connect, $query);
				$resutl_count = mysqli_num_rows($result);

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
								<td class="<?php echo $index?>"<?php if($index == 'tel'){?> style="mso-number-format:\@;"<?php }?>>
									<?php echo ${$index}?>
								</td>
							<?php }?>
						</tr>
					<?php
						$row_count++;
					}
				}else{?>
					<tr>
						<td class="no_result" colspan="<?php echo count($index_arr)?>">
							해당 데이터가 없습니다.
						</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	<?php
	$EXCEL_STR = ob_get_clean();
	 
	echo "<meta content=\"application/vnd.ms-excel; charset=UTF-8\" name=\"Content-type\"> ";
	echo $EXCEL_STR;
}else{
	die('잘못된 접근');
}