<?php

$content[0] =array('titreCarte'=>$_POST["titreCarte1"],'titreAnnonce'=>$_POST["titreAnnonces1"],'profil'=>$_POST["profil1"],'poste'=>$_POST["descriptionPoste1"]);
file_put_contents('annonces1.txt',serialize($content));
$test = unserialize(file_get_contents('annonces.txt'));
echo '<pre>'.print_r($test, true).'</pre>';

?>