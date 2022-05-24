<?php
	use Doctrine\ORM\Tools\Setup;
	use Doctrine\ORM\EntityManager;

	require_once "vendor/autoload.php";

	// Configuration par defaut Doctrine ORM avec avec Annotations
	$isDevMode = true;
	$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
	// En yaml ou en  XML
	//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
	//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

	// Parametres de la database
	$conn = array(
		'driver' => 'pdo_mysql',
		'user' => 'root',
		'password' => '',
		'dbname' =>'testdoctrine',
	);

	// Obtenir l'Entity Manager
	$entityManager = EntityManager::create($conn, $config);
?>