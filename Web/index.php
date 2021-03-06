<?php
	/*
		This file is part of the simple-website-project-php package.

		Copyright (c) Mathieu BESSOU

		MIT License

		For the license information, view the LICENSE file distributed with this source code.
	*/
	

	
	const AppPath = __DIR__ . '/../App';
	const ViewsPath = __DIR__ . '/../Views';
	const FramePath=__DIR__ . '/../Lib/Framework';
	const ToolsPath=__DIR__ . '/../Lib/Tools';
	const TemplatePath=__DIR__ . '/template';
	const WebToolsPath=__DIR__ . '/tools';

    // Configuration du site
	require_once __DIR__ . "/../config.php";

	// Gestion du mode de débogage
	if (CONFIG['DebugMode']) {
		ini_set('display_errors', 1);
		error_reporting(E_ALL);
	}
	else {
		ini_set('display_errors', 0);
		error_reporting(0);
	}

	// Fichier de classe permettant de ce connecter à la base de données
    require_once FramePath . "/DbConnect.php";


	// Gère si c'est le frontend ou le backend qui doit être affiché
	if (isset($_GET['app']) && $_GET['app'] == 'Backend') {
		require_once AppPath . '/Backend/Backend.php';
	}
	else {
		require_once AppPath . '/Frontend/Frontend.php';
	}
?>