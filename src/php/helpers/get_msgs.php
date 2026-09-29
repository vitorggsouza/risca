<?php

function get_msgs(string $key): string
{
    static $msgs = null;

    if ($msgs === null) {
        $msgs = require __DIR__ . '/../config/msgs.php';
    }

    if (!str_contains($key, '.')) {
        abort(500, $msgs['system']['unexpected_english'], $msgs['system']['unexpected_pt-br']);
    }

    $key_parts = explode('.', $key);

    if (count($key_parts) !== 2) {
        abort(500, $msgs['system']['unexpected_english'], $msgs['system']['unexpected_pt-br']);
    }

    return $msgs[$key_parts[0]][$key_parts[1]];
}
