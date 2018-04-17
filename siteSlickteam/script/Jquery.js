
$(".present").each(function(){
	var left=0;
	$(this).find(".avatar").each(function(){
		left+=25
		$(this).css("left",left+"px");
	})
})

$(".cross").click(function(){
	$(".bandeauCookie").hide();
})


window.odometerOptions = {
  format: '(ddd).dd', // Change how digit groups are formatted, and how many digits are shown after the decimal point
};
var waypoint = new Waypoint({
  element: $(".sectionChiffre"),
  handler: function(){ 
function diffdate(d1,d2){
var WNbJours = d2.getTime() - d1.getTime();
return Math.ceil(WNbJours/(1000*60*60*24));
}
var date1 = new Date('2018-01-01');
var date2 = new Date();
var nbJour = diffdate(date1,date2);

var cafe = (nbJour*15)+1500;
var post= (nbJour*5)+800;
var workshop = (nbJour*2)+200;
var musique = (nbJour*3)+500;
var basket=(nbJour*2)+150;
var geekingDay=Math.round(nbJour/15);

$("#cafe").html(cafe);
$("#post").html(post);
$("#work").html(workshop);
$("#music").html(musique);
$("#geeking-day").html(geekingDay);
$("#basket").html(basket);
},
  offset: 150
})

$(document).ready(function(){
$(".chiffreImgLazy").addClass("chiffreImg");
$(".imgFondLazy").addClass("imgFond");
$(".img1Lazy").addClass("img1");
$(".img2Lazy").addClass("img2");
$(".img3Lazy").addClass("img3");
});

function initMap() {
        var addresse = new google.maps.LatLng(48.130427,-1.635018);
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: addresse,
        });
        var marker = new google.maps.Marker({
          position: addresse,
          map: map,
        });

        var infobulle;
		infobulle = new InfoBubble({
		map: map,
		content: "Les Galaxies, 1 Square René Cassin",  // Contenu de l'infobulle
		position: addresse,
		center:addresse,  // Coordonnées latitude longitude du marker
		padding: 0,  // Marge interne de l'infobulle (en px)
		backgroundColor: 'rgb(255,255,255)',  // Couleur de fond de l'infobulle
		borderRadius: 50, // Angle d'arrondis de la bordure
		arrowSize: 0, // Taille du pointeur sous l'infobulle// Épaisseur de la bordure (en px)// Couleur de la bordure 
		hideCloseButton: true, // Cacher le bouton 'Fermer'
		arrowPosition:50,  // Position du pointeur de l'infobulle (en %)
		arrowStyle: 0,  // Type de pointeur (0, 1 ou 2)
		disableAnimation: false,  // Déactiver l'animation à l'ouverture de l'infobulle
		minWidth :   250, // Largeur minimum de l'infobulle  (en px)
		});

        $(window).ready(function() {
          infobulle.open(map, marker);
        });
      }


$(window).resize(function(){
        var addresse = new google.maps.LatLng(48.130427,-1.635018);
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: addresse
        });
        var marker = new google.maps.Marker({
          position: addresse,
          map: map
        });

        var infobulle;
		infobulle = new InfoBubble({
		map: map,
		content: "Les Galaxies, 1 Square René Cassin",  // Contenu de l'infobulle
		position: addresse,  // Coordonnées latitude longitude du marker,  // Style de l'ombre de l'infobulle (0, 1 ou 2)
		padding:0,  // Marge interne de l'infobulle (en px)
		backgroundColor: 'rgb(255,255,255)',  // Couleur de fond de l'infobulle
		borderRadius: 50, // Angle d'arrondis de la bordure
		arrowSize: 0, // Taille du pointeur sous l'infobulle// Épaisseur de la bordure (en px)// Couleur de la bordure // Désactiver l'adaptation automatique de l'infobulle
		hideCloseButton: true, // Cacher le bouton 'Fermer'
		arrowPosition: 50,  // Position du pointeur de l'infobulle (en %)
		arrowStyle: 0,  // Type de pointeur (0, 1 ou 2)
		disableAnimation: false,  // Déactiver l'animation à l'ouverture de l'infobulle
		minWidth :   250, // Largeur minimum de l'infobulle  (en px)
		});

        $(window).ready(function() {
          infobulle.open(map, marker);
        });
});

$(function(){
	$('.chart').easyPieChart({
		barColor:'#f18700',
		scaleColor:false,
		onStep: function(from, to, percent) {
			$(this.el).find('.percent');
		}
	});
})

$(".chart").mouseenter(function(){
	$('.chart').data("easyPieChart").update(100);
});


$(".chart").mouseleave(function(){
	$('.chart').data("easyPieChart").update(0);
});

$('.jsScroll').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			var offsetTop = $(page).offset().top -100;
			$('html, body').animate( { scrollTop: offsetTop }, speed ); // Go
			return false;
});




$(window).scroll(function(){
	var event = $(document).scrollTop();
	if(event>0){
		if($(".enter").is(":visible")){
		$(".enter").slideUp(1000);
		}
	}
})

$(".enter").click(function(){
		if($(".enter").is(":visible")){
		$(".enter").slideUp(1000);
		}
});

$(".formContact").validate({
		rules:{
			name:{
			required:true,
			minlength: 2,
			maxlength:30
			},
			firstName:{
				required:true,
				minlength:2,
				maxlength:30
			},
			tel:{
				number:true,
				minlength:10,
				maxlength:10
			},
			email:{
				required:true,
				email:true,
				maxlength:50
			},
			obj:{
				maxlength:50
			},
			messages:{
				required:true,
				maxlength:600
			}
		},
		messages:
		{
			name:{
				required:"Veuillez renseigner votre prénom"
			},
			firstName:{
				required:"Veuillez renseigner votre nom"
			},
			tel:{
				required:"Veuillez renseigner votre numero de téléphone",
				number:"Seul les chiffres sont autorisé dans ce champ"
			},
			email:{
				required:"Veuillez renseigner votre e-mail afin de pouvoir vous contacter",
				email:"E-mail au format email@herbergeur.extension"
			},
			obj:{
				required:"Veuillez renseigner un objet"
			},
			messages:{
				required:"Veuillez renseigner votre message"
			}
		},
		submitHandler:(function(formContact)
		{
				$(".formContact").ajaxSubmit();
				return false;
				 $('.modal-contact').hide("slow");
		})
	});


$(".validateContact").click(function(){
	if(!$(".prenom").val()){
		$("#prenom").css("display","block");
	}
	
})

$(".contenuAnnonce").hide()
$(".back").hide();


$(document).click(function(event) { 
    if(!$(event.target).closest('.formContact').length && !$(event.target).closest('.contactSVG').length) {
    	if($('.modal-contact').is(":visible")) {
            $('.modal-contact').hide("slow");
        }    
    } 
});

$(".contactSVG").click(function(){
		$(".modal-contact").show("slow");
		$(".modal-contact").attr("aria-live","polite");
		var page = "#map"; // Page cible
		var speed = 750; // Durée de l'animation (en ms)
		var hauteur = $(page).offset().top+50;
		$('html, body').animate( { scrollTop: hauteur }, speed );
});

$(".backContact").click(function(){
		$(".modal-contact").hide("slow");
		$(".modal-contact").removeAttr("aria-live");
})


$(document).ready("DOMContentLoaded",function(){

	$('.jsScroll').click(function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
})

});


$(window).resize(function(){

	 if($(window).width()>768){
	 	$(".annonces").css("width","30%");
	    $(".annonces").css("top","0");
	    if($("#bloc1").attr("animation")){
	    $("#bloc1").css("left","0");
	    }else
	    {
	    $("#bloc1").css("left","0");
	    }
	   	if($("#bloc2").attr("animation")){
	    $("#bloc2").css("left","0");
	    }else
	    {
	    $("#bloc2").css("left","33%");
	    }
	   	if($("#bloc3").attr("animation")){
	    $("#bloc3").css("left","0");
	    }else
	    {
	    $("#bloc3").css("left","66%");
	    }
    }

    if($(window).width()<768){
    	$(".annonces").css("width","100%");
    	$(".annonces").css("left","0");
	    if($("#bloc1").attr("animation")){
	    $("#bloc1").css("top","0");
	    }else
	    {
	    $("#bloc1").css("top","0");
	    }
	   	if($("#bloc2").attr("animation")){
	    $("#bloc2").css("top","0");
	    }else
	    {
	    $("#bloc2").css("top","33%");
	    }
	   	if($("#bloc3").attr("animation")){
	    $("#bloc3").css("top","0");
	    }else
	    {
	    $("#bloc3").css("top","66%");
	    }
    }

})


$(".annonces").click(function(){
    var io = this.io ^=1;
        if($(this).attr("id")=="bloc1"){
            var deplacement=0;
            var bloc=$("#bloc2, #bloc3");
        }
        if($(this).attr("id")=="bloc2"){
            var deplacement=33;
            var bloc=$("#bloc1, #bloc3");
        }
        if($(this).attr("id")=="bloc3"){
            var deplacement=66;
            var bloc=$("#bloc1, #bloc2");
        }
    if($(window).width()>768){
    	$(".annonces").css("top","0");
    	$("#bloc1").css("left","0");
    	$("#bloc2").css("left","33%");
    	$("#bloc3").css("left","66%");
    if (io ? 1:0){
    	// ouverture au clic
        bloc.stop().fadeToggle(1000,"linear");
        $(this).animate({"left":"0"});
        $(this).delay(10000).find(".contenuAnnonce").stop().slideToggle();
   		$(this).attr("animation","animated");
        $(this).find(".back").stop().show();
        $(this).find(".bouttonEvent").stop().hide();
    }
    else{
    	//sinon fermeture de l'annonce
        $(this).find(".contenuAnnonce").stop().slideToggle()
        $(this).removeAttr("animation");
        $(this).find(".back").stop().hide();
        $(this).stop().animate({"left":deplacement+"%"});
        bloc.delay(700).stop().fadeToggle(1000,"linear");
        $(this).find(".bouttonEvent").stop().show();
    }
    }
    if($(window).width()<=768){
    	$(".annonces").css("left","0");
    	$("#bloc1").css("top","0");
    	$("#bloc2").css("top","33%");
    	$("#bloc3").css("top","66%");
        if (io ? 1:0){
        bloc.fadeToggle(1000,"linear");
       	$(this).attr("animation","animated");
        $(this).animate({"top":"0"});
        $(this).find(".contenuAnnonce").stop().slideToggle("fast");
        $(this).find(".back").stop().show();
        $(this).find(".bouttonEvent").stop().hide();
       }
 	 else{
            $(this).find(".contenuAnnonce").stop().slideToggle("fast");
            $(this).removeAttr("animation");
            $(this).stop().animate({"top":deplacement+"%"});
            bloc.delay(700).stop().fadeToggle(1000,"linear");
            $(this).find(".back").stop().hide();
             $(this).find(".bouttonEvent").stop().show();
        }
    }
});


//carrousel d'offre d'emploi slickteam

$(document).ready(function(){
    
var $carrousel = $('#carrousel'), // on cible le bloc du carrousel
    $img = $('#carrousel .imgTitre'), // on cible les images contenues dans le carrousel
    indexImg = $img.length-1, // on définit l'index du dernier élément
    i = 0, // on initialise un compteur
    $currentImg = $img.eq(i); // enfin, on cible l'image courante, qui possède l'index i (0 pour l'instant)

$img.css('display', 'none'); // on cache les images
$currentImg.css('display', 'block'); // on affiche seulement l'image courante


function slideImg(){
    setTimeout(function(){ // on utilise une fonction anonyme
						
    if(i < indexImg){ // si le compteur est inférieur au dernier index
	    i++; // on l'incrémente
	}
	else{ // sinon, on le remet à 0 (première image)
	    i = 0;
	}

	$img.css('display', 'none');
	$currentdot=$(".dot").eq(i);
	$currentImg = $img.eq(i);
	$currentImg.css('display', 'block');

	$(".dot").css("background-color","transparent");
	$(".dot").css("border","1px solid white");
	if($currentdot.attr("id")=="first"){
	$("#first").css("background-color","#f18700");
	$("#first").css("border","none");
	}
	if($currentdot.attr("id")=="second"){
	$("#second").css("background-color","#f18700");
	$("#second").css("border","none");
	}
	if($currentdot.attr("id")=="third"){
	$("#third").css("background-color","#f18700");
	$("#third").css("border","none");
	}

	slideImg(); // on oublie pas de relancer la fonction à la fin

    }, 7000); // on définit l'intervalle à 7000 millisecondes (7s)
}

slideImg(); // enfin, on lance la fonction une première fois


$(".dot").click(function(){
	$(".dot").css("background-color","transparent");
	$(".dot").css("border","1px solid white");

	if($(this).attr("id")=="first"){
		$(this).css("background-color","#f18700");
		$("#first").css("border","none");
		i=0;
	}

	if($(this).attr("id")=="second"){
		i=1;
		$(this).css("background-color","#f18700");
		$("#second").css("border","none");
	}
	if($(this).attr("id")=="third"){
		i=2;
		$(this).css("background-color","#f18700");
		$("#third").css("border","none");
	}
	$img.css('display', 'none');
	$currentImg = $img.eq(i);
	$currentImg.css('display', 'block');
});
});


