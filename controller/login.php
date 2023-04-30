<?php

session_start();
require '../config/database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    # input dari form
    $usermail = $_POST['email'];
    $userpass = $_POST['password'];

    # query ke database mencocokkan email
    $records = $conn->prepare('SELECT id, email, password FROM user WHERE email = :email');
    $records->bindParam(':email', $usermail);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';

    # mencocokkan password
    $userpassHash = password_hash($userpass, PASSWORD_DEFAULT);
    if (count($results) > 0 && password_verify($results['password'], $userpassHash)) {
        # jika berhasil, set global session
        $_SESSION['user_id'] = $results['id'];
        header("Location: ../index.php");
    } else {
        # jika gagal, muncul alert
        echo "
            <script>
                alert('Email or Password doesnt match');
                window.location='../login.php';
            </script>
        ";
    }

}
?>