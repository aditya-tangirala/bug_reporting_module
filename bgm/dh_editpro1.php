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


	<div id="m_form_bg" style="width:60%; margin-top:3%; margin-left:20%;  z-index:10;">
	
	<form action="dh_editpro2.php" method="post">
	<div class="form">
	<u><h3>PROJECT EDIT PANEL</h3></u>
	Select Project:
	
	<?php 
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die(mysql_error());}
			  
			   mysql_select_db("anomoly_report",$con);
			   
			   $q1=mysql_query("select * from project");
			   echo "<select name='proj' width='20px'>";
			   while($r=mysql_fetch_array($q1))
			   {
			     echo "<option value'".$r['pname']."'>".$r['pname']."</option>"; 
			   }
			   echo "</select>";
			
			
	   ?>
	   <br/>
	   <input type="submit" name="submit" value="EDIT">
	   </div>
	   </form>
	</div>
</body>	
</html>