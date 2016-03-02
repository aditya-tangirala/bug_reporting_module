<?php
	if(!isset($_COOKIE["user"]))
	{header("Location:login.php");
	}
	else
	{
	
		session_start();
		$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die(mysql_error());}
			  
			   mysql_select_db("anomoly_report",$con);
			   $uid=$_COOKIE['user'];
			   $q1=mysql_query("select * from login where uid='$uid'");   //queries not wrking with $_COOKIE directly
			while($q=mysql_fetch_array($q1))			
			 {
			 $_SESSION['name']=$q['name'];
			 $_SESSION['dsgn']=$q['dsgn'];
			 $_SESSION['email']=$q['email'];
			}
		
		
		if($_SESSION['dsgn']!="testeng")
			{header("Location:login.php");
			}
	}
?>
<html>
	<head>
		<?php
			include("layout.html");
		?>
	<style>
.sandi {
   background:none;
   opacity:0.8;
   font-color:black;
   font-family:times new roman;
   width: 150px;
   height:50px;
   margin:20px;

   border-radius: 4px;
  
   }
.sandi1 {
    background:none;
   opacity:0.8;
   font-color:black;
   font-family:times new roman;
   
   height:50px;
   margin:20px;

   border-radius: 4px;
  
  
   }

   
  .bg-img
{	position:absolute; 
    left:0;
    top:0;
	z-index:-10;
	opacity:0.9;
}
#img
{width:100%;
height:100%;  
 opacity:0.9; 
}

	</style>	
	</head>
	
	<body>
		
		
		<div id="m_form_bg" style="width:60%; height:60%; margin-left:0px;margin-top:7%; position:absolute; top:20%; left:20%;">
			<div class="form" >
				Test Engineer Portal
			</div>			
			<div id="m_form_bg" style="position:absolute; left:2%; top:4%; width:1px; height:85%; background-color:black; opacity:0.4;">
			</div>
			
				<div class="form" style="position:absolute; top:20%; left:-1.5%;">
				<a href="dh_inboxb.php"><input type="submit" value="Message" class="sandi" /></a>
				<br/>
				<a href="report_pre1.php"><input type="button" value="View Anomoly Report" class="sandi" /></a>
				<br/>
				<a href="te_bgd_pre1.php"><input type="button" value="Post Bugs"  class="sandi"  /></a>
				<br/>
			</div>	
	</body>
</html>