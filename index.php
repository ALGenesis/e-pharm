<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/common/product-card.css">
    <link rel="stylesheet" href="./styles/common/animation.css">
    <link rel="stylesheet" href="./styles/common/navbar.css">
    <link rel="stylesheet" href="./styles/common/index.responsive.css">
    <title>e-pharm</title>
</head>
<body>
    <script type="module" src="./script/menu-burger.js" defer></script>
    <script type="module" src="./script/app/index.js"></script>
    <!-- Header -->
    <header>

        <a href="./index.php">
            <div class="logo">
                <span>e-pharm</span>
            </div>
        </a>

        <nav class="navbar">
            <li><a href="/index.php">Acceuil </a></li>
            <li><a href="./pages/catalogue.php">Catalogue </a></li>
            <li><a href="./pages/contact.php">Contact </a></li>
        </nav>
        <div class="flexed">
            <a href="./pages/panier.php">
            <button>
                Panier
            </button>
            </a>

        
            <div class="flexed" id="menu-burger">
                <img src="./assets/icons/menu-burger.svg" class="icon-md" id="menu-open" alt="">
                <img src="./assets/icons/cross.svg" class="icon hidden" id="menu-close" alt="">
            </div>
        </div>
    </header>

    <!-- Main content -->
    <main>
        <!-- hero section -->
        <section id="hero">
            <div id="hero-content">
                <h1>Votre santé, notre priorité.</h1>
                <p class="sub-headline">Bienvenue sur e-pharm, votre pharmacie en ligne de confiance. Produits certifiés, livraison rapide, conseils experts.</p>

            
                <div class="btn-container">
                    <a href="./pages/catalogue.php">
                    <Button>
                        Voir le catalogue
                    </Button>
                    </a>

                    <a href="./pages/contact.php">
                    <Button class="outline">
                        Contacter
                    </Button>
                    </a>
                </div>
            </div>
            <div class="hero-img">
                <img src="./assets/img/mobile-slide2.png" alt="">
            </div>

            <div class="hero-gradient-b"></div>
        </section>

        <!-- Category-grid section -->
        <section id="category-grid">
            
            <div class="center-content">
                <h1>Découvrez notre catalogue complet</h1>
                <p class="sub-headline">Explorez une large gamme de produits médicaux: masques, gants, tests, désinfectants et bien plus encore, adaptés à tous vos besoins.</p>
            </div>

            <div class="grid-bento">
                <div class="grid-child">
                    <span class="category-name">Tests</span>
                    <a href="./pages/catalogue.php" class="category-link">Voir plus</a>
                    <img src="./assets/img/TEST-V1-1.png" alt="">
                </div>

                

                <div class="grid-child">
                    <span class="category-name">Masques</span>
                    <a href="./pages/catalogue.php" class="category-link">Voir plus</a>
                    <img src="./assets/img/MASQUES-V1.jpg.jpeg" alt="">
                </div>

                <div class="grid-child">
                    <span class="category-name">Gants</span>
                    <a href="./pages/catalogue.php" class="category-link">Voir plus</a>
                    <img src="./assets/img/GANTS-V1-2.png" alt="">
                </div>


                <div class="grid-child">
                    <span class="category-name">Consommables</span>
                    <a href="./pages/catalogue.php" class="category-link">Voir plus</a>
                    <img src="./assets/img/SACS-V1-1.png" alt="">
                </div>

                <div class="grid-child">
                    <span class="category-name">Bébé</span>
                    <a href="./pages/catalogue.php" class="category-link">Voir plus</a>
                    <img src="./assets/img/BEBES-V1-1.png" alt="">
                </div>


               

            </div>
        </section>

        <!-- top-products section -->
        <section id="top-products">
            <div class="center-content">
                <h1>Des produits essentiels, à portée de clic.</h1>
                <p class="sub-headline">Retrouvez nos best-sellers et nouveautés à prix compétitifs. Commandez en toute simplicité et sécurité.</p>
            
            </div>

            <div id="index-product-list" class="product-slider flexed">

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

        <!-- FAQ section -->
        <section id="faq" class="flexed">
            <div class="flexed faq-container">
            <div class="left">
                <div class="left-content">
                    <h1>Vous avez des questions?</h1>
                    <p class="sub-headline">Retrouvez ici les réponses aux interrogations les plus courantes sur nos produits, nos services et vos commandes. Notre objectif: vous offrir une expérience simple, transparente et sécurisée.</p>
                </div>
            </div>

                
            <div class="faq-questions">
                <div class="faq-question-div">
                    <details>
                        <summary class="faq-question">
                            <span>Quels types de produits proposez-vous?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus w-4 h-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                        </summary>
                        <span>Nous proposons une large gamme de produits médicaux et paramédicaux: masques, gants, gels hydroalcooliques, tests rapides, matériel de soin et bien plus encore.</span>
                    </details>
                 </div>
                 <div class="faq-question-div">
                    <details>
                        <summary class="faq-question">
                            <span>Les produits sont-ils certifiés et fiables?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus w-4 h-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                        </summary>
                        <span>Oui, tous nos produits sont conformes aux normes européennes et sélectionnés auprès de fournisseurs agréés. La qualité et la sécurité sont nos priorités.</span>
                    </details>
                 </div>
                 <div class="faq-question-div">
                    <details>
                        <summary class="faq-question">
                            <span>Quels sont les délais de livraison?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus w-4 h-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                        </summary>
                        <span>La livraison est généralement effectuée sous 2 à 5 jours ouvrés. Vous recevrez un numéro de suivi dès l’expédition de votre commande.</span>
                    </details>
                 </div>
                 <div class="faq-question-div">
                    <details>
                        <summary class="faq-question">
                            <span>Puis-je retourner un produit?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus w-4 h-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                        </summary>
                        <span>Oui, vous disposez d’un délai de 14 jours après réception pour retourner un produit non utilisé, dans son emballage d’origine. Consultez notre politique de retour pour plus de détails.</span>
                    </details>
                 </div>
                 <div class="faq-question-div">
                    <details>
                        <summary class="faq-question">
                            <span>Comment contacter le service client?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus w-4 h-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                        </summary>
                        <span>Notre équipe est disponible par email via le formulaire de contact ou par téléphone du lundi au vendredi, de 9h à 18h.</span>
                    </details>
                 </div>
                
                
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
                <li><a href="./index.php">Acceuil</a></li>
                <li><a href="./pages/catalogue.php">Catalogue</a></li>
                <li><a href="./pages/contact.php">Contact</a></li>
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