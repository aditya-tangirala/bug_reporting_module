<?php
session_start();
?>
<html>
<body>

<div id="m_form_bg" style="width:60%; height:60%; margin-left:0px;margin-top:1%; position:absolute;">
<a href="inbox_proc.php"><h4 style="margin-left:5%;">Back to Inbox</h4></a>
<?php
echo '<form action="delete_proc1.php" method="post">';
echo 'SENDER:&nbsp;&nbsp;&nbsp;&nbsp;'.$_POST["f_user"].'<br/>';
echo '<p>';
echo 'SUBJECT:&nbsp;&nbsp;&nbsp;&nbsp;'.$_POST["sub"].'<br/>';
echo '</p>';
$idn=$_POST["idn"];
echo 'MESSAGE: <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$_POST["msg"].'</p><br/>';
if(isset($_POST["check"]))
if($_POST["check"]==true)
{
echo "<input type='text' name='idn' value='$idn' style='width:0;height:0;border:none' />";
echo 'Do u want to delete this mail??';
echo '<input type="submit" name="delete" value="Yes,Delete" >';
}
echo '</form>';
?>


</div>

</body>
</html>