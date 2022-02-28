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
.button2 {width: 200px;}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;

      </style>

  <title>Add Bus</title>
<meta charset="utf-8">
<link rel="stylesheet" href="allstyle.css">
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
$sql = "INSERT INTO AddBus(BusNumber, From1, To1, Date1, Time1) VALUES ('$_POST[Busnumber]','$_POST[From]', '$_POST[To]', '$_POST[date]', '$_POST[time]')";
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
<div class="addbus">
<h1>ADD BUS</h1>
<form method="Post" id="AddBus" action="">
	

<label class="label1"> <b>Bus Number :</b> </label>

<input style="height:24px;" type="text" name="Busnumber" id="Busnumber"
      Placeholder="Enter Bus Number"><br><br>


<label class="label2"> <b>Route :</b> </label>
<input style= "margin-left:0px;height:24px;"  type="text" name="From" id="From"
      Placeholder="From"><br><br>

<input style="margin-left:110px;height:24px; " type="text" name="To" id="To"
      Placeholder="To"><br><br>

<label class="label3"> <b>Timing :</b> </label>
<input id="datefield" type='date'min='2020-03-05' max='2030-12-31'></input>
<input style="margin-right:14px;height:24px;" type="date" name="date" id="date">
<input type="time" name="time" id="time"><br><br>

<input type="submit" name="insert" class="button button2"/>
<input type="Reset" class="button button2"/>
  
   </head>

   </style>
   
     

</form>
</div>

<?php
}
?>
</body>
</html>