<?php
session_start();

require('database_connection.php');
$sql="SELECT * FROM boiler_telemetry";
$rs = mysqli_query($conn,$sql);
if(!$rs) {
	echo("No telemetry data");
}
else
{
$count=mysqli_num_rows($rs);
$query=mysqli_fetch_array($rs);
for($x=0;$x<=$count-1;$x++){
	echo($query['temperature']);
}
mysqli_close($conn);
}
?>