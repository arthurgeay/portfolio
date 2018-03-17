$(function () {
  $('.school').click(function() {
      $('.school-item').fadeIn();
      $('.pro-item').fadeOut();
  });

  $('.pro').click(function() {
    $('.pro-item').fadeIn();
    $('.school-item').fadeOut();
  });

  $('.all').click(function() {
    $('.pro-item, .school-item').fadeIn();
  });
});
