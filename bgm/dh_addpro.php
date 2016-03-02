<?php
		 session_start();
		
		
		if($_SESSION['dsgn']!="divhead")
			{header("Location:login.php");
			}
			
?>			

<html>
<head>
    <link rel="shortcut icon" href="titicon.gif" />
</head>
<style>
.sandi select{
   background: opaque;
   font-color:black;
   font-family:times new roman;
   background-color:white;
   width: 150px;
   padding:0px;
   font-size: 15px;
   line-height: 1;
   border: 1;
   border-radius: 0.5;
   height: 25px;
   }
	body
				{color:white;
							background: url('4.jpg') no-repeat center center fixed; 
							
					-webkit-background-size: cover;
						-moz-background-size: cover;
					-o-background-size: cover;
						background-size: cover;
				}	
				


</style>

	<script language="javascript" type="text/javascript" src="datetimepicker.js">
	</script>
	
<body>
	<?php
	include("layout1.html");
	?>


<div id="m_form_bg" style="width:60%; margin-top:5%; margin-left:20%;  z-index:10;">

<form action="dh_addpro_proc.php" method="post">
	<div class="form">
	<u><h3>PROJECT DETAILS</h3></u>
	Project Name:
	<input type="text" name="pname"/><br/>
	&nbsp;&nbsp;&nbsp;Client name:
	<input type="text" name="cname"/><br/><br/>
	Client Details:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br/>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<textarea rows="5" cols="25" name="cdet"></textarea>&nbsp;&nbsp;<br/>Project Details:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	

	<form action="../action/return.html" method="get"><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	<textarea rows="6" cols="35" name="pdet"></textarea>&nbsp;&nbsp;<br/>
	<div style="margin-left:60%">
	<input id="reset" accesskey="R" type="reset" value="reset" name="reset"/><br/>
	</div>
	</form>
	
	
	&nbsp;&nbsp;&nbsp;Start Date:
	<input type="Text" name="sdate" id="demo1" size="15"><a href="javascript:NewCal('demo1','ddmmmyyyy')"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
	<br/>&nbsp;
	&nbsp;&nbsp;&nbsp;Due Date:<input type="Text" name="ddate" id="demo2" size="15"><a href="javascript:NewCal('demo2','ddmmmyyyy')"><img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
	
	
	<div class="sandi">&nbsp;&nbsp;&nbsp;&nbsp;
	Assign To :
	
	
	<?php 
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die(mysql_error());}
			  
			   mysql_select_db("anomoly_report",$con);
			   
			   $q1=mysql_query("select * from login where dsgn='testlead'");
			   echo "<select name='assgn' width='20px'>";
			   while($r=mysql_fetch_array($q1))
			   {
			     echo "<option value'".$r['name']."'>".$r['name']."</option>"; 
			   }
			   echo "</select>";
			
			
	   ?>
	   
	</div>
	
	<br/><br/>

   <input type="submit" name="submit" value="SAVE & SEND" style="margin-left:5%;text-align:center;height: 30px; width: 105px;color:#080808;font-family:arial"/>
</div>
</form>	


<br/><br/><br/><br/>


</div>
</body>
</html>