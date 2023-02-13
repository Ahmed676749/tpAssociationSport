<div>
    <a href="index.php">Accueil</a>
    <form method="post" action="formAdherant.php">
        <button type="submit">Ajouter adhérant</button>
    </form>
</div>
<?php

include("connect.php");
require("member_Manager.php");
require_once("objetMembre.php");
// $nom = $_POST['nom']??"";
// $prenom = $_POST['prenom']??"";
// $mail = $_POST['mail']??"";
// $tel = $_POST['tel']??"";
// $sportId = $_POST['sport']??"";
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

// addNewMember();



// $tabAdherant = getAllMember();
$manager = new MemberManager;
$tabAdherant = $manager->getAllMember();
foreach($tabAdherant as $adherant) {
    require_once("objetMembre.php");
    // include("member_Manager.php");

    $objAdherant = new Membre;
    
    
    $objAdherant->hydrate($adherant);
    // echo "<pre>";
    // print_r($objAdherant);
?>  
    <div>
        <h1><?= $objAdherant->getId();?></h1>
        <a href="detailsAdherant.php?id=<?= $objAdherant->getId();?>">
            <p>Nom de l'adhérant : <?= $objAdherant->getLastName();?></p>
            <p>prenom de l'adhérant: <?= $objAdherant->getfirstName();?></p>
        </a>
        <a href="modifierAd.php?id=<?= $objAdherant->getId();?>">Modifier</a>
        <a href="index.php?id=<?= $objAdherant->getId();?>&delete=1">Supprimer</a>
    </div>
<?php
    }

    if(count($_POST) > 0) {
        $managerAdd = new MemberManager;
        $newMembre = new Membre;
        $newMembre->hydrate($_POST);
        $managerAdd->addNewMember($newMembre);
    }


?>


<?php
    if(isset($_GET) && isset($_GET["delete"]) && $_GET["delete"] == "1") {
        $idMembreDel = $_GET["id"];
        deleteMember($idMembreDel);
    }
?>

