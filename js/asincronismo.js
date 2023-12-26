document.addEventListener("DOMContentLoaded", function() {
    const contenidoDinamico = document.getElementById("contenido-dinamico");
    // Función para cargar el contenido de cada sección
    function cargarContenido(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                contenidoDinamico.innerHTML = data;
            })
            .catch(error => {
                console.error("Error al cargar el contenido:", error);
            });
    }
    // Evento de clic en el botón "Lista"
    document.getElementById("btn-lista").addEventListener("click", function() {
        cargarContenido("lista.php");
    });
    // Evento de clic en el botón "Alta"
    document.getElementById("btn-alta").addEventListener("click", function() {
        cargarContenido("alta.php");
    });
    // Evento de clic en el botón "Modificar"
    document.getElementById("btn-modificar").addEventListener("click", function() {
        cargarContenido("editar.php");
    });
});


















 document.addEventListener("DOMContentLoaded", function() {
    const contenidoRespuestaEliminacionRegistro = document.getElementById("respuesta-eliminar");
    // Función para cargar el contenido de cada sección
    function mostrarRespuestaEliminar(url11) {
        fetch(url11)
            .then(response11 => response11.text())
            .then(data11 => {
                contenidoRespuestaEliminacionRegistro.innerHTML = data11;
            })
            .catch(error11 => {
                console.error("Error al cargar el contenido:", error11);
            });
    }
    // Evento de clic en el botón "Lista"
    document.getElementById("btn-lista").addEventListener("click", function() {
        mostrarRespuestaEliminar("eliminar.php");
    });
});




