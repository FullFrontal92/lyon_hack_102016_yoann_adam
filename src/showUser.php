<?php
function showUserVote($conn, $User){
    $sql = "SELECT * FROM Photo WHERE user ='$User'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            return '<li>'.'<a>'.$row['User'].' '. $row['Voteleft'].'</a>'.'</li>';
        }
    } else {
        echo "0 results";
    }
}
function getUser(){

}





