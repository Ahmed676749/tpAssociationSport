
<?php 
include("connect.php"); 

$rqSport = "SELECT * FROM sport";
$tabSport = $db->query($rqSport)->fetchAll();

?>


<h1>Formulaire adhérent</h1>

<div>
    <form method = "post" action="index.php">
        <div class="champ">
            <label for="nom">Nom</label>
            <input id="nom" type="text" name="nom">
        </div>
        <div class="champ">
            <label for="prenom">Prénom</label>
            <input id="prenom" type="text" name="prenom">
        </div>
        <div class="champ">
            <label for="mail">Mail</label>
            <input id="mail" type="email" name="mail">
        </div>
        <div class="champ">
            <label for="tel">Téléphone</label>
            <input id="tel" type="text" name="tel">
        </div>
        <div>
            <label for="sport">Sports</label>

            <select name="sport" id="sport">
                <?php
          foreach($tabSport as $sport) { ?>
                <option value="<?= $sport['id']?>"><?= $sport['sport_name']?></option>
             <?php } ?> 
            </select>
        </div>
       
        <button type="submit">créer adhérant</button>
    </form>
</div>



<?php
//    $nom = $_POST['nom']??"";
//    $prenom = $_POST['prenom']??"";
//    $mail = $_POST['mail']??"";
//    $tel = $_POST['tel']??"";
   
//    var_dump("test 1");
   
//    if(count($_POST) > 0){
//        $rqAjouterAd = "INSERT INTO member (member_lastname, member_firstname, member_email, member_phone)
//                        VALUES ('".$nom."', '".$prenom."', '".$mail."', '".$tel."')";
//        $rqAjoutAdherant = $db->exec($rqAjouterAd);
    //    var_dump("test 2");
//    }
?>