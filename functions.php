<?php

// require_once(get_template_directory() . '/bs5navwalker.php');

function themebs_enqueue_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('core', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'themebs_enqueue_styles');

function themebs_enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js'
    );
    wp_enqueue_script(
        'core', get_template_directory_uri() . '/script.js'
    );
}
add_action('wp_enqueue_scripts', 'themebs_enqueue_scripts');

remove_action('wp_head', '_admin_bar_bump_cb');


if (!is_admin()) {

    require get_template_directory() . '/header.php';
    require get_template_directory() . '/footer.php';

}

$posts_per_page = 18;

add_filter( 'posts_where', 'title_like_posts_where', 10, 2 );
function title_like_posts_where( $where, $wp_query ) {
    global $wpdb;
    if ( $post_title_like = $wp_query->get( 'post_title_like' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( $wpdb->esc_like( $post_title_like ) ) . '%\'';
    }
    return $where;
}

function filter_projects()
{
    global $impressos, $imp_query, $max_num_pages, $posts_per_page;

    $cat = $_POST['category'];
    $type = $_POST['type'];
    $search = $_POST['search'];
    
    $imp_query = new WP_Query([
        'post_type' => $type,
        'posts_per_page' => -1,
        'category_name' => $cat,
        'order' => 'desc',
        'post_title_like' => $search
    ]);

    $response = '';

    if ($imp_query->have_posts()) {
        $impressos = $imp_query->get_posts();

        $max_num_pages = ceil($imp_query->found_posts / $posts_per_page);

        $response .= get_template_part('pages/impressos_loop', null, $impressos);
    }

    exit;
}

add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');

?>