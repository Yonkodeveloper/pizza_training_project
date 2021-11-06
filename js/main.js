(function () {
    'use strict'

    $(document).ready(function () {

        let loader = $('#loader');

        $('#submit').click(function () {

            let errorInput = $('.error-input')
            let name = $('#name');
            let address = $('#address');
            let tel = $('#tel');
            let hasError = false;

            errorInput.hide();

            if (!name.val()) {
                name.siblings('.error-input').show();
                name.css('border-color', 'red');
                name.css('margin-bottom', '0');
                hasError = true;
            } else {
                name.css('margin-bottom', '24px')
                name.css('border-color', 'rgb(185, 145, 80)');
            }

            if (!address.val()) {
                address.siblings('.error-input').show();
                address.css('border-color', 'red');
                address.css('margin-bottom', '0');
                hasError = true;
            } else {
                address.css('margin-bottom', '24px')
                address.css('border-color', 'rgb(185, 145, 80)');
            }

            if (!tel.val()) {
                tel.siblings('.error-input').show();
                tel.css('border-color', 'red');
                tel.css('margin-bottom', '0');
                hasError = true;
            } else {
                tel.css('margin-bottom', '24px');
                tel.css('border-color', 'rgb(185, 145, 80)');
            }

            if (!hasError) {

                loader.css('display', 'flex');

                $.ajax({
                    method: "POST",
                    url: 'mail.php',
                    data: {name: name.val(), address: address.val(), tel: tel.val()}
                })
                    .done(function (response) {
                        loader.hide();
                        alert(response);
                    })
                    .fail(function (response) {
                        alert(response);
                    })

            }

        });


        $('.cookie-close').click(function () {
            $('#cookie').hide();
            localStorage.setItem('cookiehide', '1');
        });


        let cookiehide = localStorage.getItem('cookiehide');
        if (!cookiehide) {
            $('#cookie').show();
        } else {
            $('#cookie').hide();
        }
    });


}())


// .done(function( message ) {
//     loader.hide();
//     // console.log(message);
//     if (message.success) {
//         $('#form').css('display', 'none');
//         $('#hidden-result').css('display', 'block');
//     } else {
//         alert('Возникла ошибка при оформлении заказа, позвоните нам и сделайте заказ');
//     }
// });