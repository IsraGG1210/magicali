<?php
/*
Template Name: Lista de Suscriptores
*/

get_header(); // Incluye el encabezado del tema

?>
<div class="container">
    <h1>Lista de Suscriptores</h1>
    <table class="widefat fixed" cellspacing="0" style="width:100%; border: 1px solid #ccc;">
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

<?php get_footer(); // Incluye el pie de página del tema ?>
