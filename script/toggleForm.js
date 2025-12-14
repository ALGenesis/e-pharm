
function toggleForm(element) {
    document.querySelectorAll('form').forEach(f => f.classList.remove('active'))
    document.getElementById(element).classList.add('active')
}

const login = document.getElementById('login')
const register = document.getElementById('register')

login.querySelector('a').addEventListener('click', (e) => {
    e.preventDefault()
    toggleForm('register')
})
register.querySelector('a').addEventListener('click', (e) => {
    e.preventDefault()
    toggleForm('login')
})