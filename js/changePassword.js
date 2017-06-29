
$(function () {
    $.fn.editable.defaults.mode = 'inline';
    var data = {};
    var oldPassword = false;
    var newPassword = false;
    var reNewPassword = false;

    //All input fields common properties.
    $('.password-field').editable({
        url: '/account/password',
        type: 'password'
    });

    //Old password input field.
    $('#old-password').editable('option', 'placeholder', 'Enter your old password.');

    $('#old-password').editable('option', 'validate', function (value) {
        value = $.trim(value);
        if (value.length < 8) {
            return 'Old password is too short.';
        }
        if (value.length > 20) {
            return 'Old password is too long.'
        }

        data.oldPassword = value;
    });

    //New password input field.
    $('#new-password').editable('option', 'placeholder', 'Enter your new password.');

    $('#new-password').editable('option', 'validate', function (value) {
        value = $.trim(value);
        if (value.length < 8) {
            return "New password is too short.";
        }
        if (value.length > 20) {
            return "New password is too long.";
        }
        var uppercase = value.match(/[A-Z]/g);
        var number = value.match(/[0-9]/g);
        var special = value.match(/[!@#$%^&*()_+\-=[\]{};'\\:"|,.\/<>?`~]/g);

        if ((uppercase == null || number == null) || special == null) {
            showMessage('error', "Password must contain at least 1 uppercase letter, number and special symbol.");
            return  "Weak password. Please try again";
        }

        if (value.length > 7 && value.length < 12 && uppercase.length > 0 && number.length > 0 && special.length > 0) {
            showMessage('info', 'Medium password.');
        }
        if (value.length >= 12 && value.length < 18 && uppercase.length > 2 && number.length > 2 && special.length > 2) {
            showMessage('info', 'Strong password.');
        }
        if (value.length >= 18 && uppercase.length >= 3 && number.length >= 3 && special.length >= 3) {
            showMessage('info', 'Unbreakable password.');
        }

        data.newPassword = value;
    });


    //Repeat new password input field
    $('#repeat-new-password').editable('option', 'placeholder', 'Repeat your new password.');

    $('#repeat-new-password').editable('option', 'validate', function (value) {
        value = $.trim(value);
        if (value != data.newPassword) {
            return 'Passwords don\'t match';
        }
        data.reNewPassword = value;
    });

$('#btnPassChange').click(function(){
    $('.password-field').editable('submit', {
        url: '/account/password',
        ajaxOptions :{
            dataType: 'json'
        },
        success: function(){
            alert('success');
        },
        error: function(data){
            alert(data);
        }
    })
})
});

function showMessage(type, message) {
    $('#message-text').removeClass('error success info');
    $('#message-text').addClass(type)
    $('#message-text').html(message);

    $("#message-text").fadeTo(500, 1);
    setTimeout(function () {
        $('#message-text').fadeTo(500, 0);
    }, 3000);
}