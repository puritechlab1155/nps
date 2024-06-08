<?
	$hostname = "localhost";
	$username = "nps2022";
	$password = "nps2022!@";
	$database = "nps2022";

	$connect = mysqli_connect($hostname, $username, $password, $database);
	mysqli_select_db($connect, $database) or die('DB 선택 실패');

	$vol_idx = $_POST['vol_idx'];

	$retArr = array();
	$sql_cnt = "select vol_idx, board_seq, board_sub_seq, ifnull(like_count, 0) like_count from km_like where vol_idx='".$vol_idx."'";
	$result_cnt =  mysqli_query($connect, $sql_cnt);
	//$row_cnt = mysqli_fetch_array($result_cnt);
	//echo(json_encode(array("like_cnt"=>$row_cnt)));
	while($row_cnt = mysqli_fetch_array($result_cnt)){

		$arr = array('vol_idx'=>$row_cnt['vol_idx'], 'board_seq'=>$row_cnt['board_seq'], 'board_sub_seq'=>$row_cnt['board_sub_seq'], 'like_count'=>$row_cnt['like_count']);

		array_push($retArr, $arr);
	}

	echo json_encode($retArr);
?>