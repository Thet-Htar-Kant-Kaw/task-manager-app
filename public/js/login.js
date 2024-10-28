$(document).ready(function () {
    $("#login_form").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 6,
            }
        },
        messages: {
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address",
            },
            password: {
                required: "Please enter your password",
                minlength: "Your password must be at least 6 characters long",
            }
        },
        errorElement: "div",
        errorClass: "text-danger",
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        }
    });
});
