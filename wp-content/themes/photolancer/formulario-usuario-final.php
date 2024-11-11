<?php
/* Template Name: Formulario Personalizado */

// Asegúrate de incluir el encabezado del tema
?>

<div class="formulario-contenedor">
    <?php
    // Procesa el formulario cuando se envía
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitiza los datos del formulario para seguridad
        $correo = sanitize_email($_POST['correo']);
        $telefono = sanitize_text_field($_POST['telefono']);
        $plan = sanitize_text_field($_POST['plan']);
        $acepta_terminos = isset($_POST['terminos']) ? true : false;

        // Validación de términos y condiciones
        if (!$acepta_terminos) {
            echo "<p style='color: red;'>Debes aceptar los términos y condiciones.</p>";
        } else {
            // Aquí puedes realizar acciones como enviar un correo o guardar en la base de datos.
            // Ejemplo: wp_mail($correo_destinatario, "Nuevo mensaje de contacto", "Teléfono: $telefono, Plan: $plan");
            
            // Muestra un mensaje de agradecimiento
            echo "<p>Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.</p>";
        }
    }
    ?>

    <!-- Formulario HTML -->
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post" class="formulario">
        <div class="formulario-group">
            <label for="correo">Correo de Contacto:</label>
            <input type="email" id="correo" name="correo" required>
        </div>

        <div class="formulario-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
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
    </script>

    <?php
// Asegúrate de incluir el pie de página del tema
get_footer();