
export function getCartCard () {
    try {
        const cartData = localStorage.getItem('cart')
        if (cartData) {
            const cartItems = JSON.parse(cartData)
            return cartItems
        } else {
            localStorage.setItem('cart', JSON.stringify([]))
            return []
        }
        
    } catch (error) {
        console.error('Error getting CartCards from LocalStorage : ', error.message)
    }
}