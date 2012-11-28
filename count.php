<?
	include "config.php";

	$r = mysql_query("SELECT * FROM photos");
	$n = mysql_num_rows($r);

	echo $n;
?>