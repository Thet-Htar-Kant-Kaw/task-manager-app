
$(document).ready(function () {
    $("#task_form").validate({
        rules: {
            title: {
                required: true,
                minlength: 3,
            },
            category_id: {
                required: true,
            },
            description: {
                required: true,
                minlength: 10,
            },
            due_date: {
                required: true,
                date: true,
            }
        },
        messages: {
            title: {
                required: "Please enter the task title",
                minlength: "Title must be at least 3 characters long",
            },
            category_id: {
                required: "Please select a category",
            },
            description: {
                required: "Please provide a description",
                minlength: "Description must be at least 10 characters long",
            },
            due_date: {
                required: "Please select a due date",
                date: "Please enter a valid date",
            }
        },
        errorElement: "span",
        errorClass: "text-danger",
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        // Optional: Automatically focus on the first invalid input
        invalidHandler: function(event, validator) {
            if (validator.errorList.length) {
                $('html, body').animate({
                    scrollTop: $(validator.errorList[0].element).offset().top - 100
                }, 500);
                $(validator.errorList[0].element).focus();
            }
        }
    });
});
