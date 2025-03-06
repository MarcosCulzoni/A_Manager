<?php
if (!defined('ABSPATH')) {
    exit;
}

// Manejar la solicitud POST
function mi_plugin_guardar_opciones() {
    // Verificar nonce
    if (!isset($_POST['mi_plugin_nonce']) || !wp_verify_nonce($_POST['mi_plugin_nonce'], 'guardar_mi_plugin_opciones_nonce')) {
        wp_die('Error de seguridad');
    }

    // Verificar permisos del usuario
   /* if (!current_user_can('manage_options')) {
        wp_die('No tienes permisos suficientes');
    }*/

    // Procesar los datos del formulario
    $opciones = [
        'api_primary_key' => sanitize_text_field($_POST['api_primary_key']),
        'api_backup_key' => sanitize_text_field($_POST['api_backup_key']),
        'notification_email' => sanitize_email($_POST['notification_email']),
        'automatic_check' => isset($_POST['automatic_check']) ? 1 : 0,
        'site_activity_description' => sanitize_textarea_field($_POST['site_activity_description']),
    ];

    update_option('ia_manager_options', $opciones);

     //Redirigir con mensaje de éxito
    //wp_redirect(admin_url('admin.php?page=mi-plugin&mensaje=guardado'));
    //exit;

    


// Obtener la URL de la página de configuración
$pagina_id = get_option('IA_Manager_Config_ID');
$pagina_url = get_permalink($pagina_id);

if ($pagina_url) {
    // Redirigir con un parámetro indicando el estado
    wp_redirect(add_query_arg('status', 'success', $pagina_url));
    exit;
} else {
    echo 'No se pudo encontrar la página de configuración.';
    exit;
}

}

/*se registra un "hook" en WordPress que ejecutará la función mi_plugin_guardar_opciones() cuando se reciba
 una solicitud POST con el parámetro action=guardar_mi_plugin_opciones.*/
add_action('admin_post_guardar_mi_plugin_opciones', 'mi_plugin_guardar_opciones');
?>