<?php
		session_start();
		

		include("layout.html");
		
		
?>

<html>
<body>
<?php
if($_SESSION['dsgn']=="divhead")
$strr='dh_inboxb.php';
else if($_SESSION['dsgn']=="testlead")
$strr='dh_inboxb.php';
else if($_SESSION['dsgn']=="testeng")
$strr='dh_inboxb.php';
else 
{
echo 'Invalid Login';
header("Location:login.php");
}
$t_user=$_POST['t_user'];
$f_user=$_SESSION['name'];
$msg=$_POST['msg'];
$subject=$_POST['subject'];
$st1=1;
$st2=1;
$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die("Failed:".mysql_error());
			}
			
			mysql_select_db("anomoly_report",$con);
			
				
		         if($msg=="")
				{ echo "<script>alert('Message cannot be empty..')</script>";
					echo '<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
					<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Message not sent... 
					<br/><a href="compose.php" style="font-size:20px;">Go Back</a></p><br/>
					<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
					<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
					</div>';
				}
				else
	{
					$ql="insert into inbox values('$t_user','$subject','$msg','$f_user','$st1','$st2','')";
					
				if(!mysql_query($ql,$con))
				{
						echo '<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
			<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Message not sent... 
			<br/><a href="compose.php" style="font-size:20px;">Go Back</a></p><br/>
			<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
			<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
		</div>';
				}
				else
			{
			echo '<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
			<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:green;">Message sent succesfully...
			<br/><a href='.$strr.'>Go Back</a></p><br/>
			<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
			<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
		</div>';
			}
	}
?>
</body>
</html>