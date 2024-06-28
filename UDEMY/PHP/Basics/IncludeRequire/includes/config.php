<?php

$self = $_SERVER['PHP_SELF'];
$serverName = $_SERVER['SERVER_NAME'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$scriptname = $_SERVER['SCRIPT_NAME'];

echo $self;
echo '<br><br>';
echo $serverName;
echo '<br><br>';
echo $useragent;
echo '<br><br>';
echo $scriptname;
echo '<br><br>';
