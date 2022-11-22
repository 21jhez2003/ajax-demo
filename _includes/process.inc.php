<?php

require '../_rayleigh/rayleigh.php';

if (isset($_POST['isClicked'])) {

    $username =  $_POST['username'];
    $password =  $_POST['password'];
    $confirm_password =  $_POST['confirm_password'];
    $email =  $_POST['email'];
    $first_name =  $_POST['first_name'];
    $last_name =  $_POST['last_name'];

    /* 
     The number of ? will depend on the number of your fields
     I want to insert 5 data in 5 fields, this means that the number of my ? is 5
    */
    if ($password === $confirm_password) {
        $query = 'INSERT INTO users (`username`, `password`, `email`, `first_name`, `last_name`) VALUES (?,?,?,?,?)';
        $result = $pdo->prepare($query);
        /* Keep in mind the order of your variable in execute() method */
        /* The order of the variable must be the same in your query, in this case the query is in line 19 */
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
