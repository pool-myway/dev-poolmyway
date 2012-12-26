<?php
//define('MYSQL_HOST','10.97.0.94');
//define('MYSQL_USER','u1020266_brt');
//define('MYSQL_PASSWORD','delhi@taxi');
//define('MYSQL_DB','db1020266_brt');
//
//$connection = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or 
//	die ('Unable to connect. Check your connection parameters.');
//mysql_select_db(MYSQL_DB, $connection) or die(mysql_error($connection));
//
//if (!$connection)  {
//  die('Could not connect: ' . mysql_error());
//}


define('MYSQL_HOST','localhost');
define('MYSQL_USER','root');
define('MYSQL_PASSWORD','');
define('MYSQL_DB','brt_db');

$connection = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or 
	die ('Unable to connect. Check your connection parameters.');
mysql_select_db(MYSQL_DB, $connection) or die(mysql_error($connection));

if (!$connection)  {
  die('Could not connect: ' . mysql_error());
}

?>
