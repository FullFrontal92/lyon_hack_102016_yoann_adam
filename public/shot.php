<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 07/10/16
 * Time: 11:25
 */
require "../src/bddphoto.php";
$User = $_POST['User'];
$Urlp = $_POST['Urlp'];
$Votecontest = $_POST['Votecontest'];
$Voteleft = $_POST['Voteleft'];
$Tovote = $_POST['Tovote'];

$User = 'bruce';
$Urlp = 'test';
$Votecontest = '0';
$Voteleft = '3';
$Tovote = '1';

$sql = "insert into Photo (User, Urlp, Votecontest , Voteleft, Tovote) values ('$User', '$Urlp', '$Votecontest','$Voteleft','$Tovote')";
execSql(getConnection(), $sql);