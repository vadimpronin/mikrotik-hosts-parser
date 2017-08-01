<?php

/**
 * Возвращает настройки "по умолчанию".
 */

return [

    // Адрес редиректа запросов
    'redirect_ip'    => '127.0.0.1',

    // Массив имен хостов, которые следует исключить
    'excluded_hosts' => [
        'localhost',
    ],

    // Комментарий для хостов генерируемого скрипта, по которому определяем - хост был добавлен как раз этим
    // скриптом, или же нет
    'script_ad_entries_comment' => 'ADBlock',

];