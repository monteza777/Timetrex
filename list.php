<?php
$conn = mysqli_connect("10.10.2.111", "root", "44wallst","sentrifugo");
if ($conn) {
	echo "connected <br> ";
   // die("Connection failed: " . mysqli_connect_error());
}else{
echo 'not connected';
}

$dbh = pg_connect("host=localhost dbname=timetrex user=timetrex password=44wallst");
if (!$dbh) {
    die("Error in connection: " . pg_last_error());
}

// execute query
$sql = "SELECT * FROM punch_control";
$result = pg_query($dbh, $sql);
if (!$result) {
    die("Error in SQL query: " . pg_last_error());
}
// print each row
while ($row = pg_fetch_all($result)) {
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
pg_free_result($result);
$sql_rec = "INSERT INTO hs_hr_timeattendance_log (hardware_user_id,employee_id)
            VALUES ('$id','$user_id')";
$conn->query($sql_rec);
echo  $sql_rec;
}
// free memory

// close connection
pg_close($dbh);

?>
