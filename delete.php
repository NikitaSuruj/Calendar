<?php
session_start();
require_once('pdo.php');
$delet=$pdo->prepare('DELETE FROM bron');
$delet->execute();
header('Location: index.php');
?>
