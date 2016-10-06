<?php

 include "bddphoto.php";
         $con=getConnection();
         $result=execSql($con, "select * from Photo;");
         while ($row = mysqli_fetch_assoc($result)) {
             $User = $row["User"];
             $Urlp = $row["Urlp"];
             $Votecontest = $row["Votecontest"];
             $Voteleft = $row["Voteleft"];
             $Tovote = $row["Tovote"];
             echo "<tr>", "<td>$User</td>","<td>$Urlp</td>","<td>$Votecontest</td>","<td>$Voteleft</td>","<td>$Tovote</td>";

         }
         ?>
