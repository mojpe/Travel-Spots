$('#loginForm').submit(function(e){
    var url = "/login";
    
    $.ajax({
        type: "POST",
        url: url,
        dataType: 'json',
        data: $('#loginForm').serialize(),
        success: function(data){
            if(data.error){
                showMessage('error', data.error);
            } else{
                window.location.href = '/account';
            }
        }
    });
    e.preventDefault();
})

function showMessage(type, message) {
    $('#message-text').removeClass('error success info');
    $('#message-text').addClass(type)
    $('#message-text').html(message);

    $("#message-text").fadeTo(500, 1);
    setTimeout(function () {
        $('#message-text').fadeTo(500, 0);
    }, 3000);
}