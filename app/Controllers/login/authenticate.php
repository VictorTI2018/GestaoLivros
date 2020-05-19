<?php

use App\Core\Input\Field;
use App\Models\User\User;

if ($_GET['action'] === "logar" && isset($_POST)) {
    $field = new Field();
    $data = $field->request($_POST);
    if ($user = (new User())->find('username', $data['username'])) {
        if ($data['password'] === $user->password) {

            $_SESSION['USER']['ID_USER'] = $user->id;
            $_SESSION['USER']['USERNAME'] = $user->username;
            $_SESSION['USER']['PASSWORD'] = $user->password;

            __(["status" => true, 'user' => $user]);
        } else {
            __(["status" => false, "validator" => true, "message" => "Senha incorreta"]);
        }
    } else {
        __(["status" => false, "validator" => true, "message" => 'Username incorreto!']);
    }
}
