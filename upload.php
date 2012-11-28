<?
	include "config.php";

	$path = $_FILES['path']['tmp_name'];
	$file = $_FILES['path']['name'];
	$title = $_POST['title'];

	$target_path = "upload/";
	$rnd = rand(0000, 9999);
	$new = basename( $_FILES['path']['name']).$rnd;
	$new = md5($new);
	$target_path = $target_path . $new;

	move_uploaded_file($_FILES['path']['tmp_name'], $target_path);

	$r = mysql_query("SELECT * FROM photos");
	$n = mysql_num_rows($r);
	$n++;

	$path = $target_path;

	$sql = "INSERT INTO photos VALUES (
		".$n.",
		'".$title."',
		'".$path."'
	);"; 
	mysql_query($sql);

	header("location: http://samplesn.ru/");
?>