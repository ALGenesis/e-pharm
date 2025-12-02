import { CloneTemplate } from "../utils/dom.js"


export class CartCard {
    element = null
    constructor(product) {
        this.product = product

        this.element = CloneTemplate('cart-card-template').firstElementChild

        const img = this.element.querySelector('img')
        const productName = this.element.querySelector('.cart-product-name')
        const productInfo = this.element.querySelector('.cart-product-info')
        const productPrice = this.element.querySelector('.cart-product-price')
        const removeButton = this.element.querySelector('.delete-btn')

        const quantityControl = this.element.querySelector('.quantity-control')
        const quantityInput = quantityControl.querySelector('.quantity-input')
        const incrementButton = quantityControl.querySelector('.plus-btn')
        const decrementButton = quantityControl.querySelector('.minus-btn')
        

        img.setAttribute('src', this.product.image)
        img.setAttribute('alt', this.product.name)
        productName.innerText = this.product.name
        productInfo.innerText = this.product.about
        productPrice.innerText = `${this.product.price} XAF`
        quantityInput.value = this.product.quantity || 1

        removeButton.addEventListener('click', (e) => this.removeProduct(e))
        incrementButton.addEventListener('click', (e) => this.incrementQuantity())
        decrementButton.addEventListener('click', (e) => this.decrementQuantity())

    }

    get element () {
        return this.element
    }

    removeProduct (e) {
        e.preventDefault()
        const cart = localStorage.getItem('cart')
        let cartItems = cart ? JSON.parse(cart) : []
        cartItems = cartItems.filter(item => item.id !== this.product.id)
        localStorage.setItem('cart', JSON.stringify(cartItems))

        const event = new CustomEvent('productRemoved', {
            detail : this.product,
            bubbles : true,
            cancelable : true
        })
        this.element.dispatchEvent(event)
        this.element.remove()
    }

    incrementQuantity () {
        this.product.quantity = (this.product.quantity || 1) + 1

        const quantityControl = this.element.querySelector('.quantity-control')
        const quantityInput = quantityControl.querySelector('.quantity-input')
        quantityInput.value = parseInt(this.product.quantity)

        this.element.querySelector('')
        const event = new CustomEvent('quantityChanged', {
            detail : this.product,
            bubbles : true
        })
        this.element.dispatchEvent(event)
    }

    decrementQuantity () {
        if ((this.product.quantity || 1) > 1) {
            this.product.quantity = (this.product.quantity || 1) - 1

            const quantityControl = this.element.querySelector('.quantity-control')
            const quantityInput = quantityControl.querySelector('.quantity-input')
            quantityInput.value = parseInt(this.product.quantity)
            
            const event = new CustomEvent('quantityChanged', {
                detail : this.product,
                bubbles : true
            })
            this.element.dispatchEvent(event)
        }
    }
}

export class CartCardList {

    constructor(carts) {
        this.carts = carts
    }

    appendTo (parent) {
        this.carts.forEach(cart => {
            const cartCard = new CartCard(cart)
            parent.appendChild(cartCard.element)
        })
    }    
}