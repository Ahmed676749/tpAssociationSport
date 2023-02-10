<?php 

function addNewMember(){
    require("connect.php");
    if(count($_POST) > 0){
    $rqAjouterAd = "INSERT INTO member (member_lastname, member_firstname, member_email, member_phone)
                    VALUES ('".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['mail']."', '".$_POST['tel']."')";
    $rqAjoutAdherant = $db->exec($rqAjouterAd);
    }
};


function editMember($idMembreAmodifier){
    include("connect.php");

    if(count($_POST) == 0) {
    $rqAffichage = "SELECT * 
                     FROM member
                     WHERE member_id = $idMembreAmodifier";
     $membre = $db->query($rqAffichage)->fetch();
    } elseif(count($_POST) > 0) {

    
    $rqModif = "UPDATE member
                SET member_lastname = '".$_POST['modNom']."', member_firstname = '".$_POST['modPrenom']."', member_email = '".$_POST['modMail']."',member_phone = '".$_POST['modTel']."'
                WHERE member_id = '".$_GET['id']."'";
                // WHERE member_id = '".$idMembreAmodifier."'";

    $tabModif = $db->exec($rqModif);
   }
};


function getAllMember(){
    include("connect.php");

    $rqAdherants = "SELECT *
                FROM member";
    $tabAdherant = $db->query($rqAdherants)->fetchAll();
    return $tabAdherant;
    
};


function getOneMember($idAdherant){
    include("connect.php");
    $strRqAfficherDetail = "SELECT * 
                        FROM member
                        WHERE member_id = $idAdherant";
    $adDetail = $db->query($strRqAfficherDetail)->fetch();
    return $adDetail;
};


function deleteMember($x){
    include("connect.php");
    // $x correspond a l'id du membre qui doit être supprimé
    $rqDelete = "DELETE FROM member
                WHERE member_id = $x";
   $db->exec($rqDelete);
};