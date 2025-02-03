document.addEventListener('DOMContentLoaded', () => {
    /* Star rating optimizado */
    const starContainer = document.getElementById('starRating');
    if (starContainer) {
        const starsInput = document.getElementById('stars');
        const starElements = starContainer.querySelectorAll('.star-hover');
        
        const updateStars = (limit) => {
            starElements.forEach((s, i) => {
                s.style.color = '#FFFFFF';
                s.style.opacity = i < limit ? '1' : '0.5';
                s.style.textShadow = i < limit ? '0 0 4px #FFFFFF' : 'none';
                s.style.transform = i < limit ? 'scale(1.2)' : 'scale(1)';
            });
        };

        starElements.forEach(star => {
            star.addEventListener('mouseover', () => {
                const value = +star.dataset.value;
                updateStars(value);
            });
            star.addEventListener('click', () => {
                const value = +star.dataset.value;
                starsInput.value = value;
                updateStars(value);
            });
        });
        starContainer.addEventListener('mouseleave', () => {
            const selected = +starsInput.value || 0;
            updateStars(selected);
        });
    }

    /* Image preview optimizado */
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');
    if (imageInput && imagePreview) {
        imageInput.addEventListener('change', e => {
            const file = e.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = () => {
                imagePreview.querySelector('img').src = reader.result;
                imagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        });
        imagePreview.addEventListener('click', () => imageInput.click());
    }

    /* Form submission optimizado con async/await y verificación de respuesta */
    const form = document.getElementById('resenaForm');
    if (form) {
        form.addEventListener('submit', async (e) => {
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

            try {
                const formData = new FormData(form);
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });
                if (!response.ok) {
                    const errorText = await response.text();
                    throw new Error(`Error en el servidor: ${errorText}`);
                }
                const data = await response.json();
                if (data.success) {
                    const reviewsContainer = document.getElementById('reviewsContainer');
                    const newReview = document.createElement('div');
                    newReview.innerHTML = data.html;
                    reviewsContainer.prepend(newReview);
                    button.innerHTML = '✓ Reseña Enviada!';
                    button.classList.add('bg-green-500');
                    form.reset();
                } else {
                    alert('Error al enviar la reseña: ' + (data.message || 'Respuesta inesperada.'));
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Error al enviar la reseña: ' + error.message);
            } finally {
                button.disabled = false;
                button.innerHTML = 'Publicar Reseña';
            }
        });
    }
});