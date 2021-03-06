$('#listGigLink').click(function() {
  $('html, body').animate({
      scrollTop: $('#howItWorks').offset().top
    }, 700);
  return false;
});

var showMaitreWidget = function() {
  $('#myModal').modal('show');
}

var checkemail = function(email) {
  var validUmichEmail = /^[\w-\.]+@([umich+\.])+[\edu]{2,4}$/;
  var filteremail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  if (email.match(filteremail) && email.match(validUmichEmail)) {
    return true;
  } else {
    return false;
  }
}

var checkbae = function() {
  if (document.getElementById) {
    return checkemail($('#emailInput').val());
  }
}


$(document).ready(function() {
  $('#accessButton').on('click', function() {
    event.preventDefault();
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    var shakeError = 'animated shake has-danger';
    var correct = 'has-success';
    if (checkbae()) {
      $('#thankYouModal').modal('show');
      $('#emailInput').val('');
    } else {
      $('#emailInput').addClass(shakeError).one(animationEnd, function() {
        $(this).removeClass(shakeError);
      });
    }
  });
});

$('#supportButton').on('click', function() {
  $('#supportModal').modal('show');
});

$('#eventHereButton').on('click', function() {
  $('#eventModal').modal('show');
});

$('#squareButton').on('click', function() {
  $('#eventModal').modal('show');
});
