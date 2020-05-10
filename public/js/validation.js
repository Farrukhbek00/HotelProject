// Form Blur Event Listeners
document.getElementById('name').addEventListener('blur', validateName);
document.getElementById('password').addEventListener('blur', validatePassword);
document.getElementById('postal').addEventListener('blur', validatePostalCode);
document.getElementById('email').addEventListener('blur', validateEmail);
document.getElementById('phone').addEventListener('blur', validatePhone);
document.getElementById('birth').addEventListener('blur', validateBirth);
document.getElementById('city').addEventListener('blur', validateCity);
document.getElementById('number').addEventListener('blur', validatePassportNumber);



function validateName() {
    const name = document.getElementById('name');
    const re = /^[a-zA-Z0-9]{5,}$/;

    if(!re.test(name.value)) {
        name.classList.add('is-invalid');
    } else {
        name.classList.remove('is-invalid');
    }
}
function validatePassword() {
    const password = document.getElementById('password');
    const re = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{5,}$/;

    if(!re.test(password.value)) {
        password.classList.add('is-invalid');
    } else {
        password.classList.remove('is-invalid');
    }
}
function validatePostalCode() {
    const postal = document.getElementById('postal');
    const re = /^\d{7}(?:\d{2})?$/;

    if(!re.test(postal.value)) {
        postal.classList.add('is-invalid');
    } else {
        postal.classList.remove('is-invalid');
        postal.classList.add('is-valid');
    }
}
function validateEmail() {
    const email = document.getElementById('email');
    const re = /^([a-zA-Z0-9_\.\-]+)@([a-zA-Z0-9_\.\-]+)\.([a-zA-Z]{2,5})$/;

    if(!re.test(email.value)) {
        email.classList.add('is-invalid');
    } else {
        email.classList.remove('is-invalid');
        email.classList.add('is-valid');
    }
}
function validatePhone() {
    const phone = document.getElementById('phone');
    const re = /(?:\+\([9]{2}[8]\)[0-9]{2}\ [0-9]{3}\-[0-9]{2}\-[0-9]{2})/;

    if(!re.test(phone.value)) {
        phone.classList.add('is-invalid');
    } else {
        phone.classList.remove('is-invalid');
        phone.classList.add('is-valid');
    }
}


function validateBirth() {
    const birth = document.getElementById('birth');
    const re = /^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$/;

    if(!re.test(birth.value)) {
        birth.classList.add('is-invalid');
    } else {
        birth.classList.remove('is-invalid');
        birth.classList.add('is-valid');
    }
}


function validatePassportNumber() {
    const number = document.getElementById('number');
    const re = /^[A-Z]{2}[0-9]{7}$/;

    if(!re.test(number.value)) {
        number.classList.add('is-invalid');
    } else {
        number.classList.remove('is-invalid');
        number.classList.add('is-valid');
    }
}
