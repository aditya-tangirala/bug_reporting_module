<?php
session_start();
?>

<html>
<body>
<?php
$id=$_POST["idn"];
$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die("Failed:".mysql_error());
			}
			
			mysql_select_db("anomoly_report",$con);
			
			$q2=mysql_query("update inbox set st1=0 where idn='$id'");
			if($q2==1)
			echo '<div style="text-align:center;margin-top:20%;">Succesfully Deleted<br/><a href="inbox_proc.php">
GO Back to Inbox;</a></div>';
?>
</body>
</html>