<?php include_once("config.php"); ?>
<?php

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
					'device',
					'agree',
				];
}


if($mode == 'boom_save'){
	$index_arr = [
					'vol_idx',
					'product_name',
					'ip',
					'device'
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
$my_query = "SELECT * FROM `christmas_list` WHERE `vol_idx`={$vol_idx} AND `ip`='{$ip}' AND `device`='{$device}'";
$result = mysqli_query($connect, $my_query);

$my_phone = "SELECT * FROM `christmas_list` WHERE `vol_idx`={$vol_idx} AND `tel`='{$tel}'";
$result_phone = mysqli_query($connect, $my_phone);
$my_email = "SELECT * FROM `christmas_list` WHERE `vol_idx`={$vol_idx} AND `email`='{$email}'";
$result_email = mysqli_query($connect, $my_email);

if (!$result) {
    //die('Error fetching my_query: ' . mysqli_error($connect));
	$response['status'] = 'success';
}

$my_regno = mysqli_num_rows($result); //현재 당첨자 수
$my_p = mysqli_num_rows($result_phone); //현재 당첨자 수
$my_e = mysqli_num_rows($result_email); //현재 당첨자 수


if(!$my_regno && !$my_p && !$my_e){
	$query_insert = "INSERT INTO `christmas_list` ({$col_name_arr_txt}) VALUES ({$val_arr_txt})";
	$response['status'] = 'success';
        $response['message'] = 'Insertion successful';

	if(mysqli_query($connect, $query_insert)){
		$value = 'success';
	}else{
		$value = mysqli_error($connect).' / '.$col_name_arr_txt.' / '.$val_arr_txt;
	}
}else{
	$response['status'] = 'success';
	$response['message'] = '이미 내역 존재함';
	$value = '이미 내역 존재함';
}

echo json_encode($response); // Return JSON response