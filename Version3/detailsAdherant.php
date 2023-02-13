<?php
    include("connect.php");
    include("member_Manager.php");
    require_once("objetMembre.php");

$idAdherant = $_GET["id"];

$managerDetail = new MemberManager;
$tabDetail = $managerDetail->getOneMember($idAdherant);
$detailMembre = new Membre;
$detailMembre->hydrate($tabDetail);


  ?>  
  
    <div>
        <h1>nom : <?php echo $detailMembre->getLastName();?> </h1>
        <h1>prenom : <?php echo $detailMembre->getfirstName();?> </h1>
        <h1>mail : <?php echo $detailMembre->getEmail();?></h1>
        <h1>telephone : <?php echo $detailMembre->getPhone();?> </h1>
    </div>




