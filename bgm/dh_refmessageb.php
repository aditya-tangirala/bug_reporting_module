<html>
<body>
<?php
include("dh.php");
$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die("Failed:".mysql_error());
			}
			
			mysql_select_db("anomoly_report",$con);
			
			$q2=mysql_query("delete from inbox where st1=0 and st2=0");
			if($q2==1)
			echo '<div style="text-align:center;margin-top:10%;">Succesfully Refreshed<br/><a href="dh.php">Go Back</a>';
?>
</body>
</html>
