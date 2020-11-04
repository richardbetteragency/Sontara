$(document).ready(function() {
    $("#submit-order").on('click', function() {
        let error_message = '';
        let name = document.getElementsByName("name")[0].value
        let email = document.getElementsByName("email")[0].value
        let company = document.getElementsByName("company")[0].value
        let telephone = document.getElementsByName("telephone")[0].value

        let addressline1 = document.getElementsByName("addressline1")[0].value
        let addressline2 = document.getElementsByName("addressline2")[0].value
        let city = document.getElementsByName("city")[0].value
        let county = document.getElementsByName("county")[0].value
        let country = document.getElementsByName("country")[0].value
        let postcode = document.getElementsByName("postcode")[0].value

        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(!regex.test(email)) {
            error_message = 'The Email field must be in email format!'
        } else if(!name) {
            error_message = 'The Name field is required!'
        } else if(!email) {
            error_message = 'The Email field is required!'
        } else if(!company) {
            error_message = 'The Company field is required!'
        } else if(!telephone) {
            error_message = 'The Telephone field is required!'
        } else if(!addressline1) {
            error_message = 'The Address Line 1 field is required!'
        } else if(!city) {
            error_message = 'The City field is required!'
        } else if(!county) {
            error_message = 'The County field is required!'
        } else if(!country) {
            error_message = 'The Country field is required!'
        } else if(!postcode) {
            error_message = 'The Post Code field is required!'
        } 
        
        if(error_message) {
            document.getElementById('error-message').innerHTML = error_message
            $('#error-message').slideDown('slow')

            setTimeout(() => {
                $('#error-message').slideUp('fast')
            }, 3000)
        } else {

            let a = {
                action: 'send_mail',
                name: name,
                email: email,
                company: company,
                telephone: telephone,
                addressline1: addressline1,
                addressline2, addressline2,
                city: city,
                county: county,
                country: country,
                postcode: postcode
            }
            console.log(a)
            $.post(
                '/wp-admin/admin-ajax.php',
                a
            )
            .done(function(e) {
                window.location.replace('/thank-you/')
            })
            .fail(function(e) {
                console.error(e)
                document.getElementById('error-message').innerHTML = 'Failed to Send Email'
                $('#error-message').slideDown('slow')
    
                setTimeout(() => {
                    $('#error-message').slideUp('fast')
                }, 3000)
    
            })
            // $("#order-form").submit()
        }
    })
})