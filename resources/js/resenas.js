document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form[data-action]');
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(form);
        
        fetch(form.getAttribute('data-action'), {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Reseña enviada con éxito');
                form.reset();
            } else {
                alert('Error al enviar la reseña');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al enviar la reseña');
        });
    });
});
