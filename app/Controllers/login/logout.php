<?php


if($_GET['action'] === "logout" && isset($_SESSION['USER'])) {
    session_destroy();
    __(['status' => true]);
} else {
    header('location: /');
}