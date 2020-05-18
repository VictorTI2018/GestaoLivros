<?php

require __DIR__ . '/../../bootstrap/app.php';

if(isset($_GET['action'])) {
    switch($_GET['action']) {
        case 'logar':
            require __DIR__ . '/../../app/Controllers/login/authenticate.php';
        break;
    }
} else {
    header("location: /");
}
