<?php
    //Inclure le fichier de bootstrap
	require_once "bootstrap.php";
	
	return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

?>