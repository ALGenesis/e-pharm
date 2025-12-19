<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Prérequis CSS -->
    <link rel="stylesheet" href="../../styles/common/navbar.css">
    <link rel="stylesheet" href="../../styles/index.css">
    <link rel="stylesheet" href="../../styles/common/index.responsive.css">
    <link rel="stylesheet" href="../../styles/common/animation.css">
    <link rel="stylesheet" href="../../styles/common/account-btn.css">
    <link rel="stylesheet" href="../../styles/common/product-card.css">
    <!-- Fichier CSS spécifique à la page -->
    <link rel="stylesheet" href="../../styles/dashboard/index.css">
    <title>e-pharm | dashboard index</title>
</head>
<body>
    <script type="module" src="../../script/menu-burger.js" defer></script>
    <script type="module" src="../../script/admin.index.js" defer></script>
    <!-- Header -->
    <header>

        <a href="../../index.php" title="home page">
            <div class="logo">
                <span>e-pharm</span>
            </div>
        </a>

        <div class="flexed">
            <div class="account-btn flexed" >
                <img src="../../assets/icons/circle-user.svg" class="icon" alt="">
                <div class="floater">
                    <div class="account-profile flexed">
                        <img src="../../assets/icons/circle-user.svg" class="icon" alt="">
                    </div>
                    <div class="">
                        <span>example@email.com</span>
                        <span>super admin</span>
                    </div>
                    <form action="../../includes/auth.inc.php" method="post">
                        <button class="logout-btn" type="submit" name="logout">se déconnecter</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <div class="wrapper">
        <!-- Contenu spécifique à chaque page -->
         <aside>
            <nav>
                <li data-target="dashboard" class="active">
                   <img src="../../assets/icons/layout-panel-left.svg" class="icon" alt="">
                   <span>Dashboard</span>
                </li>
                <li data-target="users">
                    <img src="../../assets/icons/users.svg" class="icon" alt="">
                    <span>utilisateurs</span>
                </li>
                <li data-target="entreprises">
                    <img src="../../assets/icons/briefcase-business.svg" class="icon" alt="">
                    <span>Pharmacies</span>
                </li>
                <li data-target="products">
                    <img src="../../assets/icons/pill-bottle.svg" class="icon" alt="">
                    <span>Produits</span>
                </li>
                <!-- <li data-target="categories">
                    <img src="../../assets/icons/list.svg" class="icon" alt="">
                    <span>Categories</span>
                </li>
                <li data-target="feedback">
                    <img src="../../assets/icons/message-square-warning.svg" class="icon" alt="">
                    <span>Feedback</span>
                </li> -->
            </nav>
         </aside>
         <main>
            <!-- Overview -->
            <section id="dashboard" class="active">
                <div id="dashboard-summary">
                    <article class="summary-card">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="../../assets/icons/users.svg" class="icon" alt="">
                            </div>
                            <div class="card-text">
                                <span class="card-title">5,24K</span>
                                <span class="card-sub-title">benefits</span>
                            </div>
                        </div>
                    </article>
                    <article class="summary-card">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="../../assets/icons/briefcase-business.svg" class="icon" alt="">
                            </div>
                            <div class="card-text">
                                <span class="card-title">5,24K</span>
                                <span class="card-sub-title">benefits</span>
                            </div>
                        </div>
                    </article>
                    <article class="summary-card">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="../../assets/icons/pill-bottle.svg" class="icon" alt="">
                            </div>
                            <div class="card-text">
                                <span class="card-title">5,24K</span>
                                <span class="card-sub-title">benefits</span>
                            </div>
                        </div>
                    </article>
                    <article class="summary-card">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="../../assets/icons/van.svg" class="icon" alt="">
                            </div>
                            <div class="card-text">
                                <span class="card-title">5,24K</span>
                                <span class="card-sub-title">benefits</span>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- <div id="dashboard-graph">
                    <div class="sub-section-title">
                        <span>Analyse du traffic</span>
                        <select name="timeline" id="">
                            <option value="Y">Cette année</option>
                            <option value="M">Ce mois</option>
                            <option value="W">Cette semaine</option>
                            <option value="D">Aujourd'hui</option>
                        </select>
                    </div>
                </div> -->
                <div id="dashboard-customers">
                    <div class="customers-child">
                        <div class="sub-section-title">
                            <span>utilisateurs récents</span>

                            <a href="">voir plus</a>
                        </div>

                        <div class="list">
                            <article class="list-item">
                                <div class="list-item-img">
                                    <img src="../../assets/icons/users.svg" class="icon" alt="">
                                </div>
                                <div class="list-item-text">
                                    <span class="list-item-title">John doe</span>
                                    <span class="list-item-sub-title">Johndoe@email.com</span>
                                </div>
                                <div class="list-item-link">
                                    <img src="../../assets/icons/arrow-right.svg" class="icon" alt="">
                                </div>
                            </article>
                            <article class="list-item">
                                <div class="list-item-img">
                                    <img src="../../assets/icons/users.svg" class="icon" alt="">
                                </div>
                                <div class="list-item-text">
                                    <span class="list-item-title">John doe</span>
                                    <span class="list-item-sub-title">Johndoe@email.com</span>
                                </div>
                                <div class="list-item-link">
                                    <img src="../../assets/icons/arrow-right.svg" class="icon" alt="">
                                </div>
                            </article>
                            <article class="list-item">
                                <div class="list-item-img">
                                    <img src="../../assets/icons/users.svg" class="icon" alt="">
                                </div>
                                <div class="list-item-text">
                                    <span class="list-item-title">Jane doe</span>
                                    <span class="list-item-sub-title">Johndoe@email.com</span>
                                </div>
                                <div class="list-item-link">
                                    <img src="../../assets/icons/arrow-right.svg" class="icon" alt="">
                                </div>
                            </article>
                            <article class="list-item">
                                <div class="list-item-img">
                                    <img src="../../assets/icons/users.svg" class="icon" alt="">
                                </div>
                                <div class="list-item-text">
                                    <span class="list-item-title">Bob doe</span>
                                    <span class="list-item-sub-title">Johndoe@email.com</span>
                                </div>
                                <div class="list-item-link">
                                    <img src="../../assets/icons/arrow-right.svg" class="icon" alt="">
                                </div>
                            </article>
                            <article class="list-item">
                                <div class="list-item-img">
                                    <img src="../../assets/icons/users.svg" class="icon" alt="">
                                </div>
                                <div class="list-item-text">
                                    <span class="list-item-title">Georges doe</span>
                                    <span class="list-item-sub-title">Johndoe@email.com</span>
                                </div>
                                <div class="list-item-link">
                                    <img src="../../assets/icons/arrow-right.svg" class="icon" alt="">
                                </div>
                            </article>
                        
                        </div>

                    </div>

                    <div class="customers-child">
                        <div class="sub-section-title">
                            <span>Pharmacies récentes</span>

                            <a href="">voir plus</a>
                        </div>
                        <div class="list">
                            <article class="list-item">
                                <div class="list-item-img">
                                    <img src="../../assets/icons/briefcase-business.svg" class="icon" alt="">
                                </div>
                                <div class="list-item-text">
                                    <span class="list-item-title">John doe</span>
                                    <span class="list-item-sub-title">Johndoe@email.com</span>
                                </div>
                                <div class="list-item-link">
                                    <img src="../../assets/icons/arrow-right.svg" class="icon" alt="">
                                </div>
                            </article>
                            <article class="list-item">
                                <div class="list-item-img">
                                    <img src="../../assets/icons/briefcase-business.svg" class="icon" alt="">
                                </div>
                                <div class="list-item-text">
                                    <span class="list-item-title">Pharmacie 1</span>
                                    <span class="list-item-sub-title">Johndoe@email.com</span>
                                </div>
                                <div class="list-item-link">
                                    <img src="../../assets/icons/arrow-right.svg" class="icon" alt="">
                                </div>
                            </article>
                            <article class="list-item">
                                <div class="list-item-img">
                                    <img src="../../assets/icons/briefcase-business.svg" class="icon" alt="">
                                </div>
                                <div class="list-item-text">
                                    <span class="list-item-title">Pharmacie 2</span>
                                    <span class="list-item-sub-title">Johndoe@email.com</span>
                                </div>
                                <div class="list-item-link">
                                    <img src="../../assets/icons/arrow-right.svg" class="icon" alt="">
                                </div>
                            </article>
                            <article class="list-item">
                                <div class="list-item-img">
                                    <img src="../../assets/icons/briefcase-business.svg" class="icon" alt="">
                                </div>
                                <div class="list-item-text">
                                    <span class="list-item-title">Pharmacie 3</span>
                                    <span class="list-item-sub-title">Johndoe@email.com</span>
                                </div>
                                <div class="list-item-link">
                                    <img src="../../assets/icons/arrow-right.svg" class="icon" alt="">
                                </div>
                            </article>
                            <article class="list-item">
                                <div class="list-item-img">
                                    <img src="../../assets/icons/briefcase-business.svg" class="icon" alt="">
                                </div>
                                <div class="list-item-text">
                                    <span class="list-item-title">Pharmacie 4</span>
                                    <span class="list-item-sub-title">Johndoe@email.com</span>
                                </div>
                                <div class="list-item-link">
                                    <img src="../../assets/icons/arrow-right.svg" class="icon" alt="">
                                </div>
                            </article>

                           
                        </div>
                    </div>
                </div>
                <div id="dashboard-products">
                    <div class="sub-section-title">
                        <span>Les produits populaires</span>
                        <a href="">Voir plus</a>
                    </div>
                    <div class="products-frame">
                        <div class="product-card">
                            <a href="../../pages/produit.php" class="product-img">
                                <img src="../../assets/img/test-antigenique-sejoy-face-C.png" alt="">
                            </a>

                            <div class="product-details">
                                <div class="content-column">
                                    <span class="product-name">Name</span>
                                    <span class="sub small-text product-info">Short description</span>
                                </div>

                                <span class="product-price">5.000 XAF</span>
                            </div>
                        </div>
                        <div class="product-card">
                            <a href="../../pages/produit.php" class="product-img">
                                <img src="../../assets/img/test-antigenique-sejoy-face-C.png" alt="">
                            </a>

                            <div class="product-details">
                                <div class="content-column">
                                    <span class="product-name">Name</span>
                                    <span class="sub small-text product-info">Short description</span>
                                </div>

                                <span class="product-price">5.000 XAF</span>
                            </div>
                        </div>
                        <div class="product-card">
                            <a href="../../pages/produit.php" class="product-img">
                                <img src="../../assets/img/test-antigenique-sejoy-face-C.png" alt="">
                            </a>

                            <div class="product-details">
                                <div class="content-column">
                                    <span class="product-name">Name</span>
                                    <span class="sub small-text product-info">Short description</span>
                                </div>

                                <span class="product-price">5.000 XAF</span>
                            </div>
                        </div>
                        <div class="product-card">
                            <a href="../../pages/produit.php" class="product-img">
                                <img src="../../assets/img/test-antigenique-sejoy-face-C.png" alt="">
                            </a>

                            <div class="product-details">
                                <div class="content-column">
                                    <span class="product-name">Name</span>
                                    <span class="sub small-text product-info">Short description</span>
                                </div>

                                <span class="product-price">5.000 XAF</span>
                            </div>
                        </div>
                        
                        
                    
                    </div>
                </div>
            </section>
            <!-- Autres pages -->
            <section id="users">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nom</th>
                            <th>email</th>
                            <th>role</th>
                            <th>crée le</th>
                        </tr>
                    </thead>
                        <tr>
                            <td>001</td>
                            <td>John Doe</td>
                            <td>johndoe@email.com</td>
                            <td>user</td>
                            <td>12/12/2025</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>John Doe</td>
                            <td>johndoe@email.com</td>
                            <td>user</td>
                            <td>12/12/2025</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>John Doe</td>
                            <td>johndoe@email.com</td>
                            <td>user</td>
                            <td>12/12/2025</td>
                        </tr>
                    <tbody>

                    </tbody>
                </table>
            </section>
            <section id="entreprises">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nom</th>
                            <th>email</th>
                            <th>admin ID</th>
                            <th>crée le</th>
                        </tr>
                    </thead>
                        <tr>
                            <td>001</td>
                            <td>Pharmacie 01</td>
                            <td>pharmacie@email.com</td>
                            <td>001</td>
                            <td>12/12/2025</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Pharmacie 02</td>
                            <td>pharmacie@email.com</td>
                            <td>001</td>
                            <td>12/12/2025</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Pharmacie 01</td>
                            <td>pharmacie@email.com</td>
                            <td>001</td>
                            <td>12/12/2025</td>
                        </tr>
                       
                    <tbody>

                    </tbody>
                </table>
            </section>
            <section id="products">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nom</th>
                            <th>price</th>
                            <th>crée par</th>
                            <th>crée le</th>
                        </tr>
                    </thead>
                        <tr>
                            <td>001</td>
                            <td>Aspirin</td>
                            <td>5000</td>
                            <td>001</td>
                            <td>12/12/2025</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Aspirin</td>
                            <td>5000</td>
                            <td>001</td>
                            <td>12/12/2025</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Aspirin</td>
                            <td>5000</td>
                            <td>001</td>
                            <td>12/12/2025</td>
                        </tr>
                       
                    <tbody>

                    </tbody>
                </table>
            </section>
            <section id="categories">CATEGORIES</section>
            <section id="feedback">Feedback</section>
            
         </main>
    </div>

    <!-- Footer -->
    <footer>
        
        <div class="menu-container">
            <div class="logo" >
                <span > e-pharm</span>
            </div>

            <div class="footer-menu">
                <span>Menu</span>
                <ul>
                <li><a href="../index.html">Acceuil</a></li>
                <li><a href="../pages/catalogue.html">Catalogue</a></li>
                <li><a href="../pages/contact.html">Contact</a></li>
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