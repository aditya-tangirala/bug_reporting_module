<?php
session_start();
?>
<html>
<style>
.sandi {
   background:none;
   opacity:0.8;
   font-color:black;
   font-family:times new roman;
   width: 150px;
   height:50px;
   margin:20px;
   font-size: 20px;
   border-radius: 4px;
 }
</style>
<body>
<?php
include("layout.html");
?>
<div id="m_form_bg" style="width:70%; height:60%; margin-left:0px;margin-top:7%; position:absolute; top:20%; left:20%;">
<div class="form" style="position:absolute; top:20%; left:0%;">
			<a href="compose.php"><input type="submit" value="Compose" class="sandi" /></a>
			<form action="dh_inboxb.php" method="post"><input type='text' value="inbox" name='mission' style='width:0;height:0;border:none' /><input type="submit" value="Inbox" class="sandi" /></form>
			<a href="dh_sentb.php"><input type="button" value="Sent" class="sandi" /></a>
			<br/>
			</div>
<iframe style="position:absolute; width:75%; left:23%; top:12%;height:80%;border:none;" src="inbox_proc.php">
</iframe>
</div>


</body>
</html>