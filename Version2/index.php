<div>
    <a href="index.php?tab=array">Accueil</a>
    <form method="post" action="formAdherant.php">
        <button type="submit">Ajouter adhérant</button>
    </form>
</div>
<?php

include("connect.php");
include("functions/memberManager.php");
// $nom = $_POST['nom']??"";
// $prenom = $_POST['prenom']??"";
// $mail = $_POST['mail']??"";
// $tel = $_POST['tel']??"";
$sportId = $_POST['sport']??"";
// $idMembre = $_GET['id'];

// if(count($_POST) > 0){

    //Ajoute un membre
    // $rqAjouterAd = "INSERT INTO member (member_lastname, member_firstname, member_email, member_phone)
    //                 VALUES ('".$nom."', '".$prenom."', '".$mail."', '".$tel."')";
    // $rqAjoutAdherant = $db->exec($rqAjouterAd);

    // Récupère le dernier ID insérer.
    // $lastId = $db->lastInsertId();

    //Ajoute une inscription à un sport

    //addNewSubscription($lastId, sportId)

    // function addNewSubscription($idMembre, $idsport){
    //     $rqAjouterSport = "INSERT INTO subscription (subscription_memberId, subscription_sportId)
    //     VALUES ($idMembre, $idsport)";
    //     $ajoutSport = $db->exec($rqAjouterSport);
    // }
//     $rqAjouterSport = "INSERT INTO subscription (subscription_memberId, subscription_sportId)
//                         VALUES ($lastId, $sportId)";
//     $ajoutSport = $db->exec($rqAjouterSport);

// }

addNewMember();
$tabAdherant = getAllMember();

foreach($tabAdherant as $adherant) {
?>  
    <div>
        <h1><?= $adherant['member_id']?></h1>
        <a href="detailsAdherant.php?id=<?= $adherant['member_id']?>">
            <p>Nom de l'adhérant : <?= $adherant['member_lastname']?></p>
            <p>prenom de l'adhérant: <?=$adherant['member_firstname']?></p>
        </a>
        <a href="modifierAd.php?id=<?= $adherant['member_id']?>">Modifier</a>
        <a href="index.php?id=<?= $adherant['member_id']?>&delete=1">Supprimer</a>
    </div>
<?php
    }
?>


<?php
    if(isset($_GET) && isset($_GET["delete"]) && $_GET["delete"] == "1") {
        $idMembreDel = $_GET["id"];
        deleteMember($idMembreDel);
    }
?>

