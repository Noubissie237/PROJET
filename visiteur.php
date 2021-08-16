<!DOCTYPE html>
 <html>
   <head>
      <title> CLASS ET OBJET </title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	    include_once('visiteur.class.php');// once permet d'inclure une fois
		$visiteur1 = new Visiteur;  // new permet d'intensier la class
		$visiteur2 = new Visiteur;
		
		$visiteur1 -> set_prenom('Wilfried');
		$visiteur2 -> set_prenom('Rolande');
		
		echo 'Bonjour '.$visiteur1 -> get_prenom().'<br/>';
		echo 'Bonjour '.$visiteur2 -> get_prenom().'<br/>';
/* deux notions a retenir: l'héritage et l'encapsulation .
     l'héritage veut dire qu'on peut créer des class filles a partir des class meres et ces class filles disposeront par defaut de toutes les methodes et propriétées de leurs classe meres
	 et nous pourrons bien evidement ajourter de nouvelle methodes ou propriétées au class filles. On dit egalement qu'une class fille va etandre les fonctionnalités d'une class mere.
 */

	 ?>
  </body>
 </html>