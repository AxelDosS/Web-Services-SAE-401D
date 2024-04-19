<?php
// bootstrap.php

require_once __DIR__ . "/../vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

// Create a simple "default" Doctrine ORM configuration for Attributes
$paths = array(__DIR__ . "/src/Entity");
$isDevMode = true;

$config = ORMSetup::createAnnotationMetadataConfiguration($paths, $isDevMode);


// configuring the database connection
$connection = DriverManager::getConnection([
    'dbname' => 'dossant225_1',
    'user' => 'dossant225',
    'password' => 'ahG8Eishaethei0E',
    'host' => 'mysql.info.unicaen.fr',
    'driver' => 'pdo_mysql',
], $config);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);
