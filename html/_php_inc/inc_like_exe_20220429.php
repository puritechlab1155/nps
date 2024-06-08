<?php
	//header("Content-Type: application/json");

	$hostname = "localhost";
	$username = "nps2022";
	$password = "nps2022!@";
	$database = "nps2022";

	$connect = mysqli_connect($hostname, $username, $password, $database);
	mysqli_select_db($connect, $database) or die('DB 선택 실패');


	// 1. 자바스크립트 객체 또는 serialize() 로 전달
	$vol_idx = $_POST['vol_idx'];
	$board_seq = $_POST['board_seq'];
	$board_sub_seq = $_POST['board_sub_seq'];
	$ins = $_POST['ins'];
	$ip_addr = getRealClientIp();



	if($ins == "Y"){

		// 게시물의 좋아요 한 아이피라면 갯수 늘리지 않음.
		// board_seq, ip_addr - 인덱스로 지정 되어 중복 저장 되지 않음
		$sql_ins = "insert into km_like_ip(vol_idx, board_seq, board_sub_seq, ip_addr) 
			values('".$vol_idx."', '".$board_seq."', '".$board_sub_seq."', '".$ip_addr."')";	
		$result_ins = mysqli_query($connect, $sql_ins);

		if(isset($result_ins)){
			$sql_sel = "select ifnull(count(*), 0) cnt from km_like where vol_idx = '".$vol_idx."' and board_seq='".$board_seq."' and board_sub_seq='".$board_sub_seq."' ";
			$result_sel =  mysqli_query($connect, $sql_sel);
			$row_sel = mysqli_fetch_array($result_sel);
			
			if($row_sel["cnt"] > 0){		// 게시물 좋아요 데이터가 있으면 업데이트
				$sql_upt = "update km_like 
					set like_count=(select ifnull(count(*), 0) cnt from km_like_ip 
						where vol_idx = '".$vol_idx."' and board_seq='".$board_seq."' and board_sub_seq='".$board_sub_seq."') 
					where vol_idx = '".$vol_idx."' and board_seq='".$board_seq."' and board_sub_seq='".$board_sub_seq."'";
			}else{		// 게시물 좋아요 데이터가 없으면 인서트
				$sql_upt = "insert into km_like(vol_idx, board_seq, board_sub_seq, like_count)
					values('".$vol_idx."', '".$board_seq."', '".$board_sub_seq."', (select ifnull(count(*), 0) cnt from km_like_ip where vol_idx = '".$vol_idx."' and board_seq='".$board_seq."' and board_sub_seq='".$board_sub_seq."'))";
			}

			$result_upt =  mysqli_query($connect, $sql_upt);
			//$row_upt = mysqli_fetch_array($result_upt);
			if(isset($result_upt)){
				$sql_cnt = "select ifnull(like_count, 0) like_count from km_like 
					where vol_idx = '".$vol_idx."' and board_seq='".$board_seq."' and board_sub_seq='".$board_sub_seq."' ";
				$result_cnt =  mysqli_query($connect, $sql_cnt);
				$row_cnt = mysqli_fetch_array($result_cnt);
				echo(json_encode(array("like_cnt"=>$row_cnt["like_count"])));
			}
		}
	}
	else{
		$sql_cnt = "select ifnull(like_count, 0) like_count 
			from km_like where vol_idx = '".$vol_idx."' and board_seq='".$board_seq."' and board_sub_seq='".$board_sub_seq."'";
		$result_cnt =  mysqli_query($connect, $sql_cnt);
		$row_cnt = mysqli_fetch_array($result_cnt);
		echo(json_encode(array("like_cnt"=>$row_cnt["like_count"])));
	}


	// ip adress
	function getRealClientIp() {
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP')) {
			$ipaddress = getenv('HTTP_CLIENT_IP');
		} else if(getenv('HTTP_X_FORWARDED_FOR')) {
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		} else if(getenv('HTTP_X_FORWARDED')) {
			$ipaddress = getenv('HTTP_X_FORWARDED');
		} else if(getenv('HTTP_FORWARDED_FOR')) {
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		} else if(getenv('HTTP_FORWARDED')) {
			$ipaddress = getenv('HTTP_FORWARDED');
		} else if(getenv('REMOTE_ADDR')) {
			$ipaddress = getenv('REMOTE_ADDR');
		} else {
			$ipaddress = '알수없음';
		} 
		return $ipaddress;
	}















	// 게시물의 좋아요 한 아이피라면 갯수 늘리지 않음.
	/*
	$sql = "select ifnull(count(*), 0) cnt from km_like_ip where kind='".$kind."' and ip_addr = '".$ip_addr."' ";
	$result =  mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($result);
	

//echo(json_encode(array("like_cnt"=>$sql)));

	
	//if($row["cnt"] == 0){
		//echo(json_encode(array("kind" => $kind, "ip_addr" => $ip_addr, "cnt"=>$row["cnt"]."ins")));
		$sql_ins = "insert into km_like_ip(kind, ip_addr) values('".$kind."', '".$ip_addr."')";
		$result_ins = mysqli_query($connect, $sql_ins);

		if(isset($result_ins)){
			$sql_sel = "select ifnull(count(*), 0) cnt from km_like where kind='".$kind."' ";
			$result_sel =  mysqli_query($connect, $sql_sel);
			$row_sel = mysqli_fetch_array($result_sel);
			
			if($row_sel["cnt"] > 0){		// 게시물 좋아요 데이터가 있으면 업데이트
				$sql_upt = "update km_like set like_count=(select ifnull(count(*), 0) cnt from km_like_ip where kind='".$kind."') where kind='".$kind."'";
			}else{		// 게시물 좋아요 데이터가 있으면 인서트
				$sql_upt = "insert into km_like(kind, like_count) values('".$kind."', (select ifnull(count(*), 0) cnt from km_like_ip where kind='".$kind."'))";
			}

			$result_upt =  mysqli_query($connect, $sql_upt);
			//$row_upt = mysqli_fetch_array($result_upt);
			if(isset($result_upt)){
				$sql_cnt = "select like_count from km_like where kind='".$kind."' ";
				$result_cnt =  mysqli_query($connect, $sql_cnt);
				$row_cnt = mysqli_fetch_array($result_cnt);
				echo(json_encode(array("like_cnt"=>$row_cnt["like_count"], $sql_upt)));
			}
		}
	}
	else{
		$sql_cnt = "select like_count from km_like where kind='".$kind."' ";
		$result_cnt =  mysqli_query($connect, $sql_cnt);
		$row_cnt = mysqli_fetch_array($result_cnt);
		echo(json_encode(array("like_cnt"=>$row_cnt["like_count"], $sql_cnt)));
	}
*/	



?>