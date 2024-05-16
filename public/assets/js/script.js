const extenderSections = document.querySelectorAll(".extender-section");

extenderSections.forEach((section) => {
    section.addEventListener("click", () => {
        const span = section.querySelector("span");
        const paragraphs = section.querySelectorAll("p");

        paragraphs.forEach((paragraph) => {
            if (paragraph.style.maxHeight === "0px") {
                paragraph.style.maxHeight = "100px";
                span.style.background = "url(assets/img/toggle-close.png) no-repeat left transparent";
            } else {
                paragraph.style.maxHeight = "0px";
                span.style.background = "url(assets/img/toggle-open.png) no-repeat left transparent";
            }
        });
    });
});


// jQuery script to toggle the visibility of sections
$(document).ready(function () {
    // Show PayPal section by default
    $('#paypal-section').hide();
    $('#create-account').hide();
    $('#different').hide();
    $('#login-form').hide();
    $('#coupon-form').hide();

    $('#coupon').click(function () {
        var loginForm = $('#coupon-form');
        if (loginForm.is(':visible')) {
            loginForm.slideUp();
        } else {
            loginForm.slideDown();
        }
    });

    $('#returning').click(function () {
        var loginForm = $('#login-form');
        if (loginForm.is(':visible')) {
            loginForm.slideUp();
        } else {
            loginForm.slideDown();
        }
    });

    $('input[id="shipto"]').change(function () {
        if ($('#shipto').is(':checked')) {
            $('#different').slideDown();
        } else $('#different').slideUp();
    });

    $('input[id="account"]').change(function () {
        if ($('#account').is(':checked')) {
            $('#create-account').slideDown();
        } else $('#create-account').slideUp();
    });

    $('input[name="payment"]').change(function () {
        if ($('#credit-card').is(':checked')) {
            $('#credit-card-section').slideDown();
            $('#paypal-section').slideUp();
        } else if ($('#paypal').is(':checked')) {
            $('#credit-card-section').slideUp();
            $('#paypal-section').slideDown();
        }
    });
});