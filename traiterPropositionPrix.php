<?php 

		session_start();
		include('conndb.php');


		if(isset($_POST['action']) && $_POST['action'] == "proposer_prix")
		{
			$msg = "";
			$code_erreur = 0;
			
			if(isset($_POST['user']) && isset($_POST['prix']) && isset($_POST['id_pro']))
			{
				$prix = $_POST['prix'];
				$user = $_POST['user'];
				$id_pro = $_POST['id_pro'];
				
				
				$query = $db->exec("insert into propositions (date_proposition,acheteur,produit_concerne,prix_propose)  values ('".date("Y-m-d h:i:s")."',".$user.",".$id_pro.",".$prix.") ");
				
				
				if($query )
				{
					
					$msg = "Bien proposé";
					$code_erreur=0;
				}
				
				else 
				{
					$msg = "Une erreur s'est produite";
					$code_erreur=1;
				}
			}
			else
			{
					$msg = "Veuillez fournir tous les renseignements";
				$code_erreur = 1;
			}
			
			echo json_encode (array("msg"=>$msg,"code_erreur"=>$code_erreur));
		}
?>