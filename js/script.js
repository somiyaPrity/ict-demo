const loginForm = document.querySelector('.login-form')
const registerForm = document.querySelector('.register-form')
const login = document.querySelector('.login')
const register = document.querySelector('.register')
login.addEventListener('click', () => {
  login.classList.add('item-effect')
  register.classList.remove('item-effect')
  loginForm.style.display = 'block'
  registerForm.style.display = 'none'
})
register.addEventListener('click', () => {
  login.classList.remove('item-effect')
  register.classList.add('item-effect')
  loginForm.style.display = 'none'
  registerForm.style.display = 'block'
})
