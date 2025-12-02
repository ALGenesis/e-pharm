import { getCartCard } from '../api/getCartCard.js'
import { CartCardList } from '../classes/cartCard.js'

function cart (){
        try {
            const cartInstorage = getCartCard()

            const cartCardCotainer = new CartCardList(cartInstorage)
            cartCardCotainer.appendTo(document.getElementById('cart-container'))
            } 
        catch(e) {
            alert('Impossible de charger les produits')
            console.error('Error loading cart products:', e)
        }

}

cart()