<?php

return [
    'key' => env('TRANSLATIONIO_KEY'),
    'source_locale' => 'de',
    'target_locales' => ['en'],

    /* Directories to scan for Gettext strings */
    'gettext_parse_paths' => ['app', 'resources']
];