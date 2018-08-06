<?php
include('conn.php');
/*
function get_users($conn) {
	$result = pg_query($conn, "SELECT * FROM punch_control");
	if (!$result) {
	    echo "An error occurred.\n";
	}	
	echo 'good';
	$users = pg_fetch_array($result);
	return $users;
}
var_dump($users);
*/

$sql = "SELECT * FROM punch";
$result = pg_query($conn, $sql);
if (!$result) {
    die("Error in SQL query: " . pg_last_error());
}
/*
$row = pg_fetch_all($result);
//print_r($row);
foreach($row as $p){
	foreach($p as $key=>$value){
	// $key.'='.$value . "<br>";
	//var_dump($key);
	echo $key.'='.$value.'<br>';
	}
}
*/
while($row = pg_fetch_array($result)){
//while($row = pg_fetch_array($result)){
	//echo $row[0].'<br>';
	//var_dump($row);
	foreach($row as $rows){
	echo $rows.'<br>';
	}
//}
//var_dump($row);
}
?>
