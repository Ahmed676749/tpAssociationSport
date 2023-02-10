<?php
    include("connect.php");
    include("member_Manager.php");
    require_once("objetMembre.php");

$idAdherant = $_GET["id"];

$managerDetail = new MemberManager;
var_dump('test 1');
$tabDetail = $managerDetail->getOneMember($idAdherant);
var_dump($tabDetail);
$detailMembre = new Membre;
// var_dump($adDetail);
$detailMembre->hydrate($tabDetail);
var_dump('test 4');
// var_dump($adDetail->getLastName());
// $adDetail = getOneMember($idAdherant);
var_dump($detailMembre);


  ?>  
  
    <div>
        <h1>nom : <?php $detailMembre->getLastName();?> </h1>
        <h1>prenom : <?php echo $detailMembre->getfirstName();?> </h1>
        <h1>mail : <?php echo $detailMembre->getEmail();?></h1>
        <h1>telephone : <?php echo $detailMembre->getPhone();?> </h1>
    </div>




