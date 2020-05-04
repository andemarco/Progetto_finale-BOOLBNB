const $ = require('jquery');
require('./bootstrap');
$(document).ready(function () {
    $('.faq').click(function () {
        $('.ask').hide();
        $(this).siblings('.ask').slideToggle();
    });
    // NUMERICI EFFECT
    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    $('.fa-arrow-alt-circle-down').click(function () {
        $('.box-create-edit').slideToggle(1200);
    });
});




