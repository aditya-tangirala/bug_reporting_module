<?php
	session_start();
?>
<html>
	<head>
		
	</head>
	<body>
		<?php
			include("layout.html");
		
			$proj=$_SESSION['proj'];
			$module=$_POST['module'];
			$_SESSION['module']=$module;
			
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die("Connection Failed:".mysql_error());
			}
			
			mysql_select_db("anomoly_report",$con);
			
			$file=fopen($_SESSION['name']."_".$proj."_".$module.".xls","w") or exit("Unable to open file!");
					
			$anmly_rpt=mysql_query("select * from report where pname='$proj' && module='$module' order by sno asc ");			
			fwrite($file,"SNo"."\t"."Project"."\t"."Module"."\t"."TID"."\t"."Severity"."\t"."Description"."\n");
			while($r=mysql_fetch_array($anmly_rpt))
			{   //echo $r['sno']."&nbsp;".$r['module']."&nbsp;".$r['testcaseid']."&nbsp;".$r['desc']."&nbsp;".$r['severity'];
				fwrite($file,$r['sno']."\t".$r['pname']."\t".$r['module']."\t".$r['testcaseid']."\t".$r['severity']."\t".$r['desce']."\n");
			}
			fclose($file);
		?>
		<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
			<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:green;">Report Generated Successfully
			<br/>
			<a href="report.php" style="font-size:20px;">View Anomaly Report as Webpage</a></p>
			<br/>
			<div style="position:absolute; top:140px; left:38%;">
			<p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p>
			</div>
			<div id="anim"  style="z-index:20;" >
			<p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p>
			</div>
		</div>
	</body>
</html>