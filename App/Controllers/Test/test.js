$(function () {

    var id;

    $('.edit').click(function () {

        var button = $(this);
        id = $(this).attr('data-id2');

        toggleInput(id);

        if (button.attr('clicked') == 'true') {
            button.val('Edit');
            button.removeAttr('clicked');
        } else {
            button.val('Save');
            button.attr('clicked', 'true');
        }

        $("#" + id).keypress(function (e) {
            if (e.keyCode == 13) {
                toggleInput(id);
                button.val('Edit');
                button.removeAttr('clicked');
            }
        })
        var data = {id : 44 ,president  : 'Someone'};
        ajaxPost(data, 'save');
    })
});


function ajaxPost(data, action){
    $.ajax({
        type:'POST',
        url: '/test/' + action,
        data: data,
        success: function(data){

        }
    })
}

function toggleInput(id) {
    if ($("#" + id).prop('readonly') == true) {
        $("#" + id).prop('readonly', false);
    } else {
        $("#" + id).prop('readonly', true);
    }
}