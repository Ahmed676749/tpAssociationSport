<?php 


function addNewMember(){};
function editMember(){};
function getAllMember(){};
function getOneMember(){};


function deleteMember($x){
    include("connect.php");
    // $x correspond a l'id du membre qui doit être supprimé
    var_dump("ok");
    $rqDelete = "DELETE FROM member
                WHERE member_id = $x";
   $db->exec($rqDelete);
};