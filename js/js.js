// toggle menu
$("#menu_icon").click(function(){

	$("#menu").toggleClass("active");
});

// menu scroll
function scrollTo(item) {
    
  $("#menu").removeClass("active");

  $('html, body').animate({
        scrollTop: $("#"+item).offset().top
    }, 1500);

}

// portfolio
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

// form validation
var sendBtn = document.getElementById("sendBtn");

var naam = document.getElementById("naam");
var nameValue;
var email = document.getElementById("email");
var emailValue;
var message = document.getElementById("message");
var messageValue;

sendBtn.disabled = true;

function checkForm() {
  nameValue = naam.value;
  emailValue = email.value;
  messageValue = message.value;

  var error = false;

  if(nameValue == "") {
    error = true;
  }

  if(emailValue == "") {
    error = true;
  } else {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    if(!re.test(emailValue)) {
      error = true;
    } 
  } 

  if(messageValue == "") {
    error = true;
  }

  if(!error) {
    sendBtn.disabled = false;
    console.log(nameValue +" "+ emailValue +" "+ messageValue);
  }
}