$(document).ready(function () {
    $("#register_form").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
            },
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 6,
            },
            password_confirmation: {
                required: true,
                equalTo: "#password", // Ensures it matches the password field
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your name must be at least 3 characters long",
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address",
            },
            password: {
                required: "Please enter your password",
                minlength: "Your password must be at least 6 characters long",
            },
            password_confirmation: {
                required: "Please confirm your password",
                equalTo: "Passwords do not match",
            }
        },
        errorElement: "div",
        errorClass: "text-danger", // Applies Bootstrap's text-danger class for styling
        errorPlacement: function (error, element) {
            error.insertAfter(element); // Place error messages after the input element
        }
    });
});
