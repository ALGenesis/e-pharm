import { fetchJSON } from '../api/fetchJSON.js';
import { ProductCardList } from '../classes/productCard.js';

async function index () {
    try {
        const products = await fetchJSON('../../data/data.json');
        const filteredProducts = products.slice(0, 8); // Afficher seulement les 8 premiers produits
        const productContainer = new ProductCardList(filteredProducts);
        productContainer.appendTo(document.getElementById('index-product-list'));

        
    } catch (error) {
        console.error('Error loading products:', error);
    }
}

index()
