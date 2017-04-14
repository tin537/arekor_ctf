<?php

$u_agent = $_SERVER['HTTP_USER_AGENT'];
$ub = 'other';
if(preg_match('/admin/i',$u_agent))
{
    $ub = "admin";
}

if (isset($_POST['key']) && $_POST['key'] == "@aSDvKk9M8c89hdFLh" && $ub == 'admin') {
  $pg = $_POST['key'];
  echo "This is flag 3e6_1s_g00d_@rek0r";
}
else {
  echo 'Get Out Noob Hacker ';
}
?> 
