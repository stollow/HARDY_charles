<?php

$content[0] =array('img'=>$_POST["img1"],'lien'=>$_POST["LienEvent1"],'type'=>$_POST["type1"],'date'=>$_POST["date1"],'lieu'=>$_POST["lieu1"],'titreEvent'=>$_POST["titreEvent1"],'event'=>$_POST["textEvent1"]);

file_put_contents('event1.txt',serialize($content));
$test = unserialize(file_get_contents('event1.txt'));
echo '<pre>'.print_r($test, true).'</pre>';

$json = file_get_contents("user.json");
$return = json_decode($json,true);
$i=0;
for($i=0;$i<=(count($return["user"])-1);$i++){

    if(isset($_POST[$return["user"][$i]["prenom"]."Event1"])) {
        $return["user"][$i]["present1"] = "oui";

    }
    else{
        $return["user"][$i]["present1"] = "non";
    }

}
$enreg = json_encode($return,true);
$json = file_put_contents("user.json",$enreg);
?>