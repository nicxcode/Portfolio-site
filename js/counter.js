var main = function(){
  $('#jobDesc').keyup(function() {
  var postLength = $(this).val().length;
  var charactersLeft = 1100 - postLength;
  $('.counter').text(charactersLeft);
  });
}
$(document).ready(main);
