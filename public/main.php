<?php
 	require_once('config.php');
	$db=new PDO(dbdriver.':host='.dbhost.';dbname='.database,dbuser,dbpassword);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	/*$con=mysqli_connect("localhost","root","")or die(mysql_error());
		mysql_select_db("projet",$db);
	*/
	require_once('../src/script/user.php');
	$user=new User($db);
	//$user->add_user('manu','manuela','email@gmail.com','logname','type_user','pword','phon');
	$logger=new User($db);
	session_start();
	require_once('traitement.php');
	if(isset($_SESSION["uname"]) && !empty($_SESSION["uname"]))
	{
		if (time()-$_SESSION["temp_de_connexion"]>3600) 
		{
			require_once('logout.php');
		}
	}
?>