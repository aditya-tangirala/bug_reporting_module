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
		
		
		if($_SESSION['dsgn']!="testlead")
			{header("Location:login.php");
			}
	}
?>
<html>
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
   width: 150px;
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

<div class="form" style="text-align:center;margin-top:1%;line-height:100%">
			
			<div class="form" style="text-align:center;margin-top:2%;">
					<h4>Test Lead Portal</h4>
			</div>	
			
			
				
   
<div class="form" style="position:absolute; top:150%; left:-1.5%;">
				<a href="dh_inboxb.php"><input type="submit" value="Message" class="sandi" /></a>
				<br/>
				<a href="dh_anmlyreport_pre.php"><input type="button" value="View Anomoly Report" class="sandi" /></a>
				<br/>
				<a href="tl_allot.php"><input type="button" value="Module Allotment"  class="sandi"  /></a>
				<br/>
</div>

</div>
</div>




</body>
</html>
