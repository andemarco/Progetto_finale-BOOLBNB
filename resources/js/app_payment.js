require('./bootstrap');
const $ = require('jquery');
$(document).ready(function () {
    $('#subscription-plan').change(function () {
        $('#bt-dropin').html('');
        $('.payment-form').removeAttr('hidden');
        var form = document.querySelector('#payment-form');
        var client_token = $('#token').val();
        braintree.dropin.create({
            authorization: client_token,
            selector: '#bt-dropin',
        }, function (createErr, instance) {
            if (createErr) {
                console.log('Create Error', createErr);
                return;
            }
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                instance.requestPaymentMethod(function (err, payload) {
                    if (err) {
                        console.log('Request Payment Method Error', err);
                        return;
                    }
                    // Add the nonce to the form and submit
                    document.querySelector('#nonce').value = payload.nonce;
                    form.submit();
                });
            });
        });
    });
});