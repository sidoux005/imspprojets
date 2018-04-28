<?php 
		session_start();
include('conndb.php');


?>
<!DOCTYPE html>
<html>

<head>
<!--Actualiser la page tous les 5 secondes-->
<meta http-equiv="Refresh" content="20; url=produit.php">
<!--Actualiser la page tous les 5 secondes-->
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
	<?php 
$result = $db->query('SELECT * FROM produit');
$result1 = $db->query('SELECT desi_pro,vendeur,telephone,email from produit,utiisateur WHERE id=vendeur');
$result2 = $db->query('SELECT acheteur,prix_propose,telephone,email from propositions,utiisateur WHERE id=acheteur');
$result3 = $db->query('SELECT * FROM propositions');

echo "<div style='margin-left : 45%;'>";



echo "</div>";

?>

											
												<!--/////////////////////////////////////////////////////////////////affichage de la jointure Vendeur ///////////////////////////////////////////-->
															 <div class="container">
																<?php
																			while ($row = $result1->fetcharray()){
																				
																				
																		$nom_pro = $row['desi_pro'];
																		$vendeur = $row["vendeur"];
																		$telephone = $row["telephone"];
																		$email = $row["email"];
																		
																		//var_dump ($descript);
																		
															
																		
																		  echo ' <div class="row">
																				<div class="col-md-3"><h4>nom produit: '.$nom_pro.' </h4></div>
																				<div class="col-md-3"><h4>vendeur: '.$vendeur.' </h4></div>
																				<div class="col-md-3"><h4>telephone vendeur:'.$telephone.' </h4></div>
																				<div class="col-md-3"><h4>mail vendeur:'.$email.' </h4></div>
																				
																			</div>';
																		
																	}
															   
																?>
															</div>
												<!--/////////////////////////////////////////////////////////////////affichage de la jointure Vendeur///////////////////////////////////////////-->
												
												
												
												<!--/////////////////////////////////////////////////////////////////affichage de la jointure acheteur ///////////////////////////////////////////-->
															 <div class="container">
																<?php
																			while ($row = $result2->fetcharray()){
																				
																				
																	    
																		$acheteur = $row["acheteur"];
																		$telephone_acheteur = $row["telephone"];
																		$email_acheteur = $row["email"];
																		 $prix_courant = $row["prix_propose"];
																		//var_dump ($descript);
																		
															
																		
																		  echo ' <div class="row">
																			
																				<div class="col-md-3"><h4>acheteur: '.$acheteur.' </h4></div>
																				<div class="col-md-3"><h4>telephone acheteur:'.$telephone_acheteur.' </h4></div>
																				<div class="col-md-3"><h4>mail acheteur:'.$email_acheteur.' </h4></div>
																				<div class="col-md-3"><h4>prix acheteur:'.$prix_courant.' </h4></div>
																				
																			</div>';
																		
																	}
															   
																?>
															</div>
												<!--/////////////////////////////////////////////////////////////////affichage de la jointure acheteur///////////////////////////////////////////-->
												
												
											


    <div class="container">
		<?php
		while ($row = $result->fetcharray()){
			
			
	
	$image = $row["fichier"];
	$descript = $row["description"];
	$nom_pro = $row['desi_pro'];
	//var_dump ($descript);
	
	
		///////////////////////////////////////////////////////////////////Debut action entre les dates/////////////////////////////////////////////
										//date de mise en ligne
										$la_Dates=$row['date_debut_valide'];
										//le numero du vendeur
										$vend=$row['vendeur'];
	
									//Déclaration de la date de today
											$startTime = strtotime(date("Y-m-d H:i:s"));
											//date de mise en ligne  +10minutes
											//$cenvertedTime1 = strtotime(date('Y-m-d H:i:s',strtotime('+10 minutes',strtotime($la_Dates))));
											//$cenvertedTime1 = date('Y-m-d H:i:s',strtotime('+10 minutes',strtotime($la_Dates)));
											$cenvertedTime = strtotime($la_Dates)+600;//+600
											// date actuelle -date acien de 10 minute
											$interval = $startTime - $cenvertedTime;
											//afficher la différence en entier
											
											$ok=floor($interval/(60));//
											//echo $startTime;
											//echo 'ancienne'.$cenvertedTime;
											//echo 'actuel'.$interval;
											echo '     la conversion'.$ok;
											// reconversion en date
											//$date_voir =  date('Y-m-d H:i:s',strtotime('+10 minutes',strtotime($interval/(60))));
											
											//avant j'avais mis 720
											if($ok >= 720){ 
													$query = $db->exec("DELETE FROM produit WHERE date_enregistrement='".$la_Dates."'");
													
													while ($row = $result3->fetcharray()){
														$lAcheteur=$row['acheteur'];
														$query = $db->exec("DELETE FROM propositions WHERE acheteur='".$lAcheteur."'");
													}
											
											}
	
	///////////////////////////////////////////////////////////////////Fin action entre les dates/////////////////////////////////////////////
	
	
	if(file_exists($image))
	{
      echo ' <div class="row">
            <div class="col-md-4"><img height="200px" src="'.$image.'" id="images"></div>
            <div class="col-md-8">
                <h1>'.$nom_pro.' </h1>
                <p>'.$descript.' </p>
				<form action="" method ="POST" class="form_prix">
					<button class="btn btn-default btn-proposer-prix"
					type="submit">Proposer un prix</button>
					<input type="number" name="prix" class="champ_prix" placeholder="  FCFA"/>
					<input type="hidden" name="user" value="'.$_SESSION['donnees_user']['id'].'"/>
					<input type="hidden" name="id_pro" value="'.$row['id_produit'].'"/>
					
					<div class="message " style="display:none; margin-top:20px;">
						
					</div>
				</form>
            </div>
        </div>';
	}
}
       
		?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
	
	<?php 
				include "javascript_cloud.php";
	?>
</body>


</html>