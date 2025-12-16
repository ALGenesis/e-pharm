<?php
    require_once "../includes/utils/checkIfConnected.inc.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/common/navbar.css">
    <link rel="stylesheet" href="../styles/common/product-card.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/common/index.responsive.css">
    <link rel="stylesheet" href="../styles/common/animation.css">
    <link rel="stylesheet" href="../styles/produit.css">
    <link rel="stylesheet" href="..styles/common/account-btn.css">
    <title>e-pharm | page produit</title>
</head>
<body>
    <script type="module" src="../script/menu-burger.js" defer></script>
    <script type="module" src="../script/app/product.js"></script>
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
                <img src="../assets/icons/circle-user.svg" class="icon" alt="">
                <div class="floater">
                    <div class="account-profile flexed">
                        <img src="../assets/icons/circle-user.svg" class="icon" alt="">
                    </div>
                    <span>example@email.com</span>
                    <form action="../includes/auth.inc.php" method="post">
                        <button class="logout-btn" type="submit" name="logout">se déconnecter</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </header>

    <!-- main content -->
    <main>

        <template id="product-page-template">
            <section id="overview">
            <div id="image">
                <img id="img" src="../assets/img/combo-grippe-covid-face-B.png" alt="">
            </div>

            <div id="details">
                <div>
                <h2 id="name">Product name</h2>
                <span class="badge">en stock</span>
                </div>

                <h3 id="price">10.000 XAF</h3>

                <div class="description">
                    <span>Description</span>
                    <p id="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi quod odit rerum mollitia iste reiciendis fuga nisi quasi voluptates sunt.</p>
                </div>

                <form action="">
                    <div class="quantity">
                        <label for="quantity-nbr">Nombre d'articles : </label>
                        <input type="number" name="quantity-nbr" id="quantity-nbr" placeholder="1">
                    </div>

                    <button class="submit-btn">Ajouter au panier</button>
                </form>
                
            </div>
        </section>
        </template>

        <section id="product-suggestion">

            <h2 class="suggestion-title">Vos recommandations</h2>

            <div id="product-suggested" class="product-slider flexed">

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

            <div class="btn-to-catalog">
                <a href="../pages/catalogue.php">
                    <button class="outline">Voir plus</button>
                </a>
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