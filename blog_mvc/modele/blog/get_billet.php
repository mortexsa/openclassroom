<?php
function get_billet($id_billet)
{
    global $bdd;
    $id_billet = (int) $id_billet;
        
    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = :id_billet');
    $req->bindParam(':id_billet', $id_billet, PDO::PARAM_INT);
    $req->execute();
    $billets = $req->fetchAll();
    
    
    return $billets;
}
