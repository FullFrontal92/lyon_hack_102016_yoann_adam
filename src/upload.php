<?php
require "bddphoto.php";
$User = $_POST['User'];
$Urlp = $_POST['Urlp'];
$Votecontest = $_POST['Votecontest'];
$Voteleft = $_POST['Voteleft'];
$Tovote = $_POST['Tovote'];

$sql = "insert into Photo (User, Urlp, Votecontest , Voteleft, Tovote) values ('$User', '$Urlp', '$Votecontest','$Voteleft','$Tovote')";
execSql(getConnection(), $sql);
header("Location: ../public/index.php");

