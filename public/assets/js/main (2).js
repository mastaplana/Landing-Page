$('#listGigLink').click(function() {
  $('html, body').animate({
      scrollTop: $('#infoContainer').offset().top
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
    // console.log('Passed all validation');
    return true;
  } else {
    // console.log('Please provide valid @umich.edu email');
    // $('#emailInput').popover({title: "ERROR", content: "Please provide valid @umich.edu email", placement: "top"});
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
    var shakeError = 'animated shake has-danger';
    var correct = 'has-success';
    var email = $('#emailInput').val();
    if (checkbae()) {
      $('#emailInput').addClass(correct);
      $.ajax({
        type: "post",
        data: {
          email: email,
          submit: 1
        },
        url: "validation.php",
        function(html) {
          console.log(email+' successfully added to database');
        }
      });
      showMaitreWidget();
      $('#emailInput').removeClass(correct);
      $('#emailInput').val("");
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
