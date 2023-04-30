<?php

# pengechekan session
if (isset($_SESSION['user_id'])) {
    # jika terdapat session, query ke database untuk mendapatkan data user
    $records = $conn->prepare('SELECT
        user.nama as usernama,
        user.email as usermail,
        role.nama as rolenama
        FROM user
        JOIN role ON user.role_id=role.id
        WHERE user.id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
} else {
    # jika tidak, redirect ke halaman login
    header("Location: /login.php");
}

?>