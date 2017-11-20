$(document).ready(function() {
  $('.collapse.in').prev('.panel-heading2').addClass('active');
  $('#accordion, #bs-collapse')
    .on('show.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading2').addClass('active');
    })
    .on('hide.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading2').removeClass('active');
    });
});