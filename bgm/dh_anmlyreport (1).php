<?php
	session_start();
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
		<div><p style=" text-align:center; font-size:18px; font-family:Century Gothic; color:white;"><strong>Anomaly Report</strong></p>
		</div>
		<?php
		$proj=$_POST['proj'];
		?>
		 <div style="margin-left:42%; font-size:16px; font-family:Century Gothic; color:white;">Project Name: 
			 <strong><?php echo $proj;?></strong></div>
			 <br/>
			 
		<?php
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die("Connection Failed:".mysql_error());
			}
			
			mysql_select_db("anomoly_report",$con);
			
			
			
			
			
			echo "<table border='2px' width='98%' cellpadding='10' border-radius='10px' style='margin-left:1%; margin-bottom:2%; line-height:150%;  font-family:Century Gothic;'>			
				<tr>
					<th>Sno.</th>
					<th >Test Case ID</th>
					<th>Menu/Bar/Screen</th>
					<th >Description</th>
					<th>Severity</th>
					<th >Remarks</th>
					<th ></th>
				</tr>";
				
			
			$anmly_rpt=mysql_query("select * from report where pname='$proj' && status='1' order by sno asc ");
			while($r=mysql_fetch_array($anmly_rpt))
			{	
				echo "<tr>";
				echo "<form action='de_anmlyreport_edit.php' method='post'>";
				echo "<td>".$r['sno']."</td>";
				echo "<td>".$r['testcaseid'] . "</td>";
				echo "<td>".$r['mbs'] . "</td>";
				echo "<td>".$r['desce'] . "</td>";
				echo "<td>".$r['severity'] . "</td>";
				echo "<td width='20' height='20'>".$r['remark'] . "</td>";
				echo "<td >
				<input type='text' name='pname' value='".$r['pname']."' style='width:0px;height:0px;border:none;background:none;'>
				<input type='text' name='testcaseid' value='".$r['testcaseid']."' style='width:0px;height:0px;border:none;background:none;'>
				<input  type='submit' value='EDIT' ></form></td>";
				echo "</tr>";
			}
			echo "</table>";
			
			
		?>
		
	
	</div>
	
</body>
</html>