<?php
  include 'validation.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Meeting like-minded people through awesome events">
    <meta name="keywords" content="Events,Hosting,Fun,Activities">
    <meta name="author" content="Charles Roth">
    <title>Impronto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Muli|Ubuntu:500' rel='stylesheet' type='text/css'>
  </head>
  <body>

    <div id="navContainer">
      <nav class="navbar navbar-inner">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand ubuntu-font" href="http://impronto.com" id="navTitle"><font color="#ff7469">Imp</font><font color="#ffcf09">ronto</font></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#gigInfoContainer" class="navItem muli-font" id="listGigLink">List Your Gig?</a></li>
              <!-- Above link spy scrolls to gigInfoContainer-->
              <li><a href="#" class="navItem muli-font" id="supportButton">Support</a></li>
              <!-- Above link goes to supportTypeForm-->
            </ul>
          </div>
        </div>
      </nav>

      <div class="modal fade" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <!-- Change the width and height values to suit you best -->
              <div class="typeform-widget" data-url="https://sidd4.typeform.com/to/nTzVYL" data-text="Impronto Support Form" style="width:100%;height:400px;"></div>
              <script>
              (function(){
                var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';
                if(!gi.call(d,id)){
                  js=ce.call(d,'script');
                  js.id=id;
                  js.src=b+'widget.js';
                  q=gt.call(d,'script')[0];
                  q.parentNode.insertBefore(js,q)
                }
              })()
              </script>

            </div>
          </div>
        </div>
      </div>

    </div> <!-- navContainer -->

    <div id="mainContainer" class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class="text-center ubuntu-font" id="siteTitle"><font color="#ff7469">Imp</font><font color="#ffcf09">ronto</font></h1>
          <!-- Ubuntu-->
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <p class="text-center muli-font lead" id="sitePhrase">
            Meet <font color="#ff7469">like-minded people</font> <font color="#ffcf09">pronto</font>
          </p>
        </div>
      </div>

      <div class="row" id="bulletList">
        <div class="col-md-6 col-md-offset-3">
          <ul>
            <li class="listItem muli-font">We will host <font color="#ff7469">small group</font> activities</li>
            <li class="listItem muli-font">Try out new things, <font color="#ff7469">discover</font> yourself</li>
            <li class="listItem muli-font">Make <font color="#ff7469">new friends</font> with similar interests</li>
            <li class="listItem muli-font"><font color="#ff7469">Exclusive</font> to U-M Students with <font color="#ff7469">@umich.edu</font></li>
          </ul>
        </div>
      </div>

      <div class="row" id="inputTitle">
        <div class="col-md-6 col-md-offset-3">
          <p class="text-center muli-font lead" id="inputTitleText">
            Join Now For <font color="#ffcf09">Beta Access</font>
          </p>
        </div>
      </div>

      <div class="row" id="inputDiv">
        <div class="col-md-6 col-md-offset-3">
          <div class="text-center">
            <form class="form-inline" role="form" id="emailForm" method="post">
              <div class="form-group" id="accessForm">
                <input type="text" name="email" class="form-control input-lg" placeholder="example@umich.edu" id="emailInput" data-container="body" data-trigger="focus" data-toggle="popover" data-placement="top" data-content="Please enter your @umich.edu email id">
              </div><!-- form-group -->
              <button class="btn butt" type="submit" name="submit" id="accessButton">Beta Access</button>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <p class="text-center muli-font lead">
                We want to get you involved right away...
                You will get one experience worth $10, for every 4 people you refer to sign up,
                When we are ready, we will give you few options to choose the group activity from.
              </p>
              <script type="text/javascript">
                window.Maitre = { uuid: "MF91223e02de" };
              </script>
              <script data-maitre src='https://maitreapp.co/widget.js' async></script>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- mainContainer -->


    <div id="eventsContainer" class="container-fluid">

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
          <h3 class="text-center ubuntu-font" id="eventsTitle"><font color="#ffcf09">What Are We Working On?</font></h3>
        </div>
      </div>

      <div class="row" id="eventsKeys">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
          <div class="text-center">
            <p class="muli-font" id="eventsKeysText">
              Try New <font color="#ff7469">Activities</font> | Explore New <font color="#ffcf09">Experiences</font> | Build New <font color="#ff7469">Stories</font>
            </p>
          </div>
        </div>
      </div>

      <div class="row" id="eventsPictureFirstRow">
        <div class="col-lg-4 col-md-4 col-sm-4 eventPicture">
          <div class="text-center">
            <img class="img-rounded" src="assets/images/pic1.png" alt="Generic placeholder image">
          </div>
          <div class="text-center">
            <h4 class="muli-font">
              Try out a new restaurant with a bunch of people who share similar taste!
            </h4>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 col-md-4 col-sm-4 eventPicture">
          <div class="text-center">
            <img class="img-rounded" src="assets/images/pic2.png" alt="Generic placeholder image">
          </div>
          <div class="text-center">
            <h4 class="muli-font">
              Something more fun? Plan local short trips for activities such as skiing!
            </h4>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="ccol-lg-4 col-md-4 col-sm-4 eventPicture">
          <div class="text-center">
            <img class="img-rounded" src="assets/images/pic3.png" alt="Generic placeholder image">
          </div>
          <div class="text-center">
            <h4 class="muli-font">
              Meet up before the movie for coffee, get into a huddle and take a pic!
            </h4>
          </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <div class="row" id="eventsPictureSecondRow">
        <div class="ccol-lg-4 col-md-4 col-sm-4 eventPicture">
          <div class="text-center">
            <img class="img-rounded" src="assets/images/pic4.png" alt="Generic placeholder image">
          </div>
          <div class="text-center">
            <h4 class="muli-font">
              Want some company to go see your favorite band live?<br />Plan it with us!
            </h4>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="ccol-lg-4 col-md-4 col-sm-4 eventPicture">
          <div class="text-center">
            <img class="img-rounded" src="assets/images/pic5.png" alt="Generic placeholder image">
          </div>
          <div class="text-center">
            <h4 class="muli-font">
              Make friends during an evening of bowling!
            </h4>
          </div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 col-md-4 col-sm-4 eventPicture" id="addEventImage">
          <div class="text-center">
            <a id="addEventImageButton">
              <!-- <img class="img-rounded" src="assets/images/addeventpic2.png" alt="Generic placeholder image"> -->
              <button class="btn butt" id="eventButton">Have An Idea For<br />Your Own Activity?<br /><br /><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><br /><br />Add Here!</button>
            </a>
          </div>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div> <!-- eventsContainer -->

    <div id="gigInfoContainer" class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
          <h1 class="text-center ubuntu-font" id="gigInfoTitle"><font color="#ffcf09">Want To List Your Gig?</font></h1>
          <h3 class="muli-font gigTitle">
            <font color="#ff7469">What Is Your Gig About?</font>
          </h3>
          <p class="lead muli-font gigParagraph">
            Our platform will eventually allow users to create their own activities (both free & paid ones) for other people to join. This will be a way for you to meet like-minded people doing something you enjoy. It will carry a small fee, but by joining early, you will be able to do this free of charge.
          </p>
          <h3 class="muli-font gigTitle">
            <font color="#ff7469">What Kind Of Activities Are We Allowed To Host?</font>
          </h3>
          <p class="lead muli-font gigParagraph">
            These activities can be anything fun, from playing frisbee at the diag, to watching a movie, or playing a game. We want give our users great experiences. Use your imagination, creativity and individuality. Obviously, there are limitations, because this is a meetup and friendship platform.
          </p>
          <h3 class="muli-font gigTitle">
            <font color="#ff7469">How Do I List My Activity?</font>
          </h3>
          <p class="lead muli-font gigParagraph">
            We will make it easy for you. Just click <font color="#ffcf09"><a id="eventHereButton">here</a></font>!
            <!-- Link "here" to type form-->
          </p>
          <h3 class="muli-font gigTitle">
            <font color="#ff7469">What Happens Next?</font>
          </h3>
          <p class="lead muli-font gigParagraph">
            We will review your activity, and be in touch with you within the next 24 hours.
          </p>
        </div>
      </div>

      <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <!-- Change the width and height values to suit you best -->
              <div class="typeform-widget" data-url="https://sidd4.typeform.com/to/B7JjQ5" data-text="Impronto Activity Form" style="width:100%;height:400px;"></div>
              <script>
              (function(){
                var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';
                if(!gi.call(d,id)){
                  js=ce.call(d,'script');
                  js.id=id;
                  js.src=b+'widget.js';
                  q=gt.call(d,'script')[0];
                  q.parentNode.insertBefore(js,q)
                }
              })()
              </script>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- gigInfoContainer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
