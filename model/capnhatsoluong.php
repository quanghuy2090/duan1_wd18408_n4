<?php

session_start();
$id = $_POST['id'];
$slmoi = $_POST['slmoi'];
$_SESSION['mycart'][$id][4] = $slmoi;
header('Location: index.php?act=addtocart');