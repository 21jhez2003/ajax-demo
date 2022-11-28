<?php

require '../_rayleigh/rayleigh.php';

if (isset($_POST['isClicked'])) {

    $username =  $_POST['username'];
    $password =  $_POST['password'];
    $confirm_password =  $_POST['confirm_password'];
    $email =  $_POST['email'];
    $first_name =  $_POST['first_name'];
    $last_name =  $_POST['last_name'];

    if (empty($username) || empty($password) || empty($confirm_password) || empty($email) || empty($first_name) || empty($last_name)) {
        echo json_encode(array('responseCode' => 404));
        exit();

    } elseif ($password === $confirm_password) {
        $query = 'INSERT INTO users (`username`, `password`, `email`, `first_name`, `last_name`) VALUES (?,?,?,?,?)';
        $result = $pdo->prepare($query);

        $result->execute([$username, $password, $email, $first_name, $last_name]);

        if ($result) {
            echo json_encode(array('responseCode' => 200)); //success
            exit();
        } else {
            echo json_encode(array('responseCode' => 500)); //error on insert
            exit();
        }
    } else {
        echo json_encode(array('responseCode' => 300)); //password mismatch
        exit();
    }
}

if (isset($_POST['isLogin'])){
    $username =  $_POST['username'];
    $password =  $_POST['password'];

    if (empty($username) || empty($password)) {
        echo json_encode(array('responseCode' => 404));
        exit();
    }else{
        $query = 'SELECT * FROM users WHERE `username` = ? AND `password` = ?';
        $result = $pdo->prepare($query);
        $result->execute([$username, $password]);
        $data = $result->fetch();
        
        $rowCount = $result->rowCount();


        if($rowCount > 0){
            echo json_encode(array(
                'responseCode' => 200,
                'username' => $data['username'],
                'email' => $data['email'],
            ));
            exit();
        }else{
            echo json_encode(array('responseCode' => 401));
            exit();
        }
    }

}
