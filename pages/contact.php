<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/common/navbar.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/common/index.responsive.css">
    <link rel="stylesheet" href="../styles/common/animation.css">
    <link rel="stylesheet" href="../styles/contact.css">
    <title>e-pharm | contact</title>
</head>
<body>
    <script type="module" src="../script/menu-burger.js" defer></script>
    <!-- Header -->
    <header>

        <a href="../index.php">
            <div class="logo">
                <span>e-pharm</span>
            </div>
        </a>

        <nav class="navbar">
            <li><a href="../index.php">Acceuil </a></li>
            <li><a href="../pages/catalogue.php">Catalogue </a></li>
            <li><a href="../pages/contact.php">Contact </a></li>
        </nav>
        <div class="flexed">
            <a href="../pages/panier.php">
            <button>
                Panier
            </button>
            </a>

        
            <div class="flexed" id="menu-burger">
                <img src="../assets/icons/menu-burger.svg" class="icon-md" id="menu-open" alt="">
                <img src="../assets/icons/cross.svg" class="icon hidden" id="menu-close" alt="">
            </div>
        </div>
    </header>

    <!-- Main content -->
    <main>
        <h1 class="page-title">Laissez nous un message</h1>
        <section>
            <div class="contact-container">
                <form action="" id="contact-form">
                        <div class="input-field">
                            <label for="input-name">Votre nom</label>
                            <input type="text" name="input-name" id="input-name" placeholder="John Doe" required>
                        </div>

                        <div class="input-field">
                            <label for="input-email">Votre e-mail</label>
                            <input type="email" name="input-email" id="input-email" placeholder="exemple@email.com" required>
                        </div>

                        <div class="input-field">
                            <label for="input-area">Entrez un message</label>
                            <textarea name="input-area" id="input-area" placeholder="entrez votre message ici..." ></textarea>
                        </div>

                        <div class="news-checkbox">
                            <input type="checkbox" name="input-check" id="input-check">
                            <label for="input-check">S'abonner à la newsletter</label>
                        </div>

                        <button>Envoyer</button>
                        

                </form>
          

                <div class="contact-showcase">
                    <h1>e-pharm</h1>
                    <img src="../assets/img/mobile-slide2.png" alt="">
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        
        <div class="menu-container">
            <div class="logo" >
                <span > e-pharm</span>
            </div>

            <div class="footer-menu">
                <span>Menu</span>
                <ul>
                <li><a href="../index.php">Acceuil</a></li>
                <li><a href="../pages/catalogue.php">Catalogue</a></li>
                <li><a href="../pages/contact.php">Contact</a></li>
            </ul>
            </div>

            <div class="footer-menu">
                <span>Ressources</span>
                <ul>
                <li><a href="">Politiques</a></li>
                <li><a href="">Mentions légales</a></li>
            </ul>
            </div>

            <div class="footer-menu">
                <span>Réseaux sociaux</span>
                <ul>
                <li><a href="">Facebook</a></li>
                <li><a href="">LinkedIn</a></li>
                <li><a href="">X</a></li>
            </ul>
            </div>
        </div>

        <div class="separator"></div>

        <div>
            <span>2025 Copyright</span>
        </div>

        <div class="footer-name">
            <span class="e-pharm-footer">e-pharm</span>
        </div>

    </footer>
    
</body>
</html>