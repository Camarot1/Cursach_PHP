<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
$pass = mysqli_query($link, "SELECT * FROM popular");
$promotions = mysqli_query($link, "SELECT * FROM promotions");
$id1 = mysqli_query($link, "SELECT ID FROM popular");
$id2 = mysqli_query($link, "SELECT ID FROM promotions");
?>
