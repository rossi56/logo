/*----------------------BURGER-------------*/
$(document).ready(function () {
    $('.mask ,.burger, .lien').click(function () {
        $('.mask, .lien').toggleClass('closed');
        $('nav').toggleClass('nav-mobil');
        $('.burger').toggleClass('active');
    });
});


/*------------------Logo----------------*/

var animation = bodymovin.loadAnimation({
    container: document.getElementById('anim'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'data.json'

});

/*--------------------Formulaire-------------------*/

// Check for valid email syntax
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function closeForm() {
    document.contactform.name.value = '';
    document.contactform.email.value = '';
    document.contactform.message.value = '';

    $('.email').removeClass('typing');
    $('.name').removeClass('typing');
    $('.message').removeClass('typing');

    $('.cd-popup').removeClass('is-visible');
    $('.notification').addClass('is-visible');
    $('#notification-text').html("Merci de nous avoir contacté !");
}

$(document).ready(function ($) {

    /* ------------------------- */
    /* Contact Form Interactions */
    /* ------------------------- */
    $('.contact-open').on('click', function (event) {
        event.preventDefault();

        $('#contactMessage').html('Ecrivez-nous !');
        $('.contact').addClass('is-visible');

        if ($('#name').val().length != 0) {
            $('.name').addClass('typing');
        }
        if ($('#email').val().length != 0) {
            $('.email').addClass('typing');
        }
        if ($('#message').val().length != 0) {
            $('.message').addClass('typing');
        }
    });

    //close popup when clicking x or off popup
    $('.cd-popup').on('click', function (event) {
        if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup')) {
            event.preventDefault();
            $(this).removeClass('is-visible');
        }
    });

    //close popup when clicking the esc keyboard button
    $(document).keyup(function (event) {
        if (event.which == '27') {
            $('.cd-popup').removeClass('is-visible');
        }
    });

    /* ------------------- */
    /* Contact Form Labels */
    /* ------------------- */
    $('#name').keyup(function () {
        $('.name').addClass('typing');
        if ($(this).val().length == 0) {
            $('.name').removeClass('typing');
        }
    });
    $('#email').keyup(function () {
        $('.email').addClass('typing');
        if ($(this).val().length == 0) {
            $('.email').removeClass('typing');
        }
    });
    $('#message').keyup(function () {
        $('.message').addClass('typing');
        if ($(this).val().length == 0) {
            $('.message').removeClass('typing');
        }
    });

    /* ----------------- */
    /* Handle submission */
    /* ----------------- */
    $('#contactform').submit(function () {
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();


        if (validateEmail(email)) {
            if (name) {
                if (message) {


                    closeForm();

                } else {
                    $('#notification-text').html("<strong>Merci de nous dire à quoi vous pensez !</strong>");
                    $('.notification').addClass('is-visible');
                }
            } else {
                $('#notification-text').html('<strong>Merci de renseigner votre nom !</strong>');
                $('.notification').addClass('is-visible');
            }
        } else {
            $('#notification-text').html('<strong>Merci d\'insérer une adresse valide !</strong>');
            $('.notification').addClass('is-visible');
        }


        return false;
    });
});

/*------------------SCROLLTOP-------------------------- */



$(document).ready(function () {

    var scrollTop = $(".scrollTop");

    $(window).scroll(function () {
        var topPos = $(this).scrollTop();

        if (topPos > 100) {
            $(scrollTop).css("opacity", "1");

        } else {
            $(scrollTop).css("opacity", "0");
        }

    });


    $(scrollTop).click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
        return false;

    });

});

/*------------------------ScrollReveal---------------------*/

var sr = ScrollReveal();

sr.reveal('h1', {
    reset: true,
    distance: '100px',
    opacity: 0.5
});

sr.reveal('figure', {
    reset: true,
}, 350);
