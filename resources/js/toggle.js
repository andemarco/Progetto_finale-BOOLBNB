const $ = require('jquery');

require('./bootstrap');


$(document).ready(function () {
    $('.faq').click(function () {
        $('.ask').hide();
        $(this).siblings('.ask').slideToggle();
    });
    $('.fa-times-circle').click(function () {
        $('.ask').slideUp();
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
});