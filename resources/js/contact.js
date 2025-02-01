document.addEventListener('DOMContentLoaded', () => {
    // Nuevo código para añadir el prefijo +34 al campo teléfono
    const phoneInput = document.querySelector('input[name="phone"]');
    if(phoneInput){
        phoneInput.addEventListener('blur', () => {
            const val = phoneInput.value.trim();
            if(val && !val.startsWith('+34')){
                phoneInput.value = '+34 ' + val;
            }
        });
    }
    
    // Función para mostrar alertas personalizadas con estilos mejorados
    function showAlert(message, type = 'success') {
        // Si el mensaje es menor a 10 caracteres, lo prolongamos (se agregan asteriscos)
        if(message.length < 10) {
            message = message.padEnd(10, '*');
        }
        let alertContainer = document.getElementById('customAlert');
        if (!alertContainer) {
            alertContainer = document.createElement('div');
            alertContainer.id = 'customAlert';
            alertContainer.className = "fixed top-4 right-4 space-y-2 z-50";
            document.body.appendChild(alertContainer);
        }
        const alertDiv = document.createElement('div');
        alertDiv.className = type === 'success'
            ? "p-4 bg-green-500 text-white rounded-xl shadow-lg font-bold text-lg"
            : "p-4 bg-red-500 text-white rounded-xl shadow-lg font-bold text-lg";
        alertDiv.innerHTML = message;
        alertContainer.appendChild(alertDiv);
        setTimeout(() => {
            alertDiv.remove();
        }, 5000);
    }
    
    const form = document.querySelector('form[action$="/contact"]');
    if(form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            // Validación sencilla
            const formData = new FormData(form);
            if(!formData.get('name') || !formData.get('email') || !formData.get('message')) {
                showAlert('Completa los campos', 'error');
                return;
            }
            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    }
                });
                if(response.ok) {
                    const result = await response.json();
                    showAlert(result.message || 'Mensaje enviado correctamente.');
                    form.reset();
                } else {
                    showAlert('Error en envío', 'error');
                }
            } catch(error) {
                showAlert('Error de red', 'error');
            }
        });
    }
});
