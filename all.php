<?
	include "config.php";

	$r = mysql_query("SELECT * FROM photos");
	$n = mysql_num_rows($r);

	if($n!="0")
	{
		for($i=1; $i<=$n; $i++)
		{
			$r = mysql_query("SELECT * FROM photos WHERE `ID`=".$i);
			$data = mysql_fetch_array($r);
			$src = $data['PATH'];
			echo "<img src='".$src."' onclick='showPhoto(".$i.");'></img>";
		}
	}
	else
	{
		echo "There is currently no photos.";
	}
?>