<?php
	 class Visiteur{
		  private $prenom; // ici, prenom represente la propriété car on a mis un "private". et pour les  methodes, on use un "public"
		  public $nom;
		  
		  public function set_prenom($nouveau_prenom){
			  $this->prenom = $nouveau_prenom;
		  }
		   public function set_nom($nouveau_nom){
			  $this->nom = $nouveau_nom;
		  }
		  public function get_prenom(){
			  return $this->prenom;
		  }
	  }

	  ?>