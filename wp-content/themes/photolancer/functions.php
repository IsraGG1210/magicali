<?php

if (!defined('PHOTOLANCER_VERSION')) {
    // Replace the version number of the theme on each release.
    define('PHOTOLANCER_VERSION', wp_get_theme()->get('Version'));
}
define('PHOTOLANCER_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('PHOTOLANCER_DIR', trailingslashit(get_template_directory()));
define('PHOTOLANCER_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('photolancer_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function photolancer_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
        // Removing default patterns.
        remove_theme_support('core-block-patterns');
    }

endif;
add_action('after_setup_theme', 'photolancer_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('photolancer_styles')) :
    function photolancer_styles()
    {
        // registering style for theme
        wp_enqueue_style('photolancer-style', get_stylesheet_uri(), array(), PHOTOLANCER_VERSION);
        wp_enqueue_style('photolancer-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style('photolancer-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('photolancer-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('photolancer-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), PHOTOLANCER_VERSION, true);
        wp_enqueue_script('photolancer-scripts', get_template_directory_uri() . '/assets/js/photolancer-scripts.js', array(), PHOTOLANCER_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'photolancer_styles');

/**
 * Enqueue scripts for admin area
 */
function photolancer_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-photolancer' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('photolancer-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), PHOTOLANCER_VERSION, 'all');
        wp_enqueue_script('photolancer-admin-scripts', get_template_directory_uri() . '/assets/js/photolancer-admin-scripts.js', array(), PHOTOLANCER_VERSION, true);
        wp_localize_script('photolancer-admin-scripts', 'photolancer_admin_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('photolancer_admin_nonce')
        ));
        wp_enqueue_script('photolancer-welcome-notice', get_template_directory_uri() . '/inc/admin/js/photolancer-welcome-notice.js', array('jquery'), PHOTOLANCER_VERSION, true);
        wp_localize_script('photolancer-welcome-notice', 'photolancer_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('photolancer_welcome_nonce'),
            'redirect_url' => admin_url('themes.php?page=_cozy_companions')
        ));
    }
}
add_action('admin_enqueue_scripts', 'photolancer_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function photolancer_block_assets()
{
    wp_enqueue_style('photolancer-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'photolancer_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('photolancer_excerpt_more_postfix')) {
    function photolancer_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'photolancer_excerpt_more_postfix');
}
function photolancer_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'photolancer_add_woocommerce_support');

/* NUEVO */
function obtener_gurus_activos()
{
    $args = array(
        'role'    => 'guru', // Cambia 'guru' al slug del rol que estás usando
        'fields' => array('ID', 'display_name') // Devuelve solo el ID y el nombre para el select
    );

    $usuarios = get_users($args);

    return $usuarios;
}



function cambiar_valor_option_js()
{
?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            // Busca el select por el atributo name
            var selectGuru = document.querySelector('select[name="guru"]');

            if (selectGuru) {
                // Busca la opción que tiene "Selecciona un Gurú" como valor
                var option = selectGuru.querySelector('option[value="Selecciona un Gurú"]');
                if (option) {
                    // Cambia el valor a vacío
                    option.value = "";
                }
            }
        });
    </script>
    <?php
}

function rellenar_select_gurus($tag, $unused)
{
    if ($tag['name'] === 'guru') {
        $gurus = obtener_gurus_activos();

        // Inicializa las opciones con la opción predeterminada
        $options = '<option value="">Selecciona un Gurú</option>'; // Opción predeterminada

        $i = 1;
        $container = "\n";
        foreach ($gurus as $guru) {
            // Agrega cada gurú a las opciones
            if (count($gurus) == $i) {
                $container == "";
            }
            $options .= $container . '<option value="' . esc_attr($guru->ID) . '">' . esc_html($guru->display_name) . '</option>';
            $i++;
        }

        // Ahora solo necesitas asignar las opciones a $tag['raw_values'] y $tag['values']
        $tag['raw_values'] = array_map('strip_tags', explode("\n", $options));
        $tag['values'] = array_map('strip_tags', explode("\n", $options));

        // Es necesario también manejar las opciones para el select
        $tag['options'] = explode("\n", $options);
    }


    return $tag;
}

// Añadir el campo personalizado en el perfil del usuario
function agregar_campo_suscripcion_usuario($user)
{
    if (in_array('subscriber', $user->roles)) {
    ?>
        <h3>Estado de Suscripción</h3>
        <table class="form-table">
            <tr>
                <th><label for="suscripcion_activa">Suscripción Activa</label></th>
                <td>
                    <input type="checkbox" name="suscripcion_activa" id="suscripcion_activa" value="1" <?php checked(get_user_meta($user->ID, 'suscripcion_activa', true), '1'); ?> />
                    <span class="description">Marca si la suscripción está activa.</span>
                </td>
            </tr>
        </table>
    <?php
    }
}
add_action('show_user_profile', 'agregar_campo_suscripcion_usuario');
add_action('edit_user_profile', 'agregar_campo_suscripcion_usuario');

// Guardar el campo personalizado
function guardar_campo_suscripcion_usuario($user_id)
{
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }
    update_user_meta($user_id, 'suscripcion_activa', isset($_POST['suscripcion_activa']) ? '1' : '0');
}
add_action('personal_options_update', 'guardar_campo_suscripcion_usuario');
add_action('edit_user_profile_update', 'guardar_campo_suscripcion_usuario');

add_filter('wpcf7_form_tag', 'rellenar_select_gurus', 10, 2);
add_action('wp_footer', 'cambiar_valor_option_js');

//TABLA SUSCRIPTORES ACTIVOS
// Añadir un menú en el administrador para mostrar los suscriptores
function agregar_menu_suscriptores()
{
    add_menu_page(
        'Suscriptores', // Título de la página
        'Suscriptores', // Nombre del menú
        'manage_options', // Capacidad requerida
        'suscriptores-activos', // Slug de la página
        'mostrar_suscriptores', // Función que mostrará la tabla
        'dashicons-groups', // Icono del menú
        20 // Posición en el menú
    );
}
add_action('admin_menu', 'agregar_menu_suscriptores');

// Función para mostrar la tabla de suscriptores
function mostrar_suscriptores()
{
    ?>
    <div class="wrap">
        <h1>Lista de Suscriptores</h1>
        <table class="widefat fixed" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Suscripción Activa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Obtener usuarios con el rol de subscriber
                $args = array(
                    'role' => 'subscriber',
                );
                $user_query = new WP_User_Query($args);
                $users = $user_query->get_results();

                if (!empty($users)) {
                    foreach ($users as $user) {
                        // Obtener el estado de la suscripción del usuario
                        $suscripcion_activa = get_user_meta($user->ID, 'suscripcion_activa', true);
                ?>
                        <tr>
                            <td><?php echo esc_html($user->ID); ?></td>
                            <td><?php echo esc_html($user->display_name); ?></td>
                            <td><?php echo esc_html($user->user_email); ?></td>
                            <td><?php echo $suscripcion_activa == '1' ? 'Activa' : 'Inactiva'; ?></td>
                        </tr>
                <?php
                    }
                } else {
                    echo '<tr><td colspan="4">No hay suscriptores.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
}

// Crear un shortcode para mostrar la lista de suscriptores
/* function mostrar_suscriptores_shortcode() {
    ob_start(); // Iniciar el almacenamiento en buffer de salida
    ?>
    <style>
        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, color 0.15s ease-in-out;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
        }

    </style>
    <section class="intro">
        <div class="bg-image h-100" style="background-color: #f5f7fa;">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-scroll" style="position: relative; height: 700px">
                                        <table class="table table-striped mb-0 widefat fixed" cellspacing="0" style="width:100%; border: 1px solid #ccc; border-collapse: separate; overflow: hidden; border-radius: 7px;">
                                            <thead style="background-color: #002d72; color: white;">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Suscripción Activa</th>
                                                    <th>Acción</th> <!-- Nueva columna para acción -->
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center;">
                                                <?php
                                                // Obtener usuarios con el rol de subscriber
                                                $args = array(
                                                    'role' => 'subscriber',
                                                );
                                                $user_query = new WP_User_Query($args);
                                                $users = $user_query->get_results();

                                                if (!empty($users)) {
                                                    foreach ($users as $user) {
                                                        // Obtener el estado de la suscripción del usuario
                                                        $suscripcion_activa = get_user_meta($user->ID, 'suscripcion_activa', true);
                                                        ?>
                                                        <tr style="height: 50px; border-bottom: 1px solid #ccc; vertical-align: middle;">
                                                            <td><?php echo esc_html($user->ID); ?></td>
                                                            <td><?php echo esc_html($user->display_name); ?></td>
                                                            <td><?php echo esc_html($user->user_email); ?></td>
                                                            <td><?php echo $suscripcion_activa == '1' ? 'Activa' : 'Inactiva'; ?></td>
                                                            <td>
                                                                <form method="post" action="">
                                                                    <input type="hidden" name="user_id" value="<?php echo esc_attr($user->ID); ?>">
                                                                    <input type="hidden" name="new_status" value="<?php echo $suscripcion_activa == '1' ? '0' : '1'; ?>">
                                                                    <button type="submit" name="cambiar_estado" class="btn <?php echo $suscripcion_activa == '1' ? 'btn-danger' : 'btn-success'; ?>">
                                                                        <?php echo $suscripcion_activa == '1' ? 'Desactivar' : 'Activar'; ?>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                } else {
                                                    echo '<tr><td colspan="5">No hay suscriptores.</td></tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    // Manejar la solicitud de cambio de estado
    if (isset($_POST['cambiar_estado'])) {
        $user_id = intval($_POST['user_id']);
        $new_status = intval($_POST['new_status']);
        update_user_meta($user_id, 'suscripcion_activa', $new_status);
        // Redirigir para evitar reenvío del formulario
        wp_redirect($_SERVER['REQUEST_URI']);
        exit;
    }

    return ob_get_clean(); // Devolver el contenido almacenado en el buffer
} */
function mostrar_suscriptores_shortcode()
{
    ob_start(); // Iniciar el almacenamiento en buffer de salida

    // Verificar si se ha enviado un formulario para activar/desactivar suscripciones
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && isset($_POST['user_id'])) {
        $action = sanitize_text_field($_POST['action']);
        $user_id = intval($_POST['user_id']);

        $suscripcion_activa = get_user_meta($user_id, 'suscripcion_activa', true);
       /*  $new_status = $suscripcion_activa == '1' ? '0' : '1';
        update_user_meta($user_id, 'suscripcion_activa', $new_status); */
        switch($action){
            case 'activate':
                update_user_meta($user_id, 'fecha_inicio_suscripcion', date('Y-m-d', current_time('timestamp')));
            $fecha_inicio = get_user_meta($user_id, 'fecha_inicio_suscripcion', true);
            if (get_user_meta($user_id, 'plan_contratado', true) == 74) {
                $fecha_finalizacion = date('Y-m-d', strtotime($fecha_inicio . ' +1 month'));
                update_user_meta($user_id, 'fecha_finalizacion_suscripcion', $fecha_finalizacion);
            } else {
                $fecha_finalizacion = date('Y-m-d', strtotime($fecha_inicio . ' +1 year'));
                update_user_meta($user_id, 'fecha_finalizacion_suscripcion', $fecha_finalizacion);
            }
            update_user_meta($user_id, 'suscripcion_activa', '1');
                break;

            case 'deactivate':
                update_user_meta($user_id, 'fecha_inicio_suscripcion', '0000-00-00');
                update_user_meta($user_id, 'fecha_finalizacion_suscripcion', '0000-00-00');
                update_user_meta($user_id, 'suscripcion_activa', '0');
                break;

            case 'renew':
                $fecha_finalizacion = get_user_meta($user_id, 'fecha_finalizacion_suscripcion', true);
                if (get_user_meta($user_id, 'plan_renovacion',true)==74) {
                    $nueva_fecha = date('Y-m-d', strtotime($fecha_finalizacion . '+1 month'));
                    update_user_meta($user_id, 'fecha_finalizacion_suscripcion', $nueva_fecha);
                } else {
                    $nueva_fecha = date('Y-m-d', strtotime($fecha_finalizacion . '+1 year'));
                    update_user_meta($user_id, 'fecha_finalizacion_suscripcion', $nueva_fecha);
                }
                
                update_user_meta($user_id, 'fecha_renovacion', '');
                update_user_meta($user_id, 'plan_renovacion','');
                update_user_meta($user_id, 'suscripcion_activa', '1');
                break;
        }

       /*  if ($_POST['action'] == 'activate') {
            update_user_meta($user_id, 'fecha_inicio_suscripcion', date('Y-m-d', current_time('timestamp')));
            $fecha_inicio = get_user_meta($user_id, 'fecha_inicio_suscripcion', true);
            if (get_user_meta($user_id, 'plan_contratado', true) == 74) {
                $fecha_finalizacion = date('Y-m-d', strtotime($fecha_inicio . ' +1 month'));
                update_user_meta($user_id, 'fecha_finalizacion_suscripcion', $fecha_finalizacion);
            } else {
                $fecha_finalizacion = date('Y-m-d', strtotime($fecha_inicio . ' +1 year'));
                update_user_meta($user_id, 'fecha_finalizacion_suscripcion', $fecha_finalizacion);
            }
        } else {
            update_user_meta($user_id, 'fecha_inicio_suscripcion', '0000-00-00');
            update_user_meta($user_id, 'fecha_finalizacion_suscripcion', '0000-00-00');
        }
        update_user_meta($user_id, 'suscripcion_activa', $new_status); */
    }

    // Obtener los filtros

    $nombre = isset($_POST['nombre']) ? sanitize_text_field($_POST['nombre']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $estatus = isset($_POST['estatus']) ? sanitize_text_field($_POST['estatus']) : '';
    $fecha_inicio = isset($_POST['fecha_inicio']) ? sanitize_text_field($_POST['fecha_inicio']) : '';
    $fecha_final = isset($_POST['fecha_final']) ? sanitize_text_field($_POST['fecha_final']) : '';

?>
    <style>
        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, color 0.15s ease-in-out;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-info {
            color: white;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
            border-color: #138496;
            color: white;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .filter-style {
            padding-bottom: 20px;
            justify-content: end;
            display: flex;
        }
    </style>
    <section>
        <div class="h-100">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="form-group mb-3">
                            <form method="POST" style="display: flex;">
                                <input type="text" class="form-control" name="nombre" placeholder="Buscar por Nombre" value="<?php echo esc_attr($nombre); ?>">
                                <input type="text" class="form-control" name="email" placeholder="Buscar por Email" value="<?php echo esc_attr($email); ?>">
                                <select name="estatus" class="form-control">
                                    <option value="">Todos</option>
                                    <option value="1" <?php selected($estatus, '1'); ?>>Activa</option>
                                    <option value="0" <?php selected($estatus, '0'); ?>>Inactiva</option>
                                </select>
                                <input type="date" class="form-control" name="fecha_inicio" placeholder="Fecha Inicio" value="<?php echo esc_attr($fecha_inicio); ?>">
                                <input type="date" class="form-control" name="fecha_final" placeholder="Fecha Final" value="<?php echo esc_attr($fecha_final); ?>">
                                <button type="submit" class="btn btn-info">Filtrar</button>
                            </form>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-scroll" style="position: relative; height: 700px">
                                        <table class="table table-striped mb-0 widefat fixed" cellspacing="0" style="width:100%; border: 1px solid #ccc; border-collapse: separate; overflow: hidden; border-radius: 7px;">
                                            <thead style="background-color: #002d72; color: white;">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Fecha de Solicitud</th>
                                                    <th>Fecha Inicio</th>
                                                    <th>Fecha Finalizacion </th>
                                                    <th>Estatus</th>
                                                    <th>Acciones</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Obtener usuarios con el rol de subscriber
                                                $args = array(
                                                    'role' => 'subscriber',
                                                    'role' => 'guru',
                                                );
                                                $user_query = new WP_User_Query($args);
                                                $users = $user_query->get_results();

                                                // Filtrar usuarios
                                                if (!empty($users)) {
                                                    // Filtrar resultados
                                                    $filtered_users = array_filter($users, function ($user) use ($nombre, $email, $fecha_inicio, $estatus) {
                                                        $suscripcion_activa = get_user_meta($user->ID, 'suscripcion_activa', true);


                                                        return (!$nombre || stripos($user->display_name, $nombre) !== false) &&
                                                            (!$email || stripos($user->user_email, $email) !== false) &&
                                                            (!$fecha_inicio || stripos($user->user_registered, $fecha_inicio) !== false) &&
                                                            ($estatus === '' || $suscripcion_activa == $estatus);
                                                    });

                                                    // Paginación
                                                    $total_users = count($filtered_users); // Total de usuarios encontrados
                                                    $users_per_page = 25; // Número de usuarios por página
                                                    $total_pages = ceil($total_users / $users_per_page); // Calcular el total de páginas
                                                    $current_page = max(1, get_query_var('paged', 1)); // Obtener la página actual
                                                    $offset = ($current_page - 1) * $users_per_page; // Calcular el desplazamiento

                                                    // Obtener usuarios para la página actual
                                                    $paged_users = array_slice($filtered_users, $offset, $users_per_page);

                                                    // Mostrar usuarios
                                                    foreach ($paged_users as $user) {
                                                        $suscripcion_activa = get_user_meta($user->ID, 'suscripcion_activa', true);
                                                        /* (date('Y-m-d')> $suscripcion_activa) ? update_user_meta($user->ID,'suscripcion_activa', 0) : null ; posible linea par actualizar segun fecha actual */
                                                ?>
                                                        <tr style="height: 50px; border-bottom: 1px solid #ccc; vertical-align: middle;">
                                                            <td><?php echo esc_html($user->ID); ?></td>
                                                            <td><?php echo esc_html($user->display_name); ?></td>
                                                            <td><?php echo esc_html($user->user_email); ?></td>
                                                            <td><?php echo esc_html($user->user_registered); ?></td>
                                                            <td><?php echo get_user_meta($user->ID, 'fecha_inicio_suscripcion', true) ?></td>
                                                            <td><?php echo get_user_meta($user->ID, 'fecha_finalizacion_suscripcion', true) ?></td>
                                                            <td><?php echo $suscripcion_activa == '1' ? 'Activa' : 'Inactiva'; ?></td>
                                                            <td>
                                                                <form method="POST" style="display: inline;">
                                                                    <input type="hidden" name="user_id" value="<?php echo esc_attr($user->ID); ?>">
                                                                    <button type="submit" name ="action" value="<?php echo $suscripcion_activa == '1' ? 'deactivate' : 'activate'; ?>" id="boton_accion" class="btn <?php echo $suscripcion_activa == '1' ? 'btn-danger' : 'btn-success'; ?>">
                                                                        <?php echo $suscripcion_activa == '1' ? 'Desactivar' : 'Activar';
                                                                        if ($suscripcion_activa == '1') {
                                                                            $user_id = get_current_user_id();
                                                                        } ?>
                                                                    </button>
                                                                    <br>
                                                                    
                                                                    <?php
                                                                        $renovacion_activa = get_user_meta($user->ID, 'plan_renovacion',true);
                                                                        
                                                                        $renovacion = ($renovacion_activa != '') ? '' : 'style="display: none;"' ;
                                                                        
                                                                    ?>
                                                                    <br <?php echo $renovacion?>>
                                                                    <button type="submit" name="action" value="renew" class="btn btn-info" <?php echo $renovacion?>>Renovar</button>
                                                                </form>
                                                                <!-- <button class="btn btn-info">Detalles</button> -->
                                                            </td>
                                                            
                                                        </tr>
                                                <?php
                                                    }
                                                } else {
                                                    echo '<tr><td colspan="5">No hay suscriptores.</td></tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="display: flex; justify-content: flex-end; margin: 10px 0;">
                                        <div style="margin-right: 20px;">
                                            <p style="font-size: 12px;">Total de suscriptores: <?php echo $total_users; ?></p>
                                        </div>
                                        <div style="margin-right: 20px;">
                                            <p style="font-size: 12px;">Mostrando <?php echo count($paged_users); ?> de <?php echo $total_users; ?> registros</p>
                                        </div>
                                        <div>
                                            <p style="font-size: 12px;">Página <?php echo $current_page; ?> de <?php echo $total_pages; ?>&nbsp;&nbsp;</p>
                                        </div>
                                    </div>
                                    <!-- Paginación -->
                                    <div class="pagination">
                                        <?php
                                        // Lógica de paginación
                                        $pagination_args = array(
                                            'total'   => $total_pages,
                                            'current' => $current_page,
                                            'format'  => '?paged=%#%&nombre=' . urlencode($nombre) . '&email=' . urlencode($email) . '&estatus=' . urlencode($estatus) . '&fecha_inicio=' . urlencode($fecha_inicio) . '&fecha_final=' . urlencode($fecha_final),
                                            'prev_text' => __('« Anterior'),
                                            'next_text' => __('Siguiente »'),
                                        );
                                        echo paginate_links($pagination_args);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php

    return ob_get_clean(); // Retornar el contenido del buffer
}


add_shortcode('lista_suscriptores', 'mostrar_suscriptores_shortcode');




// functions.php

function photolancer_enqueue_styles()
{
    // Encolar el archivo de estilos principal del tema
    wp_enqueue_style('photolancer-style', get_stylesheet_uri());

    // Encolar otros estilos si es necesario
    // wp_enqueue_style('photolancer-custom', get_template_directory_uri() . '/path/to/your/custom.css');
}
add_action('wp_enqueue_scripts', 'photolancer_enqueue_styles');

//BOTON DEL CARRITO
add_action('wp_ajax_registrar_solicitud', 'registrar_solicitud');
add_action('wp_ajax_nopriv_registrar_solicitud', 'registrar_solicitud'); // Si deseas permitir que usuarios no autenticados envíen solicitudes



function registrar_solicitud()
{
    if (!is_user_logged_in()) {
        wp_send_json_error('Usuario no autenticado.');
        wp_die();
    }

    // Obtén los datos del POST
    $user_id = intval($_POST['user_id']);
    $producto = sanitize_text_field($_POST['product_id']);

    global $wpdb;

    // Verifica si ya existe una solicitud pendiente
    $solicitud_pendiente = $wpdb->get_var($wpdb->prepare(
        "SELECT COUNT(*) FROM wp_solicitudes WHERE user_id = %d AND producto = %s AND estado = 'pendiente'",
        $user_id,
        $producto
    ));

    // Verificamos el valor de $solicitud_pendiente
    if ($solicitud_pendiente > 0) {
        // Enviamos el JSON con el mensaje y el valor de $solicitud_pendiente
        wp_send_json_error(array(
            'message' => 'Usted ya ha realizado una soolicitud de lectura que está pendiente de confirmación.',
            'solicitud_pendiente' => $solicitud_pendiente // Enviamos este valor en el JSON
        ));
        wp_die();
    }

    // Si no hay solicitudes pendientes, inserta el nuevo registro
    $insert_result = $wpdb->insert('wp_solicitudes', array(
        'user_id' => $user_id,
        'producto' => $producto,
    ));

    if ($insert_result) {
        wp_send_json_success();
    } else {
        wp_send_json_error(array('message' => 'Error al registrar la solicitud.'));
    }

    wp_die();
}







/* function registrar_solicitud() {
    if (!is_user_logged_in()) {
        wp_send_json_error('Usuario no autenticado.');
        wp_die();
    }

    // Obtén los datos del POST
    $user_id = intval($_POST['user_id']);
    $producto = sanitize_text_field($_POST['product_id']);

    // Log para depuración
    error_log("User ID: $user_id, Product ID: $producto");

    global $wpdb;
    $wpdb->insert('wp_solicitudes', array(
        'user_id' => $user_id,
        'producto' => $producto,
    ));

    if ($wpdb->insert_id) {
        wp_send_json_success();
    } else {
        wp_send_json_error('Error al registrar la solicitud.');
    }

    wp_die();
} */

/* MOSTRAR SOLICITUDES */
function mostrar_solicitudes_shortcode()
{
    global $wpdb;

    ob_start(); // Iniciar el almacenamiento en buffer de salida

    // Verificar si se ha enviado un formulario para actualizar el estado
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['solicitud_id'])) {
        $solicitud_id = intval($_POST['solicitud_id']);
        $nuevo_estado = sanitize_text_field($_POST['nuevo_estado']);
        $nueva_hora = sanitize_text_field($_POST['hora_solicitud']); // Obtener la nueva hora

        // Actualizar el estado de la solicitud en la base de datos
        $wpdb->update(
            'wp_solicitudes',
            array(
                'estatus' => $nuevo_estado,
                'fecha_actualizacion' => current_time('mysql'),
                'hora_solicitud' => $nueva_hora // Incluir la nueva hora
            ),
            array('id' => $solicitud_id),
            array('%s', '%s', '%s'), // Tipos de datos a actualizar (estatus, fecha y hora)
            array('%d') // Tipo de dato de la condición (id es int)
        );
    }

    // Obtener filtros
    $nombre = isset($_POST['nombre']) ? sanitize_text_field($_POST['nombre']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $estatus = isset($_POST['estatus']) ? sanitize_text_field($_POST['estatus']) : '';
    $fecha_inicio = isset($_POST['fecha_inicio']) ? sanitize_text_field($_POST['fecha_inicio']) : '';
    $fecha_final = isset($_POST['fecha_final']) ? sanitize_text_field($_POST['fecha_final']) : '';
    $hora_solicitud = isset($_POST['hora_solicitud']) ? sanitize_text_field($_POST['hora_solicitud']) : ''; // Capturar la hora

    // Configuración de paginación
    $pagina_actual = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;
    $resultados_por_pagina = 10; // Cambia este número según sea necesario
    $offset = ($pagina_actual - 1) * $resultados_por_pagina;

    // Construir la consulta con los filtros aplicados
    $query = "SELECT s.*, u.user_email, u.display_name 
              FROM wp_solicitudes s 
              LEFT JOIN wp_users u ON s.user_id = u.ID 
              WHERE 1=1";

    if ($nombre) {
        $query .= $wpdb->prepare(" AND u.display_name LIKE %s", '%' . $wpdb->esc_like($nombre) . '%');
    }

    if ($email) {
        $query .= $wpdb->prepare(" AND u.user_email LIKE %s", '%' . $wpdb->esc_like($email) . '%');
    }

    if ($estatus) {
        $query .= $wpdb->prepare(" AND s.estatus = %s", $estatus);
    }

    if ($fecha_inicio) {
        $query .= $wpdb->prepare(" AND s.fecha_solicitud >= %s", $fecha_inicio . ' 00:00:00');
    }

    if ($fecha_final) {
        $query .= $wpdb->prepare(" AND s.fecha_solicitud <= %s", $fecha_final . ' 23:59:59');
    }

    if ($hora_solicitud) { // Filtrar por hora
        $query .= $wpdb->prepare(" AND s.hora_solicitud = %s", $hora_solicitud);
    }

    // Contar total de solicitudes
    $total_solicitudes = $wpdb->get_var("SELECT COUNT(*) FROM ($query) as subquery");
    $total_paginas = ceil($total_solicitudes / $resultados_por_pagina);

    // Añadir límite y offset a la consulta
    $query .= " LIMIT $resultados_por_pagina OFFSET $offset";

    // Ejecutar la consulta
    $solicitudes = $wpdb->get_results($query);

?>
    <style>
        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, color 0.15s ease-in-out;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-info {
            color: white;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
            border-color: #138496;
            color: white;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .filter-style {
            padding-bottom: 20px;
            justify-content: end;
            display: flex;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            margin: 0 5px;
            padding: 10px;
            text-decoration: none;
            border: 1px solid #007bff;
            color: #007bff;
        }

        .pagination a.active {
            background-color: #007bff;
            color: white;
        }

        .pagination a:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
    <section>
        <div class="filter-style">
            <form method="POST">
                <input type="text" name="nombre" class="form-control" placeholder="Buscar por Nombre" value="<?php echo esc_attr($nombre); ?>">
                <input type="email" name="email" class="form-control" placeholder="Buscar por Email" value="<?php echo esc_attr($email); ?>">
                <select name="estado" class="form-control">
                    <option value="">Todos los estados</option>
                    <option value="pendiente" <?php selected($estatus, 'pendiente'); ?>>Pendiente</option>
                    <option value="aceptada" <?php selected($estatus, 'aceptada'); ?>>Aceptada</option>
                    <option value="rechazada" <?php selected($estatus, 'rechazada'); ?>>Rechazada</option>
                </select>
                <input type="date" name="fecha_inicio" class="form-control" value="<?php echo esc_attr($fecha_inicio); ?>">
                <input type="time" name="hora_solicitud" class="form-control" value="<?php echo esc_attr($hora_solicitud); ?>"> <!-- Campo para la hora -->
                <button type="submit" class="btn btn-info">Filtrar</button>
            </form>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha Solicitud</th>
                    <th>Hora Solicitud</th> <!-- Nueva columna para la hora -->
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($solicitudes): ?>
                    <?php foreach ($solicitudes as $solicitud): ?>
                        <tr>
                            <td><?php echo esc_html($solicitud->id); ?></td>
                            <td><?php echo esc_html($solicitud->display_name); ?></td>
                            <td><?php echo esc_html($solicitud->user_email); ?></td>
                            <td><?php echo esc_html($solicitud->fecha_solicitud); ?></td>
                            <td><?php echo esc_html($solicitud->hora_solicitud); ?></td> <!-- Mostrar hora -->
                            <td>
                                <form method="POST">
                                    <input type="hidden" name="solicitud_id" value="<?php echo esc_attr($solicitud->id); ?>">
                                    <input type="time" name="hora_solicitud" class="form-control" value="<?php echo esc_attr($solicitud->hora_solicitud); ?>"> <!-- Campo para la hora en la actualización -->
                                    <select name="nuevo_estado" class="form-control">
                                        <option value="">Selecciona una opción</option>
                                        <option name="estatus" value="aceptada" <?php selected($solicitud->estatus, 'aceptada'); ?>>Aceptada</option>
                                        <option name="estatus" value="rechazada" <?php selected($solicitud->estatus, 'rechazada'); ?>>Rechazada</option>
                                    </select>
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No se encontraron solicitudes.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="pagination">
            <?php if ($pagina_actual > 1): ?>
                <a href="?pagina=<?php echo $pagina_actual - 1; ?>">&laquo; Anterior</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                <a href="?pagina=<?php echo $i; ?>" class="<?php echo $i === $pagina_actual ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>

            <?php if ($pagina_actual < $total_paginas): ?>
                <a href="?pagina=<?php echo $pagina_actual + 1; ?>">Siguiente &raquo;</a>
            <?php endif; ?>
        </div>
    </section>
<?php

    return ob_get_clean(); // Devolver el contenido almacenado
}


add_shortcode('mostrar_solicitudes', 'mostrar_solicitudes_shortcode');


//CATALOGO DE SERVICIOS DE LA PAGÍNA
add_action('wp_ajax_nopriv_get_active_services', 'get_active_services');
add_action('wp_ajax_get_active_services', 'get_active_services');

function get_active_services()
{
    global $wpdb;
    //$tabla = $wpdb->prefix . 'catalogo_servicios';
    $tabla = $wpdb->prefix . 'wc_product_meta_lookup';
    // Obtener los servicios activos
    //$servicios = $wpdb->get_results($wpdb->prepare("SELECT id, nombre FROM $tabla WHERE estatus = %s", 'Activo'));

    $servicios = $wpdb->get_results($wpdb->prepare("SELECT product_id AS id, product_name AS nombre FROM $tabla WHERE stock_status = %s", 'instock'));

    if ($servicios) {
        wp_send_json_success($servicios);
    } else {
        wp_send_json_error('No se encontraron servicios activos');
    }

    wp_die();
}

function cargar_formulario_personalizado()
{
    ob_start();
    /* date('Y-m-d', strtotime($fecha_inicio . ' +1 month')); */
    $fechafinal = get_user_meta(get_current_user_id(), 'fecha_finalizacion_suscripcion', true);
    $fechaactual = date('Y-m-d');

    if ($fechafinal > $fechaactual) {
        /* die('suscripcion aun activa'); */
        $status = 'style="display:none;"';
    } else {
        /* die('suscripcion inactiva'); */
        $status = 'style=""';
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_id'])) {
        $form_id = sanitize_text_field($_POST['form_id']);
        switch ($form_id) {
            case 'formulario_2':
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $plan_renovacion = sanitize_text_field($_POST['plan']);                   
                    update_user_meta(get_current_user_id(),'fecha_renovacion',date('Y-m-d'));
                    update_user_meta(get_current_user_id(), 'plan_renovacion', $plan_renovacion);
                } else {
                    echo 'Error al seleccionar plan';
                }
                
                break;
            case 'formulario_1':
                die('no entro al case anterior');
                global $wpdb;
                // Procesa el formulario cuando se envía
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Sanitiza los datos del formulario para seguridad
            $correo = sanitize_email($_POST['correo']);
            $telefono = sanitize_text_field($_POST['telefono']);
            $plan = sanitize_text_field($_POST['plan']);
            $acepta_terminos = isset($_POST['terminos']) ? true : false;
            $contraseña = ($_POST['contrasena']);
            $usuario = sanitize_text_field($_POST['nom_usuario']);
            $servicios_seleccionados = array_map('sanitize_text_field', $_POST['servicios']);
            // Validación de términos y condiciones
            if (!$acepta_terminos) {
                echo "<p style='color: red;'>Debes aceptar los términos y condiciones.</p>";
            } else {
                $query = $wpdb->prepare("SELECT COUNT(*) FROM wp_users WHERE user_login = %s OR user_email = %s", $usuario, $correo);
                $conteo = $wpdb->get_var($query);
                /* die("numero de resultados" .$conteo ); */
                if ($conteo > 0) {
                    echo "Nombre o correo repetido";
                } else {
                    // Aquí puedes realizar acciones como enviar un correo o guardar en la base de datos.
                    // Ejemplo: wp_mail($correo_destinatario, "Nuevo mensaje de contacto", "Teléfono: $telefono, Plan: $plan");
                    global $wpdb;
                    // Muestra un mensaje de agradecimiento
                    $query = $wpdb->prepare(
                        "INSERT INTO wp_users (user_email, user_pass, user_login, display_name, user_nicename) 
            VALUES (%s, PASSWORD(%s), %s, %s, %s)",
                        $correo,
                        $contraseña,
                        $usuario,
                        $usuario,
                        $usuario
                    );
                    $result = $wpdb->query($query);
                    $log_usuario = get_user_by('login', $usuario);
                    $role = 'guru';
                    $log_usuario->set_role($role);
                    $metausu = $log_usuario->ID;
                    if ($metausu != 0) {
                        update_user_meta($metausu, 'plan_contratado', $plan);
                    }
                    $tabla_relacional = $wpdb->prefix . 'servicios_usuarios';
                    foreach ($servicios_seleccionados as $servicio_id) {
                        $query = $wpdb->prepare(
                            "INSERT INTO $tabla_relacional (id_usuario, id_servicio) VALUES (%d, %d)",
                            $metausu,
                            $servicio_id
                        );
                        error_log("Consulta INSERT: $query");
                        $wpdb->query($query);
                    }
                    echo "gracias por su suscripcion";
                }
            }
        }
                break;

            default:
                echo "Formulario desconocido.";
                break;
        }
    }

?>
    <div class="formulario-contenedor">
        <h2>Tienes una suscripcion activa ¡Renueva Ahora!</h2>
        <form action="" method="post" class="formulario">
        <input type="hidden" name="form_id" value="formulario_2">
            <div class="formulario-group">
                <label for="plan">Selecciona un Plan:</label>
                <select id="plan" name="plan" required>
                    <option value="" disabled selected>Elige un plan</option>
                </select>
            </div>
            <div class="formulario-group">
                <label for="terminos">
                    <input type="checkbox" id="terminos" name="terminos" required>
                    Acepto los <a href="/terminos-y-condiciones" target="_blank">términos y condiciones</a>
                </label>
            </div>
            <input type="submit" value="Enviar" class="formulario-submit">
        </form>

    </div>

    <div class="formulario-contenedor" <?php echo $status; ?>>
        <?php
        
        
        ?>
        <style>
            .servicios-lista {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .servicios-lista li {
                margin-bottom: 10px;
            }

            .formulario {
                /* max-width: 500px; */
                /* Ancho máximo del formulario */
                margin: 0 auto;
                /* Centrar el formulario en la página */
                padding: 20px;
                /* Espaciado interno */
                border: 1px solid #ccc;
                /* Borde del formulario */
                border-radius: 8px;
                /* Bordes redondeados */
                background-color: #f9f9f9;
                /* Fondo del formulario */
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                /* Sombra */
            }

            .formulario-group {
                margin-bottom: 15px;
                /* Espacio entre los grupos de campos */
            }

            .formulario label {
                display: block;
                /* Que las etiquetas ocupen todo el ancho */
                margin-bottom: 5px;
                /* Espacio entre la etiqueta y el campo */
                font-weight: bold;
                /* Negrita para las etiquetas */
            }

            .formulario input[type="email"],
            .formulario input[type="text"],
            .formulario input[type="password"],
            .formulario input[type="tel"],
            .formulario select {
                width: 100%;
                /* Que los campos ocupen todo el ancho */
                padding: 10px;
                /* Espaciado interno en los campos */
                border: 1px solid #ccc;
                /* Borde de los campos */
                border-radius: 4px;
                /* Bordes redondeados en los campos */
                box-sizing: border-box;
                /* Incluye padding y borde en el ancho total */
            }

            .formulario input[type="checkbox"] {
                margin-right: 5px;
                /* Espacio a la derecha del checkbox */
            }

            .formulario-submit {
                background-color: #007BFF;
                /* Color de fondo del botón */
                color: white;
                /* Color del texto del botón */
                border: none;
                /* Sin borde */
                padding: 10px 15px;
                /* Espaciado interno del botón */
                border-radius: 4px;
                /* Bordes redondeados */
                cursor: pointer;
                /* Cambia el cursor al pasar por encima */
                transition: background-color 0.3s;
                /* Efecto de transición */
            }

            .formulario-submit:hover {
                background-color: #0056b3;
                /* Color de fondo al pasar el cursor */
            }
        </style>

        <!-- Formulario HTML -->
        <form action="" method="post" class="formulario" onsubmit="return validarCheckbox()">
        <input type="hidden" name="form_id" value="formulario_1">
            <div class="formulario-group">
                <label for="correo">Correo de Contacto:</label>
                <input type="email" id="correo" name="correo" required>
            </div>

            <div class="formulario-group">
                <label for="nom_usuario">Nombre de Usuario:</label>
                <input type="text" id="nom_usuario" name="nom_usuario" required>
            </div>

            <div class="formulario-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" minlength="8" required>
            </div>

            <div class="formulario-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="servicios">Servicios que ofreces</label>
                <ul class="servicios-lista">
                    <?php
                    global $wpdb;
                    $servicios = $wpdb->get_results("SELECT id, nombre FROM wp_catalogo_servicios WHERE estatus = 'Activo'", ARRAY_A);

                    if (!empty($servicios)) {
                        foreach ($servicios as $servicio_nombre) {
                    ?>
                            <li>
                                <label for="<?php echo esc_attr($servicio_nombre['nombre']); ?>" class="servicio-item">
                                    <input type="checkbox"
                                        name="servicios[]"
                                        id="<?php echo esc_attr($servicio_nombre['id']); ?>"
                                        value="<?php echo esc_attr($servicio_nombre['id']); ?>">
                                    <span><?php echo esc_html($servicio_nombre['nombre']); ?></span>
                                </label>
                            </li>
                        <?php
                        }
                    } else {
                        ?>
                        <input type="text" name="" id="" value="No hay servicios disponibles" disabled>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="formulario-group">
                <label for="plan">Selecciona un Plan:</label>
                <select id="plan" name="plan" required>
                    <option value="" disabled selected>Elige un plan</option>

                </select>
            </div>
            <div class="formulario-group">
                <label for="terminos">
                    <input type="checkbox" id="terminos" name="terminos" required>
                    Acepto los <a href="/terminos-y-condiciones" target="_blank">términos y condiciones</a>
                </label>
            </div>

            <input type="submit" value="Enviar" class="formulario-submit">
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const selectPlan = document.getElementById('plan');

                // Función para cargar los servicios activos
                function cargarServiciosActivos() {
                    fetch('<?php echo admin_url("admin-ajax.php"); ?>?action=get_active_services')
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                data.data.forEach(servicio => {
                                    const option = document.createElement('option');
                                    option.value = servicio.id;
                                    option.textContent = servicio.nombre;
                                    selectPlan.appendChild(option);
                                });
                            } else {
                                console.error('No se encontraron servicios activos');
                            }
                        })
                        .catch(error => console.error('Error en la solicitud AJAX:', error));
                }

                // Llamar a la función para cargar servicios al cargar la página
                cargarServiciosActivos();
            });

            function validarCheckbox() {
                const checkboxes = document.querySelectorAll('input[name="servicios[]"]:checked');
                if (checkboxes.length === 0) {
                    alert('Por favor, selecciona al menos un servicio.');
                    return false; // Evita el envío del formulario
                }
                return true; // Permite el envío del formulario
            }
        </script>
    </div>
<?php

    /* include get_template_directory() . '/formulario-suscriptor.php'; */
    return ob_get_clean();
}
add_shortcode('formulario_personalizado', 'cargar_formulario_personalizado');

// Agregar opciones dinámicas de servicios al formulario de Contact Form 7
function cargar_servicios_activos($tag)
{
    if ($tag['name'] !== 'servicio_activo') return $tag;

    global $wpdb;
    $resultados = $wpdb->get_results("SELECT id, nombre FROM wp_catalogo_servicios WHERE estatus = 'Activo'", ARRAY_A);

    if ($resultados) {
        $opciones = [];
        $i = 0;
        foreach ($resultados as $servicio) {
            if ($i == 0) {
                $opciones[] = "Seleccione un servicio";
                $values[] = "";
            }
            $opciones[] = $servicio['nombre'];
            $values[] = $servicio['id'];
            $i++;
        }
        $tag['raw_values'] = $opciones;
        $tag['values'] = $values;
        $tag['labels'] = $opciones;
    } else {
        $tag['raw_values'] = ['No hay servicios activos disponibles'];
        $tag['values'] = [''];
        $tag['labels'] = ['No hay servicios activos disponibles'];
    }

    return $tag;
}
add_filter('wpcf7_form_tag', 'cargar_servicios_activos', 10, 2);

function mostrar_catalogo_servicios_shortcode()
{
    global $wpdb;

    ob_start(); // Iniciar el almacenamiento en buffer de salida

    // Verificar si se ha enviado un formulario para actualizar el servicio
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['servicio_id'])) {
        $servicio_id = intval($_POST['servicio_id']);
        $nuevo_nombre = sanitize_text_field($_POST['nuevo_nombre']);
        $nuevo_estatus = sanitize_text_field($_POST['nuevo_estatus']);

        // Actualizar el servicio en la base de datos
        $wpdb->update(
            'wp_catalogo_servicios',
            array(
                'nombre' => $nuevo_nombre,
                'estatus' => $nuevo_estatus,
                'fecha_registro' => current_time('mysql') // Actualizar la fecha de registro si es necesario
            ),
            array('id' => $servicio_id),
            array('%s', '%s', '%s'), // Tipos de datos a actualizar (nombre, estatus y fecha)
            array('%d') // Tipo de dato de la condición (id es int)
        );
    }

    // Verificar si se ha enviado un formulario para crear un nuevo servicio
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nuevo_servicio'])) {
        $nuevo_nombre_servicio = sanitize_text_field(trim($_POST['nuevo_servicio']));
        $nuevo_estatus_servicio = sanitize_text_field($_POST['nuevo_estatus_servicio']);

        // Verificar si ya existe un servicio con ese nombre
        if (nombre_servicio_exists($nuevo_nombre_servicio)) {
            echo '<div class="error">El nombre del servicio ya existe. Por favor, elige otro nombre.</div>';
        } else {
            // Guardar el nuevo servicio en la base de datos
            guardar_servicio($nuevo_nombre_servicio, $nuevo_estatus_servicio);
            echo '<div class="success">Servicio creado con éxito: ' . esc_html($nuevo_nombre_servicio) . '</div>';
        }
    }

    // Filtrar servicios
    $nombre_filtro = isset($_POST['filtro_nombre']) ? sanitize_text_field($_POST['filtro_nombre']) : '';
    $estatus_filtro = isset($_POST['filtro_estatus']) ? sanitize_text_field($_POST['filtro_estatus']) : '';

    $query = "SELECT * FROM wp_catalogo_servicios WHERE 1=1";
    if ($nombre_filtro) {
        $query .= $wpdb->prepare(" AND nombre LIKE %s", '%' . $wpdb->esc_like($nombre_filtro) . '%');
    }
    if ($estatus_filtro) {
        $query .= $wpdb->prepare(" AND estatus = %s", $estatus_filtro);
    }
    $servicios = $wpdb->get_results($query);

?>
    <style>
        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, color 0.15s ease-in-out;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-info {
            color: white;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
            border-color: #138496;
            color: white;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .filter-style {
            padding-bottom: 20px;
            justify-content: end;
            display: flex;
        }

        .error {
            color: red;
            /* Color del texto de error */
            margin-bottom: 15px;
            /* Espacio inferior */
        }

        .success {
            color: green;
            /* Color del texto de éxito */
            margin-bottom: 15px;
            /* Espacio inferior */
        }

        .div-center {
            display: flex;
            justify-content: end;
            padding-bottom: 10px;
        }
    </style>

    <section>
        <!-- Filtro para buscar servicios -->
        <div class="filter-style">
            <form method="POST" action="">
                <input type="text" name="filtro_nombre" class="form-control" placeholder="Buscar por Nombre" value="<?php echo esc_attr($nombre_filtro); ?>">
                <select name="filtro_estatus" class="form-control">
                    <option value="">-- Seleccionar Estatus --</option>
                    <option value="Activo" <?php selected($estatus_filtro, 'Activo'); ?>>Activo</option>
                    <option value="Inactivo" <?php selected($estatus_filtro, 'Inactivo'); ?>>Inactivo</option>
                </select>
                <button type="submit" class="btn btn-info">Buscar</button>
            </form>
        </div>

        <!-- Tabla de servicios existentes -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <form method="POST" action="">
                    <tr>
                        <td></td>
                        <td><input type="text" name="nuevo_servicio" class="form-control" placeholder="Nombre del Servicio" required></td>
                        <td>
                            <select name="nuevo_estatus_servicio" class="form-control" required>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </td>
                        <td><button type="submit" class="btn btn-success">Crear Servicio</button></td>
                    </tr>
                </form>
                <?php if ($servicios): ?>
                    <?php foreach ($servicios as $servicio): ?>
                        <tr>
                            <td><?php echo esc_html($servicio->id); ?></td>
                            <td><?php echo esc_html($servicio->nombre); ?></td>
                            <td><?php echo esc_html($servicio->estatus); ?></td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" name="servicio_id" value="<?php echo esc_attr($servicio->id); ?>">
                                    <input type="text" name="nuevo_nombre" class="form-control" placeholder="Nuevo Nombre" value="<?php echo esc_attr($servicio->nombre); ?>" required>
                                    <select name="nuevo_estatus" class="form-control" required>
                                        <option value="Activo" <?php selected($servicio->estatus, 'Activo'); ?>>Activo</option>
                                        <option value="Inactivo" <?php selected($servicio->estatus, 'Inactivo'); ?>>Inactivo</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">
                            <center>No se encontraron servicios.</center>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
<?php

    return ob_get_clean(); // Devolver el contenido almacenado
}


// Función para verificar si el nombre del servicio ya existe
function nombre_servicio_exists($nombre)
{
    global $wpdb; // Acceso a la base de datos de WordPress

    // Consulta para verificar si ya existe el servicio
    $query = $wpdb->prepare("SELECT COUNT(*) FROM wp_catalogo_servicios WHERE nombre = %s", $nombre);
    $count = $wpdb->get_var($query);

    return $count > 0; // Devuelve true si existe, false si no
}

// Suponiendo que ya tienes una función para guardar el servicio
function guardar_servicio($nombre_servicio, $estatus_servicio)
{
    global $wpdb; // Acceso a la base de datos de WordPress

    // Guardar el servicio en la base de datos
    $wpdb->insert('wp_catalogo_servicios', [
        'nombre' => $nombre_servicio,
        'estatus' => $estatus_servicio,
        'fecha_registro' => current_time('mysql'),
    ]);
}

add_shortcode('mostrar_catalogo_servicios', 'mostrar_catalogo_servicios_shortcode');


add_action('wpcf7_before_send_mail', 'evitar_envio_correo');

function evitar_envio_correo($contact_form)
{
    // Verifica que estamos trabajando con el formulario correcto
    if ($contact_form->id() == 18) { // Cambia 18 por el ID de tu formulario
        // Evita que se envíe el correo
        $contact_form->skip_mail = true;
    }
}

add_action('wpcf7_mail_sent', 'guardar_solicitud');

function guardar_solicitud($contact_form)
{
    // Obtén los datos del formulario
    $submission = WPCF7_Submission::get_instance();
    if ($submission) {
        $data = $submission->get_posted_data();

        // Aquí obtenemos el ID del usuario activo
        $user_id = get_current_user_id();

        // Asumiendo que el ID del servicio es enviado desde el formulario
        $servicio_id = sanitize_text_field($data['servicio_activo']);
        $guru_id = sanitize_text_field($data['guru']);
        $mensaje = sanitize_textarea_field($data['message']);

        global $wpdb;

        // Verifica si ya existe un registro con el mismo user_id y servicio_id en estado pendiente
        $existing_request = $wpdb->get_var($wpdb->prepare("
            SELECT COUNT(*)
            FROM wp_solicitudes
            WHERE user_id = %d AND guru_id = %d AND servicio = %s AND estatus = 'pendiente'
        ", $user_id, $guru_id, $servicio_id));

        if ($existing_request > 0) {
            // Muestra una alerta
            // Aquí puedes enviar un mensaje en un formato que se adapte a tu implementación
            // Por ejemplo, puedes almacenar el mensaje en una variable global o en el mismo $_SESSION para manejarlo más adelante
            echo '<script>alert("Ya tienes una solicitud pendiente para este servicio.");</script>';
        } else {
            // Inserta el nuevo registro en la tabla
            $wpdb->insert('wp_solicitudes', array(
                'user_id' => $user_id,
                'guru_id' => $guru_id,
                'servicio' => $servicio_id,
                'mensaje' => $mensaje,
                'estatus' => 'pendiente',
            ));
        }
    }
}



function editar_perfil_shortcode()
{
    ob_start(); // Captura la salida del formulario para retornarla
    $all_cookies = $_COOKIE;

    // Buscar la cookie 'wordpress_logged_in'
    foreach ($all_cookies as $key => $value) {
        if (strpos($key, 'wordpress_logged_in_') === 0) { // Verifica que comience con 'wordpress_logged_in_'
            $logged_in_cookie = $value;

            if (isset($logged_in_cookie)) {
                $parts = explode('|', $logged_in_cookie);
                if (count($parts) >= 3) {
                    $username = $parts[0];
                    global $wpdb;

                    $user_data = $wpdb->get_row(
                        $wpdb->prepare(
                            "SELECT * FROM `wp_users` WHERE `user_login` = %s;",
                            $username
                        ),
                        ARRAY_A
                    );
                } else {
                    echo "formato de cookie no valido";
                }
            }
            /*  break; */ // Salimos del bucle si encontramos la cookie
        }
    }
    $id_usu = get_current_user_id();
    $tabla_relacional = $wpdb->prefix . 'servicios_usuarios';
    $servicios_seleccionados = $wpdb->get_col(
        $wpdb->prepare(
            "SELECT id_servicio FROM $tabla_relacional WHERE id_usuario = %d",
            $id_usu
        )
    );


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $nickname = sanitize_text_field($_POST['nickname']);
        $descripcion = sanitize_textarea_field($_POST['descripcion']);
        $correo = sanitize_email($_POST['correo']);
        $password = sanitize_text_field($_POST['password']);

        global $wpdb;

        if ($password == null || $password == "") {
            $query = $wpdb->prepare(
                "UPDATE `wp_users` SET `user_nicename` = %s, `user_email` = %s , `user_description` =%s WHERE `ID` = %d",
                $nickname,
                $correo,
                $descripcion,
                $id_usu
            );
            $wpdb->query($query);

            if (isset($_POST['servicios'])) {
                $servicios_seleccionados = array_map('sanitize_text_field', $_POST['servicios']);

                $servicios_almacenados = $wpdb->get_col(
                    $query = $wpdb->prepare(
                        "SELECT id_servicio FROM $tabla_relacional WHERE id_usuario = %d",
                        $id_usu
                    )
                );

                $servicios_nuevos = array_diff($servicios_seleccionados, $servicios_almacenados);
                $servicios_eliminar = array_diff($servicios_almacenados, $servicios_seleccionados);

                foreach ($servicios_eliminar as $servicio_id) {

                    $query = $wpdb->prepare(
                        "DELETE FROM `wp_servicios_usuarios` WHERE `id_servicio` = %d AND `id_usuario` = %d",
                        $servicio_id,
                        $id_usu
                    );

                    $wpdb->query($query);
                }

                foreach ($servicios_nuevos as $servicio_id) {
                    $query = $wpdb->prepare(
                        "INSERT INTO $tabla_relacional (id_usuario, id_servicio) VALUES (%d, %d)",
                        $id_usu,
                        $servicio_id
                    );
                    error_log("Consulta INSERT: $query");
                    $wpdb->query($query);
                }
            } else {
                $servicios_seleccionados = [];

                $servicios_almacenados = $wpdb->get_col(
                    $query = $wpdb->prepare(
                        "SELECT id_servicio FROM $tabla_relacional WHERE id_usuario = %d",
                        $id_usu
                    )
                );

                $servicios_nuevos = array_diff($servicios_seleccionados, $servicios_almacenados);
                $servicios_eliminar = array_diff($servicios_almacenados, $servicios_seleccionados);

                foreach ($servicios_eliminar as $servicio_id) {

                    $query = $wpdb->prepare(
                        "DELETE FROM `wp_servicios_usuarios` WHERE `id_servicio` = %d AND `id_usuario` = %d",
                        $servicio_id,
                        $id_usu
                    );

                    $wpdb->query($query);
                }
            }
        } else {
            $hashed_passwprd = wp_hash_password($password);
            $query = $wpdb->prepare(
                "UPDATE `wp_users`
                    SET user_pass = %s,
                        user_nicename = %s,
                        user_email = %s,
                        user_description = %s
                    WHERE ID = %d",
                $hashed_passwprd,
                $nickname,
                $correo,
                $descripcion,
                $id_usu
            );
            $wpdb->query($query);

            if (isset($_POST['servicios'])) {
                $servicios_seleccionados = array_map('sanitize_text_field', $_POST['servicios']);

                $servicios_almacenados = $wpdb->get_col(
                    $query = $wpdb->prepare(
                        "SELECT id_servicio FROM $tabla_relacional WHERE id_usuario = %d",
                        $id_usu
                    )
                );

                $servicios_nuevos = array_diff($servicios_seleccionados, $servicios_almacenados);
                $servicios_eliminar = array_diff($servicios_almacenados, $servicios_seleccionados);

                foreach ($servicios_eliminar as $servicio_id) {

                    $query = $wpdb->prepare(
                        "DELETE FROM `wp_servicios_usuarios` WHERE `id_servicio` = %d AND `id_usuario` = %d",
                        $servicio_id,
                        $id_usu
                    );

                    $wpdb->query($query);
                }

                foreach ($servicios_nuevos as $servicio_id) {
                    $query = $wpdb->prepare(
                        "INSERT INTO $tabla_relacional (id_usuario, id_servicio) VALUES (%d, %d)",
                        $id_usu,
                        $servicio_id
                    );
                    error_log("Consulta INSERT: $query");
                    $wpdb->query($query);
                }
            } else {
                $servicios_seleccionados = [];

                $servicios_almacenados = $wpdb->get_col(
                    $query = $wpdb->prepare(
                        "SELECT id_servicio FROM $tabla_relacional WHERE id_usuario = %d",
                        $id_usu
                    )
                );

                $servicios_nuevos = array_diff($servicios_seleccionados, $servicios_almacenados);
                $servicios_eliminar = array_diff($servicios_almacenados, $servicios_seleccionados);

                foreach ($servicios_eliminar as $servicio_id) {

                    $query = $wpdb->prepare(
                        "DELETE FROM `wp_servicios_usuarios` WHERE `id_servicio` = %d AND `id_usuario` = %d",
                        $servicio_id,
                        $id_usu
                    );

                    $wpdb->query($query);
                }
            }
        }
    } else {
        /* echo "Hubo un error en la actualizacion de datos"; */
    }

?>
    <h1>Editar Perfil</h1>
    <div class="profile-form">
        <form action="" method="POST" onsubmit="return validarCheckbox()">
            <div class="form-group">
                <label for="login">Login(Este dato no se puede modificar)</label>
                <input type="text" id="login" name="login" placeholder="Ingrese su login" value="<?php echo esc_attr($user_data['user_login']); ?>" disabled>
            </div>
            <div class="form-group">
                <label for="nickname">Nickname</label>
                <input type="text" id="nickname" name="nickname" placeholder="Ingrese su nickname" value="<?php echo esc_attr($user_data['user_nicename']); ?>" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" style="resize: none;" name="descripcion" rows="4" placeholder="Inserta aqui una descripcion de tu perfil"><?php echo esc_html($user_data['user_description']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="correo">Correo de contacto</label>
                <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" value="<?php echo esc_attr($user_data['user_email']); ?>" required>
            </div>
            <div class="form-group">
                <label for="servicios">Servicios que ofreces</label>
                <ul class="servicios-lista">
                    <?php
                    global $wpdb;
                    $servicios = $wpdb->get_results("SELECT id, nombre FROM wp_catalogo_servicios WHERE estatus = 'Activo'", ARRAY_A);

                    if (!empty($servicios)) {
                        foreach ($servicios as $servicio_nombre) {
                            $checked = in_array($servicio_nombre['id'], $servicios_seleccionados) ? 'checked' : ' ';
                    ?>
                            <li>
                                <label for="<?php echo esc_attr($servicio_nombre['nombre']); ?>" class="servicio-item">
                                    <input type="checkbox"
                                        name="servicios[]"
                                        id="<?php echo esc_attr($servicio_nombre['id']); ?>"
                                        value="<?php echo esc_attr($servicio_nombre['id']); ?>" <?php echo $checked; ?>>

                                    <span><?php echo esc_html($servicio_nombre['nombre']); ?></span>
                                </label>
                            </li>
                        <?php
                        }
                    } else {
                        ?>
                        <input type="text" name="" id="" value="No hay servicios disponibles" disabled>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="form-group">
                <label for="password">Nueva contraseña</label>
                <input type="password" id="password" name="password" minlength="8" placeholder="Ingrese su nueva contraseña">
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Guardar Cambios</button>
            </div>
        </form>
    </div>
    <style>
        .servicios-lista {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .servicios-lista li {
            margin-bottom: 10px;
        }

        /* Alineación de los elementos */
        .servicio-item {
            display: flex;
            align-items: center;
            gap: 8px;
            /* Espacio entre el checkbox y el texto */
            font-size: 16px;
            /* Ajustar el tamaño del texto */
            font-weight: normal;
            /* Ajusta el peso del texto si es necesario */
        }

        /* Estilos específicos para el checkbox */
        .servicio-item input[type="checkbox"] {
            margin: 0;
            /* Elimina margen predeterminado */
            width: 18px;
            height: 18px;
            /* Ajustar tamaño si es necesario */
            cursor: pointer;
        }

        .profile-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin: auto;
        }

        .profile-form h1 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
            width: 98%;
        }

        .form-group label {
            display: flex;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function validarCheckbox() {
            const checkboxes = document.querySelectorAll('input[name="servicios[]"]:checked');
            if (checkboxes.length === 0) {
                alert('Por favor, selecciona al menos un servicio.');
                return false; // Evita el envío del formulario
            }
            return true; // Permite el envío del formulario
        }
    </script>
<?php
    return ob_get_clean(); // Retorna el contenido capturado
}
add_shortcode('editar_perfil', 'editar_perfil_shortcode');




function enviar_solicitudes_shortcode()
{
    $usuarios_guru = get_users([
        'role' => 'guru',
        'orderby' => 'display_name', // Ordenar por nombre
        'order' => 'ASC'
    ]);
    ob_start();



?> <h1 style="text-align: center;">¡Contactanos!</h1>
    <p style="padding-left: 40px; text-align: center;">Conecta con nosotros y encuentra respuestas a tus preguntas.</p>
    <p style="padding-left: 40px; text-align: center;">Accede a una visión general de lo que te depara el destino.</p>
    <p style="padding-left: 40px; text-align: center;">¡Atrévete a sumergirte en las páginas de una buena historia y deja que la magia de la lectura transforme tu mundo!</p>

    <div class="profile-form">
        <form action="" method="POST" class="formulario">
            <div class="form-group">
                <input type="email" id="" name="" placeholder="Ingrese su correo electronico" value="" required>
            </div>
            <div class="form-group">
                <input type="tel" id="" name="" maxlength="10" placeholder="Ingrese su numero de telefono a 10 digitos" value="" required>
            </div>
            <div class="form-group">
                <select name="guru" id="guru" class="form-control" required>
                    <option value="" disabled selected>Seleccione un guru</option>
                    <?php
                    foreach ($usuarios_guru as $usuario):
                    ?>
                        <option value="<?php echo esc_attr($usuario->ID); ?>"><?php echo esc_attr($usuario->display_name) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group" id="servicio-group" style="display:none;">
                <select name="servicio" id="servicio" class="form-control" required>
                    <option value="" disabled selected>Seleccione un servicio</option>

                </select>
            </div>
            <div class="form-group">
                <textarea id="descripcion" style="resize: none;" name="descripcion" rows="10" placeholder="Inserta aqui tu mensaje"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Enviar</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const guruSelect = document.getElementById('guru');
            const servicioGroup = document.getElementById('servicio-group');
            const servicioSelect = document.getElementById('servicio');
            const form = document.querySelector('.formulario');

            guruSelect.addEventListener('change', function() {
                const guruId = guruSelect.value;

                if (guruId) {
                    servicioGroup.style.display = 'block';
                    servicioSelect.innerHTML = '<option value="" disabled selected>Cargando servicios...</option>';

                    fetch('<?php echo admin_url('admin-ajax.php'); ?>?action=obtener_servicios&guru_id=' + guruId)
                        .then(response => response.json())
                        .then(data => {
                            servicioSelect.innerHTML = '<option value="" disabled selected>Seleccione un servicio</option>';
                            data.forEach(servicio => {
                                const option = document.createElement('option');
                                option.value = servicio.id;
                                option.textContent = servicio.nombre;
                                servicioSelect.appendChild(option);
                            });
                        })
                        .catch(error => {
                            console.error('Error al cargar los servicios:', error);
                            servicioSelect.innerHTML = '<option value="" disabled>Error al cargar servicios</option>';
                        });
                } else {
                    servicioGroup.style.display = 'none';
                }
            });

            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(form);

                fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                        method: 'POST',
                        body: new URLSearchParams({
                            action: 'guardar_solicitud',
                            correo: formData.get('correo'),
                            telefono: formData.get('telefono'),
                            guru: formData.get('guru'),
                            servicio: formData.get('servicio'),
                            descripcion: formData.get('descripcion')
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Solicitud guardada exitosamente.');
                            form.reset();
                        } else {
                            alert('Error: ' + data.data);
                        }
                    })
                    .catch(error => {
                        console.error('Error al enviar el formulario:', error);
                        alert('Ocurrió un error al enviar el formulario.');
                    });
            });
        });
    </script>

    <style>
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .formulario input[type="email"],
        .formulario input[type="text"],
        .formulario input[type="tel"],
        .formulario select {
            width: 100%;
            /* Que los campos ocupen todo el ancho */
            padding: 10px;
            /* Espaciado interno en los campos */
            border: 1px solid #ccc;
            /* Borde de los campos */
            border-radius: 4px;
            /* Bordes redondeados en los campos */
            box-sizing: border-box;
            /* Incluye padding y borde en el ancho total */
        }

        .servicios-lista {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .servicios-lista li {
            margin-bottom: 10px;
        }

        /* Alineación de los elementos */
        .servicio-item {
            display: flex;
            align-items: center;
            gap: 8px;
            /* Espacio entre el checkbox y el texto */
            font-size: 16px;
            /* Ajustar el tamaño del texto */
            font-weight: normal;
            /* Ajusta el peso del texto si es necesario */
        }

        /* Estilos específicos para el checkbox */
        .servicio-item input[type="checkbox"] {
            margin: 0;
            /* Elimina margen predeterminado */
            width: 18px;
            height: 18px;
            /* Ajustar tamaño si es necesario */
            cursor: pointer;
        }

        .profile-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            /* max-width: 400px; */
            margin: auto;
        }

        .profile-form h1 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: flex;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
<?php
    return ob_get_clean();
}

add_shortcode('enviar_solicitudes', 'enviar_solicitudes_shortcode');

/* [contact-form-7 id="fccbb23" title="Formulario de Contacto"] */


// Función AJAX para obtener servicios por gurú
function obtener_servicios_por_usuario()
{
    global $wpdb;

    if (!isset($_GET['guru_id'])) {
        wp_send_json_error('ID de gurú no proporcionado.');
        wp_die();
    }

    $guru_id = intval($_GET['guru_id']);
    $tabla_servicios_usuarios = $wpdb->prefix . 'servicios_usuarios';
    $tabla_services = $wpdb->prefix . 'catalogo_servicios';

    $id_servicios = $wpdb->get_col($wpdb->prepare(
        "SELECT id_servicio FROM $tabla_servicios_usuarios WHERE id_usuario = %d",
        $guru_id
    ));

    if (empty($id_servicios)) {
        wp_send_json([]);
        wp_die();
    }

    $placeholders = implode(',', array_fill(0, count($id_servicios), '%d'));
    $query = "SELECT id, nombre FROM $tabla_services WHERE id IN ($placeholders)";
    $servicios = $wpdb->get_results($wpdb->prepare($query, $id_servicios));

    wp_send_json($servicios);
    wp_die();
}
add_action('wp_ajax_obtener_servicios', 'obtener_servicios_por_usuario');
add_action('wp_ajax_nopriv_obtener_servicios', 'obtener_servicios_por_usuario');

// Función AJAX para guardar solicitud
function guardar_solicitud2()
{
    global $wpdb;

    // Verificamos que los datos requeridos existan
    if (!isset($_POST['guru']) || !isset($_POST['servicio']) || !isset($_POST['descripcion'])) {
        wp_send_json_error('Faltan datos requeridos.');
        wp_die();
    }

    // Obtenemos los datos del formulario
    $guru_id = intval($_POST['guru']);
    $servicio_id = intval($_POST['servicio']);
    $descripcion = sanitize_textarea_field($_POST['descripcion']);

    // Tabla de servicios
    $tabla_services = $wpdb->prefix . 'catalogo_servicios';

    // Obtenemos el nombre del servicio
    $servicio = $wpdb->get_row($wpdb->prepare(
        "SELECT nombre FROM $tabla_services WHERE id = %d",
        $servicio_id
    ));

    if (!$servicio) {
        wp_send_json_error('El servicio seleccionado no existe.');
        wp_die();
    }

    // Insertamos la solicitud en la tabla wp_solicitudes
    $tabla_solicitudes = $wpdb->prefix . 'solicitudes';

    $resultado = $wpdb->insert(
        $tabla_solicitudes,
        [
            'user_id' => $guru_id, // ID del guru
            'servicio' => $servicio->nombre, // Nombre del servicio
            'mensaje' => $descripcion, // Descripción del mensaje
        ],
        ['%d', '%s', '%s']
    );

    if ($resultado) {
        wp_send_json_success('Solicitud guardada correctamente.');
    } else {
        wp_send_json_error('Error al guardar la solicitud.');
    }

    wp_die();
}
add_action('wp_ajax_guardar_solicitud', 'guardar_solicitud2');
add_action('wp_ajax_nopriv_guardar_solicitud', 'guardar_solicitud2');


function mostrar_tarjetas_gurus_shortcode()
{
    global $wpdb;

    // Obtener datos de los gurús
    $usuarios_guru = get_users([
        'role' => 'guru',
        'orderby' => 'display_name',
        'order' => 'ASC'
    ]);

    // Tabla de servicios por gurú
    $tabla_servicios_usuarios = $wpdb->prefix . 'servicios_usuarios';
    $tabla_services = $wpdb->prefix . 'catalogo_servicios';

    ob_start();
?>
    <div class="gurus-container">
        <?php foreach ($usuarios_guru as $guru): ?>
            <?php
            // Obtener servicios de cada gurú
            $id_servicios = $wpdb->get_col($wpdb->prepare(
                "SELECT id_servicio FROM $tabla_servicios_usuarios WHERE id_usuario = %d",
                $guru->ID
            ));

            $placeholders = implode(',', array_fill(0, count($id_servicios), '%d'));
            $servicios = $wpdb->get_results($wpdb->prepare(
                "SELECT nombre FROM $tabla_services WHERE id IN ($placeholders)",
                $id_servicios
            ));
            ?>
            <div class="guru-card" data-id="<?php echo $guru->ID; ?>"
                data-name="<?php echo esc_attr($guru->display_name); ?>"
                data-description="<?php echo esc_attr($guru->user_description); ?>"
                data-services="<?php echo esc_attr(json_encode($servicios)); ?>">
                <h3><?php echo esc_html($guru->display_name); ?></h3>
                <p class="short-description">
                    <?php echo esc_html($guru->user_description); ?>
                </p>
                <button class="view-details">Ver más</button>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Modal -->
    <div id="guru-modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2 id="guru-name"></h2>
            <p id="guru-description"></p>
            <h3>Servicios:</h3>
            <ul id="guru-services"></ul>
        </div>
    </div>

    <style>
        /* Estilos para las tarjetas */
        .short-description {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* Mostrar solo 3 líneas */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 4.5em;
            /* Ajustar según el tamaño de la fuente */
        }

        .gurus-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .guru-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .guru-card h3 {
            margin-top: 0;
        }

        .guru-card button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        .guru-card button:hover {
            background-color: #0056b3;
        }

        /* Estilos para el modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            position: relative;
        }

        .modal-content .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('guru-modal'); // ID del modal
            const modalName = document.getElementById('guru-name');
            const modalDescription = document.getElementById('guru-description');
            const modalServices = document.getElementById('guru-services');
            const closeModal = document.querySelector('.close-button');

            document.querySelectorAll('.guru-card').forEach(card => {
                card.addEventListener('click', function() {
                    const name = this.getAttribute('data-name');
                    const description = this.getAttribute('data-description');
                    const services = JSON.parse(this.getAttribute('data-services'));

                    modalName.textContent = name;
                    modalDescription.textContent = description;

                    modalServices.innerHTML = '';
                    services.forEach(service => {
                        const li = document.createElement('li');
                        li.textContent = service.nombre;
                        modalServices.appendChild(li);
                    });

                    modal.style.display = 'flex';
                });
            });

            closeModal.addEventListener('click', function() {
                modal.style.display = 'none';
            });
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
<?php
    return ob_get_clean();
}
add_shortcode('mostrar_tarjetas_gurus', 'mostrar_tarjetas_gurus_shortcode');

//Ocultar la barra de menu
/* add_action('after_setup_theme', function () {
    if (current_user_can('manage_woocommerce') && !current_user_can('manage_options')) {
        show_admin_bar(false);
    }
}); */

add_filter('wp_nav_menu_objects', function ($items, $args) {
    // URLs específicas que deseas condicionar
    $url_iniciar_sesion = 'http://localhost/magiacali_orig/login/';
    $url_cerrar_sesion = 'http://localhost/magiacali_orig/wp-login.php?action=logout';

    // Verifica si el usuario está autenticado
    if (is_user_logged_in()) {
        // Usuario autenticado: elimina "Iniciar sesión"
        foreach ($items as $key => $item) {
            if ($item->url === $url_iniciar_sesion) {
                unset($items[$key]);
            }
        }
    } else {
        // Usuario no autenticado: elimina "Cerrar sesión"
        foreach ($items as $key => $item) {
            if ($item->url === $url_cerrar_sesion) {
                unset($items[$key]);
            }
        }
    }

    return $items;
}, 10, 2);


add_filter('wp_nav_menu_objects', function ($items, $args) {
    foreach ($items as $item) {
        error_log('Título: ' . $item->title . ' - URL: ' . $item->url);
    }
    return $items;
}, 10, 2);






