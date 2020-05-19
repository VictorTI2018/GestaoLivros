<?php

require __DIR__ . '/../../bootstrap/app.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'usuarios':
            require __DIR__ . '/../../app/Controllers/user/all.php';
            break;
    }
} else {
    header('location: /user_view_all');
}
