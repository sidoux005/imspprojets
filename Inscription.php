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
                <form class="bootstrap-form-with-validation" method="POST" action="Inscription.php">
                    <h2 class="text-center">Inscription </h2>
                    <div class="form-group">
                        <label class="control-label" for="text-input">Nom: </label>
                        <input class="form-control" type="text" name="nom" id="text-input" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="text-input">Prénoms: </label>
                        <input class="form-control" type="text" name="prenom" id="text-input" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="text-input">Pseudo: </label>
                        <input class="form-control" type="text" name="pseudo" id="text-input" required="" >
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="text-input">Téléphone: </label>
                        <input class="form-control" type="text" name="telephone" id="text-input" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password-input">Mot de passe</label>
                        <input class="form-control" type="password" name="password" id="password-input" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email-input">Email </label>
                        <input class="form-control" type="email" name="email" id="email-input" required="">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit" name="envoyer" id="effet">S'nscrire </button>
                    </div>
                </form>
            </div>
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

<?php 


if (isset($_POST['envoyer'])){
$nom = $_POST['nom'];
$prenoms = $_POST['prenom'];
$pseudo = $_POST['pseudo'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
$email = $_POST['email'];

if(isset ($nom) && isset($prenoms) && isset($pseudo) && isset($telephone) && isset($password) && isset($email)){

$query = "INSERT INTO utiisateur(nom,prenoms,pseudo,telephone,passe,email) VALUES('".$nom."','".$prenoms."','".$pseudo."','".$telephone."','".$password."','".$email."')";
if($db->exec($query)){
	echo "succès";
}else{
	echo "error in query...";
}} else{echo "Veuillez remplir tous les champs!!!";}

}

// affichage





?>

</html>