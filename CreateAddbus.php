<?php
$conn = mysql_connect("localhost","root", "");
if(!$conn )
{
die('Could not connect: ' . mysql_error());
}
$sql = 'CREATE TABLE AddBus( '.
'BusNumber INT NOT NULL AUTO_INCREMENT, '.
'BusNumber VARCHAR(20) NOT NULL, '.
'From INT NOT NULL, '.
'To INT NOT NULL, '.
'Date INT NOT NULL, '.
'Time INT NOT NULL, '.

'primary key ( BusNumber )';
mysql_select_db('AddBus');
$retval = mysql_query( $sql, $conn );
if(!$retval )
{
die('Could not create table: ' . mysql_error());
}
echo "Table student1 created successfully\n";
mysql_close($conn);
?>