<?php
session_start();
$_SESSION['lang'] = (isset($_SESSION['lang'])) ? $_SESSION['lang'] : null;
$_SESSION['lang'] = (isset($_GET['lang'])) ? $_GET['lang'] : $_SESSION['lang'];
switch ($_SESSION['lang']) {
 	case 'es':
 		require_once 'es.php';
 		$_SESSION['lang'] = 'es';
 		break;
 	case 'en':
 		require_once 'en.php';
 		$_SESSION['lang'] = 'en';
 		break;
 	default:
 		require_once 'es.php';
 		$_SESSION['lang'] = 'es';
 		break;
 }
?>