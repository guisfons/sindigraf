<?php
/**
 * Declare all used post types
 */
function ks_register_post_types(){

    $def_posttype_args = array(

        'labels'             => array(),
        'description'        => '',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => '',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array('title', 'thumbnail', 'editor', 'author', 'excerpt', 'page-attributes' ),
        'show_in_rest'		 => true

    );

    $def_taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => array(),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => '',
        'show_in_rest'		 => true,
        'show_in_quick_edit' => true,
    );

    $posttypes = array(

        'eventos' => array(

            'labels' => array(
                'name'               => __('Eventos'),
                'singular_name'      => __('Evento'),
                'menu_name'          => __('Eventos'),
                'name_admin_bar'     => __('Eventos'),
                'add_new'            => __('Novo Evento'),
                'add_new_item'       => __('Novo Evento'),
                'new_item'           => __('Novo Evento'),
                'edit_item'          => __('Editar Evento'),
                'view_item'          => __('Ver Evento'),
                'all_items'          => __('Eventos'),
                'search_items'       => __('Procurar por Eventos'),
                'parent_item_colon'  => __('Eventos pai:'),
                'not_found'          => __('Nenhum Evento encontrado.'),
                'not_found_in_trash' => __('Nenhum Evento encontrado na lixeira.')
			),
			// 'menu_position' => 2,
            // 'menu_icon' => 'dashicons-megaphone',
            'description' => __('Evento'),
            'rest_base' =>'custom/eventos',
            'has_archive' => 'biblioteca/eventos',
            // 'rewrite'     => [
            // 	'slug' => 'evento/post',
            // ],
            'supports'    => array('title', 'editor', 'thumbnail'),
            // 'taxonomy'    => array(

            //     'podcasts_categories' => array(

            //         'hierarchical'      => true,
            //         'labels'            => array(
            //             'name'              => __('Categorias'),
            //             'singular_name'     => __('Categoria'),
            //             'search_items'      => __('Procurar por categoria' ),
            //             'all_items'         => __('Categorias' ),
            //             'parent_item'       => __('Categoria Pai' ),
            //             'parent_item_colon' => __('Categorias Pai:' ),
            //             'edit_item'         => __('Editar Categoria' ),
            //             'update_item'       => __('Atualizar Categoria' ),
            //             'add_new_item'      => __('Nova Categoria' ),
            //             'new_item_name'     => __('Nova Categoria' ),
            //             'menu_name'         => __('Categorias' ),
            //         ),

            //         'show_ui'           => true,
            //         'show_admin_column' => true,
            //         'query_var'         => true,
			// 		'rewrite'           => array('slug' => 'podcasts/categorias'),
			// 		'show_in_rest'      => true,
            //         'rest_base'         => 'podcasts_categories'

            //     ),

            // ),

		),

        'tv_abigraf' => array(
            'labels' => array(
                'name'               => __('TV Abigraf'),
                'singular_name'      => __('TV Abigraf'),
                'menu_name'          => __('TV Abigraf'),
                'name_admin_bar'     => __('TV Abigraf'),
                'add_new'            => __('Novo Video'),
                'add_new_item'       => __('Novo Video'),
                'new_item'           => __('Novo Video'),
                'edit_item'          => __('Editar Video'),
                'view_item'          => __('Ver Video'),
                'all_items'          => __('Videos'),
                'search_items'       => __('Procurar por Videos'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhum Evento encontrado.'),
                'not_found_in_trash' => __('Nenhum Evento encontrado na lixeira.')
			),
            'description' => __('TV Abigraf'),
            'rest_base' =>'custom/videos',
            'has_archive' => 'biblioteca/videos',
            'supports'    => array('title'),

		),

        'apresentacoes' => array(
            'labels' => array(
                'name'               => __('Apresentações'),
                'singular_name'      => __('Apresentações'),
                'menu_name'          => __('Apresentações'),
                'name_admin_bar'     => __('Apresentações'),
                'add_new'            => __('Nova apresentação'),
                'add_new_item'       => __('Nova apresentação'),
                'new_item'           => __('Nova apresentação'),
                'edit_item'          => __('Editar apresentação'),
                'view_item'          => __('Ver apresentação'),
                'all_items'          => __('Apresentações'),
                'search_items'       => __('Procurar por apresentações'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma apresentação encontrada.'),
                'not_found_in_trash' => __('Nenhuma apresentação encontrada na lixeira.')
			),
            'description' => __('Apresentações'),
            'rest_base' =>'custom/apresentacoes',
            'has_archive' => 'biblioteca/apresentacoes',
            'supports'    => array('title'),
		),

        'revistas' => array(
            'labels' => array(
                'name'               => __('Revistas'),
                'singular_name'      => __('Revistas'),
                'menu_name'          => __('Revistas'),
                'name_admin_bar'     => __('Revistas'),
                'add_new'            => __('Nova revista'),
                'add_new_item'       => __('Nova revista'),
                'new_item'           => __('Nova revista'),
                'edit_item'          => __('Editar revista'),
                'view_item'          => __('Ver revista'),
                'all_items'          => __('Revistas'),
                'search_items'       => __('Procurar por Revistas'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma revista encontrada.'),
                'not_found_in_trash' => __('Nenhuma revista encontrada na lixeira.')
			),
            'description' => __('Revistas'),
            'rest_base' =>'custom/revistas',
            'has_archive' => 'biblioteca/revistas',
            'supports'    => array('title'),
		),

        'boletins' => array(
            'labels' => array(
                'name'               => __('Boletins'),
                'singular_name'      => __('Boletins'),
                'menu_name'          => __('Boletins'),
                'name_admin_bar'     => __('Boletins'),
                'add_new'            => __('Novo boletim'),
                'add_new_item'       => __('Novo boletim'),
                'new_item'           => __('Novo boletim'),
                'edit_item'          => __('Editar boletim'),
                'view_item'          => __('Ver boletim'),
                'all_items'          => __('Boletins'),
                'search_items'       => __('Procurar por Boletins'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhumo boletim encontrada.'),
                'not_found_in_trash' => __('Nenhumo boletim encontrada na lixeira.')
			),
            'description' => __('Boletins'),
            'rest_base' =>'custom/Boletins',
            'has_archive' => 'biblioteca/Boletins',
            'supports'    => array('title'),
		),

        'juridico' => array(
            'labels' => array(
                'name'               => __('Jurídico'),
                'singular_name'      => __('Jurídico'),
                'menu_name'          => __('Jurídico'),
                'name_admin_bar'     => __('Jurídico'),
                'add_new'            => __('Novo post'),
                'add_new_item'       => __('Novo post'),
                'new_item'           => __('Novo post'),
                'edit_item'          => __('Editar post'),
                'view_item'          => __('Ver post'),
                'all_items'          => __('Jurídico'),
                'search_items'       => __('Procurar por Jurídico'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhumo post encontrada.'),
                'not_found_in_trash' => __('Nenhumo post encontrada na lixeira.')
			),
            'description' => __('Jurídico'),
            'rest_base' =>'custom/Juridico',
            'has_archive' => 'biblioteca/Juridico',
            'supports'    => array('title'),
            'taxonomies'  => array( 'category' ),
		),
		'impressoes' => array(
            'labels' => array(
                'name'               => __('Impressões.com'),
                'singular_name'      => __('Impressão'),
                'menu_name'          => __('Impressões.com'),
                'name_admin_bar'     => __('Impressões.com'),
                'add_new'            => __('Nova Impressão'),
                'add_new_item'       => __('Nova Impressão'),
                'new_item'           => __('Nova Impressão'),
                'edit_item'          => __('Editar Impressão'),
                'view_item'          => __('Ver Impressão'),
                'all_items'          => __('Impressões'),
                'search_items'       => __('Procurar por Impressões'),
                'not_found'          => __('Nenhuma Impressão encontrada.'),
                'not_found_in_trash' => __('Nenhuma Impressão encontrada na lixeira.')
			),
            'description' => __('Impressões'),
            'rest_base' =>'custom/impressoes',
            'has_archive' => 'biblioteca/impressoes',
            'supports' => array('title', 'thumbnail', 'editor', 'author', 'excerpt' ),
		),
    );

    foreach ($posttypes as $posttype => $options) {

        $args = array_merge($def_posttype_args, $options);

        if(isset($args['taxonomy'])){

            $taxonomies = $args['taxonomy'];

            foreach($taxonomies as $taxonomy => $taxonomy_args){

                $taxonomy_args = array_merge($def_taxonomy_args, $taxonomy_args);

                register_taxonomy($taxonomy, array($posttype), $taxonomy_args);

            }

            unset($args['taxonomy']);

        }

        register_post_type($posttype, $args);

    }

}

add_action('init', 'ks_register_post_types', 10 );

/**
 * Change Native Posts labels
 */
function ks_change_post_label() {

    global $menu;
	global $submenu;

    $menu[5][0] = 'Notícias';
    $submenu['edit.php'][5][0] = 'Notícias';
    $submenu['edit.php'][10][0] = 'Adicionar Notícia';

}

add_action( 'admin_menu', 'ks_change_post_label' );

function ks_change_post_object() {

	global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Notícias';
    $labels->singular_name = 'Notícias';
	$labels->menu_name = 'Notícias';
	$labels->name_admin_bar = 'Notícias';
    $labels->add_new = 'Nova Notícia';
    $labels->add_new_item = 'Nova Notícia';
    $labels->new_item = 'Nova Notícia';
    $labels->edit_item = 'Editar Notícia';
    $labels->view_item = 'Ver Notícia';
    $labels->all_items = 'Notícias';
	$labels->search_items = 'Procurar Notícias';
	$labels->parent_item_colon = 'Notícias pai:';
    $labels->not_found = 'Nenhuma Notícia encontrada';
	$labels->not_found_in_trash = 'Nenhuma Notícia encontrada na lixeira';

}

add_action( 'init', 'ks_change_post_object' );
