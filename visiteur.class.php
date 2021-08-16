<?php
 /* pas besoin de balises HTML ici etant donné que cette page ne contiendra que du PHP et a vocation a etre inseree dans d'autres pages;*/
     // NB: le nom d'une class commence toujours par une lettre majuscule
	 // NB: set veut dire definir et get veut dire recuperer.
	 class Visiteur{
		  private $prenom; // ici, prenom represente la propriété car on a mis un "private". et pour les  methodes, on use un "public"
		  public function set_prenom($nouveau_prenom){
			  $this->prenom = $nouveau_prenom;
		  }
		  public function get_prenom(){
			  return $this->prenom;
		  }
	  }
	  /* Explication: les mots clés "public et private" correspondent a des droits d'accès; c'est a dire definir si oui ou non il est possible d'accéder a nos propriétés et a nos methodes en dehors de la class
	    on dispose a cet effet 03 niveaux d'accès possible, qui sont: public, private et protectide.
		on a donc crée une propriété prenom et deux methode: set_prenom et get_prenom. ces methodes sont appelées des seteurs et des geteurs.
		RQ: a chaque fois qu'on va definir une methode charger de mettre a jour une propriété, ce sera un seteur et on fera commencer son nom par set par convention.
		    de meme, a chaque fois qu'on créera une fonction pour lire une propriété, ce sera un geteur et on fera commencer son nom par get par convension
			
		NB1: le mot clé "this" ici nous sert a faire reference a l'objet sur lequel on travaille actuellement par exemple: si on crée un nouvel objet visiteur1, et qu'on lui attribu le
		prenom "pierre",  this va nous servir a indiquer que l'on veut recuperer le pseudo de l'objet visiteur1
		NB2: la fleche derrière le this ( -> ) nous sert a attribuer des choses a l'objet sur lequel on fait reference */
	  ?>