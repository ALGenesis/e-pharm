-- Insérer des données d'exemple dans la base de données e-pharm

-- Insérer des utilisateurs
INSERT INTO users (username, email, password, role) VALUES
('admin1', 'admin1@example.com', '$2y$10$hashedpassword1', 'admin'),
('utilisateur1', 'utilisateur1@example.com', '$2y$10$hashedpassword2', 'user'),
('utilisateur2', 'utilisateur2@example.com', '$2y$10$hashedpassword3', 'user'),
('employe1', 'employe1@example.com', '$2y$10$hashedpassword4', 'user'),
('employe2', 'employe2@example.com', '$2y$10$hashedpassword5', 'user');

-- Insérer des entreprises
INSERT INTO entreprises (name, email, phone, address, status, adminId) VALUES
('PharmaCorp', 'contact@pharmacorp.com', '123-456-7890', '123 Rue Principale, Ville, Pays', 'accepted', 1),
('MediSupply', 'info@medisupply.com', '098-765-4321', '456 Rue des Ormes, Ville, Pays', 'accepted', 1);

-- Insérer des rôles
INSERT INTO roles (role) VALUES
('Manager'),
('Employé'),
('Livreur');

-- Insérer du personnel
INSERT INTO staff (entreprise_id, user_id, role) VALUES
(1, 4, 1),  -- employe1 comme Directeur chez PharmaCorp
(1, 5, 2),  -- employe2 comme Employé chez PharmaCorp
(2, 4, 3);  -- employe1 comme Pharmacien chez MediSupply

-- Insérer des catégories
INSERT INTO categories (name, description) VALUES
('Soulagement de la douleur', 'Médicaments pour la gestion de la douleur'),
('Antibiotiques', 'Médicaments pour combattre les infections bactériennes'),
('Vitamines', 'Suppléments pour les besoins nutritionnels');

-- Insérer des produits
INSERT INTO products (name, about, description, price, category, image, stock, created_by) VALUES
('Aspirine', 'Antidouleur', 'Un antidouleur et antipyrétique courant.', '5.99', 1, 'aspirine.jpg', 100, 1),
('Amoxicilline', 'Antibiotique', 'Utilisé pour traiter diverses infections bactériennes.', '12.50', 2, 'amoxicilline.jpg', 50, 1),
('Vitamine C', 'Supplément', 'Renforce le système immunitaire et fournit des antioxydants.', '8.75', 3, 'vitaminc.jpg', 200, 2),
('Ibuprofène', "Antidouleur', 'Anti-inflammatoire non stéroïdien pour la douleur et l'inflammation.", '7.25', 1, 'ibuprofen.jpg', 150, 2);

-- Insérer des commandes
INSERT INTO orders (user_id, status) VALUES
(2, 'pending'),
(3, 'completed'),
(2, 'pending');

-- Insérer des détails de commandes
INSERT INTO orders_details (order_id, product_id, quantity, price, status) VALUES
(1, 1, 2, 11.98, 'pending'),
(1, 3, 1, 8.75, 'pending'),
(2, 2, 1, 12.50, 'received'),
(2, 4, 3, 21.75, 'received'),
(3, 1, 1, 5.99, 'pending');