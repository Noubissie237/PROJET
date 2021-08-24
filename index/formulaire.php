<!DOCTYPE html>
 <html>
   <head>
      <title>  </title>
	  <link rel = "stylesheet" href="formulaire.css"/>
	  <meta charset = "utf-8" />
   </head>
  <body>
		<form action = "reception.php" method = "POST">
			<h1 id = "titre">INSCRIPTION EN LIGNE</h1>
		<fieldset id = "centre">
			<fieldset >
				<legend class = "small_titre">Informations de connexions</legend>
					<p><label>Pseudo:</label><br/>
						<input type = "text" name = "pseudo" size= "50" placeholder = "Entrez votre pseudo"/></p>
					<p><label>Nom:</label><br/>
						<input type = "text" name = "nom" size = "50" placeholder = "Entrez votre nom"/></p>
					<p><label>Prénom:</label><br/>
						<input type = "text" name = "prenom" size = "50" placeholder = "Entrez votre prénom"/></p>
					<p><label>Email:</label><br/>
						<input type = "email" name = "email" size = "50" placeholder = "Entrez adresse email"/></p>
					<p><label>Mot de pass</label>
						<input type = "password" name= "pass1" size = "50" /></p>
					<p><label>Retaper votre mot de pass</label>
						<input type = "password" name = "pass2" size = "50" placeholder = "Retapez votre mot de pass" /></p>
					<p><br/><input type = "submit" name = "valider" value = "Inscription" id = "valider" />
					<input type = "reset" name = "annuler" value = "Annuler" id = "annuler" /></p>
						
			</fieldset>
		</fieldset>

			
	    </form>
  </body>
 </html>