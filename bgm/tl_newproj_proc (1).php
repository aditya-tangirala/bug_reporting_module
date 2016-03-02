<?php
session_start();
?>
<html>
<body>
<?php
include("layout.html");
$assgn=$_POST["assgn"];
$mname=$_POST["mname"];
$mnum=$_POST["mnum"];
$mdet=$_POST["mdet"];
$selproj=$_POST["selproj"];
$tl_name=$_POST["tl_name"];
$pmname=$selproj.''.$mname;
//echo $tl_name;
//echo $pname;
$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die("Failed:".mysql_error());
			}
			
			mysql_select_db("anomoly_report",$con);
			$q1=mysql_query("insert into module_assgn values('$selproj','$tl_name','$mname','$mnum','$assgn','$mdet','$pmname')");
			if($q1==0)
			  { echo '<form action="tl_newproj1.php" method="post">';
			  echo'<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
				<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Submission Failed. Server Error! <br/>please re-enter the details
				<br/><input type="submit" name="submit" value="Go Back" /></a></p><br/>
				<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
				<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
				</div>';
			echo '</form>';
			  }
			else
			  {echo '<form action="tl_newproj1.php" method="post">';
				echo "<input type='text' name='selproj' value='$selproj' style='width:0;height:0;border:none' />";
				$subject='MODULE ASSIGNMENT';
				$msg='you are allotted '.$mname.' module of '.$selproj.' project.\n \n The module details are '.$mdet.' \n &nbsp;&nbsp;&nbsp;&nbsp;Try to complete it fast';
				$q2=mysql_query("insert into inbox values('$assgn','$subject','$msg','$tl_name','1','1','')");
				
				
				
				echo '<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
					<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:green;">Submission Successful
					<br/>Do u want to add another module in that project<br/>
					<input type="submit" name="submit" value="Yes" style="background:none;border:none;"/>&nbsp;&nbsp;&nbsp;<a href="tl.php" style="font-size:20px;"><input type="button" name="button" value="No" style="background:none;border:none;"/></a></p><br/></div>';
					echo '</form>';
				}

			
?>
</body>
</html>