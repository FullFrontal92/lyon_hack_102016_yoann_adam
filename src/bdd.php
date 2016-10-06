<?php

function getConnection(){
    $user = "root";
    $password = "E-(&É(GK";
    $host = "localhost";
    $db = "test";

    $mysqli = new mysqli($host, $user, $password, $db);
    if (false === $mysqli->connect_errno){
        echo "failed to connect to mysqli";
        die();
    }
    return $mysqli;
}
function execSql($mysqli, $sql){

    if (!$result = $mysqli->query($sql)){
        echo "failed to connect to mysqli";
        die();
    }

    return $result;
}

function showMyDb($conn){
    $sql = "SELECT * FROM infos";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<li>'.'<a onclick="showName('.$row['nom'].');">'.$row['nom'].'</a>'.'</li>';
        }
    } else {
        echo "0 results";
    }
}

