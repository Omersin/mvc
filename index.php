<?php 
if (file_exists(__DIR__.'/vendor/autoload.php')) {
	require_once __DIR__.'/vendor/autoload.php';
}

Routing::route();