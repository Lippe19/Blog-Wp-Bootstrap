<?php


// Chamar a tag Title e adicionar os formatos de posts
function bs4wp_theme_support() {
    // Chamar a tag Title
    add_theme_support('title-tag');
    // Adicionar os formatos de posts
    add_theme_support('post-formats', array('aside', 'image'));
    // Adicionar o logotipo 
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'bs4wp_theme_support');
// Previnir o erro na tag Title em versões antigas
if (!function_exists('_wp_render_title_tag')) {
    function bs4wp_render_title() {
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }
    add_action('wp_head', 'bs4wp_render_title');
}
// Registra o Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// Registrar os menus
register_nav_menus( array(
    'principal' => __('Menu principal', 'bs4wp')
));
// Definir as miniaturas dos posts
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1280, 720, true );

// Definir o tamanho o resumo
add_filter( 'excerpt_length', function($length) {
    return 12;//50
} );

// Definir o estilo da paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="btn btn-outline-my-color-5"';
}


// Criar a barra lateral
register_sidebar(
    array(
        'name' => 'Barra lateral',
        'id' => 'sidebar',
        'before_widget' => '<div class="card mb-4">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="card-header text-center">',
        'after_title' => '</h5><div class="card-body">',
//        'before_widget' => '<div class="card pt-4">',
//        'after_widget' => '</div></div>',
//        'before_title' => '<h5 class="text-center">',
//        'after_title' => '</h5><div class="card-body">',
));

// Criar o campo de busca
register_sidebar(
    array(
        'name' => 'Busca',
        'id' => 'busca',
        'before_widget' => '<div class="blog-search">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));

// Criar o campo de busca
register_sidebar(
    array(
        'name' => 'Cards',
        'id' => 'cards',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
));


// Ativar o fomrulário para respostas nos comentários
function theme_queue_js() {
    if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script('comment-reply');
}
add_action('wp_print_scripts', 'theme_queue_js');
// Personalizar os comentários
function format_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>

    <div <?php comment_class('ml-4'); ?> id="comment-<?php comment_ID(); ?>">

        <div class="card mb-3">
            <div class="card-body">

            <div class="comment-intro">

                <h5 class="card-title"><?php printf(__('%s'), get_comment_author_link()) ?></h5>
                <h6 class="card-subtitle mb-3 text-muted">Comentou em <?php printf(__('%1$s'), get_comment_date('d/m/y'), get_comment_time()) ?></h6>
            
            </div>

            <?php comment_text(); ?>

            <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>

            </div>
        </div>

    <?php
}
// Criar o tipo de post para o banner
function create_post_type() {
    register_post_type('banners',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Banners'),
            'singular_name' => __('Banners')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners'),
    ));
}
//===================================================
// Criar o tipo de post para o banner
function create_post_type1() {
    register_post_type('pontos',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Pontos'),
            'singular_name' => __('Pontos')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'pontos'),
    ));
}
//===================================================


//Iniciar o tipo de post
add_action('init', 'create_post_type');
//Iniciar o tipo de post
add_action('init', 'create_post_type1');
// Incluir as funções de personalização
require get_template_directory(). '/inc/customizer.php';












function lc_cpt() {

    // Informar os textos da interface
    $labels = array(
        'name'              => _x('Depoimentos', 'Depoimentos dos clientes', 'livecred'),
        'singular_name'     => _x('Depoimento', 'Depoimento do cliente', 'livecred'),
        'menu_name'         => __('Depoimentos', 'livecred'),
        'all_items'         => __('Todos os depoimentos', 'livecred'),
        'view_item'         => __('Ver depoimento', 'livecred'),
        'add_new_item'      => __('Adicionar depoimento', 'livecred'),
        'add_new'           => __('Adicionar novo', 'livecred'),
        'edit_item'         => __('Eitar depoimento', 'livecred'),
        'update_item'       => __('Atualizar depoimento', 'livecred'),
        'search_items'      => __('Buscar depoimento', 'livecred'),
        'not_found'         => __('N�o encontrado', 'livecred'),
        'not_fund_in_trash' => __('N�o encontrado no lixo', 'livecred')
    );

    // Informar as op��es
    $args = array(
        'label'               => __('depoimentos', 'livecred'),
        'description'         => __('Depoimentos dos clientes', 'livecred'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-aside',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicy_queryable'   => true,
        'capability_type'     => 'post'
    );

    register_post_type('depoimentos', $args);
}

add_action('init', 'lc_cpt', 0);












    ?>