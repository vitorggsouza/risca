<?php

function abort(int $response_code, string $log_msg, string $user_msg): void
{
    http_response_code($response_code);
    error_log($log_msg);

    exit($user_msg);
}
