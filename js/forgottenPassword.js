$('#subButtonForgottenPassword').click(function(){
    var email = $('#email').val();
    if(!validateEmail(email) || !validateEmailLength(email)){
        showMessage('error', 'Email is invalid.');
        return false;
    }
});

  $('#forgottenPasswordForm').submit(function(e){
    var url = "/forgotten-password";
    
    $.ajax({
        type: "POST",
        url: url,
        dataType: 'json',
        data: $('#forgottenPasswordForm').serialize(),
        success: function(data){
            if(data.error){
                showMessage('error', data.error);
            } else{
                showMessage('success', data.success);
            }
        }
    });
    e.preventDefault();
})


function validateEmail(email) {
    var re = /([a-z0-9]+@{1}[a-z]+\.{1}[a-z]+)/g;
    return re.test(email) && email.indexOf(' ') == -1;
}
function validateEmailLength(email){
    return !(email.length < 1);
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
