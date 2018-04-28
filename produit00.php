<?php 
		session_start();
include('conndb.php');


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
	<?php 
$result = $db->query('SELECT * FROM produit');

echo "<div style='margin-left : 45%;'>";



echo "</div>";

?>
    <div class="container">
		<?php
		while ($row = $result->fetcharray()){
			
			
	
	$image = $row["fichier"];
	$descript = $row["description"];
	$nom_pro = $row['desi_pro'];
	//var_dump ($descript);
	
	
	if(file_exists($image))
	{
      echo ' <div class="row">
            <div class="col-md-4"><img src="'.$image.'" id="images"></div>
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
	
	<button onclick="start()">Lancer le décompte</button>
<div id="bip" class="display"></div>

<script>
var counter = 20;
var intervalId = null;
function action()
{
  clearInterval(intervalId);
  document.getElementById("bip").innerHTML = "TERMINE!";	
}
function bip()
{
  document.getElementById("bip").innerHTML = counter + " secondes restantes";
  counter--;
}
function start()
{
  intervalId = setInterval(bip, 1000);
  setTimeout(action, counter * 1000);
}	
</script>
	
	
	
</body>


</html>