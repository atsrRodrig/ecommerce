$(document).ready (function(){ 					//  code qui verifie si le DOM est bien chargé

	var cptImages = 0;
	var nbrPixels = 0;

	// selectur LI declaré en variable
	var li = $('li');
	var tailleLi = li.width();


	var tailleLi = $('li').width();

	//var nbreElements = $(".images li").length;
	var nbreElements = $(".images").children('li').length;

	// autre syntaxe avec le selecteur LI declaré en variable
	var nbreElements =li.length;


	// on positionne la pripriété CSS ici si on veut
	$(".slider").css({ "overflow":"hidden" });
	



	$("#suiv").click(function(){ 				// gestion des evenements CLICK
		$(".stop").css({ "display":'none' });
		$(".play").css({ "display":'none' });

		cptImages++;

		//console.log(nbreElements);
				
		if (cptImages < nbreElements)
		{
			nbrPixels -= tailleLi;
			

			// le stop permet d'arreter le slider si l'on a clické de nombreuses fois
			// le 2eme  "true" veut dire que la dernière image sera jouée

			$("ul").stop(true,true).animate({ "left":nbrPixels }, 1000);
			

			//$("ul").animate({ "left":nbrPixels }, 1000);
			//$(".images").animate({ "left":nbrPixels }, 1000);
			//$(".images").animate({ "left":'-=260' }, 1000);

			//console.log("A1",cptImages);
		}
		else
		{	
			nbrPixels = 0;

			$("ul").css({ "left":nbrPixels });
			//$(".images").css({ "left":nbrPixels });
			//$(".images").css({ "left":'0' }, 1000);
			
			//console.log("A2",cptImages);
			
			cptImages = 0;
		}			
	});



	$("#preced").click(function(){				// gestion des evenements CLICK
		
		cptImages--;

		if (cptImages < 0)
		{
			nbrPixels = 0;
			$(".images").css({ "left":nbrPixels });
			//$(".images").animate({ "left":'0' }, 1000); 

			//console.log("1",cptImages);

			cptImages = 0;
		}
		else
		{	
			nbrPixels += tailleLi;
			
			$(".images").animate({ "left":nbrPixels }, 1000);
			
			//$(".images").animate({  "left":'+=260' 	}, 1000);

			//console.log("2",cptImages);	
		}			
	});


	function playImages()
	{
		$("#suiv").trigger("click");
	};


	var timer = 0;

	$("#play").click(function(){		
		timer = setInterval(playImages,2500);
		$("#suiv").trigger("click");
		// $(".stop").css({ "background-position":'30%' });

		// on cache les boutons 
		$(".play").css({ "display":'none' });
		$(".suiv").css({ "display":'none' });
		$(".preced").css({ "display":'none' });
	});	


	// on stop le slider

	$("#stop").click(function(){		
		clearInterval(timer);
		
		// on reative les boutons  
		$(".play").css({ "display":'inline-block' });
		$(".suiv").css({ "display":'inline-block' });
		$(".preced").css({ "display":'inline-block' });

	});	

	("#options").click(function(){		

		// on reactive tous les b outons
		$(".play").css({ "display":'inline-block' });
		$(".stop").css({ "display":'inline-block' });
		$(".suiv").css({ "display":'inline-block' });
		$(".preced").css({ "display":'inline-block' });
	});	

});