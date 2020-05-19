<?php

use App\Core\Input\Field;
use App\Models\User\User;

if (isset($_SESSION['USER'])) {
    unset($_POST['id']);
    $field = new Field();
    $data = $field->request($_POST);

    $user = new User();
    if (!$user->find('username', $data['username'])) {
        if ($user->save($data)) {
            __(["status" => true]);
        }
    } else {
        __(["validator" => true, "status" => false]);
    }
}
