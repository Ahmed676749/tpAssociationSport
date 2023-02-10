<?php
    include("connect.php");
    require_once("functions/memberManager.php");
    
    $idMembre = $_GET['id'];
    editMember($idMembre);
?>

<h1> Modifier adhérent</h1>

<div>
    <form method = "post" action="modifierAd.php?id=<?= $_GET['id']?>">
        <div class="champ">
            <label for="nom">Nom</label>
            <input id="nom" type="text" name="modNom" value="<?= $_POST['modNom']??''?>">
        </div>
        <div class="champ">
            <label for="prenom">Prénom</label>
            <input id="prenom" type="text" name="modPrenom" value="<?= $_POST['modPrenom']??''?>">
        </div>
        <div class="champ">
            <label for="mail">Mail</label>
            <input id="mail" type="email" name="modMail" value="<?= $_POST['modMail']??''?>">
        </div>
        <div class="champ">
            <label for="tel">Téléphone</label>
            <input id="tel" type="text" name="modTel" value="<?= $_POST['modTel']??''?>">
        </div>
        <button type="submit">modifier</button>
    </form>
</div>


