<?php
include('conn.php');

$sql = "SELECT punch_control.id,punch.punch_control_id,punch_control.user_id,punch.original_time_stamp,punch.status_id  FROM punch_control LEFT JOIN punch ON punch_control.id = punch.punch_control_id ";
$result = pg_query($conn, $sql);
if (!$result) {
    die("Error in SQL query: " . pg_last_error());
}

$row = pg_fetch_all($result);
//print_r($row);
foreach($row as $p){
        foreach($p as $key=>$value){
        //var_dump($key);
        //echo $key.'='.$value.'<br>';
                if($key == 'user_id'){
		$user_id = $value;
		echo "user_id = $user_id <br>";
                }
		if($key =='original_time_stamp'){
		$key.'='.$value.'<br>';
		//echo $time = $value . '<br>';
		$time_stamp =  date("Y-m-d H:i:s",strtotime($time));
		echo $time_stamp.'<br>';	
		}
		if($key =='status_id'){
		//echo $key.'='.$value.'<br>';
		$status = $value;
		echo "status =  $status <br>";
		}
	}
		$insert = " INSERT INTO hs_hr_timeattendance_log (user_id,state,time_log) VALUES ('$user_id','$status','$time_stamp')";
		if($conn2->query($insert)){
			echo $insert . '<br>';
		//	$sql_update = "UPDATE punch_control set deleted = 1 where deleted = 0 and  user_id = '$user_id' ";
		//	pg_query($conn,$sql_update);
		}
}

?>
