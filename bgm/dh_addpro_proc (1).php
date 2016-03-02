<?php
	session_start();
	if($_SESSION['dsgn']!="divhead")
			{header("Location:login.php");
			}
		
	

?>
<html>

	
	<?php
	include("layout.html");
	
	$pname=$_POST["pname"];
	$cname=$_POST["cname"];
	$cdet=$_POST["cdet"];
	$pdet=$_POST["pdet"];
	$assgn=$_POST["assgn"];
			
				$var1 = $_POST["sdate"];
				$date1 = str_replace('/', '-', $var1);
				$sdate=date('Y-m-d', strtotime($date1));
				
				$var2 = $_POST["ddate"];
				$date2 = str_replace('/', '-', $var2);
				$ddate=date('Y-m-d', strtotime($date2));
			
			if($pname=="" || $cname=="" || $cdet=="" || $pdet=="" || $assgn=="" || $sdate=="0000-00-00" || $ddate=="0000-00-00" || $sdate>$ddate)
			{      if($sdate>$ddate)
					{echo "<script>alert('Starting Date cannot be before Due Date. Please fill the form Correctly')</script>";
					}
					else
					{echo "<script>alert('One or more columns are empty. Please fill the form Completely')</script>";
					}
					
							echo	'<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
					<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Submission Failed
					<br/><a href="dh_addpro.php" style="font-size:20px;">Go Back</a></p><br/>
					<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
					<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
					</div>';
			}
			else
			{$con=mysql_connect("localhost","root","4244");
			
			if(!$con)
			{die(mysql_error());}
			  
			  mysql_select_db("anomoly_report",$con);
				
					
	
			
			  $q1="insert into project values('$pname.$sdate','$pname','$cname','$cdet','$pdet','$sdate','$ddate','$assgn',1,'live')";
			  if(!mysql_query("$q1",$con))
			  { echo "<script>alert('One or More Fields are invalid. Please fill the form Correctly')</script>";
				
					
				echo'<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
				<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Submission Failed.'.mysql_error().' 
				<br/><p style="font-size:20px;font-family:Century Gothic; color:red;">Please click on the browser\'s BACK button</p></p><br/>
				<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
				<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
				</div>';
			  }
			  else
			  {
				echo	'<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
					<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:green;">Submission Successful
					<br/><a href="dh.php" style="font-size:20px;">Go Back</a></p><br/>
					<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
					<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
					</div>';
				}
			  
			}
			  

	?>


</html>