<!DOCTYPE html>
 <html>
   <head>
      <title>Regex test</title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	 // LES EXPRESSIONS REGULIAIRES en abrégé: REGEX
	 // c'est une maniere de controler les données envoyées par l'utilisateur et d'effectuer des recheches ou des remplacements dans toutes sorte de chaine de caractère
	 // NB: les regex n'appartiennent ni au php ni au mysql mais constituent un langage apart en soit.
	 // il existe deux type d'expression reguliere mais dans ce cours, nous allons utiliser un seul type;
     
	 // assayons par exemple de rechercher un mot dans une phrase:
	 // NB: il y'a sensibilité a la cass.
	 
	 $mot = "Noubissie";
	 $phrase = "Salut et bien venu à vous, je m'appelle Noubissie Wilfried";
	    
			if(preg_match("/$mot/",$phrase)){ // preg_match est obligatoire, les  slache servent a delimiter le sujet de recherche
				echo " la valeur recherché a bien été trouvé";
			}else{
				echo "la valeur recherché n'est pas presente";
			}
	 
	?>
	 
  </body>
 </html>