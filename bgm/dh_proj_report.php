<?php
	session_start();
	if($_SESSION['dsgn']!="divhead")
			{header("Location:login.php");
			}
?>
<html>
<head>
	<link type="text/css" href="style1.css" rel="stylesheet">
	<style>
						body
				{color:white;
							background: url('4.jpg') no-repeat center center fixed; 
							width:100%;
					-webkit-background-size: cover;
						-moz-background-size: cover;
					-o-background-size: cover;
						background-size: cover;
				}	
		
	</style>
</head>
<body>
	<?php
		include("layout1.html");
	?>
	<div id="m_form_bg" style="width:80%; left:-10%; top:15%;">
		<div><p style=" text-align:center; font-size:18px; font-family:Century Gothic; color:white;"><strong>Project Report</strong></p>
		</div>
		<div>
		<?php
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die("Connection Failed:".mysql_error());
			}
			
			mysql_select_db("anomoly_report",$con);
			
			$proj=$_POST['proj'];
			
			echo "<table border='2px' width='98%' cellpadding='10' border-radius='10px' style='margin-left:1%; margin-bottom:2%; line-height:150%;  font-family:Century Gothic;'>			
				<tr>
					<th >Sno.</th>
					<th >Project Name</th>
					<th >Start Date</th>
					<th >Due Date</th>
					<th >Man Power</th>
					<th >Round</th>
					<th >Status</th>
				</tr>";
				
			
			$anmly_rpt=mysql_query("select * from project where pname='$proj' order by pid asc ");
			while($r=mysql_fetch_array($anmly_rpt))
			{	$mnpwr_qry="select count(distinct assgn) from module_assgn where pname='$proj' group by(pname)";
				$m=mysql_fetch_array(mysql_query($mnpwr_qry));
				echo "<tr>";
				echo "<td>".$r['pid'] . "</td>";
				echo "<td>".$r['pname'] . "</td>";
				echo "<td>".$r['s_date'] . "</td>";
				echo "<td>".$r['d_date'] . "</td>";
				echo "<td>".$m['count(distinct assgn)']. "</td>";
				echo "<td>".$r['round'] . "</td>";
				echo "<td>".$r['status'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
			
			
		?>
		
		</div>
	</div>
	
</body>
</html>