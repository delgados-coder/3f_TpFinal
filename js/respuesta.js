
document.addEventListener("DOMContentLoaded", function() {
    const mensajeEmergente = document.getElementById("mensaje-emergente");
    function mostrarMensaje() {
      mensajeEmergente.style.display = "block";
      setTimeout(function() {
        mensajeEmergente.style.display = "none";
      }, 5000); 
    }
    // Agrega un evento de clic a los botones de eliminar
    const btnEliminar = document.querySelectorAll(".btn-eliminar");
    btnEliminar.forEach(function(btn) {
      btn.addEventListener("click", function() {
        // Realiza la eliminación del registro
        const id_mov = btn.dataset.id;
        eliminarRegistro(id_mov);
        mostrarMensaje();
      });
    });
    function eliminarRegistro(id_mov) {
      //realizar la llamada a eliminar.php para eliminar el registrousando Fetch API.
        fetch(`eliminar.php?id_mov=${id_mov}`)
        .then(response => response.text())
        .then(data => {
          console.log(data); // Puedes hacer algo con la respuesta si lo necesitas
        })
        .catch(error => {
          console.error("Error:", error);
        });
    }
});
