<?php

define('versao', 'dsv'); // Alterar para 'prd' quando for colocar em produção.

// Abaixo define a URL de aceso ao seu projeto

define('URL', 'http://localhost/financeiro'); // Sempre alterar quando iniciar novo projeto.

global $config;

	$config = array();

	if (versao == 'dsv') {
		$config['versao'] = 'dsv';
		$config['dbname'] = '';
		$config['host']   = '';
		$config['user']   = '';
		$config['pass']   = '';
	} 

	if (versao == 'prd') {
		$config['versao'] = 'prd';
		$config['dbname'] = '';
		$config['host']   = '';
		$config['user']   = '';
		$config['pass']   = '';
	}

?>