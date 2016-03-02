

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
		
		<h3 style="color:white; margin-top:4%"><strong style="color:black;">FORM FOR ANOMOLY REPORT GENERATION</strong></h3>
		<u><b><p style="font-family:Century Gothic; font-size:20;">Available Projects</p></b></u> 
	
	<?php 
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die(mysql_error());}
			  
			  mysql_select_db("anomoly_report",$con);
			   $name=$_SESSION['name'];
			   $q1=mysql_query("select distinct pname from module_assgn natural join project where assgn='$name' && status='Live'");
			   $count=0;
			 /*  while($r=mysql_fetch_array($q1))
			   { $count++;
				 echo '<form action="te_bgd_pre2.php" method="post">';
			     echo $count.". ";
				 echo '<input type="text" name="pmname" value='.$r['pmname'].' style="height:0%;width:0%;border:none;background:none" >';
			     echo '<input type="submit" value='.$r['pname'].' style="width:20%; background:none; font-family:Century Gothic; font-size:18; color:white">';
					
				echo '</form>';

			   }
			*/
			echo '<form action="te_bgd_pre2.php" method="post">';
			echo "<select name='proj' class='sandi' style='opacity:0.8'>";
			   while($r=mysql_fetch_array($q1))
			   {
			     echo "<option value'".$r['pname']."'>".$r['pname']."</option>"; 
			   }
			   echo "</select><br/><br/>";
			   
			   echo '<input type="submit" value="Go" style=" font-family:Century Gothic; font-size:15;">';

			echo "</form>";
	 
		?>	   
		
	
		
		
		
		
		
		</div>

		</div>
		
	</body>
</html>