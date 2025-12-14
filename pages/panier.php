<?php
    session_start();
    if(!isset($_SESSION['user_id'])) {
        header("Location: ../auth/auth.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-pharm | Votre Panier</title>

    <link rel="stylesheet" href="../styles/common/navbar.css">
    <link rel="stylesheet" href="../styles/panier.css">
    <link rel="stylesheet" href="../styles/common/index.responsive.css">
    <link rel="stylesheet" href="../styles/common/animation.css">
    <link rel="stylesheet" href="../styles/common/quantity-control.css">
</head>
<body>

    <script type="module" src="../script/menu-burger.js" defer></script>
    <script type="module" src="../script/app/cart.js" defer></script>

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

    <section>
        <h1 class="page-title">Mon Panier d'Achat</h1>
    <!-- SECTION GAUCHE : LISTE DES PRODUITS -->
        <div class="container">
        
        <div id="cart-container" class="cart-items-section">
            <template id="cart-card-template">
                <!-- PRODUIT 1 -->
            <div  class="cart-product-card" >
                <div class="img-n-details">
                <img src="../assets/img/lot-serum-seringue.png" alt="Image d'un produit 1" class="cart-product-image">
                
                <div class="cart-product-details">
                    <span class="cart-product-name">Nom du produit A</span>
                    <span class="cart-product-info">Description courte ou couleur/taille</span>
                </div>
                </div>

                <div class="price-n-quantity">
                    <div class="cart-product-price">10000 XAF</div>
                
                <div class="quantity-control">
                    <button class="quantity-btn minus-btn">-</button>
                    <input type="number" class="quantity-input" value="1" min="1" readonly>
                    <button class="quantity-btn plus-btn">+</button>
                </div>


                </div>
                
                
                <button class="delete-btn" aria-label="Supprimer le produit">
                    <img src="../assets/icons/cross.svg" class="icon-xs" alt="">
                </button>
            </div>
            </template>

            
        </div>
        
            <!-- SECTION DROITE : RÉCAP PANIER -->
        <div class="order-summary-section">
            <h2>Votre commande</h2>
            
            <div class="summary-line">
                <span>Total article</span>
                <span class="summary-value" id="total-articles">0</span>
            </div>
            <hr> <div class="summary-line">
                <span>Réduction</span>
                <span class="summary-value" id="discount-value">0 XAF</span>
            </div>
            
            <div class="summary-line total-price-line">
                <span>Prix Total</span>
                <span class="summary-value" id="total-price">0 XAF</span>
            </div>
            
            <button class="checkout-btn">Confirmer l'achat</button>
        </div>
        </div>
    </section>

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