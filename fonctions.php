<!DOCTYPE html>
 <html>
          <head>
		       <title>MON SITE</title>
			   <meta charset = "utf-8" />
		  </head>
	<body>
        <?php
	// FONCTIONS PERMETTANT D'AJOUTER OU DE SUPPRIMER DES ELEMENTS D'UN TABLEAU
	
	// la fonction array_fill permet de remplir un tableau et retourne un autre tableauarra
	          echo '<pre>';
			  print_r(array_fill(1,5,'vert')); // tableau commencent a l'indice 1 et retournant 5 fois la valeur 'vert'
			  echo '<pre>';
			  
	// la fonction array_fill_keys permet de remplir un tableau avec des valeur en specifiant des clefs et des elements voulus
              $clefs = array('a','b','c','d',);
              print_r ($remplir = array_fill_keys($clefs, 'bleu'));
	// la fonction array_push permet d'inserer des elements en fin de tableau et la fonction array _pop persmet de supprimer le dernier element d'un tableau
			  $couleur =array('bleu','vert');
			  array_push($couleur, 'rouge', 'jaune');
			  print_r($couleur);
			  
			  print_r(array_pop($couleur)); // montre le dernier element qui a ete supprimé
			   print_r($couleur);
			   
	// la fonction array_unshift permet d'ajouter des element au debut d'un tableau et array shift permet de supprimer le premier element d'un tableau
	        array_unshift($couleur,'gris','belge','gris');
			print_r($couleur);
			 
			echo array_shift($couleur); // affiche la premiere couleur supprimé
			print_r($couleur);
			
	// la fonction array_splice permet des supprimer certains elements d'un tableau a partir d'une certaine position et de les remplacer par certain elements. NB: le premier element a pour indice 0.
	       $couleur1 = array(
		                        'a' => 'bleu',
								'b' => 'vert',
								'c' => 'jaune'
		   );
		   $couleur2 = array(
		                        'a' => 'rouge',
								'b' => 'violet'
		   );
		   array_splice($couleur1,1); // supprime tous les elements du tableau a partir de l'indice 1, c'est a dire du deuxieme jusqu'a l'infini
		   print_r($couleur1);
		   
 		?>

	</body>
 </html>