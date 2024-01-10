$(document).ready(function () {
  $("#contactForm").submit(function (event) {
    event.preventDefault();
    var select = $('#inputResidence').val();
    var formData = $(this).serialize();
    formData += '&inputResidence=' + select;
    $("#contactForm")[0].reset();
    Swal.fire({
      icon: 'success',
      title: 'Success!',
      text: 'Your form has been submitted successfully.',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Great!',
    });
    $.ajax({
      type: "POST",
      url: "https://serviplatexpressusa.com/php/contact.php", 
      data: formData,
      success: function (response) {
       console.log('ok');
      },
      error: function (error) {
        console.error("Error:", error);
      },
    });
  });
});
