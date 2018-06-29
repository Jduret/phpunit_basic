<?php
/**
 * Fichier permettant d'initialiser le contexte PHP
 * exemple : $_SESSION = []; pour autoriser l'utilisation d'une session fictive pour les tests (car en ligne de commande, pas de SESSION)
 * 			 Mise en place de constante de chemin vers les fichiers du projet
 */
define('ROOT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('PROJECT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src');

