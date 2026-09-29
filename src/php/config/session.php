<?php

function is_session_active(): bool
{
    return session_status() === PHP_SESSION_ACTIVE;
}

function is_user_logged_in(): bool
{
    return isset($_SESSION['user_id']) && validate_id($_SESSION['user_id']);
}

function destroy_session(): void
{
    if (is_session_active()) {
        session_unset();

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();

            setcookie(session_name(), '', [
                'expires'       => time() - 42000,
                'path'          => $params['path'],
                'domain'        => $params['domain'],
                'secure'        => $params['secure'],
                'httponly'      => $params['httponly'],
                'samesite'      => $params['samesite']
            ]);
        }

        session_destroy();
    }
}

function regenerate_session_id(): void
{
    session_regenerate_id(true);

    $_SESSION['last_regeneration'] = time();
}


if (!is_session_active()) {
    $options = [
        'lifetime'      => 0,
        'path'          => '/',
        'domain'        => '',
        'secure'        => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
        'httponly'      => true,
        'samesite'      => 'Lax'
    ];

    session_set_cookie_params($options);
    session_start();
}

if (is_user_logged_in()) {
    if (!isset($_SESSION['last_activity'])) {
        $_SESSION['last_activity'] = time();
    } elseif (time() - $_SESSION['last_activity'] > 1800) {
        destroy_session();
        redirect(sprintf('%s/', $_ENV['APP_URL']));
    } else {
        $_SESSION['last_activity'] = time();
    }

    if (!isset($_SESSION['last_regeneration'])) {
        $_SESSION['last_regeneration'] = time();
    } elseif (time() - $_SESSION['last_regeneration'] > 900) {
        regenerate_session_id();
    }
}
