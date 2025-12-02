import { CloneTemplate } from "../utils/dom.js"


export class ProductCard {
    
    element = null
    constructor(product) {
        this.product = product

        this.element = CloneTemplate('product-card-template').firstElementChild

        const link = this.element.querySelector('a')
        const img = this.element.querySelector('img')
        const name = this.element.querySelector('.product-name')
        const info = this.element.querySelector('.product-info')
        const price = this.element.querySelector('.product-price')
        const addToCartButton = this.element.querySelector('.add-to-cart-btn')

        const href = link.getAttribute('href')
        link.setAttribute('href', `${href}?id=${this.product.id}`)
        img.setAttribute('src', this.product.image)
        img.setAttribute('alt', this.product.name)
        name.innerText = this.product.name
        info.innerText = this.product.about
        price.innerText = `${this.product.price} XAF`
        addToCartButton.innerText = 'Ajouter au panier'

        link.addEventListener('click', (e) => this.viewProduct(e))
        addToCartButton.addEventListener('click', (e) => this.addToCart(e))

        this.toggleApparence()
    }

    viewProduct () {
        localStorage.setItem('currentProduct', JSON.stringify(this.product.id))
    }

    addToCart () {
        
        const cart = localStorage.getItem('cart')
        let cartItems = cart ? JSON.parse(cart) : []

        const isInCart = cartItems.some(item => item.id === this.product.id)
        if (isInCart) return

        cartItems.push({...this.product, quantity: 1})
        localStorage.setItem('cart', JSON.stringify(cartItems))
        const event = new CustomEvent('cartUpdated', {
            detail : cartItems,
            bubbles : true
        })
        this.element.dispatchEvent(event)

        this.toggleApparence()

    }

    toggleApparence () {
        const cart = localStorage.getItem('cart')
        let cartItems = cart ? JSON.parse(cart) : []
        const isInCart = cartItems.some(item => item.id === this.product.id)
        const addToCartButton = this.element.querySelector('.add-to-cart-btn')

        if (isInCart) {
            addToCartButton.innerText = 'Ajouté au panier'
            addToCartButton.classList.add('outline-bordered')
        }
    }
}

export class ProductCardList {
    constructor(products) {
        this.products = products
    }

    appendTo (parent) {
        this.products.forEach(product => {
            const productCard = new ProductCard(product)
            parent.appendChild(productCard.element)
        })
    }
}