<?php 
$dbname = "glitho.db";
$db = new SQLite3($dbname);

if(!$db){
	  die("database not create...");
}

$query = "CREATE TABLE IF NOT EXISTS produit(

			user_id integer primary key AUTOINCREMENT,
			nom varchar(100),
			prenom varchar(100),
			email varchar(100),
			numero integer (100),
			fichier varchar(100),
			description varchar(100),
			date_enregistrement datetime not null default '2018-04-07 08:15:00' )";
			
			$db -> exec($query);
			
		
		

/* $result = $db->query('SELECT * FROM utiisateur');
while ($row = $result->fetcharray()){
		var_dump($row);	
			
	} */

?>