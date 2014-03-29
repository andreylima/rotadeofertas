<?php

Class Descontos_Manager_View{
	
	public function __construct( )
	{
		
	}

	static public function render_metabox_product_url( $post_id )
	{

		//wp_nonce_field( 'render_metabox_product_url', 'render_metabox_product_url_nonce' );

		$url = get_post_meta( $post_id, Descontos_Manager_Model::POST_META_URL_PRODUCT, true );

		ob_start();
		?>

		<p>
			<input type="text" class="large-text" id="<?php echo Descontos_Manager_Model::POST_META_URL_PRODUCT ?>" name="<?php echo Descontos_Manager_Model::POST_META_URL_PRODUCT ?>" class="" value="<?php echo esc_url( $url ); ?>" />

		<?php

		$meta_box = ob_get_contents();

		ob_clean();

		return $meta_box;
	}


	static public function render_metabox_product_url_click( $post_id )
	{

		//wp_nonce_field( 'render_metabox_product_url_click', 'render_metabox_product_url_click_nonce' );

		$url = get_post_meta( $post_id, Descontos_Manager_Model::POST_META_URL_PRODUCT_CLICK, true );

		ob_start();
		?>

		<p>
			<input type="text" class="large-text" id="<?php echo Descontos_Manager_Model::POST_META_URL_PRODUCT_CLICK ?>" name="<?php echo Descontos_Manager_Model::POST_META_URL_PRODUCT_CLICK ?>" class="" value="<?php echo esc_url( $url ); ?>" />

		<?php

		$meta_box = ob_get_contents();

		ob_clean();

		return $meta_box;
	}

}


//$model = new Descontos_Manager_Model( 1 );