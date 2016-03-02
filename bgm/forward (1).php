
<?php
	session_start();
	include("layout.html");
	$proj=$_POST['pname'];
	$module=$_POST['module'];
	
				$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die("Connection Failed:".mysql_error());
			}
			
			mysql_select_db("anomoly_report",$con);
			
	
				$q1=	"update report set status='1' where  pname='$proj' && module='$module'";
					
			
				if(!mysql_query($q1,$con))
			  { echo "<script>alert('One or More Fields are invalid. Please fill the form Correctly')</script>";
					
				echo'<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
				<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Submission Failed. Server Error!
				<br/><form action="report.php" method="post">
				<input type="text" name="module" value="'.$module.'" style="width:0px;height:0px;border:none;background:none;" >
				<input type="text" name="testcaseid" value="'.$tid.'" style="width:0px;height:0px;border:none;background:none;" >
				<input type="submit" value="Go Back" style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; margin-left:35%;"></form></p><br/>
				<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
				<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
				</div>';
			  }
			  else
			  {
				echo'<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
				<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:Green;">Submission Succesful
				<br/><form action="te.php" method="post">
				<input type="submit" value="Go Back" style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; margin-left:35%;"></form></p><br/>
				<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
				<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
				</div>';
				}
				
?>