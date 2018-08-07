<?php
$conn = mysqli_connect("10.10.2.111", "root", "44wallst","sentrifugo");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$dbh = pg_connect("host=localhost dbname=timetrex user=timetrex password=44wallst");
if (!$dbh) {
    die("Error in connection: " . pg_last_error());
}

// execute query
$sql = "SELECT * FROM punch_control LEFT JOIN punch ON punch_control.id = punch.punch_control_id";
$result = pg_query($dbh, $sql);
if (!$result) {
    die("Error in SQL query: " . pg_last_error());
}
// print each row
while ($row = pg_fetch_array($result)) {
$row = pg_fetch_array($result);
$id = $row[0];
$user_id = $row[1];
$pay_period = $row[2];
$date_stamp = $row[3];
$branch_id = $row[4];
$department_id = $row[5];
$job_id = $row[6];
$job_item_id = $row[7];
$quantity = $row[8];
$bad_quantity = $row[9];
$total_time = $row[10];
$actual_total_time = $row[11];
$created_date = $row[12];
$created_by = $row[13];
$updated_date = $row[14];
$updated_by = $row[15];
$deleted_date = $row[16];
$deleted_by = $row[17];
$deleted = $row[18];
$other_id1 = $row[19];
$other_id2 = $row[20];
$other_id3 = $row[21];
$other_id4 = $row[22];
$other_id5 = $row[23];
$note = $row[24];

echo 'id ='.' '.$id. '<br>';
echo 'user_id ='.' '.$user_id. '<br>';
echo 'pay_period ='.' '.$pay_period. '<br>';
echo 'date_stamp ='.' '.$date_stamp. '<br>';
echo 'branch_id ='.' '.$branch_id. '<br>';
echo 'department_id ='.' '.$department_id. '<br>';
echo 'job_id ='.' '.$job_id. '<br>';
echo 'job_item_id ='.' '.$job_item_id. '<br>';
echo 'quantity ='.' '.$quantity. '<br>';
echo 'bad_quantity ='.' '.$bad_quantity. '<br>';
echo 'total_time ='.' '.$total_time. '<br>';
echo 'actual_total_time ='.' '.$actual_total_time. '<br>';
echo 'created_date ='.' '.$created_date. '<br>';
echo 'created_by ='.' '.$created_by. '<br>';
echo 'updated_date ='.' '.$updated_date. '<br>';
echo 'updated_by ='.' '.$updated_by. '<br>';
echo 'deleted_date ='.' '.$deleted_date. '<br>';
echo 'deleted_by ='.' '.$deleted_by. '<br>';
echo 'deleted ='.' '.$deleted. '<br>';
echo 'other_id1 ='.' '.$other_id1. '<br>';
echo 'other_id2 ='.' '.$other_id2. '<br>';
echo 'other_id3 ='.' '.$other_id3. '<br>';
echo 'other_id4 ='.' '.$other_id4. '<br>';
echo 'other_id5 ='.' '.$other_id5. '<br>';
echo 'note ='.' '.$note. '<br>';

//$sql_rec = "INSERT INTO hs_hr_timeattendance_log (hardware_user_id,employee_id,ser_no)
//            VALUES (".$id.",".$user_id.",'".$start_time."','".$department_id."')";
//$conn->query($sql_rec);
//echo  $sql_rec;
}
// free memory
pg_free_result($result);
// close connection
pg_close($dbh);
?>
