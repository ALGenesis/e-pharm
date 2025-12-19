document.addEventListener('DOMContentLoaded', () => {
    // 1. Sélection des éléments clés
    const navLinks = document.querySelectorAll(' aside nav li');
    const contentSections = document.querySelectorAll('section');

    // 2. Fonction pour masquer toutes les sections
    const hideAllSections = () => {
        contentSections.forEach(section => {
            section.classList.remove('active');
        });
    };

    // 3. Fonction pour désactiver tous les liens de navigation
    const deactivateAllLinks = () => {
        navLinks.forEach(link => {
            link.classList.remove('active');
        });
    };

    // 4. Boucle sur chaque lien de navigation pour attacher l'événement
    navLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            // Empêche le comportement par défaut si c'était un lien <a>
            event.preventDefault();

            // Récupère l'ID de la section cible à partir de l'attribut 'data-target'
            const targetId = link.getAttribute('data-target');
            const targetSection = document.getElementById(targetId);

            // Applique la logique :
            
            // a. Masque toutes les sections
            hideAllSections();

            // b. Désactive tous les liens
            deactivateAllLinks();

            // c. Affiche la section cible
            if (targetSection) {
                targetSection.classList.add('active');
            }

            // d. Active le lien cliqué
            link.classList.add('active');
        });
    });

    // 5. Initialisation : S'assurer que le tableau de bord est actif au chargement
    // La classe 'active' est déjà mise sur le Dashboard et le lien correspondant en HTML, 
    // mais si vous voulez forcer l'état initial :
    // const defaultTargetId = 'dashboard';
    // document.getElementById(defaultTargetId).classList.add('active');
    // document.querySelector(`.nav-link[data-target="${defaultTargetId}"]`).classList.add('active');
});