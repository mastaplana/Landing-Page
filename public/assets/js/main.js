$('#listGigLink').click(function() {
  $('html, body').animate({
      scrollTop: $('#gigInfoContainer').offset().top
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
    // redirect to feedback form!
    // console.log('Passed all validation');
    return true;
  } else {
    // alert("Please enter a valid email address");
    // console.log('Please provide valid @umich.edu email');
    $('#emailInput').popover({title: "ERROR", content: "Please provide valid @umich.edu email", placement: "top"});
    return false;
  }
}

var checkbae = function() {
  if (document.getElementById) {
    // console.log('In the if statment');
    return checkemail($('#emailInput').val());
  }
}


$(document).ready(function() {
  $('#accessButton').on('click', function() {
    event.preventDefault();
    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    var shakeError = 'animated shake has-error';
    var shake = 'animated shake';
    var correct = 'has-success';
    var email = $('#emailInput').val();
    if (checkbae()) {
      $('#accessForm').addClass(correct);
      $.ajax({
        type: "post",
        data: {
          email: email,
          submit: 1
        },
        url: "validation.php",
        success: function(html) {
          console.log('Success');
        }
      });
      showMaitreWidget();
      $('#accessForm').removeClass(correct);
      $('#emailInput').val("");
    } else {
      $('#accessForm').addClass(shakeError).one(animationEnd, function() {
        $(this).removeClass(shakeError);
      });
      // alert('Not successful');
    }
  });
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

$(function() {
  $("[data-toggle = 'popover']").popover();
});
