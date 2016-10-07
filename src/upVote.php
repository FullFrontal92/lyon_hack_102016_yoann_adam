<?php
require "bddphoto.php";
$User = $_POST['User'];
$Urlp = $_POST['Urlp'];
$Votecontest = $_POST['Votecontest'];
$Voteleft = $_POST['Voteleft'];
$Tovote = $_POST['Tovote'];

$sql = "UPDATE Photo SET Votecontest = Votecontest + 1 WHERE User = '".$_GET['user']."'";
execSql(getConnection(), $sql);
$sql = "UPDATE Photo SET Voteleft = Voteleft - 1 WHERE User = '".$_GET['userVoter']."'";
execSql(getConnection(), $sql);
header("Location: ../public/vote.php?user=".$_GET['userVoter'].'');