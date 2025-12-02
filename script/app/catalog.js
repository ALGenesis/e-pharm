import { fetchJSON } from '../api/fetchJSON.js';
import { ProductCardList } from '../classes/productCard.js';

async function insertProducts ( params = null) {
    try {

        const products = await fetchJSON('../../data/data.json');
        if(params && params instanceof String && params !== '') {
        const filteredProducts = products.filter((item) => {
            if(item.includes(params)) return item
        })

        const productContainer = new ProductCardList(filteredProducts)
        productContainer.appendTo(document.getElementById('product-list'));
    } else {
        const productContainer = new ProductCardList(products);
        productContainer.appendTo(document.getElementById('product-list'));
    }
    } catch (error) {
        console.error('Error loading products:', error);
    }
    
}

function handleSubmit(e) {
    e.preventDefault()
    const form = e.currentTarget

    const searchParams = new FormData(form).get('search-params')?.toString().trim()
    if(searchParams === '' || searchParams === null || searchParams === undefined) return null

    insertProducts(searchParams)
    form.reset()
    

}
    


async function product () {
    try {
        
        insertProducts()

        const form = document.getElementById('filter-option')
        form.addEventListener('submit', (e) => handleSubmit(e))
        
    } catch (error) {
        alert('Une erreur est survenue : Impossible de charger les produits' );
        console.error('Error loading products:', error);
    }
}

product()