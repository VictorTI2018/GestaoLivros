<?php

use App\Core\Input\Field;
use App\Models\User\User;

if(isset($_SESSION['USER'])) {
    $field = new Field();
    $data = $field->request($_POST);
    
    $user = new User();
    if($user->update(['id' => $data['id']], $data)) {
        __(["status" => true]);
    }
}