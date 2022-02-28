<?php
  $Busnumber = $_POST['Busnumber'];
  $From = $_POST['From'];
  $To = $_POST['To'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  //Database Connection

  $conn = new mysqli('localhost', 'root', '', 'addbus');
   if($conn->connect_error){
   	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into addbus(Busnumber, From, To, date, time) 
		values($Busnumber, $From, $To, $date, $time)");
	$stmt->bind_param("dssii", $Busnumber, $From, $To, $date, $time);
	$stmt->execute();
	echo "Bus Added Succsessfully....";
	$stmt->close();
	$conn->close();

}




?>
