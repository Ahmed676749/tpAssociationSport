<?php
    include("connect.php");
    include("functions/memberManager.php");
$idAdherant = $_GET["id"];
$adDetail = getOneMember($idAdherant);

   echo"
    <div>
        <h1>nom : ".$adDetail['member_lastname']." </h1>
        <h1>prenom : ".$adDetail['member_firstname']." </h1>
        <h1>mail : ".$adDetail['member_email']." </h1>
        <h1>telephone : ".$adDetail['member_phone']." </h1>
    </div>";


?>

