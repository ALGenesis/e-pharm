<?php


require_once '../config/config.inc.php';
launchSession();
if (isset($_POST['login-form'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    require_once '../config/db.inc.php';

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            
            $_SESSION['user_id'] = $user['id'];

            header("Location: ../pages/catalogue.php");
            exit();
        } else {
            $_SESSION['error_message'] = ['login' => "Email ou mot de passe incorrect."];
            header("Location: ../auth/connexion.php");
            exit();
        }
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        $_SESSION['error_message'] = ['login' =>'Erreur serveur. Veuillez réessayer plus tard.'];
        header("Location: ../auth/connexion.php");
        exit();
    }

}

if(isset($_POST['register-form'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    require_once '../config/db.inc.php';

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $_SESSION['error_message'] = ['register' =>"Cet e-mail est déjà utilisé."];
            header("Location: ../auth/connexion.php");
            exit();
        }

        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();


        $_SESSION['user_id'] = $pdo->lastInsertId();

        header("Location: ../pages/catalogue.php");
        exit();
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        $_SESSION['error_message'] = ['register' =>"Cet e-mail est déjà utilisé."];
        header("Location: ../auth/connexion.php");
        exit();
    }
}

if(isset($_POST['logout'])) {
    
    session_unset();
    session_destroy();
    header("Location: ../auth/connexion.php");
    exit();
} else {
    header("Location: ../auth/connexion.php");
    exit();
}