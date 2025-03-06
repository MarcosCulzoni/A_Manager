<?php
// includes/ia/ia_responses_processor.php
if (!defined('ABSPATH')) {
    exit;
}

class IA_Responses_Processor {
    public static function procesar_respuesta($response) {
        if (isset($response['error'])) {
            return 'Error: ' . $response['error'];
        }

        if (!isset($response['choices'][0]['message']['content'])) {
            return 'No se recibió una respuesta válida de la IA.';
        }

        return $response['choices'][0]['message']['content'];
    }
}


