<?php
  include 'validation.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Meeting like-minded people through awesome events">
    <meta name="keywords" content="Events,Hosting,Fun,Activities">
    <meta name="author" content="Charles Roth">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/navbar.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/clock.css"/>
    <link href='https://fonts.googleapis.com/css?family=Muli|Ubuntu' rel='stylesheet' type='text/css'>
    <title>Impronto</title>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-75551720-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>

    <div id="navContainer">
      <nav class="navbar fixed-top navbar-light">
        <div class="navbar-header">
          <a class="navbar-brand ubuntu" href="http://impronto.com/testsite"><font color="#FF7469">Im</font><font color="#FFCF09">pronto</font></a>
          <button class="navbar-toggler hidden-sm-up pull-xs-right" type="button" data-toggle="collapse" data-target="#navCollapse">
            &#9776;
          </button>
        </div>
        <div class="collapse navbar-toggleable-xs" id="navCollapse">
          <ul class="nav navbar-nav pull-md-right">
            <li class="nav-item muli right-nav-item">
              <a class="nav-link" href="#infoContainer" id="listGigLink">List your gig</a>
            </li>
            <li class="nav-item muli right-nav-item">
              <a class="nav-link" href="#" id="supportButton">Support</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="modal fade" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">

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
      <div class="mainContent">
        <div class="row need-space">
          <div class="center-block">
            <h1 class="text-xs-center muli" id="taglineOne">
              Explore <font color="#FF7469">Fun Activites</font> <font color="#FFCF09">Around You</font>
            </h1>
            <h2 class="text-xs-center muli" id="taglineTwo">
              Meet <font color="#FF7469">Like-minded People</font> <font color="#FFCF09">Pronto</font>
            </h2>
          </div>
        </div>
        <div class="row need-space">
          <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3" style="text-align: justify;">
              <p class="muli">Choose from a list of <font color="#FF7469">small group</font> activities.
              Make new, <font color="#FF7469">like-minded</font> friends.
              <font color="#FF7469">Discover</font> yourself.
              <font color="#FF7469">Exclusive</font> to U-M Students with a <font color="#FF7469">@umich.edu</font> email.</p>
          </div>
        </div>
        <div id="inputContainer">
          <div id="clock">
            <div class="row">
              <div class="center-block" id="clockdiv">
                <div>
                  <span class="days"></span><br />
                  <div class="smallText muli white-font">Days</div>
                </div>
                <div>
                  <span class="hours"></span><br />
                  <div class="smallText muli white-font">Hours</div>
                </div>
                <div>
                  <span class="minutes"></span><br />
                  <div class="smallText muli white-font">Mins</div>
                </div>
                <div>
                  <span class="seconds"></span><br />
                  <div class="smallText muli white-font">Secs</div>
                </div>
              </div>
            </div>
          </div>
          <h4 class="muli text-xs-center" id="betaText">
            Until the next 10 free activities
          </h4>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <form role="form" method="post" id="emailForm">
                  <input type="text" name="email" class="form-control" placeholder="youremail@umich.edu" id="emailInput" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  <div class="text-xs-center" id="buttonDiv">
                    <button type="submit" name="submit" class="btn btn-primary" id="accessButton">BETA ACCESS</button>
                  </div>
              </form>
            </div>
          </div>
        </div> <!-- inputContainer -->
      </div> <!-- mainContent -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="center-block">
                <script type="text/javascript">
                  window.Maitre = { uuid: "MF91223e02de" };
                </script>
                <script data-maitre src='https://maitreapp.co/widget.js' async></script>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- Modal -->
    </div> <!-- mainContainer -->



    <div id="eventsContainer" class="container-fluid">
      <div class="row">
        <div class="text-xs-center">
          <h3 class="ubuntu">What Are We Working On?</h3>
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="text-xs-center">
            <h5 class="muli">
              Try New <font color="#FFCF09">Activities</font> | Explore New <font color="#FFCF09">Experiences</font> | Build New <font color="#FFCF09">Stories</font>
            </h5>
        </div>
      </div> <!-- row -->
      <div id="imagesSection">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 eventPicture">
            <figure class="figure">
              <div class="text-xs-center">
                <img src="assets/images/pic1.png" class="figure-img img-fluid img-rounded center-block" alt="A generic square placeholder image with rounded corners in a figure.">
                <div class="center-block">
                  <figcaption class="figure-caption muli text-xs-center"><p>Try out a new restaurant with a bunch of people who share similar taste!</p></figcaption>
                </div>
              </div>
            </figure>
          </div> <!-- col-lg-4 col-md-4 col-sm-4 -->
          <div class="col-lg-4 col-md-4 col-sm-4 eventPicture">
            <figure class="figure">
              <div class="text-xs-center">
                <img src="assets/images/pic2.png" class="figure-img img-fluid img-rounded center-block" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption muli text-xs-center"><p>Something more fun? Plan local short trips for activities such as skiing!</p></figcaption>
              </div>
            </figure>
          </div> <!-- col-lg-4 col-md-4 col-sm-4 -->
          <div class="col-lg-4 col-md-4 col-sm-4 eventPicture">
            <figure class="figure">
              <div class="text-xs-center">
                <img src="assets/images/pic3.png" class="figure-img img-fluid img-rounded center-block" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption muli text-xs-center"><p>Meet up before the movie for coffee, get into a huddle and take a pic!</p></figcaption>
              </div>
            </figure>
          </div> <!-- col-lg-4 col-md-4 col-sm-4 -->
        </div> <!-- row -->
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 eventPicture">
            <figure class="figure">
              <div class="text-xs-center">
                <img src="assets/images/pic4.png" class="figure-img img-fluid img-rounded center-block" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption muli text-xs-center"><p>Want some company to go see your favorite band live? Plan it with us!</p></figcaption>
              </div>
            </figure>
          </div> <!-- col-lg-4 col-md-4 col-sm-4 -->
          <div class="col-lg-4 col-md-4 col-sm-4 eventPicture">
            <figure class="figure">
              <div class="text-xs-center">
                <img src="assets/images/pic5.png" class="figure-img img-fluid img-rounded center-block" alt="A generic square placeholder image with rounded corners in a figure.">
                <figcaption class="figure-caption muli text-xs-center"><p>Make new friends during an evening of bowling and share a great time!</p></figcaption>
              </div>
            </figure>
          </div> <!-- col-lg-4 col-md-4 col-sm-4 -->
          <div class="col-lg-4 col-md-4 col-sm-4">
            <figure class="figure text-xs-center" id="figureButton">
              <h3 class="ubuntu">Have An Idea For <br />Your Own Event?</h3>
              <br />
              <a href="#" id="squareButton"><i class="fa fa-plus-square fa-5x"></i></a>
              <br />
              <br />
              <h3 class="ubuntu">Add Here!</h3>
            </figure>
          </div> <!-- col-lg-4 col-md-4 col-sm-4 -->
        </div>  <!-- row -->
      </div> <!-- imagesSection -->
    </div> <!-- eventsContainer -->

    <div id="howItWorks" class="container-fluid">
      <div class="row">
        <h2 class="text-xs-center ubuntu hiw-title">HOW IMPRONTO WORKS</h2>
      </div> <!-- row -->
      <div class="row">
        <div class="col-md-3">
          <div class="text-xs-center hiw-image">
            <i class="fa fa-user-plus fa-5x"></i>
          </div>
          <div class="text-xs-center hiw-des">
            <h5 class="hiw-des-title muli"><span>1.</span> Join Impronto</h5>
            <p><small>Become a part of an friendly community.</small></p>
          </div>
        </div> <!-- col-md-3 -->
        <div class="col-md-3">
          <div class="text-xs-center hiw-image">
            <i class="fa fa-calendar-plus-o fa-5x"></i>
          </div>
          <div class="text-xs-center hiw-des muli">
            <h5 class="hiw-des-title muli"><span>2.</span> Create or Attend A Event</h5>
            <p class="muli"><small>Make your mark on the community by organizing or attending an event.</small></p>
          </div>
        </div> <!-- col-md-3 -->
        <div class="col-md-3">
          <div class="text-xs-center hiw-image">
            <i class="fa fa-comments-o fa-5x"></i>
          </div>
          <div class="text-xs-center hiw-des">
            <h5 class="hiw-des-title muli"><span>3.</span> Make New Friends</h5>
            <p class="muli"><small>Meet people just like you and have an amazing time.</small></p>
          </div>
        </div> <!-- col-md-3 -->
        <div class="col-md-3">
          <div class="text-xs-center hiw-image">
            <i class="fa fa-retweet fa-5x"></i>
          </div>
          <div class="text-xs-center hiw-des">
            <h5 class="hiw-des-title muli"><span>4.</span> Repeat!</h5>
            <p class="muli"><small>Keep engaging with the community and have an amazing time.</small></p>
          </div>
        </div> <!-- col-md-3 -->
      </div> <!-- row -->
    </div>

    <div id="infoContainer" class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="text-xs-center ubuntu">Want To List Your Gig?</h2>
          <h5 class="text-xs-left muli">
            What Is Your Gig About?
          </h5>
          <p class="text-xs-left muli info-answer">
            Our platform will eventually allow users to create their own activities (both free & paid ones) for other people to join. This will be a way for you to meet like-minded people doing something you enjoy. It will carry a small fee, but by joining early, you will be able to do this free of charge.
          </p>
          <h5 class="text-xs-left muli">
            What Kind Of Activities Are We Allowed To Host?
          </h5>
          <p class="text-xs-left muli info-answer">
            These activities can be anything fun, from playing frisbee at the diag, to watching a movie, or playing a game. We want give our users great experiences. Use your imagination, creativity and individuality. Obviously, there are limitations, because this is a meetup and friendship platform.
          </p>
          <h5 class="text-xs-left muli">
            How Do I List My Activity?
          </h5>
          <p class="text-xs-left muli info-answer">
            We will make it easy for you. Just click<font color="#FFCF09"><a style="text-decoration: none;" id="eventHereButton"> here</a></font>!
          </p>
          <h5 class="text-xs-left muli">
            What Happens Next?
          </h5>
          <p class="text-xs-left muli info-answer">
            We will review your activity, and be in touch with you within the next 24 hours.
          </p>
        </div> <!-- col-sm-6 col-sm-offset-3 -->
      </div> <!-- row -->
      <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">

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
      </div> <!-- modal -->
    </div> <!-- gigInfoContainer -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/clock.js"></script>
  </body>
</html>
