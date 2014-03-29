<?php

Class Descontos_Manager_Controller{
	
	public function __construct( )
	{
		add_action( 'init', array( &$this, 'register_custom_post_type' ) );
		add_action( 'init', array( &$this, 'register_desconto_taxonomies' ) );
		add_action( 'add_meta_boxes', array( &$this, 'add_meta_box_for_discount' ) );
		add_action( 'save_post', array( &$this, 'save_product_url' ) );
		add_action( 'save_post', array( &$this, 'save_product_url_click' ) );
		add_action( 'save_post', array( &$this, 'dig_for_information' ) );

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
			'taxonomies'		 => array( Descontos_Manager_Model::TAX_POST_TYPE_COMPANIES, 'post_tag' ),
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		);

		register_post_type( Descontos_Manager_Model::POST_TYPE_NAME , $args );

	}

	public function register_desconto_taxonomies()
	{

		register_taxonomy( Descontos_Manager_Model::TAX_POST_TYPE_COMPANIES, Descontos_Manager_Model::POST_TYPE_NAME, array(
				'labels' => array(
					'name'              => _x( 'Empresas' ),
					'singular_name'     => _x( 'Empresa' ),
					'search_items'      => __( 'Search Empresas' ),
					'all_items'         => __( 'Todas Empresas' ),
					'parent_item'       => __( 'Parent Empresa' ),
					'parent_item_colon' => __( 'Parent Empresa:' ),
					'edit_item'         => __( 'Editar Empresa' ),
					'update_item'       => __( 'Atualizar Empresa' ),
					'add_new_item'      => __( 'Adicionar Nova Empresa' ),
					'new_item_name'     => __( 'Nova Empresa' ),
					'menu_name'         => __( 'Empresa' ),
				),
				'hierarchical'      => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'empresa', 'with_front' => false ),
			) 
		);

	}

	
	public function add_meta_box_for_discount()
	{

		add_meta_box( Descontos_Manager_Model::POST_META_URL_PRODUCT, 'Url do Produto', Descontos_Manager_View::render_metabox_product_url( get_the_ID() ), Descontos_Manager_Model::POST_TYPE_NAME, 'normal', 'high' );
		add_meta_box( Descontos_Manager_Model::POST_META_URL_PRODUCT_CLICK, 'Url do Produto Link', Descontos_Manager_View::render_metabox_product_url_click( get_the_ID() ), Descontos_Manager_Model::POST_TYPE_NAME, 'normal', 'high' );

	}

	public function save_product_url( $post_id ) {

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
			return $post_id;

		// Sanitize the user input.
		$mydata = sanitize_text_field( $_POST[ Descontos_Manager_Model::POST_META_URL_PRODUCT ] );

		// Update the meta field.
		update_post_meta( $post_id, Descontos_Manager_Model::POST_META_URL_PRODUCT , $mydata );
	}

	public function save_product_url_click( $post_id ) {

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
			return $post_id;

		// Sanitize the user input.
		$mydata = sanitize_text_field( $_POST[ Descontos_Manager_Model::POST_META_URL_PRODUCT_CLICK ] );

		// Update the meta field.
		update_post_meta( $post_id, Descontos_Manager_Model::POST_META_URL_PRODUCT_CLICK , $mydata );
	}

	public function dig_for_information()
	{


		if ( ! isset( $_POST[ Descontos_Manager_Model::POST_META_URL_PRODUCT ] ) );
			return;

		$url = $_POST[ Descontos_Manager_Model::POST_META_URL_PRODUCT ];

		$dom_object = new DOMDocument();

		@$dom_object->loadHTMLFile($url);

		$dom_controller->preserveWhiteSpace = false;

		$this->dig_for_image( $dom_controller->getElementsByTagName('img') );

		$this->dig_for_title( $dom_controller->getElementsByTagName('h1') );

		foreach ($h1_name as $key => $value) {
		print_r($value->textContent);
		}

		echo'<br>';

		foreach ($htmlDocTables as $key => $value) {
			if ( stristr( $value->getAttribute('src') , 'detalhe' ) ) :
				echo "<img src='" .$value->getAttribute('src') . "'>";
			echo"<br>";
			endif;
		}

	}


	public function dig_for_image( $images = array() )
	{

		foreach ( $images as $key => $image ):
			# code...
		endforeach;

	}

	public function dig_for_title( $titles = array() )
	{

	}


	

}


$controller = new Descontos_Manager_Controller();