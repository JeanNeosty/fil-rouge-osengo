<?php

$name = $_POST['userName'];
$email = $_POST['userEmail'];

$mysql = new MySQL();
$connect = $mysql->connect();

$parametres = array('userName' => $name, 'userEmail' => $email); 
$mysql->insert('usercreation', $parametres);