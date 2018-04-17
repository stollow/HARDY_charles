<?php

$content[0] =array('img'=>$_POST["img"],'lien'=>$_POST["LienEvent"],'type'=>$_POST["type"],'date'=>$_POST["date"],'lieu'=>$_POST["lieu"],'titreEvent'=>$_POST["titreEvent"],'event'=>$_POST["textEvent"]);
file_put_contents('event.txt',serialize($content));
$test = unserialize(file_get_contents('event.txt'));
echo '<pre>'.print_r($test, true).'</pre>';

$json = file_get_contents("user.json");
$return = json_decode($json,true);
$i=0;
for($i=0;$i<=(count($return["user"])-1);$i++){
    if(isset($_POST[$return["user"][$i]["prenom"]."Event"])) {
        $return["user"][$i]["present"] = "oui";

    }
    else {
        $return["user"][$i]["present"] = "non";
    }

}
$enreg = json_encode($return,true);
$json = file_put_contents("user.json",$enreg);
?>