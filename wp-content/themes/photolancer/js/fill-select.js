document.addEventListener('DOMContentLoaded', function() {
    // Realizar la solicitud al endpoint AJAX
    fetch(ajaxData.ajaxUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            'action': 'get_active_services'
        })
    })
    .then(response => response.json())
    .then(data => {
        const select = document.querySelector('select[name="opciones"]');
        select.innerHTML = '<option value="">Seleccione un plan</option>'; // Opción predeterminada

        if (data.success) {
            // Añadir cada servicio como una opción en el select
            data.data.forEach(servicio => {
                let option = document.createElement('option');
                option.value = servicio.id; // Asegúrate de que este valor sea válido
                option.textContent = servicio.nombre; // Asegúrate de que este texto sea correcto
                select.appendChild(option);
            });
        } else {
            console.error('Error al obtener los servicios: ', data.data);
        }
    })
    .catch(error => {
        console.error('Error en la solicitud AJAX: ', error);
    });
});

// Evitar la validación de Contact Form 7 en el formulario
document.addEventListener('wpcf7submit', function(event) {
    const select = document.querySelector('select[name="opciones"]');
    
    // Asegúrate de que se eliminen las clases de error
    select.classList.remove('wpcf7-not-valid');
    select.setAttribute('aria-invalid', 'false');

    // Aquí puedes omitir la validación y permitir que el formulario se envíe
    const form = event.target;
    form.submit(); // Envía el formulario manualmente
}, false);

// Deshabilitar el comportamiento predeterminado de validación en el envío
document.addEventListener('submit', function(event) {
    event.preventDefault(); // Evita el comportamiento de envío del formulario por defecto
}, false);
