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
table.ex1
{
border-collapse:separate;
}
</style>
<?php
  include("layout1.html");
?>
<body>

<div class="mainbox" style="width:90%; margin-top:0%;margin-right:95%; margin-left:7%;z-index:10;">
	<?php
	echo '<br/>';
	echo '<div style="margin-left:2%">';
	if(isset($_POST['viewpro']))
	echo 'Welcome to '."'".$_POST["viewpro"]."'".' Project';
	echo '</div>';
	?>
		<div class="form" style="text-align:center;margin-top:2%;line-height:100%">
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
						<strong >No.Of Modules You Want in this:</strong>
						&nbsp;
						<input type="text" name="mnum" size="10"/>&nbsp;&nbsp;&nbsp;
						<input type="submit" name="submit" value="Submit"/>
			</form>
		</div>
		<?php
		$count=0;
		
				if(isset($_POST['mnum']))
				$count=$_POST['mnum'];
				
			if($count>=0)
			{
			echo '<form method="post" action="tl_newproj_proc.php">';
			echo '<div style="margin-left:10%;  opacity:0.8; color:black">';
				$i=1;
					echo '<table class="ex1" cellspacing="50">';
					for($k=1;$k<=$count/2;$k++)
					{	
							$l=1;
						echo "<tr>";	
							while($l<3)
							{   echo '<td>';
								//echo '<form action="../action/return.html" method="get">';
								
								
								echo 'Module details';
								echo '<textarea rows="4" cols="30" name="sandi"></textarea>&nbsp;&nbsp;';
								echo '<input id="reset" accesskey="R" type="reset" value="reset" name="reset"/><br/>';
								echo 'Module Name:';
								$mid='mid'.$k+$l;
								echo $mid;
							    echo '<input type="text" name=$mid size=15/>&nbsp;&nbsp;&nbsp;&nbsp;';
								echo 'Assign To:&nbsp';
								
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die(mysql_error());}
			  
			   mysql_select_db("anomoly_report",$con);
			   
			   $q1=mysql_query("select * from login where dsgn='testlead' || dsgn='testeng'");
			   echo "<select name='assgn' width='20px'>";
			   while($r=mysql_fetch_array($q1))
			   {
			     echo "<option value'".$r['name']."'>".$r['name']."</option>"; 
			   }
			   echo "</select>";
			
			
	   
								

								//echo '</form>';
								$l++;$i++;
							}	
						echo "</tr>";
					}
					echo "<tr>";
					for($k=1;$k<=$count%2;$k++)
					{/*echo '<form action="../action/return.html" method="get">';*/
					echo '<td>';
					echo 'Module details:';
								echo '<textarea rows="4" cols="30" name="sandi"></textarea>&nbsp;&nbsp;';
								echo '<input id="reset" accesskey="R" type="reset" value="reset" name="reset"/><br/>';
							echo 'Module Num:';
							
							echo '<input type="text" name="mid" size=5/>&nbsp;&nbsp;&nbsp;&nbsp;';
							echo 'Assign To :&nbsp;<select name="$cars[$i]" width="30px">
										<option value="ram">ram</option>
										<option value="syam">syam</option>
										<option value="kumar">kumar</option>
										</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</</td>'.'<br/>';
										$i++;
					//echo '</form>';					
					}
					echo "</tr>";
					echo "</table>";
			 echo '</div>';
				if($count>0)
				{
				
				echo '<input type="submit" name="submit" value="Save"  style="margin-top:5%;margin-left:45%;text-align:center;height: 30px; width: 80px;color:#080808;font-family:arial"/>';
				echo '</form>';
				/*echo '<form method="post">';
				echo '<input type="submit" name="submit" value="e-Mail"  style="margin-left:45%;text-align:center;height: 30px; width: 80px;color:#080808;font-family:arial"/>';
				echo '</form>';*/
				echo '<br/><br/>';		
				}				
			}
		
		else
		{
		echo '<br/><div align="center" style="font-size:15px;">';
		echo"sorry number cannot be negative&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "click here to go back!!";
		echo '<a href="http://localhost/testing%20module/Bug%20Reporting%20Module/tlnewproj.php">GO BACK</a><br/>';
		echo "</div>";
		}
		?>


  
</div>

</body>
</html>