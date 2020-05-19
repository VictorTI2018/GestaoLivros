<?php

use App\Models\User\User;

if(isset($_SESSION['USER'])) {
    $user = (new User())->all();
    __($user);
}

