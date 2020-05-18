<?php

if ((int) session_status() === 1) {
    session_start();
    session_regenerate_id();
}

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../utils/helpers.php';
