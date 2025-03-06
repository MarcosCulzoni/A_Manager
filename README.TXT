=== WP IA Manager===  
Contributors: [tu usuario de WordPress.org]  
Tags: IA, OpenAI, generación de contenido, SEO, WooCommerce  
Requires at least: 5.6  
Tested up to: 6.4  
Requires PHP: 7.4  
Stable tag: 1.0  
License: GPLv2 or later  
License URI: https://www.gnu.org/licenses/gpl-2.0.html  

== Descripción ==  
Este plugin permite integrar inteligencia artificial en WordPress utilizando la API de OpenAI.
Ofrece funciones como generación de contenido, optimización SEO,
 moderación de comentarios y automatización de publicaciones.  

== Instalación ==  
1. Descarga el plugin y súbelo a la carpeta `/wp-content/plugins/`.  
2. Activa el plugin desde el panel de administración de WordPress.  
3. Ve a la página de configuración (se genera automáticamente) e introduce las claves API.  
4. Prueba las claves y selecciona la activa.  

== Uso ==  
Puedes utilizar este plugin mediante:  
- **Shortcodes** (para insertar funcionalidades en páginas y posts).  
- **Funciones PHP** (para desarrolladores que quieran integrarlo en su código).  

**Shortcodes disponibles:**  
- `[ia_resumen texto="Aquí tu texto"]` → Genera un resumen.  
- `[ia_titulo texto="Aquí tu tema"]` → Sugiere un título atractivo.  

== Funcionalidades ==  
- Generación de resúmenes de artículos.  
- Creación automática de títulos atractivos.  
- Corrección ortográfica y gramatical.  
- Generación de meta-descriptions para SEO.  
- Sugerencias de palabras clave.  
- Publicaciones automáticas con contenido generado.  
- Generación de descripciones de productos en WooCommerce.  
- Traducción automática de contenido.  
- Sugerencias de contenido basado en keywords.  
- Respuestas automáticas a comentarios.  
- Moderación de comentarios ofensivos.  
- Marcado de contenido duplicado.  
- Sugerencia de precios para productos en WooCommerce.  

== Hooks y Acciones ==  
Este plugin añade los siguientes hooks para que los desarrolladores puedan extenderlo:  
- `do_action('ia_plugin_activado')` → Se ejecuta al activar el plugin.  
- `do_action('ia_plugin_desactivado')` → Se ejecuta al desactivar el plugin.  
- `apply_filters('ia_generar_resumen', $texto)` → Permite modificar el texto generado por la IA.  

== Desinstalación ==  
Si deseas eliminar completamente el plugin y sus datos:  
1. Desactiva el plugin desde el panel de administración.  
2. Borra el plugin desde el administrador de plugins de WordPress.  
3. Toda la configuración y datos almacenados serán eliminados automáticamente.  

== Changelog ==  
= 1.0 =  
- Primera versión del plugin con soporte para generación de contenido, SEO y moderación.  

== Licencia ==  
Este plugin es de código abierto y se distribuye bajo la licencia GPLv2 o posterior.  

