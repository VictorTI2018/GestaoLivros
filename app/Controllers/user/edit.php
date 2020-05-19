<?php

use App\Core\Input\Field;
use App\Models\User\User;

// if(isset($_SESSION['USER'])) {
//     $field = new Field();
//     $data = $field->request($_POST);
    
//     $user = new User();
//     if($user->update(['id' => $data['id']], $data)) {
//         __(["status" => true]);
//     }
// }
$data = $_POST;
$user = new User();
__($user->update(['id' => 1], $data));