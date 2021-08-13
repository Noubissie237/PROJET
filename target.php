<!DOCTYPE html>
 <hmtl>
    <head>
	   <title> LES FORMULAIRE </title>
	   <meta charset = "utf-8" />
	</head>
   <body>
  <p>

	  <?php
	   /*   echo strip_tags(trim(stripslashes( ($_POST['nom'].' '.$_POST['prenom'].', alias'.$_POST['pseudo'].' comment allez vous?')))); // NB: ici, si l'utilisateur entre une balise html, cette balise effectuera belle et bien son action comme prevu.
		                                                             // pour l'empecher d'effectuer cette action alors, il faudra y mettre la fonction "htmlspecialchars" qui va empecher l'execution d'autres languages de programmation comme le html, le javascript...
														            // enfin, pour ne meme pas lire la balise qui sera saisi(si elle est saisie), nous utiliserons la fonction "strip_tags"
																	// on a aussi les fonctions "trim" qui permet de supprimer les espaces et retour a la ligne non desirés entrés par l'utilisateur et "stripslashes" qui permet de retirer des antislache (\)
*/
        // autre methode:
         function securisation($données){
			 $données = trim($données); // securisation des espaces
			 $données = stripslashes($données); // securisation des slashs
			 $données = strip_tags($données); // securisation des scripts et caracteres html
			   return $données;
		 }
		 $nom = securisation($_POST['nom']);
		 $prenom = securisation($_POST['prenom']);
		 $pseudo = securisation($_POST['pseudo']);
		 
		 echo 'Bonjour M.r '.$nom.' '.$prenom.' et bienvenue à vous !';

          		 
	  ?>
  </p>
  <p>
        Avez vous fais une erreur sur votre nom?, clique <a href ="formulaires.php">ici</a> pour ressaisir
  </p>
   </body>
 </html>