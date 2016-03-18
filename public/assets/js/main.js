//ANIMATIONS CODE
/**$(function() {
  var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
  var fadeIn = 'animated fadeIn';
  var bounceInLeft = 'animated bounceInLeft';

  $('#mainContainer').addClass(bounceInLeft).one(animationEnd, function() {
    $(this).removeClass(bounceInLeft);
  });

  $("[data-toggle = 'popover']").popover();
});
*/

$(function() {
  $("[data-toggle = 'popover']").popover();
});

/* Smooth scroll effect when users click 'listgig' */
$('#listGigLink').click(function() {
  $('html, body').animate({
      scrollTop: $('#gigInfoContainer').offset().top
    }, 700);
  return false;
});

var checkemail = function(email) {
  var validUmichEmail = /^[\w-\.]+@([umich+\.])+[\edu]{2,4}$/;
  var filteremail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  if (email.match(filteremail) && email.match(validUmichEmail)) {
    // redirect to feedback form!
    console.log('Passed all validation');
    return true;
  } else {
    // alert("Please enter a valid email address");
    console.log('Please provide valid @umich.edu email');
    $('#emailInput').popover({title: "ERROR", content: "Please provide valid @umich.edu email", placement: "top"});
    return false;
  }
}

function checkbae() {
  if (document.getElementById) {
    console.log('In the if statment');
    return checkemail($('#emailInput').val());
  }
}

$('#accessButton').on('click', function() {
  var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
  var shakeError = 'animated shake has-error';
  var shake = 'animated shake';
  var correct = 'has-success';
  if (checkbae()) {
    $('#accessForm').addClass(correct).one(animationEnd, function() {
      $(this).removeClass(correct);
    });
    $('#myModal').modal('show');
  } else {
    $('#accessForm').addClass(shakeError).one(animationEnd, function() {
      $(this).removeClass(shakeError);
    });
  }
});

$('#supportButton').on('click', function() {
  $('#supportModal').modal('show');
});

$('#eventHereButton').on('click', function() {
  $('#eventModal').modal('show');
});

$('#addEventImageButton').on('click', function() {
  $('#eventModal').modal('show');
});
