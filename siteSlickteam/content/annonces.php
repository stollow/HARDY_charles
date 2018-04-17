<?php

$content[0] =array('titreCarte'=>$_POST["titreCarte"],'titreAnnonce'=>$_POST["titreAnnonces"],'profil'=>$_POST["profil"],'poste'=>$_POST["descriptionPoste"]);
file_put_contents('annonces.txt',serialize($content));
$test = unserialize(file_get_contents('annonces.txt'));
echo '<pre>'.print_r($test, true).'</pre>';

?>