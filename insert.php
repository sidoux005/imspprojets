<?php 

include('conndb.php');
if (isset($_POST['upload'])){
$nom = $_POST['nom'];
$prenoms = $_POST['prenoms'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$date = date('Y-m-d h:i:s');


$fichiers = addslashes($_FILES['fichier']['tmp_name']);
//$tmpname = addslashes(file_get_contents($_FILES['fichier']['type']));
//$filetype = addslashes($_FILES['fichier']['type']);
//$array = array('jpg','jpeg');
$ext = pathinfo($fichiers,PATHINFO_EXTENSION);
$target = "images/".basename($_FILES['fichier']['name']);

$description = $_POST['description'];
$query = "INSERT INTO produit(nom,prenom,email,numero,fichier,description,date_enregistrement) VALUES('".$nom."','".$prenoms."','".$email."','".$numero."','".$target."','".$description."','".$date."')";
if($db->exec($query)){
	echo "succès";
}else{
	echo "error in query...";
}
if (move_uploaded_file($_FILES['fichier']['tmp_name'],$target)){
	echo "boooooooon";
}else{echo "nooooooooooon";

 //echo $php_errormsg;
 }
}

// affichage

/* 
$sql = "SELECT * FROM produit";
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)){
	echo "<div id = 'img_div'>";
		echo "<img src='".$row['fichier']."'>";
		echo "<p>" .$row[description]."<p>";
	echo"</div>";
} */ 

$result = $db->query('SELECT * FROM produit');

echo "<div style='margin-left : 45%;'>";

while ($row = $result->fetcharray()){
	
	$image = $row["fichier"];
	
	
	if(file_exists($image))
	{
			echo "<div id = 'img_div'>
					<img src='".$image."' alt='Image ' style='width : 200px; height : 200px; ' />
				
			</div>
			<p class='paragraphe'>".$row['description']."</p> ";
	}
}

echo "</div>";



?>