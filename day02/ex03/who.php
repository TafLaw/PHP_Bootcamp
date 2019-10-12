#!/usr/bin/php
<?php
$var = '/var/run/utmpx';;
$data = fopen($var, "rb");
echo get_current_user() ."  ";
echo $data ."   ";
date_default_timezone_set("Africa/Johannesburg");
echo date('M d H:i')."\n";
?>