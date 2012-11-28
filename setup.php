<?
	include "config.php";

	$sql = "CREATE TABLE photos (
		`ID` int NOT NULL,
		`NAME` char(20) NOT NULL,
		`PATH` text NOT NULL,
		PRIMARY KEY (`ID`)
	);";
	mysql_query($sql);
?>