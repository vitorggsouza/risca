<?php

try {
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../');
    $dotenv->load();

    $dotenv->required([
        'APP_NAME',
        'APP_URL',
        'DB_HOST',
        'DB_NAME',
        'DB_PASSWORD',
        'DB_USERNAME',
        'MAIL_FROM',
        'MAIL_HOST',
        'MAIL_PASSWORD',
        'MAIL_USERNAME'
    ])->notEmpty();
} catch (\Throwable $e) {
    abort(500, $e->getMessage(), get_msgs('system.unexpected_pt_br'));
}
