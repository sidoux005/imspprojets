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

    <div class="container">
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
                    <a href="index.php" class="forgot-password"> Revenir à l'Accueil</a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<?php 
				include "javascript_cloud.php";
	?>
</body>
<?php 


if (isset($_POST['verifier'])){
$login = $_POST['login'];
$passe = $_POST['passe'];


if(isset ($login) && isset($passe)){

$query = "SELECT * FROM utiisateur  where(pseudo = '".$login."' AND passe = '".$passe."')";
$req=$db->query($query);

	$info = $req ->fetcharray();
	
	if (!empty($info)){ echo"succès";
			$_SESSION["donnees_user"] = $info;
			$_SESSION["connecter"] = 1;
			header('location: index.php');
	}
else{
	echo "Login ou mot de passe incorrecte";
} 
}else{echo "Veuillez remplir tous les champs!!!";}

}

// affichage





?>


</html>