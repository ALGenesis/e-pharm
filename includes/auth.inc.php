<?php


require_once './config/config.inc.php';


if (isset($_POST['login-form'])) {

    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    require_once './config/db.inc.php';

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            $_SESSION['role'] = $user['role'];

            if(isset($_SESSION['role']) && $_SESSION['role'] === "admin") {
                header("Location: ../pages/dashboard/index.php");
                exit();
            }


            header("Location: ../pages/catalogue.php");
            exit();
        } else {
            $_SESSION['error_message'] = ['login' => "Email ou mot de passe incorrect."];
            $_SESSION['active-form'] = 'login';
            header("Location: ../pages/auth/index.php");
            exit();
        }
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        $_SESSION['error_message'] = ['login' =>'Erreur serveur. Veuillez réessayer plus tard.'];
        header("Location: ../pages/auth/index.php");
        exit();
    }

}

if(isset($_POST['register-form'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    require_once './config/db.inc.php';

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $_SESSION['error_message'] = ['register' =>"Cet e-mail est déjà utilisé."];
            $_SESSION['active-form'] = 'register';
            header("Location: ../pages/auth/index.php");
            exit();
        }

        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        header("Location: ../pages/auth/index.php");
        exit();
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        $_SESSION['error_message'] = ['register' =>"Cet e-mail est déjà utilisé."];
        header("Location: ../pages/auth/index.php");
        exit();
    }
}

if(isset($_POST['logout'])) {
    
    session_unset();
    session_destroy();
    header("Location: ../pages/auth/index.php");
    exit();
} else {
    header("Location: ../pages/auth/index.php");
    exit();
}