<?php

require __DIR__ . '/../../bootstrap/app.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'usuarios':
            require __DIR__ . '/../../app/Controllers/user/all.php';
            break;
        case 'user_register':
            require __DIR__ . '/../../app/Controllers/user/register.php';
            break;
        case 'user_filter':
            require __DIR__ . '/../../app/Controllers/user/filter.php';
            break;
        case 'user_edit':
            require __DIR__ . '/../../app/Controllers/user/edit.php';
            break;
        case 'user_destroy':
            require __DIR__ . '/../../app/Controllers/user/destroy.php';
            break;
    }
} else {
    header('location: /user_view_all');
}
