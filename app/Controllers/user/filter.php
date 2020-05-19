<?php

use App\Models\User\User;

if (isset($_GET['term']) && isset($_SESSION['USER'])) {
    $term = $_GET['term'];
    $user = (new User())->applyFilter($term);
    __($user);
} else {
    header('location: /user_view_all');
}
