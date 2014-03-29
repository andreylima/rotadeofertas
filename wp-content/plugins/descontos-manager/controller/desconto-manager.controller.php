<?php

Class Descontos_Manager_Controller{
	
	public function __construct( )
	{
		add_action( 'init', array( &$this, 'register_custom_post_type' ) );
		add_action( 'init', array( &$this, 'create_desconto_taxonomies', 0 ) );
		add_action( 'add_meta_boxes', array( &$this, 'add_meta_box_for_desconto' ) );
	}



	public function register_custom_post_type()
	{

		$labels = array(
			'name'               => _x( 'Descontos', Descontos_Manager_Model::POST_TYPE_NAME ),
			'singular_name'      => _x( 'Desconto', 'post type singular name' ),
			'menu_name'          => _x( 'Descontos', 'admin menu' ),
			'name_admin_bar'     => _x( 'Desconto', 'add new on admin bar' ),
			'add_new'            => _x( 'Adicionar novo', 'Desconto' ),
			'add_new_item'       => __( 'Adicionar novo Desconto' ),
			'new_item'           => __( 'Novo Desconto' ),
			'edit_item'          => __( 'Editar Desconto' ),
			'view_item'          => __( 'Ver Desconto' ),
			'all_items'          => __( 'Todos Descontos' ),
			'search_items'       => __( 'Procurar Descontos' ),
			'parent_item_colon'  => __( 'Parent Descontos:' ),
			'not_found'          => __( 'Nenhum Desconto encontrado.' ),
			'not_found_in_trash' => __( 'Nenhum Desconto encontrado no Lixo.' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'desconto' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		);

		register_post_type( Descontos_Manager_Model::POST_TYPE_NAME , $args );

	}

	public function create_desconto_taxonomies()
	{

		$labels = array(
			'name'              => _x( 'Empresas', 'Empresas' ),
			'singular_name'     => _x( 'Empresa', 'Empresa' ),
			'search_items'      => __( 'Search Empresas' ),
			'all_items'         => __( 'Todas Empresas' ),
			'parent_item'       => __( 'Parent Empresa' ),
			'parent_item_colon' => __( 'Parent Empresa:' ),
			'edit_item'         => __( 'Editar Empresa' ),
			'update_item'       => __( 'Atualizar Empresa' ),
			'add_new_item'      => __( 'Adicionar Nova Empresa' ),
			'new_item_name'     => __( 'Nova Empresa' ),
			'menu_name'         => __( 'Empresa' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'empresa' ),
		);

		register_taxonomy( Descontos_Manager_Model::TAX_POST_TYPE_COMPANIES, Descontos_Manager_Model::POST_TYPE_NAME, $args );

	}

	
	public function add_meta_box_for_desconto()
	{

	}

}


$controller = new Descontos_Manager_Controller();