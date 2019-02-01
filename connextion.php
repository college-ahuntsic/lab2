<?php
require_once("../bd/connexion.inc.php");
$mail=$_POST['courriel'];
$motpass=$_POST['motpass'];
$requete="SELECT motpass FROM connexion WHERE courriel='$mail'" ;
$resultat=@mysqli_query($connexion,$requete);
if($resultat){
$nbLignes=@mysqli_num_rows($resultat);
echo $nbLignes;
 if($nbLignes>0){
	$ligne=@mysqli_fetch_object($resultat);
     $motpassva=$ligne->motpass;
     if(strcmp("$motpassva","$motpass")==0)	{
		 //appel fonction afficher panier
		 //afficher les film et la case categorie
		 //afficher @mail de utulisateur
		 echo 'hhhhh';
	 }
	 else{
		 echo"mot de passe erreure";

	 }
	 @mysqli_close();
 }
}else{
	echo 'erreur';
}
?>