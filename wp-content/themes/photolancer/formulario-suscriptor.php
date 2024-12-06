<?php
/* Template Name: Formulario Personalizado */

// Asegúrate de incluir el encabezado del tema


?>

<div class="formulario-contenedor">
    <?php
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
            $query = $wpdb->prepare("SELECT * FROM 'wp_users' WHERE 'user_login' = %s OR 'user_email' = %s");
            $result = $wpdb->query($query);
            $conteo = count($result);
            die("numero de resultados" .$conteo );
            if ($result) {
                # code...
            }

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
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" class="formulario" onsubmit="return validarCheckbox()">
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

    <?php
    // Asegúrate de incluir el pie de página del tema
    get_footer();
