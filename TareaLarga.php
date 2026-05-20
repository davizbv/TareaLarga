<?php
/**
 * Plugin Name: Tarea Larga
 * Description: Este es mi plugin para la tarea.
 * Version: 1.0
 * Author: Adrian, Dennis y David
 */

// Esta función obliga a inyectar el código HTML directamente en la cabecera de la página
function pintar_cabecera_tarea() {
    echo "<div style='background: yellow; color: white; text-align: center; padding: 30px; font-size: 24px; font-weight: bold; width: 100%; position: relative; z-index: 99999;'>";
    echo "<h1>¡Hola! Este es mi archivo PHP de TareaLarga</h1>";
    echo "</div>";
}

// Lo enganchamos en el "wp_head" que es sagrado para todas las páginas de WordPress
add_action('wp_head', 'pintar_cabecera_tarea');
?>
