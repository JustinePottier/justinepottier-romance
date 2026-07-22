<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $to = "justinepottier.commande@gmail.com";
    $subject = "Nouvelle commande depuis le site";
    $message = "Une nouvelle commande a été effectuée :\n\n";
    $message .= "Nom : ".$_POST['nom']."\n";
    $message .= "Prénom : ".$_POST['prenom']."\n";
    $message .= "Email : ".$_POST['email']."\n";
    $message .= "Téléphone : ".$_POST['telephone']."\n";
    $message .= "Adresse : ".$_POST['adresse']."\n";
    $message .= "Mode d'envoi : ".$_POST['mode_envoi']."\n";
    $message .= "Point relais : ".$_POST['relais']."\n";
    $
