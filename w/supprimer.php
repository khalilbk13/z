<?PHP
include "C:/wamp64/www/Nouveau dossier/reclamr.php";
include "C:/wamp64/www/Nouveau dossier/reclam.php";

$recl=new reclam($_GET['nom'],$_GET['exp'],$_GET['prenom'],$_GET['code'],$_GET['mail'],$_GET['soc'],$_GET['ad'],$_GET['tel'],$_GET['mode']
,$_GET['num'],$_GET['descr'],$_GET['Etat']);

$reclamr1=new reclamr();
$reclamr1->supprimerEmploye($_GET['nom']);
	


?>