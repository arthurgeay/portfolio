$('.alert').hide();
$(function() {
  $('.alert').fadeIn('slow', function() {
    setTimeout(function() {
      $('.alert-success').fadeOut('slow');
    }, 4000);
  });
});
