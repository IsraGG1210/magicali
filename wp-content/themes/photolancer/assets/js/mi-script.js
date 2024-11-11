document.querySelector('.btn-add-to-cart').addEventListener('click', function() {
    const producto = this.dataset.producto; // Asumiendo que tienes el producto en un data attribute
    const userId = this.dataset.userId; // También puedes tener el ID del usuario

    // Hacer la solicitud AJAX
    fetch(ajax_object.ajax_url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            action: 'add_solicitud',
            user_id: userId,
            producto: producto,
        }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Solicitud añadida correctamente.');
        } else {
            alert('Hubo un error al añadir la solicitud.');
        }
    })
    .catch(error => console.error('Error:', error));
});
