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
	
	
    <div class="container">
        <div class="row inscription">
            <div class="col-md-12">
                <form class="bootstrap-form-with-validation" action="MettreEnLigne.php" method="post" enctype="multipart/form-data">
                    <h2 class="text-center">Mise en ligne</h2>
                    <div class="form-group">
                        <label class="control-label" for="text-input">Nom du Produit</label>
                        <input class="form-control" type="text" name="nom" required id="text-input">
						<input type="hidden" name="vendeur" value = "<?php echo $_SESSION['donnees_user']['id']?>"/>
                    </div>
					 <div class="form-group">
                        <label class="control-label" for="textarea-input">Description </label>
                        <textarea class="form-control" required name="description" id="textarea-input"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="file-input">File Input</label>
                        <input type="file" required name="fichier" id="file-input">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit" name="upload" id="effet">Mettre en ligne</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	
			<?php 

include('conndb.php');
if (isset($_POST['upload'])){

$date = date('Y-m-d h:i:s');
$nom = $_POST['nom'];

$fichiers = addslashes($_FILES['fichier']['tmp_name']);
//$tmpname = addslashes(file_get_contents($_FILES['fichier']['type']));
//$filetype = addslashes($_FILES['fichier']['type']);
//$array = array('jpg','jpeg');
$ext = pathinfo($fichiers,PATHINFO_EXTENSION);
$target = "images/".basename($_FILES['fichier']['name']);

$description = $_POST['description'];
$query = "INSERT INTO produit(desi_pro,fichier,description,date_enregistrement,date_debut_valide, vendeur, valide) VALUES('".$nom."','".$target."','".$description."','".$date."','".$date."',".$_POST['vendeur'].",'oui')";
if($db->exec($query)){
	echo ' <div class="alert alert-success">
        <strong><font Color="blue"><h3>Votre Image est sauvegardée avec succès. Nous vous ferons signe pour un eventuel achat</h3></font></strong> <marquee><font Color="red"><h2>Si dans 10 minutes aucune proposition de prix n’est soumise, votre image va être supprimée.</h2></font><marquee>
      </div>';
}else{
	echo "error in query...";
}
if (move_uploaded_file($_FILES['fichier']['tmp_name'],$target)){
	echo "IMSP-2018";
}else{echo "nooooooooooon";

 //echo $php_errormsg;
 }
}?>
	
 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<?php 
				include "javascript_cloud.php";
	?>
</body>

</html>