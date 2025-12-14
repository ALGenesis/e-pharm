<?php
    session_start();
    if(isset($_SESSION['error_message'])) {
        $error_message = $_SESSION['error_message'];
        unset($_SESSION['error_message']);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/common/index.responsive.css">
    <link rel="stylesheet" href="../styles/common/animation.css">
    <link rel="stylesheet" href="../styles/auth/connexion.css">
    <title>e-pharm | contact</title>
</head>
<body>
    <script type="module" src="../script/toggleForm.js" defer></script>
    <!-- Main content -->
    <main>
        <section>
            <div class="contact-container">
                <form action="../includes/connexion.inc.php" method="post" id="login" class="contact-form active">
                        <h2 class="form-title">Connexion</h2>
                        <?php
                            if(isset($error_message)) {
                                echo '<div class="error-message">' . htmlspecialchars($error_message) . '</div>';
                            }
                        ?>
                        <div class="input-field">
                            <label for="email">Votre e-mail</label>
                            <input type="email" name="email"  placeholder="exemple@email.com" required>
                        </div>

                        <div class="input-field">
                            <label for="password">Votre Mot de passe</label>
                        <input type="password" name="password" id="" placeholder="******">
                        </div>

                        <button type="submit" name="login-form">Se connecter</button>

                        <span>Vous n'avez pas encore de compte ? <a href="">Inscrivez-vous</a></span>
                        

                </form>

                <form action="../includes/connexion.inc.php" method="post" id="register" class="contact-form ">
                        <h2 class="form-title">Inscription</h2>

                        <div class="input-field">
                            <label for="username">Votre nom</label>
                            <input type="text" name="username" placeholder="john doe" required>
                        </div>



                        <div class="input-field">
                            <label for="email">Votre e-mail</label>
                            <input type="email" name="email"  placeholder="exemple@email.com" required>
                        </div>

                        <div class="input-field">
                            <label for="password">Votre Mot de passe</label>
                        <input type="password" name="password" id="" placeholder="******" required>
                        </div>

                        <button type="submit" name="register-form">S'inscrire</button>

                        <span>Vous avez déjà un compte ? <a href="">Connectez-vous</a></span>
                        

                </form>

          

                <div class="contact-showcase">
                    <h1>e-pharm</h1>
                    <img src="../assets/img/mobile-slide2.png" alt="">
                </div>
            </div>
        </section>
    </main>  
</body>
</html>