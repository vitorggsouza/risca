<?php

function validate_id(string|int $id): bool
{
    return filter_var($id, FILTER_VALIDATE_INT) !== false && (int) $id >= 1;
}
