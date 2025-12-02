import { fetchJSON } from "../api/fetchJSON.js";
import { ProductPage } from "../classes/productPage.js";
import { ProductCardList } from "../classes/productCard.js";


async function product() {
    try {
        const products = await fetchJSON('../data/data.json');
        const currentProductId = JSON.parse(localStorage.getItem('currentProduct'));
        const product = products.filter(p => parseInt(p.id) === parseInt(currentProductId));

        const productPage = new ProductPage(product[0]);
        productPage.prependTo(document.querySelector('main'));

        
        const filteredProducts = products.filter(p => parseInt(p.id) !== parseInt(currentProductId)).slice(0, 4); // Afficher seulement les 8 premiers produits
        const productContainer = new ProductCardList(filteredProducts);
        productContainer.appendTo(document.getElementById('product-suggested'));
    } catch (error) {
        console.error('Error in product function:', error);
    }
}

product();