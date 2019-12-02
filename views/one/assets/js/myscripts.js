jQuery(document).ready(function() {

    $("form.ajax-form").submit(function(e){
        sendByAjax(e , $(this));
    });




});



function sendByAjax(e , formSelector){
    e.preventDefault();
    $.ajax({
        type: formSelector.attr('method'),
        url: formSelector.attr('action'),
        data: formSelector.serialize(),
        timeout: 10000,
        success: function(response) {
            _toastr("به سبد خرید اضافه شد","top-right","success",false);
        },
        error: function() {
            _toastr("خطایی رخ داده است","top-right","error",false);
        }
    });
}