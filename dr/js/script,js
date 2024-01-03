const form = document.getElementById('form');
const uname = document.getElementById('name');
const email = document.getElementById('email');
const pass = document.getElementById('pass');
const pass2 = document.getElementById('pass2');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText =  message;
    inputControl.classList.add('error');
    inputControl.classList.add('success');

}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');

};

const isValidEmail =  email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const unameValue = uname.value.trim();
    const emailValue = email.value.trim();
    const passValue = pass.value.trim(); 
    const pass2Value = pass2.value.trim();

    if(unameValue === ''){
        setError(uname, 'Username is required!');
    }else{
        setSuccess(uname);
    }

    if(emailValue === ''){
        setError(email, 'Email is required!');
    }else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passValue === '') {
        setError(pass, 'Password is required');
    } else if (passValue.length < 8 ) {
        setError(pass, 'Password must be at least 8 character.')
    } else {
        setSuccess(pass);
    }

    if(pass2Value === '') {
        setError(pass2, 'Please confirm your password');
    } else if (pass2Value !== passValue) {
        setError(pass2, "Passwords doesn't match");
    } else {
        setSuccess(pass2);
    }


};
