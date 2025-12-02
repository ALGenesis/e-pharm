import { CloneTemplate } from "../utils/dom.js"

export class ProductPage {
    element = null
    constructor(product) {
        this.product = product

        this.element = CloneTemplate('product-page-template').firstElementChild

        const img = this.element.querySelector('#img')
        const name = this.element.querySelector('#name')
        const description = this.element.querySelector('#description')
        const price = this.element.querySelector('#price')
        const addToCartButton = this.element.querySelector('.submit-btn')
        const quantityInput = this.element.querySelector('#quantity-nbr')

        img.setAttribute('src', this.product.image)
        img.setAttribute('alt', this.product.name)
        name.innerText = this.product.name
        description.innerText = this.product.description
        price.innerText = `${this.product.price} XAF`

        addToCartButton.addEventListener('click', (e) => this.addToCart(e, quantityInput.value))
    }

    addToCart (e, quantity) {
        e.preventDefault()
        const cart = localStorage.getItem('cart')
        let cartItems = cart ? JSON.parse(cart) : []
        cartItems.push({...this.product, quantity: parseInt(quantity)})
        localStorage.setItem('cart', JSON.stringify(cartItems))
        const event = new CustomEvent('cartUpdated', {
            detail : cartItems,
            bubbles : true
        })
        this.element.dispatchEvent(event)
    }

    prependTo (parent) {
        parent.prepend(this.element)
    }
}