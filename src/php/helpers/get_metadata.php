<?php

function get_metadata(string $view): array
{
    static $metadata = null;

    if ($metadata === null) {
        $metadata = require __DIR__ . '/../config/seo.php';
    }

    return array_merge($metadata['defaults'], $metadata[$view] ?? $metadata['default']);
}
