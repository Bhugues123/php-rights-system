<?php
	function permUnit($domaine, $name){

		if($_SESSION['perm-'.$domaine.'-'.$name] == 'true'){return true;}else{return false;}

	}

	function permReq($domaine, $read, $write, $delete, $admin){

		session_start();
		include('bdd.php');

		if($domaine == 'admin'){

			if($_SESSION['adminAll'] == 'true'){

				return true;

			}else{

				$m = $bdd->query('SELECT * FROM Offres');
				while($mr = $m->fetch()){

				    if($_SESSION['perm-'.$mr['Ref'].'-admin'] == 'true'){

					return true;

				    }

				}

			}

		}else{

			$m = $bdd->query('SELECT * FROM Offres');
		    	while($mr = $m->fetch()){

				if($mr['Ref'] == $domaine){

					if($read == 'true'){if(!permUnit($domaine, 'read')){return false;}}
					if($write == 'true'){if(!permUnit($domaine, 'write')){return false;}}
					if($delete == 'true'){if(!permUnit($domaine, 'delete')){return false;}}
					if($admin == 'true'){if(!permUnit($domaine, 'admin')){return false;}}

					return true;

				}

		    	}

		}

	}
?>
