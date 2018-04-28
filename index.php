<?php 
		session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchere</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
	<?php 
				include "menu.php";
	?>

  <!--  <div class="container">
        <div data-ride="carousel" class="carousel slide" id="carousel-1">
    <div role="listbox" class="carousel-inner">
        <div class="item active"><img src="assets/img/2.jpg" alt="Slide Image" /></div>
        <div class="item"><img src="assets/img/2.jpg" alt="Slide Image" /></div>
        <div class="item"><img src="assets/img/2.jpg" alt="Slide Image" /></div>
    </div>
    <div><a href="#carousel-1" role="button" data-slide="prev" class="left carousel-control"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
        <a href="#carousel-1" role="button" data-slide="next" class="right carousel-control"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
    </div>
    <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
    </ol>
</div>
    </div>-->
	
	<div class="row">
	
	            <div class="col-md-2">
			
			</div>
            <div class="col-md-6">
			
					       <div data-ride="carousel" class="carousel slide" id="carousel-1">
    <div role="listbox" class="carousel-inner">
        <div class="item active"><img src="assets/img/6.jpg" alt="Slide Image" /></div>
        <div class="item"><img src="assets/img/5.jpg" alt="Slide Image" /></div>
     
    </div>
    <div><a href="#carousel-1" role="button" data-slide="prev" class="left carousel-control"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
        <a href="#carousel-1" role="button" data-slide="next" class="right carousel-control"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
    </div>
    <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
       
    </ol>
</div>



			</div>
            <div class="col-md-4">
			<?php 
					if(empty($_SESSION['connecter']))
					{
						echo '
					
						
					
			
                 <div class="row inscription">
            <div class="col-md-12">
                <div class="login-card"><img src="assets/img/avatar_2x.png" class="profile-img-card">
                    <p class="profile-name-card"> </p>
                    <form class="form-signin" method="POST" action="connecter.php"><span class="reauth-email"> </span>
                        <input class="form-control" type="text" required placeholder="Votre pseudo" name="login" autofocus id="inputEmail" />
                        <input type="password" required placeholder="Mot de passe" class="form-control" name="passe" id="inputPassword" />
                        <div class="checkbox"></div>
                        <button class="btn btn-primary btn-block btn-lg btn-signin" name ="verifier" type="submit">Connecter</button>
                    </form>
                </div>
            </div>
        </div> ';
		}?>
		
		
            </div>
        </div>
		
		
		
		
		
		
		
		
		<div class="row">
	
	            <div class="col-md-2">
			
			</div>
            <div class="col-md-6">


		 <div class="container" id="contien">
        <div class="row">
            <div class="col-md-4"><img src="assets/img/collection.jpg" id="images"></div>
            <div class="col-md-6">
                <h1>Voiture de collection </h1>
                <p>Modèle d’automobile âgé  de 30 ans,
				conservé pour son intérêt historique, patrimonial ou esthétique et non d’abord comme moyen de transport. Du fait de son âge, elle  fait l’objet de spécificités de réglementation 
				ou d’assurance. Selon les pays, les termes d’automobile ancêtre, antique ou vétéran peuvent également être employés. </p> <font color="red">Déjà vendu à 7.500.000 FCFA</font>
              
            </div>
        </div>
    </div>

			</div>
            <div class="col-md-4">

		
		
            </div>
        </div>
		
		<div class="row">
	
	            <div class="col-md-2">
			
			</div>
            <div class="col-md-6">


		 <div class="container" id="contien">
        <div class="row">
            <div class="col-md-4"><img src="assets/img/amazones.jpg" id="images"></div>
            <div class="col-md-6">
                <h1>Tableau </h1>
                <p>Les Amazones du Dahomey ou Mino sont un ancien régiment militaire entièrement féminin Fon du Royaume du Dahomey (actuel Bénin) qui a existé jusqu'à la fin du xixe siècle. 
				Elles sont nommées ainsi par les Occidentaux et les historiens à cause de leurs similitudes avec les mythiques Amazones de l’ancienne Anatolie. </p> <font color="red">Déjà vendu à 1.000.000 FCFA</font>
              
            </div>
        </div>
    </div>

			</div>
            <div class="col-md-4">

		
		
            </div>
        </div>
		
		<div class="row">
	
	            <div class="col-md-2">
			
			</div>
            <div class="col-md-6">


		 <div class="container" id="contien">
        <div class="row">
            <div class="col-md-4"><img src="assets/img/human.jpg" id="images"></div>
            <div class="col-md-6">
                <h1>Robot Humanoïde </h1>
                <p>Robot spécialisé pour remplacer l'homme dans une tâche précise et répétitive. 
				  Louis est conçu pour remplacer l'homme dans des environnement dangereux ou inaccessibles. Ils prennent la forme humanoïdes pour être plus proches de nous. 
				La plupart sont ou seront commercialisés et feront bientôt partie du paysage.. </p> <font color="red">Déjà vendu à 100.000.000 FCFA</font>
              
            </div>
        </div>
    </div>

			</div>
            <div class="col-md-4">

		
		
            </div>
        </div>
		
		
				
		<div class="row">
	
	            <div class="col-md-12">


		
		
            </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
	<?php 
				include "footer.php";
	?>
	<?php 
				include "javascript_cloud.php";
	?>
</body>

</html>