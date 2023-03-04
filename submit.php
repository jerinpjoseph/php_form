<?php

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all the fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } elseif (strlen($password) < 8) {
        echo "Password should be at least 8 characters long.";
    } else {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Form Successfully Submitted');
        window.location.href='form.php';
        </script>");
    }

?>