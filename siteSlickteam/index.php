<!doctype html>
<html lang="fr">
<meta>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f18700"/>
    <title>Slickteam Concepteur d'application Web</title>
    <meta name="description" content="Slickteam développement web et applicatif pour les professionnels. Notre particularité Les GEEKING DAYS !"/>
 <head>
     <?php
     session_start();
     if(isset($_SESSION["admin"])){
         echo('<script type="text/javascript" src="tinyMCE/tinymce.min.js"></script>');}?>
    <script async src="script/jquery-3.3.1.min.js"></script>
    <script defer src="odometer/odometer.js"></script>
    <script async src="projects/ServiceWorker/pwabuilder-sw-register.js"></script>
    <link async rel="stylesheet" media="all" href="css/odometer-theme-minimal.css">
    <link async rel="stylesheet" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="" crossorigin="anonymous"/>
    <link async rel="stylesheet" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="" crossorigin="anonymous"/>
    <script async src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link async rel="stylesheet" media="all" href="css/animate.css">
    <link rel="stylesheet" media="all" href="css/style.css">
    <link rel="stylesheet" media="(max-width: 768px) " href="css/max-768px.css">
    <link rel="stylesheet" media="(max-width: 768px) and (orientation:landscape)" href="css/max-768pxLandScape.css">
    <link rel="stylesheet" media="(max-width: 576px)" href="css/max-576px.css">
    <link rel="stylesheet" media="(max-width: 576px) and (orientation:landscape)" href="css/max-576pxLandScape.css">
    <link async href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Varela+Round" rel="stylesheet">
    <link async rel="manifest" href="manifest.json">
     <style type="text/css">
         *{
             margin:0;
             padding:0;
         }

         @font-face {
             font-family: "gotham";
             src: url('font/Gotham Rounded Book Italic.otf');
         }


         .row{
             margin:0;
         }

         body{
             margin:0;
             padding:0;
         }

         p{
             margin-before: 0!important;
             margin-after: 0!important;
         }

         h3{
             font-size:1.2em;
         }

         h3,h4,h5,h6{
             font-family: 'Roboto Condensed', sans-serif;
             color:#75767F;
         }

         h2{
             font-family: 'Roboto Condensed', sans-serif;
             color:#f18700;
         }

         p,blockquote{
             font-family: 'Roboto Condensed', sans-serif;
         }

         .center{
             text-align:center;
         }

         .marginTop{
             margin-top:5%;
         }

         .marginBot{
             margin-bottom:5%;
         }

         .marginRight{
             margin-right:5%;
         }

         .paddingLeft{
             padding-left:10%;
         }


         .titreH2{
             margin:5%;
         }

         i{
             color:white;
         }

         .logo3D,.logoTitre{
             width:50%;
             margin-left:25%;
         }

         .pageTitre{
             padding-top:10%;
             max-height:80%;
         }

         .enter{
             position:absolute;
             width:100%;
             z-index:9999;
             height:100%;
         }

         .people,.techno,.text2_3D{
             text-align:center;
             color:white;
         }

         .text2_3D{
             font-size:2vmax;
             width:100%;
             font-family: 'gotham', sans-serif;
         }

         .peopleHaut{
             position:absolute;
             bottom:0;
             margin-bottom:0;
         }

         .conteneurEnter{
             margin:0;
             max-height:80%;
         }

         .enter-content{
             margin:0;
             padding:0;
         }

         .peopleBas{
             border-top:2px solid white;
         }


         .technoHaut{
             position:absolute;
             bottom:0;
             margin-bottom:0;
         }

         .technoBas{
             border-top:2px solid white;
         }


         .imgEnter{
             width:100%;
             height:100%;
             position:absolute;
             z-index:0;
             background-image:url("images/fondEnter.jpg");
             background-repeat:no-repeat;
             background-size:cover;
             filter:brightness(30%);
         }

         .enterContent{
             height:100%;
             width:100%;
             perspective: 800px;
         }


         .logo3D{
             will-change:transform;
             animation: rotating 2s linear 2;
             max-height:50%;
         }

         .arrow{
             color:white;
             margin-bottom:10px;
             color:white;
             height:50px;
         }

         .contenerArrow{
             margin:0;
             position:absolute;
             bottom:25px;
             left:0;
             width:100%;
         }

         .centerArrow{
             text-align:center;
             padding:0;
         }


         .arrow:hover{
             color:grey;
         }


         @keyframes rotating {
             from{
                 -webkit-transform: rotate3d(0,1,0,0deg);
             }
             to{
                 -webkit-transform: rotate3d(0,1,0,360deg);
             }
         }

         .centrageEnter{
             height:45%;
             position:relative;
         }


     </style>
</head>
<body>
<?php if(isset($_SESSION["admin"])){
echo('<script>
    tinymce.init({
    selector: \'textarea\',
    height: 150,
    theme: "modern",
    })

</script>');
}?>

<div class="enter">
    <div class="enter-content container-fluid">
        <div class="imgEnter"></div>
        <div class="row conteneurEnter">
            <div class="col-md-4 col-sm-12 ajustement pageTitre">
                <div class="centrageEnter row paddingEnter"><h2 class="people peopleHaut col-12">PEOPLE</h2></div>
                <div class="centrageEnter row"><h2 class="people peopleBas col-12">FIRST</h2></div>
            </div>
            <div class="col-md-4 col-sm-12 pageTitre">
                <div><img src="images/slick.png" class="img-fluid logo3D" alt="logo"></div>
                <div><img src="images/slickwhite.png" class="img-fluid logoTitre" alt="logo">
                    <h1 class="text2_3D">Développement web et mobile</h1></div>
            </div>
            <div class="col-md-4 col-sm-12 paddingEnter2 ajustement pageTitre">
                <div class="centrageEnter row"><h2 class="techno technoHaut col-12">TECHNO</h2></div>
                <div class="centrageEnter row"><h2 class="techno technoBas col-12">CENTRIC</h2></div>
            </div>
        </div>
        <div class="contenerArrow"><div class="centerArrow"><i class="fa fa-angle-double-down fa-2x arrow"></i></div></div>
    </div>
</div>
<div class="bandeauCookie"><p>Afin d'améliorer votre confort de navigation ce site utilise des cookies, L'utilisation des cookies permet d'améliorer le temps de chargemeent de la page lors de votre prochaine visite.<br>
    En fermant ce bandeau vous acceptez l'utilisation des cookies.</p>
    <div class="cross"><i class="fas fa-times fa-1x"></i></div>
</div>
<section class="menu menu--circle">
    <input type="checkbox" id="menu__active"/>
    <label for="menu__active" class="menu__active">
        <div class="menu__toggle">
            <div class="icon2">
                <div class="hamburger" aria-label="menu"><i class="fa fa-bars fa-2x"></i></div>
            </div>
        </div>

        <div class="menu__listings">
            <ul class="circle">
                <li>
                    <div class="place">
                        <div class="upside">
                            <a href="#solutions" class="button jsScroll"><strong>Activités</strong></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="place">
                        <div class="upside">
                            <a href="#pourquoi" class="button jsScroll"><strong>Nous</strong></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="place">
                        <div class="upside">
                            <a href="#job" class="button jsScroll"><strong>Recrutement</strong></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="place">
                        <div class="upside">
                            <a href="#evenement" class="button jsScroll"><strong>Evénement</strong></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="place">
                        <div class="upside">
                            <a href="#map" class="button jsScroll"><strong>Contact</strong></a>
                        </div>
                    </div>
                </li>
            </ul>
</section>
<div id="carrousel">
    <div class="imgTitre">
        <div class="img1Lazy"></div>
        <h2 class="titreImg titreSlick">Slickteam [slikti:m] n. f. Equipe agile et astucieuse capable de réussir vos projets digitaux</h2>
    </div>
    <div class="imgTitre">
        <div class="img2Lazy"></div>
        <h2 class="titreImg">Incubateur de dev' Talent</h2>
    </div>
    <div class="imgTitre">
        <div class="img3Lazy"></div>
        <h2 class="titreImg">Slickteam – Come As You Geek</h2>
    </div>
    <div class="controlerCarrousel">
        <div class="dot" id="first"></div>
        <div class="dot" id="second"></div>
        <div class="dot" id="third"></div>
    </div>
</div>

<div class="container-fluid shadow">
    <h2 class="center marginTop" id="solutions">ACTIVITES</h2>
    <p class="center">Slickteam accompagne le développement de ses clients dans le domaine des systèmes d'information. Notre savoir-faire est la création des outils digitaux permettant de rester compétitif.</p>
    <div class="row marginTop ">
        <div class="col-md-4 col-sm-12">
            <div class="iconSolution marginTop">
                <div class="goutte container-fluid"><img src=""  class="img-fluid"  data-src="images/goutte.png" alt="goutte Slickteam">
                    <div class="iconCenter"><i class="fas fa-users fa-3x"></i></div></div>
            </div>
            <h3 class="center">EXPERTISE</h3>
            <h3 class="center gras">Notre expertise au service de nos clients sur trois domaines : </h3>
            <p class="center">Développement – Front & Back<br/>
                Applications mobiles<br/>
                IOT
            </p>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="iconSolution marginTop">
                <div class="goutte container-fluid"><img src=""  class="img-fluid" data-src="images/goutte1.png" alt="goutte Slickteam">
                    <div class="iconCenter"><i class="fa fa-cog fa-3x"></i></div></div>
            </div>
            <h3 class="center">DIGITAL FACTORY</h3>
            <h3 class="center gras">Accompagner pour la réussite des projets digitaux</h3>
            <p class="center">Gestion et accompagnement du projet de A à Z</p>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="iconSolution marginTop">
                <div class="goutte container-fluid"><img src="" class="img-fluid"  data-src="images/goutte2.png" alt="goutte Slickteam">
                    <div class="iconCenter"><i class="fa fa-flask fa-3x"></i></div></div>
            </div>
            <h3 class="center">GEEKING DAY</h3>
            <h3 class="center gras">C’est la R&D réalisée par la Slickteam. Nous testons, développons des projets innovants.</h3>
            <p class="center">Chaque membre de la team dispose du temps pour contribuer à la R&D.</p>
        </div>
    </div>
</div>
<div class="container-fluid grey shadow">
    <div class="row">
        <div class="col-md-6 col-sm-0 imgFondLazy">
        </div>
        <div class="col-md-6 col-sm-12 fonctionement center">
            <h2 class="titreH2" id="pourquoi">TRAVAILLER PAR PIERRE & LAURENT</h2>
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-lightbulb fa-3x iconPourquoi"></i>
                </div>
                <div class="col-9 left">
                    <h3>PEOPLE FIRST</h3>
                    <p>l'Homme est au coeur de chaque décision. Tu as des idées, on s'adapte !</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-cubes fa-3x iconPourquoi"></i>
                </div>
                <div class="col-9 left">
                    <h3>TECHNO-CENTRIC</h3>
                    <p>Des passionnés de nouvelles techno qui ont le goût des choses bien faites sur 3 activités : le dev applicatif, le mobile et l'IoT.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-flask fa-3x iconPourquoi"></i>
                </div>
                <div class="col-9 left">
                    <h3>GEEKING DAYS</h3>
                    <p>2x/mois - On se réunit tous 2x par mois pour faire de la R&D et incuber ses idées pour innover. C’est l’occasion de se maintenir au top en faisant de la veille ou en participant à des formations.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-gamepad fa-3x iconPourquoi"></i>
                </div>
                <div class="col-9 left">
                    <h3>FUN</h3>
                    <p>Participation au Fun made by Slickteam et aux événements de la communauté Tech bretonne.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$annonce = unserialize(file_get_contents('content/annonces.txt'));
$annonce1 = unserialize(file_get_contents('content/annonces1.txt'));
$annonce2 = unserialize(file_get_contents('content/annonces2.txt'));
if(isset($_SESSION["admin"])) {
    echo(' <div class="container-fluid shadow" id="annonce">
    <div class="row">
    <div class="col-4">
        <form class="modifEvent" action="content/annonces.php" method="post">
        <label class="input-text" for="titreCarte">titre de la carte<input id="titreCarte" name="titreCarte" type="text" aria-describedby="titreCarte">
        </label>
       <label class="input-text" for="titreAnnonces">Titre de l\'annonce<input id="titreAnnonces" name="titreAnnonces" type="text" aria-describedby="titreAnnonces">
        </label>
        <label  class="tiny">Profil recherché
         <textarea rows = "12" cols = "50" class="input input-area profil"
       id = "profil" name = "profil" aria-describedby = "profil" novalidate >
       <p>Description du profil recherché pour le poste</p>
        </textarea>
        </label>
        <label class="tiny">description du poste
       <textarea rows="12" cols="50" class="input input-area descriptionPoste"
       id="descriptionPoste" name="descriptionPoste" aria-describedby="descriptionPoste" novalidate> 
        <p>Description du poste</p></textarea ></label>
        <input type="submit"></div></form>
        
       <div class="col-4">
        <form class="modifEvent" action="content/annonces1.php" method="post">
        <label class="input-text" for="titreCarte1">titre de la carte<input id="titreCarte1" name="titreCarte1" type="text" aria-describedby="titreCarte1">
        </label>
       <label class="input-text" for="titreAnnonces1">Titre de l\'annonce<input id="titreAnnonces1" name="titreAnnonces1" type="text" aria-describedby="titreAnnonces1">
        </label>
        <label  class="tiny">Profil recherché
         <textarea rows = "12" cols = "50" class="input input-area profil1"
       id = "profil1" name = "profil1" aria-describedby = "profil1" novalidate >
       <p>Description du profil recherché pour le poste</p>
        </textarea>
        </label>
        <label class="tiny">description du poste
       <textarea rows="12" cols="50" class="input input-area descriptionPoste1"
       id="descriptionPoste1" name="descriptionPoste1" aria-describedby="descriptionPoste1" novalidate> 
        <p>Description du poste</p></textarea ></label>
        <input type="submit"></div></form>
        
       <div class="col-4">
        <form class="modifEvent" action="content/annonces2.php" method="post">
        <label class="input-text" for="titreCarte2">titre de la carte<input id="titreCarte2" name="titreCarte2" type="text" aria-describedby="titreCarte2">
        </label>
       <label class="input-text" for="titreAnnonces">Titre de l\'annonce<input id="titreAnnonces2" name="titreAnnonces2" type="text" aria-describedby="titreAnnonces2">
        </label>
        <label  class="tiny">Profil recherché
         <textarea rows = "12" cols = "50" class="input input-area profil2"
       id = "profil2" name = "profil2" aria-describedby = "profil2" novalidate >
       <p>Description du profil recherché pour le poste</p>
        </textarea>
        </label>
        <label class="tiny">description du poste
       <textarea rows="12" cols="50" class="input input-area descriptionPoste2"
       id="descriptionPoste2" name="descriptionPoste2" aria-describedby="descriptionPoste2" novalidate> 
        <p>Description du poste</p></textarea ></label>
       <input type="submit"></div></form>');
}
else{
echo('
<div class="container-fluid shadow ConteneurContent">
    <h2 id="job" class="marginTop center">NOUS RECRUTONS</h2>
    <div class="annoncesRow">
        <div class="annonces card shadow" id="bloc1">
            <div class="annonceContent center card-body">
                <h3 class="card-title"><hr>'.$annonce[0]["titreCarte"].'<hr></h3>
                <div class="contenuAnnonce  row" aria-hidden="true">
                  <div class="col-md-6 col-sm-12"><h2>'.$annonce[0]["titreAnnonce"].'</h2><br>
                    '.$annonce[0]["poste"].'
                  </div>
                    <div class="col-md-6 col-sm-12">
                    '.$annonce[0]["profil"].'
                <div class="fakeButton"><p><a href="mailto:contact@slickteam.fr" target="_blank">Postulez ici !</a></p></div></a>
                </div>
 
                </div>
                <div class="fakeButton bouttonEvent">Plus d\'informations</div>
                <div class="back"><i class="fa fa-times"></i></div>
            </div>
        </div>

        <div class="annonces card shadow" id="bloc2">
            <div class="annonceContent center card-body">
                <h3 class="card-title"><hr>'.$annonce1[0]["titreCarte"].'<hr></h3>
                <div class="contenuAnnonce  row" aria-hidden="true">
                   <div class="col-md-6 col-sm-12"><h2>'.$annonce1[0]["titreAnnonce"].'</h2><br>
                    '.$annonce1[0]["poste"].'
                  </div>
                    <div class="col-md-6 col-sm-12">
                    '.$annonce1[0]["profil"].'
                <div class="fakeButton"><p><a href="mailto:contact@slickteam.fr" target="_blank">Postulez ici !</a></p></div></a>
                </div>
    
                </div>
                <div class="fakeButton bouttonEvent">Plus d\'informations</div>
                <div class="back"><i class="fa fa-times"></i></div>
            </div>
        </div>
        <div class="annonces card shadow" id="bloc3">
            <div class="annonceContent center card-body">
                <h3 class="card-title"><hr>'.$annonce2[0]["titreCarte"].'<hr></h3>
                <div class="contenuAnnonce  row" aria-hidden="true">
                  <div class="col-md-6 col-sm-12"><h2>'.$annonce2[0]["titreAnnonce"].'</h2><br>
                    '.$annonce2[0]["poste"].'
                  </div>
                    <div class="col-md-6 col-sm-12">
                    '.$annonce2[0]["profil"].'
                <div class="fakeButton"><p><a href="mailto:contact@slickteam.fr" target="_blank">Postulez ici !</a></p></div></a>
                </div>
     
                </div>
                <div class="fakeButton bouttonEvent">Plus d\'informations</div>
                <div class="back"><i class="fa fa-times"></i></div>
            </div>
        </div>
    </div>
</div>
</div>
');
}?>
<?php
$json = file_get_contents("content/user.json");
$return = json_decode($json,true);
$content = unserialize(file_get_contents('content/event.txt'));
$content1 = unserialize(file_get_contents('content/event1.txt'));
$content2 = unserialize(file_get_contents('content/event2.txt'));
if(isset($_SESSION["admin"])){
    echo('
    <div class="container-fluid shadow" id="evenement">
    <div class="row">
    <div class="col-4">
        <form class="modifEvent" action="content/event.php" method="post">
        <label class="input-text" for="type">type d\'évènement<input id="type" name="type" type="text" aria-describedby="type">
        </label>
       <label class="input-text" for="img">Nom de l\'images avec l\'extention<input id="img" name="img" type="text" aria-describedby="image">
        </label>
       <label class="input-text" for="date">date de l\'évènement<input id="date" name="date" type="text" aria-describedby="date">
        </label>
       <label class="input-text" for="lieu">Lieu de l\'évènement<input id="lieu" name="lieu" type="text" aria-describedby="lieu">
        </label>
       <label class="input-text" for="LienEvent">Lien vers l\'évènement<input id="LienEvent" name="LienEvent" type="text" aria-describedby="LienEvent">
        </label>
        <label  class="tiny">titre de l\'évènement
       <textarea rows="12" cols="50" class="input input-area titreEvent"
       id="titreEvent" name="titreEvent" aria-describedby="titreEvent" novalidate>
       <h3>Ici un titre Header3 (le titre de l\'évènement)</h3>
        </textarea>
        </label>
        <label class="tiny">Contenue évènement
       <textarea rows="12" cols="50" class="input input-area textEvent"
       id="textEvent" name="textEvent" aria-describedby="textEvent" novalidate> 
       Puis le paragraphe (la description de l\'évènement)(Merci d\'effacer ceci lors de l\'écriture)</textarea></label>');
        echo('<fieldset><legend> Les personnes presentes à l\'évènement </legend > ');
    foreach($return['user']as $name){
        $prenom=$name['prenom'];
        echo('<div>
         <input type="checkbox" id="'.$prenom.'Event" name="'.$prenom.'Event" value="oui">
        <label for="'.$prenom.'Event">'.$prenom.'</label>
        </div>');
        }
    echo('<input type="submit"></form></fieldset></form>');

    echo('
     </div>
    <div class="col-4">
     <form class="modifEvent" action="content/event1.php" method="post">
            <label class="input-text" for="type1">type d\'évènement<input id="type1" name="type1" type="text" aria-describedby="type1">
        </label>
       <label class="input-text" for="img1">Nom de l\'images avec l\'extention<input id="img1" name="img1" type="text" aria-describedby="image1">
       </label>
       <label class="input-text" for="date1">date de l\'évènement<input id="date1" name="date1" type="text" aria-describedby="date1">
        </label>
       <label class="input-text" for="lieu1">Lieu de l\'évènement<input id="lieu1" name="lieu1" type="text" aria-describedby="lieu1">
        </label>
       <label class="input-text" for="LienEvent1">Lien vers l\'évènement<input id="LienEvent1" name="LienEvent1" type="text" aria-describedby="LienEvent1">
        </label>
       <label  class="tiny">titre de l\'évènement
       <textarea rows="12" cols="50" class="input input-area titreEvent1"
       id="titreEvent1" name="titreEvent1" aria-describedby="titreEvent1" novalidate>
       <h3>Ici un titre Header3 (le titre de l\'évènement)</h3>
        </textarea>
        </label>
        <label class="tiny">Contenue évènement
       <textarea rows="12" cols="50" class="input input-area textEvent1"
       id="textEvent1" name="textEvent1" aria-describedby="textEvent1" novalidate>  
       Puis le paragraphe (la description de l\'évènement)(Merci d\'effacer ceci lors de l\'écriture)</textarea>
        </label>');
        echo('<fieldset><legend> Les personnes presentes à l\'évènement </legend > ');
    foreach($return['user']as $name){
        $prenom=$name['prenom'];
        echo('<div>
         <input type="checkbox" id="'.$prenom.'Event1" name="'.$prenom.'Event1" value="oui">
        <label for="'.$prenom.'Event1">'.$prenom.'</label>
        </div>');
    }
    echo('<input type="submit"></form></fieldset></form>');

    echo('
    </div>
    <div class="col-4">
     <form class="modifEvent" action="content/event2.php" method="post">
        <label class="input-text" for="type2">type d\'évènement<input id="type2" name="type2" type="text" aria-describedby="type2">
        </label>
       <label class="input-text" for="img2">Nom de l\'images avec l\'extention<input id="img2" name="img2" type="text" aria-describedby="image2">
        </label>
        <label class="input-text" for="date2">date de l\'évènement<input id="date1" name="date2" type="text" aria-describedby="date2">
        </label>
       <label class="input-text" for="lieu2">Lieu de l\'évènement<input id="lieu1" name="lieu2" type="text" aria-describedby="lieu2">
        </label>
       <label class="input-text" for="LienEvent2">Lien vers l\'évènement<input id="LienEvent2" name="LienEvent2" type="text" aria-describedby="LienEvent2">
        </label>
       <label  class="tiny">titre de l\'évènement
       <textarea rows="12" cols="50" class="input input-area titreEvent2"
       id="titreEvent2" name="titreEvent2" aria-describedby="titreEvent2" novalidate>
       <h3>Ici un titre Header3 (le titre de l\'évènement)</h3>
        </textarea>
        </label>
        <label  class="tiny">Contenue évènement
       <textarea rows="12" cols="50" class="input input-area textEvent2"
       id="textEvent2" name="textEvent2" aria-describedby="textEvent2" novalidate>
       Puis le paragraphe (la description de l\'évènement)(Merci d\'effacer ceci lors de l\'écriture)
        </textarea>
        </label>');
    echo('<fieldset><legend> Les personnes presentes à l\'évènement </legend > ');
    foreach($return['user']as $name){
        $prenom=$name['prenom'];
        echo('<div>
         <input type="checkbox" id="'.$prenom.'Event2" name="'.$prenom.'Event2" value="oui">
        <label for="'.$prenom.'Event2">'.$prenom.'</label>
        </div>');
    }
    echo('<input type="submit"></form></fieldset></form>
    </div>
    </div>
    </div>');

    }else {

        echo('<div class="container-fluid shadow" id="evenement"><h2 class="marginTop center">NOUS PARTICIPONS</h2>
        <div class="row center">
    
            <div class="col-md-4 col-sm-12 relative"><div class="animBandeau"><img src="images/'.$content[0]["img"].'" alt="image Evènement"><div class="bandeau"><h3>'.$content[0]["type"].'</h3></div></div>');echo(''.$content[0]["titreEvent"].'');echo('<p><i class="fa fa-calendar fa fa-2x lieuEvent"></i>'.$content[0]["date"].'<br>
                    <i class="fas fa-map-marker-alt fa-2x lieuEvent"></i>'.$content[0]["lieu"].'
                </p><blockquote>'.$content[0]["event"].'
                <a href="'.$content[0]['lien'].'" target="_blank">Participer !</a></blockquote>
                <div class="row marginBot">
            <div class="present col-12">');
            for($i=0;$i<=(count($return["user"])-1);$i++){
                if($return["user"][$i]["present"]=="oui") {
                    echo("<div class='avatar'><img src='' data-src='".$return['user'][$i]['avatar']."' alt='avatar'></div>");

                }
                }
                echo('
                    </div>
                    
                </div>
            </div>');
            echo('
            <div class="col-md-4 col-sm-12 relative"><div class="animBandeau"><img src="images/'.$content1[0]["img"].'" alt="image Evènement"><div class="bandeau"><h3>'.$content1[0]["type"].'</h3></div></div>');echo(''.$content1[0]["titreEvent"].'');echo('<p><i class="fa fa-calendar fa fa-2x lieuEvent"></i>'.$content1[0]["date"].'<br>
                    <i class="fas fa-map-marker-alt fa-2x lieuEvent"></i>'.$content1[0]["lieu"].'</p><blockquote>
                    '.$content1[0]["event"].'<a href="'.$content1[0]['lien'].'" target="_blank">Participer !</a></blockquote>
                <div class="row marginBot">
            <div class="present col-12">');

            for($i=0;$i<=(count($return["user"])-1);$i++){
                if($return["user"][$i]["present1"]=="oui") {
                    echo("<div class='avatar'><img <img src='' data-src='".$return['user'][$i]['avatar']."' alt='avatar'></div>");

                }
                }
                echo('
                    </div>
                    
                </div>
            </div>');
            echo('
            <div class="col-md-4 col-sm-12 relative"><div class="animBandeau"><img src="images/'.$content2[0]["img"].'" alt="image Evènement"><div class="bandeau"><h3>'.$content2[0]["type"].'</h3></div></div>');echo(''.$content2[0]["titreEvent"].'');echo('<p><i class="fa fa-calendar fa fa-2x lieuEvent"></i>'.$content2[0]["date"].'<br>
                    <i class="fas fa-map-marker-alt fa-2x lieuEvent"></i>'.$content2[0]["lieu"].'</p>
                <blockquote> '.$content2[0]["event"].'<a href="'.$content2[0]['lien'].'" target="_blank">Participer !</a></blockquote>
                <div class="row marginBot">
                <div class="present col-12">');
            for($i=0;$i<=(count($return["user"])-1);$i++){
            if($return["user"][$i]["present2"]=="oui") {
                echo("<div class='avatar'><img <img src='' data-src='".$return['user'][$i]['avatar']."' alt='avatar'></div>");

            }
            }
            echo('
                    </div>
                    
                </div>
            </div>
    
        </div>
    </div>');
    }
    ?>
    <div class="container-fluid sectionChiffre">
        <div class="chiffreImgLazy"></div>
        <h2 class="center titreChiffre">Slickteam en chiffre</h2>
        <div class="row marginTop contenerChiffre">
            <div class="col-md-5 col-sm-12 iconResponsiveChiffre">
                <div class="row">
                    <div class="col-6">
                        <div class="iconSolutionChiffre marginTop">
                            <div class="goutte container-fluid"><img src=""  class="img-fluid"  data-src="images/goutte1.png" alt="goutte Slickteam">
                                <div class="iconCenter2"><i class="fas fa-coffee fa-1x"></i></div>
                            </div>
                            <div class="odometer-container"><div class="center marginTop odometer" id="cafe"></div></div>
                            <h3 class="center textChiffre">Cafés</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="iconSolutionChiffre marginTop">
                            <div class="goutte container-fluid"><img src=""  class="img-fluid"  data-src="images/goutte1.png" alt="goutte Slickteam">
                                <div class="iconCenter2"><i class="fas fa-lightbulb fa-1x"></i></div>
                            </div>
                            <div class="odometer-container"><div class="center marginTop odometer" id="geeking-day"></div></div>
                            <h3 class="center textChiffre">Geeking Day</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-12 iconRelative">
                <div class=" marginTop iconMonth">
                    <div class="iconSolutionCenter goutte container-fluid"><img src=""  class="img-fluid"  data-src="images/goutte.png" alt="goutte Slickteam">
                        <div class="iconCenter3"><i class="fas fa-basketball-ball fa-2x"></i></div>
                    </div>
                    <div class="odometer-container"><div class="center odometer" id="basket"></div></div>
                    <h3 class="center textChiffre">Nombre de panier du mois</h3>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 iconResponsiveChiffre">
                <div class="row">
                    <div class="col-6">
                        <div class="iconSolutionChiffre marginTop">
                            <div class="goutte container-fluid"><img src=""  class="img-fluid"  data-src="images/goutte1.png" alt="goutte Slickteam">
                                <div class="iconCenter2"><i class="fas fa-users fa-1x"></i></div>
                            </div>
                            <div class="odometer-container"><div class="center marginTop odometer" id="work"></div></div>
                            <h3 class="center textChiffre">Work-Shop</h3>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="iconSolutionChiffre marginTop">
                            <div class="goutte container-fluid"><img src=""  class="img-fluid"  data-src="images/goutte1.png" alt="goutte Slickteam">
                                <div class="iconCenter2"><i class="fas fa-music fa-1x"></i></div>
                            </div>
                            <div class="odometer-container"><div class="center marginTop odometer" id="music"></div></div>
                            <h3 class="center textChiffre">Heures de musique</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid imgFondContact">
        <div id="map" class="googleMap"></div>
    </div>
        <div class=" center Contact">
            <p><i class="fa fa-phone marginRight"></i>+33 6 72 47 75 78</p>
            <p><i class="fa fa-envelope marginRight"></i><a href="mailto:contact@slickteam.fr" id="mail" title="mail">contact@slickteam.fr</a></p>
        </div>
    <div class="modal-contact" id="Contact" aria-hidden="true">
        <form class="formContact" id="formulaireContact" method="POST" action="mailing/mailing.php">
            <div class="backContact"><i class="fa fa-times"></i></div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label class="input-text" for="name"><input id="name" name="name" class="input name" type="text" aria-describedby="prenom" placeholder="Prénom *">
                        <label id="name-error" class="error" for="name"></label> <span id="prenom" class="description">Le prenom doit être de au moin 2 caractères</span></label></div>
                <div class="col-md-6 col-sm-12">
                    <label class="input-text" for="firstName">
                        <input id="firstName" class="input firstName" name="firstName" type="text" aria-describedby="nom" placeholder="Nom *">
                        <label id="firstName-error" class="error" for="firstName"></label><span id="nom" class="description">Le nom doit être de au moin 2 caractères</span></label></div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label class="input-text" for="email">
                        <input id="email" class="input email" name="email" type="text" aria-describedby="email" placeholder="E-mail *">
                        <label id="email-error" class="error" for="email"></label><span id="email2" class="description">L'e-mail doit être au format exemple@exemple.extension</span></label></div>
                <div class="col-md-6 col-sm-12">
                    <label class="input-text" for="tel">
                        <input id="tel" class="input tel" name="tel" type="text" aria-describedby="tel" placeholder="Téléphone">
                        <label id="tel-error" class="error" for="tel"></label><span id="tel2" class="description">Le numero de téléphone doit être composé de 10 chiffres</span></label></div>
            </div>
            <div class="row"><div class="col-12">
            <label class="input-text" for="obj">
                <input id="obj" class="input obj" name="obj" type="text" aria-describedby="objet" placeholder="Objet">
                <label id="obj-error" class="error" for="obj"></label><span id="objet2" class="description">L'objet de votre message ne peut pas dépasser 50 caractères</span></label>
                </div></div>
            <div class="row"><div class="col-12"><label class="input-text" for="messages">
                <textarea rows="12" cols="50" class="input input-area messages" id="messages" name="messages" required aria-describedby="message" placeholder="Message *"></textarea>
                        <label id="messages-error" class="error" for="messsages"></label><span id="message" class="description">Votre  message ne peut pas dépasser 600 caractères</span></label>
                </div>
            </div>
            <div class="btnCenter"><button class="center btn" value="submit">Valider</button>
            </div>
            <p class="center notice"> * : Champ Obligatoire</p>
        </form>
    </div>
    <footer>
        <div class="center contactSVG">
            <span class="chart" data-percent="0">
            <span class="text">Contact</span>
            <span class="percent"></span>
        </span>
        </div>
        <div class="center divIcon">
            <div class="footerIcon"><a href="https://www.facebook.com/Slickteam-869111176525294/" name="Facebook" target="_blank">
                    <i class="fab fa-facebook"></i></a></div>
            <div class="footerIcon"><a href="https://twitter.com/SlickteamFR" name="Twitter" target="_blank">
                    <i class="fab fa-twitter fa-1x"></i></a></div>
            <div class="footerIcon"><a href="https://www.linkedin.com/company-beta/11041917/" name="LinkedIn" target="_blank">
                    <i class="fab fa-linkedin fa-1x"></i></a></div>
            <div class="footerIcon"><a href="https://medium.com/slickteam" name="Medium" target="_blank">
                    <i class="fab fa-medium fa-1x"></i></a></div>
            <div class="footerIcon"><a href="https://github.com/Slickteam" name="GitHub" target="_blank">
                    <i class="fab fa-github fa-1x"></i></a></div>
            <div class="footerIcon"><a href="https://www.meetup.com/fr-FR/Meetup-Slickteam/" name="MeetUp" target="_blank">
                    <i class="fab fa-meetup fa-1x"></i></a></div>

        </div>
        <p class="center footerText">© 2018 - Slickteam, All rights reserved - Powered by Slickteam<br>
            <a href="mentions-legales-credits.html" id="mentions" target="_blank" alt="mentions legales">Mentions Légales & Crédits</a></p>
    </footer>

    </body>
    <?php
    session_destroy();
    ?>
    <script>
        function init() {
            var imgDefer = document.getElementsByTagName('img');
            for (var i=0; i<imgDefer.length; i++) {
                if(imgDefer[i].getAttribute('data-src')) {
                    imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
                } } }
        window.onload = init;
    </script>
    <script defer src="waypoint/jquery.waypoints.min.js"></script>
    <script defer src="infoBubble/infobubble.js"></script>
    <script defer src="easy-pie/jquery.easypiechart.min.js"></script>
    <script defer src="validate/jquery.validate.min.js"></script>
    <script defer src="validate/additional-methods.js"></script>
    <script defer src="validate/messages_fr.js"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script async defer src="script/Jquery.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6eoVXUj5UeEvIPOplM4uAua3ge73BSWY&callback=initMap">
    </script>
    </html>