$(document).ready(function () {
    $("#contactForm").submit(function (event) {
        event.preventDefault();

        var select = $('#inputResidence').val();
        // Serialize the form data
        var formData = $(this).serialize();
        formData += '&inputResidence=' + select;
        // You can use AJAX to send the data to the server
        $.ajax({
            type: "POST",
            url: "./php/contact.php", // Replace with your server endpoint
            data: formData,
            success: function (response) {
                console.log(response);
                // Handle the server response here
            },
            error: function (error) {
                console.error("Error:", error);
                // Handle errors here
            }
        });
    });
});
