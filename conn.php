<?php 
	$conn= pg_connect("host=localhost dbname=timetrex user=timetrex password=44wallst");
	if(!conn){
	die("Error in connection: " . pg_last_error());
	}else{
	echo "PSQL connected <br>";
	}

	$conn2 = mysqli_connect("10.10.2.111", "root", "44wallst","sentrifugo");
	if ($conn2) {
        	echo "Mysql connected <br> ";
   		// die("Connection failed: " . mysqli_connect_error());
	}else{
	echo 'not connected';
	}

?>
