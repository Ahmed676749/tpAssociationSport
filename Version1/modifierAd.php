<?php
    include("connect.php");
    

    

    $idMembre = $_GET['id'];

   $rqAffichage = "SELECT * 
                    FROM member
                    WHERE member_id = $idMembre";
    $membre = $db->query($rqAffichage)->fetch();

   
    if(count($_POST) > 0) {
       
        $modNom = $_POST["modNom"];
        $modPrenom = $_POST["modPrenom"]??"";
        $modMail = $_POST["modMail"]??"";
        $modTel = $_POST["modTel"]??"";
        $rqModif = "UPDATE member
                SET member_lastname = '$modNom', member_firstname = '$modPrenom', member_email = '$modMail',member_phone = '$modTel'
                WHERE member_id = '$idMembre'";

    $tabModif = $db->exec($rqModif);
    }
   
?>

<h1> Modifier adhérent</h1>

<div>
    <form method = "post" action="modifierAd.php?id=17">
        <div class="champ">
            <label for="nom">Nom</label>
            <input id="nom" type="text" name="modNom" value="<?= $membre['member_lastname']?>">
        </div>
        <div class="champ">
            <label for="prenom">Prénom</label>
            <input id="prenom" type="text" name="modPrenom" value="<?= $membre['member_firstname']?>">
        </div>
        <div class="champ">
            <label for="mail">Mail</label>
            <input id="mail" type="email" name="modMail" value="<?= $membre['member_email']?>">
        </div>
        <div class="champ">
            <label for="tel">Téléphone</label>
            <input id="tel" type="text" name="modTel" value="<?= $membre['member_phone']?>">
        </div>
        <button type="submit">modifier</button>
    </form>
</div>

