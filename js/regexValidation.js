function checkEmail() {

    //store the email within var e
    var e = document.getElementById('email');
    //develop regex to check for proper email formatting
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    //test e on regex, if fail:
    if (!regex.test(email.value)) {
    //alert invalid email address
    alert('Invalid email address!');
    return;
 } //if
} //checkEmail

function checkPassword() {
    //store the password within var p
    var p = document.getElementById('password');
    //develop regex to check for proper email formatting
    var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/

    //test p on regex, if fail:
    if (!regex.test(password.value)) {
    //alert invalid password 
    alert('Please enter a password with 6 or more characters!');
    return;
    } //if
} //checkPassword