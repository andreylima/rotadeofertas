<?php
/**
 * @package Desconto
 */
/*
Plugin Name: Desconto Manager
Plugin URI: http://rotadeofertas.com.br
Description: Plugin para gerenciamento do tema Desconto de 2014
Version: 1.0
Author: Emanuel Inácio
Author URI: http://rotadeofertas.com.br
License: GPLv2 or later
*/

Class Descontos_Manager{


	public function __construct( )
	{
		$this->load_modules();
	}



	public function load_modules()
	{
		require_once( 'model/desconto-manager.model.php' );
		require_once( 'controller/desconto-manager.controller.php' );
		//require_once( 'controller/desconto-manager.controller.php' );

	}

}

$descontos = new Descontos_Manager();