    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>IMSP-Cloud Computing 2018 </strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                   <li class="active" role="presentation"><a href="index.php"><strong>Accueil </strong></a></li>
                    
					<?php 
					if(empty($_SESSION['connecter']))
					{
						echo '<li role="presentation"><a href="Inscription.php"><strong>Inscription </strong></a></li>';
						echo '<li role="presentation"><a href="connecter.php"><strong>connectez-vous</strong></a></li>';
						
					}
					else
					{
						echo '<li role="presentation"><a href="deconnecter.php"><strong>Déconnectez-vous</strong></a></li>';
						echo '<li role="presentation"><a href="MettreEnLigne.php"><strong>Mettre en ligne</strong></a></li>';
						echo '<li role="presentation"><a href="produit.php"><strong>Liste des Produits</strong></a></li>';
					}
					
					?>
                    
                    
                </ul>
            </div>
        </div>
    </nav>