$(function () {
    $.fn.editable.defaults.mode = 'inline';
    var url = '/account/update';
    $('#firstname').editable({
        type: 'text',
        url: url,
        pk: 1,
        placement: 'top',
        title: 'Enter comments',
        disabled: true,
        anim: '1',
        success: function () {
            showMessage('success', 'First name successfully changed.');
        },
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required.';
            }
            if ($.trim(value).length > 50) {
                return 'First name is too long :(';
            }
        }
    });
    $('#lastname').editable({
        type: 'text',
        url: url,
        pk: 1,
        placement: 'top',
        title: 'Enter comments',
        disabled: true,
        anim: '1',
        success: function () {
            showMessage('success', 'Last name successfully changed.');
        },
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required.';
            }
            if ($.trim(value).length > 50) {
                return 'First name is too long :(';
            }
        }
    });

});
$('#edited').click(function () {
    
    if($('#edited').attr('locked') == 'true'){
        showMessage('info', 'Edit has been unlocked.');
        $('#edited').attr('locked','false');
    }
    else{
        showMessage('info', 'Edit has been locked.');
        $('#edited').attr('locked', 'true');
    }

    $('#firstname').editable('toggleDisabled');
    $('#lastname').editable('toggleDisabled');
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
