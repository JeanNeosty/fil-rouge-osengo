<?php

require("./mysql.php");

$name = $_POST['sessionname'];

$mysql = new MySQL();
$connect = $mysql->connect();

$parametres = array('nameSession' => $name);
$mysql->insert('currentsession', $parametres);

?>

