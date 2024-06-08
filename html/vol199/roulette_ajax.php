<?php
$hostname = "localhost";
$username = "nps2022";
$password = "nps2022!@";
$database = "nps2022";

$connect = mysqli_connect($hostname, $username, $password, $database);
mysqli_select_db($connect, $database) or die('DB 선택 실패');



date_default_timezone_set("Asia/Seoul");
$today = date('Y-m-d H:i:s');

$mode = $_POST['mode'];


if($mode == 'winner_save'){
	$index_arr = [
					'vol_idx',
					'name',
					'tel',
					'email',
					'product_name',
					'ip',
					'agree',
				];
}


if($mode == 'boom_save'){
	$index_arr = [
					'vol_idx',
					'product_name',
					'ip',
				];
}


$col_name_arr_txt = '';
$val_arr_txt = '';

for($i=0; $i<count($index_arr); $i++){
	$index = $index_arr[$i];
	
	if($_POST[$index] == ''){
		$value = '파라미터 값 실패';
		
		echo $value;
	}else{
		${$index} = $_POST[$index];
		
		$col_name_arr_txt .= '`'.$index.'`,';
		$val_arr_txt .= "'".${$index}."',";
	}
}

$col_name_arr_txt .= '`reg_date`';
$val_arr_txt .= "'{$today}'";


// ip를 대조하여 이미 당첨된 내역이 있는지 여부를 가리기 위한 쿼리
$duplicate_where = "`vol_idx`={$vol_idx} AND `ip`='{$ip}'";
$duplicate_query = "SELECT * FROM `roulette_winner_list` WHERE {$duplicate_where}";

$duplicate_result = mysqli_query($connect, $duplicate_query);
$duplicate_row = mysqli_fetch_assoc($duplicate_result);

$duplicate_regno = $duplicate_row['regno'];


if(!$duplicate_regno){
	$query_insert = "INSERT INTO `roulette_winner_list` ({$col_name_arr_txt}) VALUES ({$val_arr_txt})";

	if(mysqli_query($connect, $query_insert)){
		$value = 'success';
	}else{
		$value = mysqli_error($connect).' / '.$col_name_arr_txt.' / '.$val_arr_txt;
	}
}else{
	$value = '이미 당첨내역 ip가 존재함';
}

echo $value;