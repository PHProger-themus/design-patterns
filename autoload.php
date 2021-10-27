<?php

spl_autoload_register(function($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class . '.php');

    $path_pieces = explode('_', $path);
    foreach ($path_pieces as &$path_piece) {
        $path_piece = ucfirst($path_piece);
    }
    $path = __DIR__ . "\\" . implode(' ', $path_pieces);

    if (file_exists($path)) {
        require $path;
    }
});