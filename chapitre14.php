<!DOCTYPE html>
 <html>
   <head>
      <title> INCLUDE vs REQUIRE </title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	    // include sert a inclure des bouts de pages html dans une autre pages
		// inlcude et require servent toutes les deux a inclure des fichier dans bout de code en php
		// la difference entre les deux est que si on inclus un fichier avec "include" et que par hazard le php n'arrive pas a trouver ce fichier, le reste du script s'executera quand meme or si on utilise "require", le php va renvoyer une erreur fatal et le reste du code ne va pas s'executera
		// quelque exemples:
		
		// avec include:
		
		 include 'fichier-inclus.php';// le fichier sera trouvé
		 echo 'ce fichier s\'affiche normalement';
		 
		 include 'fichier-inclu.php'; // le fichier ne sera pas trouvé car je n'est pas mis "s" et le nom n'est pas correte
		 echo 'ce fichier s\'affiche normalement';
		 
		 // avec require:
		 
		  require 'fichier-inclus.php'; // le fichier sera trouvé
		 echo 'ce fichier s\'affiche normalement';
		 
		  require 'fichier-inclu.php'; // le fichier ne sera pas trouvé
		 echo 'ce fichier s\'affiche normalement';
		
	 ?>
  </body>
 </html>