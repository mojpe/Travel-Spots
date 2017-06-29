$('#subButtonSignUp').click(function (){
    var email = $.trim($('#email').val());
    var password = $('#password').val();
    var rePassword = $('#re-password').val();
    
    if(!validateEmailLength(email)){
        showMessage('error', 'Email is empty');
        return false;
    }
    if(!validateEmail(email)){
        showMessage('error','Invalid email.');
        return false;
    }
    if(!validatePasswordLength(password)){
        showMessage('error','Password is too short.');
        return false;
    }
    if(!validatePassword(password, rePassword)){
        showMessage('error','Password doesn\'t match!');
        return false;
    }
});

function validateEmail(email) {
    var re = /([a-z0-9]+@{1}[a-z]+\.{1}[a-z]+)/g;
    return re.test(email) && email.indexOf(' ') == -1;
}
function validateEmailLength(email){
    return !(email.length < 1);
}

function validatePassword(password, rePassword){
    return password === rePassword;
}
function validatePasswordLength(password){
    return !(password.length < 6);
}

function showMessage(type, message) {
    $('#message-text').removeClass('error success info');
    $('#message-text').addClass(type)
    $('#message-text').html(message);

    $("#message-text").fadeTo(500, 1);
    setTimeout(function () {
        $('#message-text').fadeTo(500, 0);
    }, 3000);
}