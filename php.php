<?php
/**
 * Plugin Name: Tarea Larga
 * Description: Este es mi plugin para la tarea.
 * Version: 1.0
 * Author: Adrian, Dennis y David
 */

// 1. Creamos una función propia con el mensaje que tú quieres
function mostrar_mensaje_tarea_larga() {
    echo "<h1 style='text-align: center; color: red; padding: 20px;'>¡Hola! Este es mi archivo PHP de TareaLarga</h1>";
}

// 2. Enganchamos nuestra función al pie de la página de WordPress
add_action('wp_footer', 'mostrar_mensaje_tarea_larga');
?>
