<?php

include('Net/SSH2.php');

$ssh = new Net_SSH2('192.168.8.100');
if (!$ssh->login('admin', 'pfsense')) {
   exit('Login Failed');
}

echo $ssh->read('username@username:~$');
$ssh->write("8\n");
$ssh->write("ls -la\n");


//ssh write untuk generate config.xml
//ssh write untuk baca config.xml


//$next_uid = 2000;


//if (isset($_GET['next_uid'])) {
//    $next_uid = $_GET['next_uid'];
//}


//$default_xml = '<nextuid>2000</nextuid>';


//echo htmlentities($default_xml );


echo $ssh->read('username@username:~$');
