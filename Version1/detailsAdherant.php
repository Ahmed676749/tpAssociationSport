<?php
    include("connect.php");
$idAdherant = $_GET["id"];



$strRqAfficherDetail = "SELECT * 
                        FROM member
                        WHERE member_id = $idAdherant";
$adDetail = $db->query($strRqAfficherDetail)->fetch();

 
   echo"
    <div>
        <h1>nom : ".$adDetail['member_lastname']." </h1>
        <h1>prenom : ".$adDetail['member_firstname']." </h1>
        <h1>mail : ".$adDetail['member_email']." </h1>
        <h1>telephone : ".$adDetail['member_phone']." </h1>
    </div>";


?>

