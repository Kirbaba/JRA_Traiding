<?php
define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';

function add_style()
{
    wp_enqueue_style('my-bootstrap-extension', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_style('font-ewesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style('my-styles', get_template_directory_uri() . '/css/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style('my-sass', get_template_directory_uri() . '/sass/style.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style('fotorama', get_template_directory_uri() . '/css/fotorama.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array('my-bootstrap-extension'), '1');
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css', array(), '1');
}

function add_script()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script('jq', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '1');
    wp_enqueue_script('ScrollMagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array(), '1');
    wp_enqueue_script('ScrollMagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array(), '1');
    wp_enqueue_script('my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_script('my-script', get_template_directory_uri() . '/js/script.js', array(), '1');
    wp_enqueue_script('fotorama-js', get_template_directory_uri() . '/js/fotorama.js', array(), '1');
    wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array(), '1');
}

function add_admin_script(){
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '1');
    wp_enqueue_script('admin',get_template_directory_uri() . '/js/admin.js', array(), '1');
    wp_enqueue_style( 'my-bootstrap-extension-admin', get_template_directory_uri() . '/css/bootstrap.css', array(), '1');
    wp_enqueue_script( 'my-bootstrap-extension', get_template_directory_uri() . '/js/bootstrap.js', array(), '1');
    wp_enqueue_style( 'my-style-admin', get_template_directory_uri() . '/css/admin.css', array(), '1');
}

add_action('admin_enqueue_scripts', 'add_admin_script');
add_action('wp_enqueue_scripts', 'add_style');
add_action('wp_enqueue_scripts', 'add_script');

function prn($content)
{
    echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
    print_r($content);
    echo '</pre>';
}

function my_pagenavi()
{
    global $wp_query;

    $big = 999999999; // уникальное число для замены

    $args = array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big))
    , 'format' => ''
    , 'current' => max(1, get_query_var('paged'))
    , 'total' => $wp_query->max_num_pages
    );

    $result = paginate_links($args);

    // удаляем добавку к пагинации для первой страницы
    $result = str_replace('/page/1/', '', $result);

    echo $result;
}

function excerpt_readmore($more)
{
    return '... <br><a href="' . get_permalink($post->ID) . '" class="readmore">' . 'Читать далее' . '</a>';
}

add_filter('excerpt_more', 'excerpt_readmore');

if (function_exists('add_theme_support'))
    add_theme_support('post-thumbnails');

//получение всех данных по названию таблицы
function getDataFromDb($tableName)
{
    global $wpdb;
    $data = $wpdb->get_results("SELECT * FROM `$tableName`", ARRAY_A);
    return $data;
}

//ADMIN MENU PAGES
function admin_menu()
{
    add_menu_page('Services', 'Services', 'manage_options', 'services', 'servicesAdmin');
    add_menu_page('Production', 'Production', 'manage_options', 'production', 'productionAdmin');
    add_menu_page('Benefits', 'Benefits', 'manage_options', 'benefits', 'benefitsAdmin');
}

add_action('admin_menu', 'admin_menu');

/*-------------------------------THEME OPTIONS--------------------------------------*/
add_action('customize_register', function($customizer){
    /*Меню настройки контактов*/
    $customizer->add_section(
        'contacts_section',
        array(
            'title' => 'Contacts settings',
            'description' => 'Contacts',
            'priority' => 35,
        )
    );

    $customizer->add_setting(
        'address1_textbox',
        array('default' => 'Hong Kong')
    );
    $customizer->add_setting(
        'address2_textbox',
        array('default' => 'Mainland ( Guangzhou )')
    );
    $customizer->add_setting(
        'phone1_textbox',
        array('default' => '+852 60655860')
    );
    $customizer->add_setting(
        'phone2_textbox',
        array('default' => '+86 13640885511')
    );
    $customizer->add_setting(
        'mail_textbox',
        array('default' => 'inquiries@jraltd.net')
    );

    $customizer->add_control(
        'phone1_textbox',
        array(
            'label' => 'Phone 1',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'phone2_textbox',
        array(
            'label' => 'Phone 2',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'address1_textbox',
        array(
            'label' => 'Address 1',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'address2_textbox',
        array(
            'label' => 'Address 2',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
    $customizer->add_control(
        'mail_textbox',
        array(
            'label' => 'Email',
            'section' => 'contacts_section',
            'type' => 'text',
        )
    );
});
/*------------------------------END THEME OPTIONS-----------------------------------*/

/*------------------------------------- SERVICES -----------------------------------*/
function servicesAdmin(){
    global $wpdb;

    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }

    if(isset($_POST) && !empty($_POST)){
        $wpdb->update('servicesbox',array(
            'img1' => $_POST['img1'],
            'img2' => $_POST['img2'],
            'img3' => $_POST['img3'],
            'img4' => $_POST['img4'],
            'title1' => $_POST['title1'],
            'title2' => $_POST['title2'],
            'title3' => $_POST['title3'],
            'title4' => $_POST['title4'],
            'text1' => $_POST['text1'],
            'text2' => $_POST['text2'],
            'text3' => $_POST['text3'],
            'text4' => $_POST['text4'],
        ),array('id'=>1));
    }

    $box = getDataFromDb('servicesbox');

    $parser = new Parser();
    $parser->render(TM_DIR . "/view/admin/services.php", array('box' => $box[0]), true);
}

function srevicesShortcode(){
    $box = getDataFromDb('servicesbox');

    $parser = new Parser();
    $parser->render(TM_DIR . "/view/services.php", array('box' => $box[0]), true);
}
add_shortcode('services','srevicesShortcode');
/*----------------------------------- END SERVICES ---------------------------------*/


/*------------------------------------- BENEFITS -----------------------------------*/
function benefitsShortcode(){
    $args = array(
        'post_type' => 'post',
        'category_name' => 'benefits',
        'post_status' => 'publish',
        'posts_per_page' => 3);

    $my_query = null;
    $my_query = new WP_Query($args);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/benefits.php', ['my_query' => $my_query]);
}
add_shortcode('benefits','benefitsShortcode');
/*----------------------------------- END BENEFITS ---------------------------------*/

/*------------------------------------ PRODUCTION ----------------------------------*/
function productionShortcode() {

    $catId = get_category_by_slug( 'production' );
    $catId = $catId->term_id;
    $posts = get_posts(['numberposts'=>-1, 'category'=>$catId, 'order'=>'DESC']);

    $parser = new Parser();
    $parser->render(TM_DIR . '/view/production.php', ['posts'=>$posts]);
}
add_shortcode('production', 'productionShortcode');
/*--------------------------------- END PRODUCTION ---------------------------------*/
