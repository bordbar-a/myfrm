jQuery(document).ready(function () {

    $("form.ajax-form").submit(function (e) {
        sendFormByAjax(e, $(this));
    });

    $("a.reset-basket").on('click', function (e) {
        sendRequestByAjax(e, $(this));
    });
});


function sendFormByAjax(e, formSelector) {
    e.preventDefault();
    var cart_section = $('li.quick-cart');

    $.ajax({
        type: formSelector.attr('method'),
        url: formSelector.attr('action'),
        data: formSelector.serialize(),
        timeout: 10000,


        success: function (response) {
            var result = JSON.parse(response);

            cart_section.html(result.cart);

            _toastr(result.message, "top-right", "success", false);

            // Quick Cart
            jQuery('li.quick-cart>a').on('click', function (e) {
                e.preventDefault();

                var _quick_cart_box = jQuery('li.quick-cart div.quick-cart-box');

                if (_quick_cart_box.is(":visible")) {
                    _quick_cart_box.fadeOut(300);
                } else {
                    _quick_cart_box.fadeIn(300);

                    // close search if visible
                    if (jQuery('li.search .search-box').is(":visible")) {
                        jQuery('.search-box').fadeOut(300);
                    }
                }
            });
            // close quick cart on body click
            if (jQuery('li.quick-cart>a').size() != 0) {
                jQuery('li.quick-cart').on('click', function (e) {
                    e.stopPropagation();
                });

                jQuery('body').on('click', function () {
                    if (jQuery('li.quick-cart div.quick-cart-box').is(":visible")) {
                        jQuery('li.quick-cart div.quick-cart-box').fadeOut(300);
                    }
                });
            }


            $("a.reset-basket").on('click', function (e) {
                sendRequestByAjax(e, $(this));
            });
        },
        error: function () {
            _toastr("خطایی رخ داده است", "top-right", "error", false);
        }
    });
}


function sendRequestByAjax(e, selector) {
    e.preventDefault();
    var cart_section = $('li.quick-cart');
    $.ajax({
        type: 'post',
        url: selector.attr('data-url'),
        data: '',
        timeout: 10000,


        success: function (response) {

            cart_section.html(response);
            // Quick Cart
            jQuery('li.quick-cart>a').on('click', function (e) {
                e.preventDefault();

                var _quick_cart_box = jQuery('li.quick-cart div.quick-cart-box');

                if (_quick_cart_box.is(":visible")) {
                    _quick_cart_box.fadeOut(300);
                } else {
                    _quick_cart_box.fadeIn(300);

                    // close search if visible
                    if (jQuery('li.search .search-box').is(":visible")) {
                        jQuery('.search-box').fadeOut(300);
                    }
                }
            });
            // close quick cart on body click
            if (jQuery('li.quick-cart>a').size() != 0) {
                jQuery('li.quick-cart').on('click', function (e) {
                    e.stopPropagation();
                });

                jQuery('body').on('click', function () {
                    if (jQuery('li.quick-cart div.quick-cart-box').is(":visible")) {
                        jQuery('li.quick-cart div.quick-cart-box').fadeOut(300);
                    }
                });
            }


            _toastr("سبد خرید خالی شد", "top-right", "warning", false);


            $("a.reset-basket").on('click', function (e) {
                sendRequestByAjax(e, $(this));
            });
        },
        error: function () {
            _toastr("خطایی رخ داده است", "top-right", "error", false);
        }
    });
}