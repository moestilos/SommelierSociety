document.addEventListener('DOMContentLoaded', function () {
    console.log('resenas.js loaded');
    const form = document.getElementById('resenaForm');
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');
    const dropArea = document.querySelector('.group');

    // Vista previa de imagen
    imageInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.querySelector('img').src = e.target.result;
                imagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }
    });

    // Arrastrar y soltar archivos
    dropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropArea.classList.add('bg-[#d4af37]/20');
    });

    dropArea.addEventListener('dragleave', () => {
        dropArea.classList.remove('bg-[#d4af37]/20');
    });

    dropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dropArea.classList.remove('bg-[#d4af37]/20');
        // Agregamos console.log para verificar los archivos arrastrados
        console.log('Archivos arrastrados:', e.dataTransfer.files);

        imageInput.files = e.dataTransfer.files;
        const file = e.dataTransfer.files[0];
        const reader = new FileReader();
        reader.onload = function (e) {
            imagePreview.querySelector('img').src = e.target.result;
            imagePreview.classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    });

    // Envío del formulario
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(form);
        const submitButton = form.querySelector('button[type="submit"]');

        submitButton.disabled = true;
        submitButton.innerHTML = '<div class="custom-loader"></div> Enviando...';

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json',
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    submitButton.innerHTML = '✓ Reseña Enviada!';
                    submitButton.classList.add('bg-green-500');
                    // Mostrar mensaje de éxito
                    mostrarMensaje('Reseña enviada con éxito!', 'success');
                    setTimeout(() => window.location.reload(), 1500);
                } else {
                    throw new Error('Error en la respuesta del servidor.');
                }
            })
            .catch((error) => {
                console.error('Error:', error);
                submitButton.innerHTML = 'Publicar Reseña';
                submitButton.disabled = false;
                // Mostrar mensaje de error
                mostrarMensaje('Error al enviar la reseña. Por favor, inténtalo de nuevo.', 'error');
            });
    });

    // Función para mostrar mensajes
    function mostrarMensaje(texto, tipo) {
        const mensaje = document.createElement('div');
        mensaje.textContent = texto;
        mensaje.className = tipo === 'success' ? 'mensaje-exito' : 'mensaje-error';
        document.body.appendChild(mensaje);
        
        // Remover el mensaje después de 3 segundos
        setTimeout(() => {
            mensaje.remove();
        }, 3000);
    }
});