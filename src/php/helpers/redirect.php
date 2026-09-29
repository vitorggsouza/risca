<?php

function redirect(string $url): void
{
    header(sprintf('Location: %s', $url));

    exit;
}
