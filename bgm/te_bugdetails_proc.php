<?php
		session_start();
		if($_SESSION['dsgn']!="testeng")
			{header("Location:login.php");
			}
?>
<html>
	<?php
		include("layout.html");
		
		$con=mysql_connect("localhost","root","4244");
		if(!$con)
		{die("Could not connect:".mysql_error());}
		
		mysql_select_db("anomoly_report",$con);
		
		$pname=$_SESSION["proj"];
		$mdl=$_SESSION["module"];
		$tid=$_POST["tid"];
		$mbs=$_POST["mbs"];
		$cmplnt=$_POST["complaint"];
		$svrty=$_POST["severity"];
		$rmrk=$_POST["rmrk"];
		$chk=0;
		
		
		if($pname==null || $mdl==null || $tid==null || $mbs==null || $cmplnt==null || $svrty=='' || $rmrk==null)
		{		echo "<script>alert('One or more fields are empty. Please Reenter the Data');</script>"	;								
				echo	'<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
					<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Submission Failed
					<br/><a href="te.php" style="font-size:20px;">Go Back</a></p><br/>
					<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
					<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
					</div>';
		}
		else
		{
		$cnt=mysql_query("select * from row_id");
		$row=mysql_fetch_array($cnt);
		$count=$row['count'];
		$count++;
		
		
		
		$qin="insert into report values('null','$pname','$mdl','$tid','$mbs','$cmplnt','$svrty','$rmrk','0')";
		if(!mysql_query($qin,$con))
		{ 						echo	'<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
					<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Submission Failed.SQL Error!
					<br/><a href="te.php" style="font-size:20px;">Go Back</a></p><br/>
					<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
					<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
					</div>';
		}
		else
		{ $chk=1;
     	  
		}
		
		if($chk==1)
		{ $usid=$_COOKIE["user"];
		  $name=$_SESSION["name"];
		  mysql_query("insert into user_details values('$tid','$name','$usid',null)");
		  
			if(!mysql_query("update row_id set count=$count",$con))
			{$count--;
		 
					echo "<script>alert('Fatal Error!!.Please report to admin if this persists')</script>";
					echo	'<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
					<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Submission Failed.Fatal Error!
					<br/><a href="te.php" style="font-size:20px;">Go Back</a></p><br/>
					<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
					<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
					</div>';
			}
			else
			{echo "<script>alert('Submission Successful')</script>";
				echo	'<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
					<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:green;">Submission Successful
					<br/><a href="te.php" style="font-size:20px;">Go Back</a></p><br/>
					<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
					<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
					</div>';
		 
			}	
		}
		}
	?>
</html>