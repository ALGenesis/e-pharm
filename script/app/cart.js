import { getCartCard } from '../api/getCartCard.js'
import { CartCardList } from '../classes/cartCard.js'

function cart (){
        try {
            const cartInstorage = getCartCard()

            console.log(cartInstorage)

            const articles = cartInstorage?.length ?? 0
            const totalPrice = cartInstorage?.reduce((acc, cart) => {
               return acc + parseInt(cart.price)
            } ,0 )


            const cartCardCotainer = new CartCardList(cartInstorage)
            cartCardCotainer.appendTo(document.getElementById('cart-container'))

            document.getElementById('total-articles').innerText = articles ?? 0
            document.getElementById('total-price').innerText = `${totalPrice ?? 0} XAF` 

            document.querySelector('section').addEventListener('productRemoved', () => {
                document.getElementById('total-articles').innerText = articles ?? 0
                document.getElementById('total-price').innerText = `${totalPrice ?? 0} XAF` 
            })
            } 
        catch(e) {
            alert('Impossible de charger les produits')
            console.error('Error loading cart products:', e)
        }

}

cart()