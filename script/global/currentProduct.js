
export function currentProduct() {
    try {
        const currentProductId = localStorage.getItem('currentProduct');
        if (currentProductId) {
            return JSON.parse(currentProductId);
        } else {
            localStorage.setItem('currentProduct', JSON.stringify(1));
            return 1;
        }
    } catch (error) {
        console.error('Error accessing localStorage:', error);
    }
}

export function setCurrentProduct(productId) {
    try {
        localStorage.setItem('currentProdut', JSON.stringify(productId))
    } catch (error) {
        console.error('Error accessing localStorage:', error);
    }
}