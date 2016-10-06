<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 06/10/16
 * Time: 19:32
 */
function getConnection()
{
    $user = "root";
    $password = "jecode4laloupe";
    $host = "localhost";
    $db = "Hackathon";

    $mysqli = new mysqli ($host, $user, $password, $db);
    if (false === $mysqli->connect_errno) {
        echo "Failed to connect MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die();

    }
    return $mysqli;

}

function execSql($mysqli, $sql){
    if (!$result = $mysqli->query($sql)){
        echo "failed to run query : (" . $mysqli->errno . ") " . $mysqli->error;
        die();
    }
    return $result;
}


?>