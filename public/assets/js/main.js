//documentReady function
$(function() {

  // variable for detection on an animation ending
  var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
  // fadeIn animation variable
  var fadeIn = 'animated fadeIn';
  // bounceInLeft animation variable
  var bounceInLeft = 'animated bounceInLeft';

  // bounces in mainContainer on load time
  $('#mainContainer').addClass(bounceInLeft).one(animationEnd, function() {
    $(this).removeClass(bounceInLeft);
  });


  // when user's click 'Find Out More' the page will scroll smoothly
  // to the 'stepsContainer'
  $('#moreInfoButton').click(function() {
    $('html, body').animate({
        scrollTop: $("#stepsContainer").offset().top
      }, 700);
    return false;
  });

  // After the smooth scrolling is done, the steps will 'fadeIn' to the site
  $('#moreInfoButton').on('click', function() {
    $('.step_animation').addClass(fadeIn).one(animationEnd, function() {
      $(this).removeClass(fadeIn);
    });
  });

});
