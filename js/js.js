$("#menu_icon").click(function(){

	$("#menu").toggleClass("active");
});

var $cell = $('.image__cell');

$cell.find('.image--basic').click(function() {
  var $thisCell = $(this).closest('.image__cell');

  if ($thisCell.hasClass('is-collapsed')) {
    $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed');
    $thisCell.removeClass('is-collapsed').addClass('is-expanded');
  } else {
    $thisCell.removeClass('is-expanded').addClass('is-collapsed');
  }
});

$cell.find('.expand__close').click(function() {
  var $thisCell = $(this).closest('.image__cell');
  $thisCell.removeClass('is-expanded').addClass('is-collapsed');
});
