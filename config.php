<?php

define('versao', 'dsv'); // Alterar para 'prd' quando for colocar em produção.

define('URL', 'http://localhost/financeiro'); // Sempre alterar quando iniciar novo projeto.

global $config;

	$config = array();

	if (versao == 'dsv') {
		$config['versao'] = 'dsv';
		$config['dbname'] = 'financeiro';
		$config['host']   = 'localhost';
		$config['user']   = 'phpmyadmin';
		$config['pass']   = 'eduardo00';
	} 

	if (versao == 'prd') {
		$config['versao'] = 'prd';
		$config['dbname'] = '';
		$config['host']   = '';
		$config['user']   = '';
		$config['pass']   = '';
	}

?>