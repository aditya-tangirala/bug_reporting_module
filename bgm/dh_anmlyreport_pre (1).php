<?php
	session_start();
	if(!isset($_COOKIE['user']))
	{		{header("Location:login.php");
			}
			
		echo "<div class='form'  style='line-height:120%; position:absolute; right:4%; top:4%;'>
				Welcome
				<br/>";
		echo  $_SESSION['name'];
		echo	"</div>";
		
		
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
		include("layout1.html");
		?>
<div id="m_form_bg" style="margin-top:0%; ">
	
		<div class="form"  style="line-height:3">
		<form action="dh_anmlyreport.php" method="post">
		<h3 style="color:white; margin-top:4%"><strong style="color:black;">FORM FOR ANOMOLY REPORT GENERATION</strong></h3>
		Select Project:
	
	<?php 
			$name=$_SESSION['name'];
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die(mysql_error());}
			  
			   mysql_select_db("anomoly_report",$con);
			   
			   if($_SESSION['dsgn']=="divhead")
			  { $q1=mysql_query("select distinct(pname) from module_assgn");
			  }
			  else if($_SESSION['dsgn']=="testlead")
			  { $q1=mysql_query("select distinct(pname) from module_assgn where tl_name='$name'");
			  }
			   echo "<select name='proj' class='sandi' style='opacity:0.8'>";
			   while($r=mysql_fetch_array($q1))
			   {
			     echo "<option value'".$r['pname']."'>".$r['pname']."</option>"; 
			   }
			   echo "</select>";
			  
			
	   ?>
		<br/>
		
	
		
		
		<input type="submit"  value="Export" style="padding:5; width:auto;height:35;">
		</form>
		
		
		</div>

		</div>
		
	</body>
</html>