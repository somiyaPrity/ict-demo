// const loginForm = document.querySelector('.login-form')
// const registerForm = document.querySelector('.register-form')
// const login = document.querySelector('.login')
// const register = document.querySelector('.register')
// login.addEventListener('click', () => {
//   login.classList.add('item-effect')
//   register.classList.remove('item-effect')
//   loginForm.style.display = 'block'
//   registerForm.style.display = 'none'
// })
// register.addEventListener('click', () => {
//   login.classList.remove('item-effect')
//   register.classList.add('item-effect')
//   loginForm.style.display = 'none'
//   registerForm.style.display = 'block'
// })

//form validation

function formValidation(){
  let name = document.querySelector('.name').value;
  let fatherName = document.querySelector('.father-name').value;
  let motherName = document.querySelector('.mother-name').value;
  let address = document.querySelector('.address').value;
  let nid = document.querySelector('.nid').value;
  let organizationName = document.querySelector('.organization-name').value;
  let organizationAddress = document.querySelector('.organization-address').value;
  let licenseNo = document.querySelector('.license-no').value;
  let tinNo = document.querySelector('.tin-no').value;
  let bankName = document.querySelector('.bank-name').value;
  let soi = document.querySelector('.soi').value;
  let service = document.querySelector('.service').value;

  if(name.length<3){
    let validationMgs = document.querySelector('.name-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  if(fatherName.length<3){
    let validationMgs = document.querySelector('.fathername-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  if(motherName.length<3){
    let validationMgs = document.querySelector('.mothername-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  if(address.length<10){
    let validationMgs = document.querySelector('.address-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  if(nid.length<8){
    let validationMgs = document.querySelector('.nid-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  if(organizationAddress.length<5){
    let validationMgs = document.querySelector('.organization-address-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  if(licenseNo.length<5){
    let validationMgs = document.querySelector('.license-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  if(tinNo.length<5){
    let validationMgs = document.querySelector('.tin-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  if(bankName.length<5){
    let validationMgs = document.querySelector('.bank-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  if(soi.length<3){
    let validationMgs = document.querySelector('.soi-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  if(service.length<3){
    let validationMgs = document.querySelector('.service-error-mgs');
    validationMgs.classList.remove('invalid-feedback');
    return false;
  }
  else{
    return true;
  }
}

document.getElementById('submit-form').addEventListener('click',(e)=>{
  e.preventDefault();
  // console.log("clicked");
  if(!formValidation()){
    return false;
  }
  // console.log("Seuccessfully submitted");
  let seccessMgs = document.querySelector('.alert');
  seccessMgs.classList.remove('d-none');
})
