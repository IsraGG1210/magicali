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
function obtener_gurus_activos() {
    $args = array(
        'role'    => 'guru', // Cambia 'guru' al slug del rol que estás usando
        'fields' => array('ID', 'display_name') // Devuelve solo el ID y el nombre para el select
    );

    $usuarios = get_users($args);
    
    return $usuarios;
}

function cambiar_valor_option_js() {
    ?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
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

function rellenar_select_gurus($tag, $unused) {
    if ($tag['name'] === 'guru') {
        $gurus = obtener_gurus_activos();

        // Inicializa las opciones con la opción predeterminada
        $options = '<option value="">Selecciona un Gurú</option>'; // Opción predeterminada

        $i = 1;
        $container = "\n";
        foreach ($gurus as $guru) {
            // Agrega cada gurú a las opciones
            if(count($gurus) == $i){
                $container == "";
            }
            $options .= $container.'<option value="' . esc_attr($guru->ID) . '">' . esc_html($guru->display_name) . '</option>';
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
function agregar_campo_suscripcion_usuario($user) {
    if(in_array('subscriber', $user->roles)) {
    ?>
        <h3>Estado de Suscripción</h3>
        <table class="form-table">
            <tr>
                <th><label for="suscripcion_activa">Suscripción Activa</label></th>
                <td>
                    <input type="checkbox" name="suscripcion_activa" id="suscripcion_activa" value="1" <?php checked( get_user_meta( $user->ID, 'suscripcion_activa', true ), '1' ); ?> />
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
function guardar_campo_suscripcion_usuario($user_id) {
    if(!current_user_can('edit_user', $user_id)) {
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
function agregar_menu_suscriptores() {
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
function mostrar_suscriptores() {
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
function mostrar_suscriptores_shortcode() {
    ob_start(); // Iniciar el almacenamiento en buffer de salida

    // Verificar si se ha enviado un formulario para activar/desactivar suscripciones
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && isset($_POST['user_id'])) {
        $user_id = intval($_POST['user_id']);
        $suscripcion_activa = get_user_meta($user_id, 'suscripcion_activa', true);
        $new_status = $suscripcion_activa == '1' ? '0' : '1';
        update_user_meta($user_id, 'suscripcion_activa', $new_status);
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
        .filter-style{
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
                                                    <th>Suscripción Activa</th>
                                                    <th>Acciones</th>
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

                                                // Filtrar usuarios
                                                if (!empty($users)) {
                                                    // Filtrar resultados
                                                    $filtered_users = array_filter($users, function($user) use ($nombre, $email, $estatus) {
                                                        $suscripcion_activa = get_user_meta($user->ID, 'suscripcion_activa', true);
                                                        return (!$nombre || stripos($user->display_name, $nombre) !== false) &&
                                                               (!$email || stripos($user->user_email, $email) !== false) &&
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
                                                        ?>
                                                        <tr style="height: 50px; border-bottom: 1px solid #ccc; vertical-align: middle;">
                                                            <td><?php echo esc_html($user->ID); ?></td>
                                                            <td><?php echo esc_html($user->display_name); ?></td>
                                                            <td><?php echo esc_html($user->user_email); ?></td>
                                                            <td><?php echo $suscripcion_activa == '1' ? 'Activa' : 'Inactiva'; ?></td>
                                                            <td>
                                                                <form method="POST" style="display: inline;">
                                                                    <input type="hidden" name="user_id" value="<?php echo esc_attr($user->ID); ?>">
                                                                    <input type="hidden" name="action" value="<?php echo $suscripcion_activa == '1' ? 'deactivate' : 'activate'; ?>">
                                                                    <button type="submit" class="btn <?php echo $suscripcion_activa == '1' ? 'btn-danger' : 'btn-success'; ?>">
                                                                        <?php echo $suscripcion_activa == '1' ? 'Desactivar' : 'Activar'; ?>
                                                                    </button>
                                                                </form>
                                                                <button class="btn btn-info">Detalles</button>
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

function photolancer_enqueue_styles() {
    // Encolar el archivo de estilos principal del tema
    wp_enqueue_style('photolancer-style', get_stylesheet_uri());
    
    // Encolar otros estilos si es necesario
    // wp_enqueue_style('photolancer-custom', get_template_directory_uri() . '/path/to/your/custom.css');
}
add_action('wp_enqueue_scripts', 'photolancer_enqueue_styles');

//BOTON DEL CARRITO
add_action('wp_ajax_registrar_solicitud', 'registrar_solicitud');
add_action('wp_ajax_nopriv_registrar_solicitud', 'registrar_solicitud'); // Si deseas permitir que usuarios no autenticados envíen solicitudes



function registrar_solicitud() {
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
function mostrar_solicitudes_shortcode() {
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
                'estado' => $nuevo_estado, 
                'fecha_actualizacion' => current_time('mysql'), 
                'hora_solicitud' => $nueva_hora // Incluir la nueva hora
            ),
            array('id' => $solicitud_id),
            array('%s', '%s', '%s'), // Tipos de datos a actualizar (estado, fecha y hora)
            array('%d') // Tipo de dato de la condición (id es int)
        );
    }

    // Obtener filtros
    $nombre = isset($_POST['nombre']) ? sanitize_text_field($_POST['nombre']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $estado = isset($_POST['estado']) ? sanitize_text_field($_POST['estado']) : '';
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

    if ($estado) {
        $query .= $wpdb->prepare(" AND s.estado = %s", $estado);
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
        .filter-style{
            padding-bottom: 20px;
            justify-content: end;
            display: flex;
        }        .pagination {
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
                    <option value="pendiente" <?php selected($estado, 'pendiente'); ?>>Pendiente</option>
                    <option value="aceptada" <?php selected($estado, 'aceptada'); ?>>Aceptada</option>
                    <option value="rechazada" <?php selected($estado, 'rechazada'); ?>>Rechazada</option>
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
                                        <option value="aceptada" <?php selected($solicitud->estado, 'aceptada'); ?>>Aceptada</option>
                                        <option value="rechazada" <?php selected($solicitud->estado, 'rechazada'); ?>>Rechazada</option>
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

function get_active_services() {
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

function cargar_formulario_personalizado() {
    ob_start();
    include get_template_directory() . '/formulario-suscriptor.php';
    return ob_get_clean();
}
add_shortcode('formulario_personalizado', 'cargar_formulario_personalizado');

// Agregar opciones dinámicas de servicios al formulario de Contact Form 7
function cargar_servicios_activos($tag) {
    if ($tag['name'] !== 'servicio_activo') return $tag;

    global $wpdb;
    $resultados = $wpdb->get_results("SELECT id, nombre FROM wp_catalogo_servicios WHERE estatus = 'Activo'", ARRAY_A);

    if ($resultados) {
        $opciones = [];
        $i = 0;
        foreach ($resultados as $servicio) {
            if($i == 0){
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

function mostrar_catalogo_servicios_shortcode() {
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
            color: red; /* Color del texto de error */
            margin-bottom: 15px; /* Espacio inferior */
        }
        .success {
            color: green; /* Color del texto de éxito */
            margin-bottom: 15px; /* Espacio inferior */
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
                        <td colspan="4"><center>No se encontraron servicios.</center></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
    <?php

    return ob_get_clean(); // Devolver el contenido almacenado
}


// Función para verificar si el nombre del servicio ya existe
function nombre_servicio_exists($nombre) {
    global $wpdb; // Acceso a la base de datos de WordPress

    // Consulta para verificar si ya existe el servicio
    $query = $wpdb->prepare("SELECT COUNT(*) FROM wp_catalogo_servicios WHERE nombre = %s", $nombre);
    $count = $wpdb->get_var($query);

    return $count > 0; // Devuelve true si existe, false si no
}

// Suponiendo que ya tienes una función para guardar el servicio
function guardar_servicio($nombre_servicio, $estatus_servicio) {
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

function evitar_envio_correo($contact_form) {
    // Verifica que estamos trabajando con el formulario correcto
    if ($contact_form->id() == 18) { // Cambia 18 por el ID de tu formulario
        // Evita que se envíe el correo
        $contact_form->skip_mail = true;
    }
}

add_action('wpcf7_mail_sent', 'guardar_solicitud');

function guardar_solicitud($contact_form) {
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
