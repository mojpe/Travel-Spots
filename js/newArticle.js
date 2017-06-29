$('#article-content').summernote({
    height: 200,
    maxHeight: 300,
    minHeight: 100,
    toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
    ],
    placeholder: "Write your content here..."
});


$('#new-article-form').submit(function (e) {
    $('#article-content').val($('#article-content').summernote('code'));

    var url = '/newArticle';

    $.ajax({
        type: 'POST',
        url: url,
        dataType: 'json',
        data: formData,
        success: function (data) {
            if (data.error) {
                alert(data);
            } else {
                alert('Success');
            }
        }
    });
    e.preventDefault();
});

$(function () {
    $("#location").geocomplete({
        map: ".map_canvas",
        details: "#form-location",
        types: ["geocode", "establishment"],
    });

    $("#search").click(function () {
        $("#location").trigger("geocode");
    });
});