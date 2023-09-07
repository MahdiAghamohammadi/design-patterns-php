<?php

use Src\Creational\Singleton\ConnectDb;

require_once "../../../vendor/autoload.php";

/**
 * Without Singleton
 */
//use Src\Creational\Singleton\ConnectDbWithoutSingleton;
/*$instance = new ConnectDbWithoutSingleton();
$conn = $instance->getConnection();
var_dump($conn);

$instance = new ConnectDbWithoutSingleton();
$conn = $instance->getConnection();
var_dump($conn);

$instance = new ConnectDbWithoutSingleton();
$conn = $instance->getConnection();
var_dump($conn);*/

/**
 * The result of the above code
 * object(PDO)#2 (0) { } object(PDO)#4 (0) { } object(PDO)#6 (0) { }
 * ResourceId is not the same
 */

/**
 * With Singleton
 */

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

/**
 * The result of the above code
 * object(PDO)#2 (0) { } object(PDO)#2 (0) { } object(PDO)#2 (0) { }
 * ResourceId is the same
 */