<?php

use App\Models\User\User;


if (isset($_GET['id']) && isset($_SESSION['USER'])) {

    $id = (int) $_GET['id'];
    $user = new User();
    if ($user->delete('id', $id)) {
        __(['status' => true]);
    }
}
