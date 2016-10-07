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
    $password = "E-(&É(GK";
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

function showUser($conn){
    $sql = "SELECT * FROM Photo WHERE Voteleft > 0";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<li>'.'<a href="../public/vote.php?user='.$row['User'].'&vote='.$row['Voteleft'].'">'.$row['User'].' '. $row['Voteleft'].'</a>'.'</li>';
        }
    } else {
        echo "0 results";
    }
}
?>