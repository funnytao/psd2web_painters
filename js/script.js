setTimeout('$(".phpbox").hide()',3000);

function validate() {
  $('#error-box').html("");
  var nameContent = $('#name').val();
  var emailContent = $('#email').val();
  var telContent = $('#tel').val();
  // if input empty
  if (nameContent.length == 0 || emailContent.length == 0 || telContent.length == 0) {
    $('#error-box').css('display', 'block');
    $('#error-box').html("Please fill in all the information.");
    return;
  }
  // if name invalid
  if (!/^[A-Za-z\s]+$/.test(nameContent)) {
    $('#error-box').css('display', 'block');
    $('#error-box').html("Please enter a valid name.");
    return;
  }
  // if email invalid
  var re = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
  if (emailContent.search(re) == -1) {
    $('#error-box').css('display', 'block');
    $('#error-box').html("Please enter a valid email address.");
    return;
  }
  // let it go
  $('#error-box').html("");
  $('#error-box').css('display', 'none');

  $('.main-form').submit();
  $('#contact-form')[0].reset();
}
