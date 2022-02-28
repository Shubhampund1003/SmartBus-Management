<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="allstyle.css">
	<title>BusPass</title>
	 <style>
	 	body
	 {
	 	background-image: url(white.jpg);
	background-size: 1600px;
	 }
 .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
} 
     
.button3 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}

.button3:hover {
  background-color: #4CAF50;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button4:hover {
  background-color: #008CBA;
  color: white;
}
.buspas{
	
	text-align: center;
	margin-top: 80px;	


}
.label1{
  margin-left: 10px;
  padding: 0px;
  text-align: center;
  font-size: 30px;
 color:white;
}

.label2{
  margin-left: 30px;
  padding: 0px;
  text-align: center;
  font-size: 30px;
  color:white;

}

.label3{
  margin-left: 30px;
  padding: 0px;
  text-align: center;
  font-size: 30px;
  color:white;

}

.label4{
  margin-left: 30px;
  padding: 0px;
  text-align: center;
  font-size: 30px;
  color:white;

}
   </style>

</head>
<body>
  
<?php
if(isset($_POST['insert']))
{
$conn = mysql_connect("Localhost", "root", "");
if(!$conn )
{
die('Could not connect: ' . mysql_error());
}
$sql = "INSERT INTO buspass(Name,MobNo,Email,Membership) VALUES ('$_POST[Name]','$_POST[MobileNo]', '$_POST[email1]', '$_POST[plan]')";
mysql_select_db('citybus');
$retval = mysql_query( $sql, $conn );
if(!$retval )
{
die('Could not insert data: ' . mysql_error());
}
echo "Insert data successfully\n";
mysql_close($conn);
}
else
{
?>

<div class="buspas">
<form method="Post" id="buspas" action="">

<h1 ><font size="12" color="white">Smart Bus Pass</h1></font>


<label class="label1" font size="12" color="white"> Name : </label><br>

<input style="height:24px;" type="text" name="Name" id="name"
      Placeholder="Enter Your Name"><br><br>


<label class="label2"> Mobile No. : </label2><br>

<input style= "height:24px;" type="text" name="MobileNo" id="name" 
      Placeholder="Enter Mobile No"><br><br>


<label class="label3"> Email Id : </labe3><br>

<input style="height:24px;" type="Email" name="email1" id="name"
      Placeholder="Enter Email Address"><br><br>

<label class="label4"> Membership : </label4><br>

  <input type="radio" name="plan" value="1" checked> Monthly<br>
  <input type="radio" name="plan" value="3"> 3 Months<br>
  <input type="radio" name="plan" value="6"> 6 Months<br>
  <input type="radio" name="plan" value="12">Yearly<br><br>
     
<input type="submit" name="insert" class="button button3"/>
<input type="Reset" class="button button4"/>
</div>
<?php
}
?>
</body>

</html>