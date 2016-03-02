<html>
	<body>
		<?php
			
			include("layout_login.html");
			
			$uid=$_POST["uid"];
			$pwd=$_POST["pwd"];
			if($uid=="" || $pwd=="")
			{if($uid=="")
				{echo "<script> alert('Username cannot be empty')</script>";
				}
			     else if($pwd=="")
				{
				echo "<script> alert('Password cannot be empty')</script>";
				}
				
				echo '<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
			<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Login Failed
			<br/><a href="login.php" style="font-size:20px;">Go Back</a></p><br/>
			<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
			<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
		</div>';
			}
			 
			 else
			{$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die("Failed:".mysql_error());
			}
			
			mysql_select_db("anomoly_report",$con);
			
			$tbl=mysql_query('select * from login');
			while($r=mysql_fetch_array($tbl))
			{	
				if($uid=="$r[uid]")
				{ if($pwd=="$r[pswd]")
					{		 
					 setcookie("user","$r[uid]","0");
					 if($r[dsgn]=="divhead")
					 {header("Location:dh.php");
					 }
					 else if($r[dsgn]=="testlead")
					 {header("Location:tl.php");
					 }
					 else if($r[dsgn]=="testeng")
					 {header("Location:te.php");
					 }
					}
				
				}
			}
					
					echo "<script>alert('Invalid Username/Password')</script>";
					
						echo '<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
			<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Login Failed
			<br/><a href="login.php" style="font-size:20px;">Go Back</a></p><br/>
			<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
			<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
		</div>';
					
				}
				
			/*}
			
			echo "<script>alert('Invalid Username/Password')</script>";
			
						echo '<div id="m_form_bg" style="width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;">
			<p style="line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;">Login Failed
			<br/><a href="login.php" style="font-size:20px;">Go Back</a></p><br/>
			<div style="position:absolute; top:140px; left:38%;"><p style="text-align:center; margin:0%; font-size:15px; font-family:Century Gothic;">Redirect</p></div>
			<div id="anim"  style="z-index:20;" ><p style="font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;">.....</p></div>
		</div>';
		
			}*/
		?>
	</body>
</html>	