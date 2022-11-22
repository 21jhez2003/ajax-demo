<?php

require '../_rayleigh/rayleigh.php';

if (isset($_POST['isClicked'])) {

    $username =  $_POST['username'];
    $password =  $_POST['password'];
    $confirm_password =  $_POST['confirm_password'];
    $email =  $_POST['email'];
    $first_name =  $_POST['first_name'];
    $last_name =  $_POST['last_name'];


    if ($password === $confirm_password) {
        $query = 'INSERT INTO users (username, password, email, first_name, last_name) VALUES (?,?,?,?,?)';
        $result = $pdo->prepare($query);
        $result->execute([$username, password_hash($password, PASSWORD_DEFAULT), $email, $first_name, $last_name]);

        if ($result) {
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        echo 'password mismatch';
    }
}
