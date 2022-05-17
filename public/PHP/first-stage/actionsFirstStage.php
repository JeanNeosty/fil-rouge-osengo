<?php

require("../mysql.php");

$name = $_POST['sessionname'];

$mysql = new MySQL();

$mysql->connect();

$parametres = array('nameSession' => $name);
$idSelect->select1('SELECT idSession FROM currentsession WHERE nameSession=:nameSession ORDER BY nameSession DESC', $parametres);
$id = $idSelect['idSession'];

echo $id;

$parametres = array('nameSession' => $name, 'idSession' => $id);

$mysql->update('UPDATE currentsession SET StepIdSession += 1 WHERE nameSession=:nameSession AND idSession=:idSession', $parametres)

?>