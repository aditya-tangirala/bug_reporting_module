<?php
$tid=$_POST["testcaseid"];

		 session_start();
		
		
		if(!($_SESSION['dsgn']="testlead" || $_SESSION['dsgn']="divhead" ))
			{header("Location:login.php");
			}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style1.css" media="all">
		<style>
		.sandi {
   background:none;
   opacity:0.8;
   font-color:black;
   font-family:times new roman;
   width: 100px;
   height:25px;
   font-size: 15px;
   border:1px solid white;
   border-radius: 4px; }
		
							body
				{color:white;
							background: url('4.jpg') no-repeat center center fixed; 
							
					-webkit-background-size: cover;
						-moz-background-size: cover;
					-o-background-size: cover;
						background-size: cover;
				}	
		
	</style>
	</head>
	<body>
	
		<?php
		$pname=$_POST['pname'];
		$oldtid=$_POST['testcaseid'];
		
		$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die(mysql_error());}
			  
			   mysql_select_db("anomoly_report",$con);
			   
			   
			   
			   $q1=mysql_query("select * from report where pname='$pname' && testcaseid='$oldtid'");
			   $r=mysql_fetch_array($q1);
			   
		
		
		include("layout1.html");
		echo '
<div id="m_form_bg" style="margin-top:0%; ">
	
		<div class="form"  style="line-height:3">
		<form action="de_anmlyreport_edit_proc.php" method="post">
		<h3 style="color:white; margin-top:4%"><strong style="color:black;">EDITING TEST CASE PANEL</strong></h3>
		
		Project Name: <b>'.$r['pname'].'</b>
		&nbsp;&nbsp;
		
		Test Case ID:  <b>'.$r['testcaseid'].'</b>
		
	
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br/>
		<input type="text" name="tdold" value="'.$r['testcaseid'].'" style="height:0px; width:0px; border:none; background:none;"> 
		<input type="text" name="pname" value="'.$r['pname'].'" style="height:0px; width:0px; border:none; background:none;"> 
		Test Case ID: <input type="text" name="tid" value="'.$r['testcaseid'].'" style="opacity:0.8; "> 
		<br/>
		Menu/Bar/Screen:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;<textarea name="mbs" rows=5 cols=40 class="txtarea" style="opacity:0.8; ">'.$r['mbs'].'</textarea>
		<br/>
		
		Compaint Description:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;<textarea name="complaint" rows=5 cols=40 class="txtarea" style="opacity:0.8;">'.$r['desce'].'</textarea>
		<br/>
		
		
;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Severity
		
		<input type="radio" name="severity" value="Critical" style="opacity:0.7;" '. ( $r['severity'] == "Critical" ? ' checked="checked"':'')
       .' >Critical
		<input type="radio" name="severity" value="High" style="opacity:0.7;" '. ( $r['severity'] == "High" ? ' checked="checked"':'')
       .'>High
		<input type="radio" name="severity" value="Medium" style="opacity:0.7;" '. ( $r['severity'] == "Medium" ? ' checked="checked"':'')
       .'>Medium
		<input type="radio" name="severity" value="Low" style="opacity:0.7;" '. ( $r['severity'] == "Low" ? ' checked="checked"':'')
       .'>Low
		<input type="radio" name="severity" value="TBD" style="opacity:0.7;" '. ( $r['severity'] == "TBD" ? ' checked="checked"':'')
       .'>TBD
		<br/>

		Remarks:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<textarea name="rmrk" rows=5 cols=40 class="txtarea" style="opacity:0.8;">'.$r['remark'].'</textarea>
		<br/>
		<br/>
		<input type="submit"  value="Update" style="width:auto;height:35;">
		</form>
		
		</div>

		</div>
		';?>
	</body>
</html>