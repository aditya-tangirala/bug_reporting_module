<?php
	session_start();
	
	if($_SESSION['dsgn']!="testlead")
			{header("Location:login.php");
			}
			
		
?>
<html>
<style>
.mainbox {
width:900px;
padding:0;
position:absolute;
margin:0 auto;
 top:35%;
 border:0.2px solid blue;
 border-radius:20px;
 background-color:none; /*Very Important in styling outside DIV's*/
 background-opacity:25%;
 margin-left:20%;
 box-shadow: 5px 5px 20px black;
 z-index:10;
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
<?php
  include("layout1.html");
?>
<body>

<div class="mainbox" style="width:50%; margin-top:0%;left:5%;z-index:10;">
	<?php
	echo '<br/>';
	echo '<div style="margin-left:2%">';
	if(isset($_POST['viewpro']))
	echo 'Welcome to '."'".$_POST["viewpro"]."'".' Project';
	echo '</div>';
	
	$selproj=$_POST["selproj"];
	$tl_name=$_SESSION["name"];
		
		
				
	echo '<form method="post" action="tl_newproj_proc.php">';
			$i=1;	
						echo "<br/><input type='text' name='selproj' value='$selproj' style='width:0;height:0;border:none' />";
						echo "<input type='text' name='tl_name' value='$tl_name' style='width:0;height:0;border:none' />";
								
								echo '<div style="text-align:center">';
								echo 'Module details';
								echo '<textarea rows="4" cols="30" name="mdet"></textarea><br/><br/>';
								echo 'Module Num:';
								echo '<input type="text" name="mnum" size=5/>&nbsp&nbsp&nbsp&nbsp&nbsp';
								echo 'Module Name:';
							    echo '<input type="text" name="mname" size=10/>&nbsp&nbsp&nbsp&nbsp&nbsp';
								echo 'Assign To:&nbsp';
								
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die(mysql_error());}
			  
			   mysql_select_db("anomoly_report",$con);
			   
			   $q1=mysql_query("select * from login where dsgn='testlead' || dsgn='testeng'");
			   echo "<select name='assgn'  width='20px'>";
			   while($r=mysql_fetch_array($q1))
			   {
			     echo "<option value'".$r['name']."'>".$r['name']."</option>"; 
			   }
			   echo "</select><br/>";
			
			
								

								
								$i++;
				
				
		echo '<input type="submit" name="submit" value="Assign"  style="margin-top:5%;text-align:center;height: 30px; width: 80px;color:#080808;font-family:arial"/>';
		echo '</div>';
		echo '</form>';
		
				
				echo '<br/>';		
							
			
		
		
		?>


  
</div>

</body>
</html>