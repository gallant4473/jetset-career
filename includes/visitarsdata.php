<?php

$server=$_SERVER['HTTP_HOST'];
$browser=$_SERVER['HTTP_USER_AGENT'];
$referal=$_SERVER['HTTP_REFERER'];
$ipadr=$_SERVER['REMOTE_ADDR'];

$date_time= date('d-m-y');

//echo $server. " ". $browser ." " .$referal . " ".$ipadr. " ".$date_time;

include("connect.php");

mysql_query("INSERT INTO `visitarsdata`(`id`, `server`, `browser`, `refral`, `ipadr`, `date_time`) VALUES ('','$server','$browser','$referal','$ipadr','$date_time')");

mysql_close($conn);



?>