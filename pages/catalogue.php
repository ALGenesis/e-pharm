<?php
    require_once "../includes/utils/checkIfConnected.inc.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/catalogue.css">
    <link rel="stylesheet" href="../styles/common/navbar.css">
    <link rel="stylesheet" href="../styles/common/product-card.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/common/index.responsive.css">
    <link rel="stylesheet" href="../styles/common/animation.css">
    <link rel="stylesheet" href="../styles/common/account-btn.css">
    <title>e-pharm | catalogue</title>
</head>
<body>
    <script type="module" src="../script/menu-burger.js" defer></script>
    <script type="module" src="../script/app/catalog.js"></script>
    <script type="module" src="../script/utils/filterOptions.js"></script>
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

            <div class="account-btn flexed" >
                <img src="../assets/icons/settings.svg" class="icon" alt="">
                <div class="floater">
                    <div class="account-profile flexed">
                        <img src="../assets/icons/settings.svg" class="icon" alt="">
                    </div>
                    <span>example@email.com</span>
                    <form action="../includes/auth.inc.php" method="post">
                        <button class="logout-btn" type="submit" name="logout">se déconnecter</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <main>

        <section id="catalog-banner">
            <div>
                <h1 class="page-title">Découvrez notre catalogue</h1>
                <div class="page-details">
                    <!-- <p class="sub-title">Explorez une vaste sélection de produits pharmaceutiques, allant des médicaments essentiels aux soins de santé spécialisés. Notre catalogue est conçu pour répondre à tous vos besoins en matière de santé et de bien-être.</p> -->
                </div>
            </div>
            <img src="../assets/img/mobile-slide2.png" class="banner-img" alt="">
        </section>

        <section id="product-catalog">

            <div id="filter-n-search">
                <form action="" id="filter-option">
                <input type="search" name="search-params" id="search-params" placeholder="rechercher un produit">
                <button type="submit">rechercher</button>
                </form>
            </div>
                
            <div id="product-list">
                <template id="product-card-template">
                    <div class="product-card">
                        <a href="../pages/produit.php" class="product-img">
                            <img src="../assets/img/test-antigenique-sejoy-face-C.png" alt="">
                        </a>

                        <div class="product-details">
                            <div class="content-column">
                                <span class="product-name">Name</span>
                                <span class="sub small-text product-info">Short description</span>
                            </div>

                            <span class="product-price">5.000 XAF</span>
                        </div>

                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </template>
                
                   
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