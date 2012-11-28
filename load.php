<?
	include "config.php";
	$id = $_GET['id'];
	$act = $_GET['act'];

	$r = mysql_query("SELECT * FROM photos WHERE `ID`=".$id);
	$data = mysql_fetch_array($r);

	if($act=="title")
	{
		echo $data['NAME'];
	}
	else
	{
		$resp = array("path" => $data['PATH']);
		echo json_encode($resp);
	}
?>