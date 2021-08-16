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
		
		$visiteur1 -> set_prenom('Wilfried');
		
		$visiteur1 -> set_nom('Noubissie');
		echo 'Ton nom ?'.$visiteur1 ->nom;
		echo 'Ton prenom ? '.$visiteur1 ->prenom;
 // ici, le nom va bien s'afficher mais le prenom ne va pas s'afficher car on a a definie le nom comme public or le prenom a ete defini comme private et on ne peut pas acceder en dehors de la class	
// NB: si on affichais le prenom avant le nom, rien n'allait s'affichier 

// il est donc conseillé de definir  toutes  les propriétés d'une class en private ou protectide afin d'eviter des failles potentielles et de mieux pouvoir traiter les données recu
// et de mettre egalement les methodes en public.
        
		
	 ?>
  </body>
 </html>