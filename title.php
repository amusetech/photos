<?
	include "config.php";
	$id = $_GET['id'];
	echo $id;

	$r = mysql_query("SELECT * FROM photos WHERE `ID`=".$id);
	$data = mysql_fetch_array($r);

	echo $data['NAME'];
?>