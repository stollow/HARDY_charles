<?php

$content[0] =array('img'=>$_POST["img2"],'lien'=>$_POST["LienEvent2"],'type'=>$_POST["type2"],'date'=>$_POST["date2"],'lieu'=>$_POST["lieu2"],'titreEvent'=>$_POST["titreEvent2"],'event'=>$_POST["textEvent2"]);

file_put_contents('event2.txt',serialize($content));
$test = unserialize(file_get_contents('event2.txt'));
echo '<pre>'.print_r($test, true).'</pre>';

$json = file_get_contents("user.json");
$return = json_decode($json,true);
$i=0;
for($i=0;$i<=(count($return["user"])-1);$i++){
    if(isset($_POST[$return["user"][$i]["prenom"]."Event2"])) {
        $return["user"][$i]["present2"] =  "oui";

    }
    else{

        $return["user"][$i]["present2"] = "non";
    }
}
$enreg = json_encode($return,true);
$json = file_put_contents("user.json",$enreg);
?>