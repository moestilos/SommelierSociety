document.addEventListener('DOMContentLoaded', function () {
    // Star rating
    const starContainer = document.getElementById('starRating');
    if (starContainer) {
        const starsInput = document.getElementById('stars');
        starContainer.querySelectorAll('.star-hover').forEach(star => {
            star.addEventListener('mouseover', () => {
                const value = +star.dataset.value;
                starContainer.querySelectorAll('.star-hover').forEach((s, i) => {
                    s.style.color = i < value ? '#FFFFFF' : '#FFFFFF40';
                    s.style.transform = i < value ? 'scale(1.2)' : 'scale(1)';
                    s.style.textShadow = i < value ? '0 0 5px #FFFFFF' : 'none';
                });
            });
            star.addEventListener('click', () => {
                const value = +star.dataset.value;
                starsInput.value = value;
                starContainer.querySelectorAll('.star-hover').forEach((s, i) => {
                    s.style.color = i < value ? '#FFFFFF' : '#FFFFFF40';
                    s.style.textShadow = i < value ? '0 0 5px #FFFFFF' : 'none';
                    s.classList.toggle('animate-pulse', i < value);
                });
            });
        });
    }

    // Image preview y click en imagen para subir archivo
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');
    if (imageInput && imagePreview) {
        imageInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = () => {
                imagePreview.querySelector('img').src = reader.result;
                imagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        });
        // Al hacer click en la vista previa o en su contenedor, activar el input file
        imagePreview.addEventListener('click', () => {
            imageInput.click();
        });
    }
 
    // Drag & drop en imagen
    const dropArea = document.querySelector('.group');
    if (dropArea) {
        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.classList.add('bg-gold-100/20');
        });
        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('bg-gold-100/20');
        });
        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            dropArea.classList.remove('bg-gold-100/20');
            const file = e.dataTransfer.files[0];
            if (!file) return;
            imageInput.files = e.dataTransfer.files;
            const reader = new FileReader();
            reader.onload = (e2) => {
                imagePreview.querySelector('img').src = e2.target.result;
                imagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        });
    }
 
    // Form submission con fetch
    const form = document.getElementById('resenaForm');
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (!document.getElementById('name').value.trim() ||
                !document.getElementById('review').value.trim() ||
                !document.getElementById('stars').value) {
                alert('Completa todos los campos necesarios antes de enviar.');
                return;
            }
            const button = form.querySelector('button[type="submit"]');
            button.innerHTML = '<div class="custom-loader"></div> Enviando...';
            button.disabled = true;
 
            const formData = new FormData(form);
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Agregamos la nueva reseña al principio del contenedor
                    const reviewsContainer = document.getElementById('reviewsContainer');
                    const newReview = document.createElement('div');
                    newReview.innerHTML = data.html;
                    reviewsContainer.prepend(newReview);
                    button.innerHTML = '✓ Reseña Enviada!';
                    button.classList.add('bg-green-500');
                    form.reset();
                } else {
                    alert('Error al enviar la reseña');
                }
                button.disabled = false;
                button.innerHTML = 'Publicar Reseña';
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error al enviar la reseña');
                button.disabled = false;
                button.innerHTML = 'Publicar Reseña';
            });
        });
    }
});