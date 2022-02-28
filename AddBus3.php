<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
     background-image: url('bus1.jpg');
      background-size: cover;
      
    }
  </style>
  <title>Add Bus</title>
<meta charset="utf-8">
<link rel="stylesheet" href="allstyle.css">
</head>
<body>



<div class="addbus">
<h1>ADD BUS</h1>
<form method="Post" id="AddBus" action="addbuss.php">
	

<label class="label1"> <b>Bus Number :</b> </label>

<input style="height:24px;" type="text" name="Busnumber" id="Busnumber"
      Placeholder="Enter Bus Number"><br><br>


<label class="label2"> <b>Route :</b> </label>
<input style= "margin-left:0px;height:24px;"  type="text" name="From" id="From"
      Placeholder="From"><br><br>

<input style="margin-left:110px;height:24px; " type="text" name="To" id="To"
      Placeholder="To"><br><br>

<label class="label3"> <b>Timing :</b> </label>
<input style="margin-right:14px;height:24px;" type="date" name="date" id="date">
<input type="time" name="time" id="time"><br><br>

<input type="submit" name="insert"/>
  <style>
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

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}
.button1 {width: 100px;}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}
.button2 {width: 100px;}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;

      </style>
   </head>
   <body>
      <a href="..\SmartBus\LoginPage.html" class="button button1"><b>Save</b></a>
      <a href=".." class="button button2"><b>Reset</b></a>



   </style>
   
     

</form>
</div>






<?php
if(isset($_POST['insert']))
{
$conn = mysql_connect("Localhost", "root", "");
if(!$conn )
{
die('Could not connect: ' . mysql_error());
}
$sql = "INSERT INTO AddBus(Busnumber, From, To, date, time) VALUES ('$_POST[Busnumber]','$_POST[From]', '$_POST[To]', '$_POST[date]', '$_POST[time]')";
mysql_select_db('AddBus');
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
<form action = "" method = "Post">
Busnumber : <input type= text name="Busnumber"><br><br>
From : <input type ="text" name = "From"><br><br>
To : <input type ="text" name = "To"><br><br>
date : <input type ="text" name = "date"><br><br>
time : <input type ="text" name = "time"><br><br>
<input type = "submit" name="insert">
</form>
}
?>



</body>
</html>