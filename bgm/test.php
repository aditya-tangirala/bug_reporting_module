<?php
$var = '20-4-2112';
$date = str_replace('/', '-', $var);
$d=date('Y-m-d', strtotime($date));
echo $d;
?>