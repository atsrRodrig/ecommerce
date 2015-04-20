$(document).ready (function(){ 					//  code qui verifie si le DOM est bien chargé


	$("#divChat").find(".btn").click(function(event) // on cherche l'element qui a la class .btn (il n'y a 1 seul element)
	{											 // on a crée la l'Id de la DIV divChat pour l'identifier
													 // le event permet de lui faire savoir que c'est nous qui declenchons
													 // l'evenement  	
		event.preventDefault();
		

		console.log("click OK");
		
		var form=$(this).closest("form");		// this continet le bouton doc il faut remeonter jusqu'a la balise form trouvée(le 1er trouvé pui s'arrete)

		console.log(form.attr("action"));		// on recupere la valeur de l'attribut 'action' declanché dans le formulaire



		$.ajax({								// on fait appel  a du code ajax par cette fonction <$.ajax>
		
			url:form.attr("action"),		
			type :"POST",
		
			data:form.serialize() + "&csrf_test_name=" + token_csrf, // FAIRE EVOLUER LE TOKEN SINON ON AURAIT TOUJOURS LE MEME
		
			dataType:"json"							// le token_csrf est celui du formulaire qui ne bouge pas meme si page rafraichie	
		
		}).done(function(resultat){					// ILE FAUT LE FIARE EVOLUER A CAUSE DE LA SECURITE eviter les failles
		
			token_csrf = resultat.csrf;  		// on attribue le nouveau token qui vient ecraser l'ancien
			//console.log(resultat)
	
		});

	});




	// pour rafraichir la page avec les nouvelles insertions	il d'autres technos a voir avec noteJS(nodeJS)

	setInterval(function(){
		$.ajax({
			type:"GET",
			dataType:"json"

		}).done(function(resultat){
			
			console.log(resultat.messages);
			$("#chatMessages").empty().append(resultat.messages);

		})}, 3000);

});