document.addEventListener("DOMContentLoaded", function() {
    const contenidoDinamico = document.getElementById("contenido-dinamico");

    function cargarContenido(url) {
        fetch(url)
            .then(response => response.json()) 
            .then(data => {
                contenidoDinamico.innerHTML = `
                    <div class="message-container">
                        <div class="message-success">
                            <i class="fas fa-check-circle"></i>
                            <p>${data.message}</p>
                        </div>
                    </div>
                `;

                setTimeout(() => {
                    contenidoDinamico.innerHTML = '';
                }, 5000);
            })
            .catch(error => {
                console.error("Error al cargar el contenido:", error);
            });
    }

    document.querySelector(".btn-lista").addEventListener("click", function() {
        cargarContenido("../eliminar.php?id_mov=123"); 
    });

});
