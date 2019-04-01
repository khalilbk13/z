<?PHP
include "C:/wamp64/www/Nouveau dossier/reclamr.php";
include "C:/wamp64/www/Nouveau dossier/reclam.php";
//include "C:/wamp64/www/atelierphp/config.php";

$recl=new reclam($_GET['nom'],$_GET['exp'],$_GET['prenom'],$_GET['code'],$_GET['mail'],$_GET['soc'],$_GET['ad'],$_GET['tel'],$_GET['mode']
,$_GET['num'],$_GET['descr'],$_GET['Etat']);

$reclamr1=new reclamr();
$reclamr1->ajoutereclamr($recl);
header('Location: afficherreclamr.php');
	



?>