<!DOCTYPE html>
 <html>
   <head>
      <title> LA GESTION D'ERREURS</title>
	  <meta charset = "utf-8" />
   </head>
  <body>
     <?php
	 // la gestion d'erreurs
          
		 /* if(!file_exists('inconnu.txt')){
			  die('Fichier non trouvé');
		  }
		  else{
			  $fichier = fopen("inconnu.txt", "r+"); 
		  } */
	 // la gestion des exception:
	 
	    function division($a,$b){
			if ($b == 0){
				throw new Exception('division par zero impossible');
			}
			return $a/$b;
		}
		try{
			echo division(2,4);
			echo division(2,0);
		}
		catch(Exception $e){
			echo 'Message d\'erreur : '.$e -> getMessage();
		}
		
		
	 ?>
  </body>
 </html>