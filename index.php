

<?php
	$my_string='Bonjour Lulu!!'; //Déclaration de la chaîne de caractère
	$my_int=10;					 //Déclaration de mon entier
	$my_state=TRUE;         	 //Déclaration de mon état	
	$my_users=array(			 //Déclaration de mon tableau
		0 => 'JP',
		1 => 'DD',
		2 => 'MC',
		3 => 'JFX',
		);
	//print $my_string; 			//Affichage de my_string
	//print $my_int; 				//Affichage de my_int
	//echo $my_users[0]; 			//Affichage de la première valeur du tableau


	foreach ($my_users as $key => $value) {
		print $key.'=>'.$value.'<br/>';

	}



?>




