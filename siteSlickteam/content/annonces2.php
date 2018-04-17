<?php

$content[0] =array('titreCarte'=>$_POST["titreCarte2"],'titreAnnonce'=>$_POST["titreAnnonces2"],'profil'=>$_POST["profil2"],'poste'=>$_POST["descriptionPoste2"]);
file_put_contents('annonces2.txt',serialize($content));
$test = unserialize(file_get_contents('annonces2.txt'));
echo '<pre>'.print_r($test, true).'</pre>';

?>