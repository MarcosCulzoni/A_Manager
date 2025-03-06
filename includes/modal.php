
<?php if (isset($_GET['status']) && $_GET['status'] === 'success') : ?>
    <!-- Modal HTML -->
    <div id="mensaje-exito-modal" style="display: none;">
        <div class="modal-contenido">
            <h2>¡Opciones guardadas con éxito!</h2>
            <p>Los cambios se han guardado correctamente.</p>
            <button id="cerrar-modal">Cerrar</button>
        </div>
    </div>

    <!-- JavaScript para manejar el modal -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Detectar si el modal debe mostrarse
            var modal = document.getElementById('mensaje-exito-modal');
            if (modal) {
                modal.style.display = 'flex'; // Mostrar el modal

                // Agregar evento para cerrar el modal
                var botonCerrar = document.getElementById('cerrar-modal');
                if (botonCerrar) {
                    botonCerrar.addEventListener('click', function () {
                        modal.style.display = 'none';
                        // Opcionalmente, elimina el parámetro de la URL para no volver a mostrar el modal
                        var url = new URL(window.location.href);
                        url.searchParams.delete('status');
                        window.history.replaceState(null, '', url);
                    });
                }
            }
        });
    </script>
<?php endif; ?>