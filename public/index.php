<?php
  include 'validation.php';
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Explore Fun Activities Around You! Meet Like-minded People Pronto!">
    <meta name="keywords" content="Events,Hosting,Fun,Activities,Meetup">
    <!-- <meta name="author" content="Charles Roth"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/navbar.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/clock.css"/>
    <link rel="stylesheet" href="assets/css/flaticon.css"/>
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
          <a class="navbar-brand ubuntu" href="http://impronto.com"><font color="#FF7469">Im</font><font color="#FFCF09">pronto</font></a>
          <button class="navbar-toggler hidden-sm-up pull-xs-right" type="button" data-toggle="collapse" data-target="#navCollapse">
            &#9776;
          </button>
        </div>
        <div class="collapse navbar-toggleable-xs" id="navCollapse">
          <ul class="nav navbar-nav pull-md-right">
            <li class="nav-item muli right-nav-item">
              <a class="nav-link" href="#infoContainer" id="listGigLink">How it works</a>
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
          <div class="text-xs-center">
            <h2 class="text-xs-center muli taglineTwo">
              Meet <font color="#FF7469">like-minded people</font> in a new city.
            </h2>
            <h2 class="text-xs-center muli taglineTwo">
              Better yet, meet them in the <font color="#FFCF09">same city</font>!
            </h2>
          </div>
        </div>
        <div class="row need-space">
          <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3" style="text-align: justify;">
              <p class="muli">Sign-up or create <font color="#FF7469">a fun activity</font> that other <font color="#FF7469">Im</font><font color="#FFCF09">pronto</font> users can sign up for. Try something <font color="#FFCF09">new and fun</font>! Make new, <font color="#FF7469">like-minded</font> friends. <font color="#FFCF09">Be yourself</font>.<br> Currently, <font color="#FF7469">exclusive</font> to U-Michigan students with a <font color="#FF7469">@umich.edu</font> email</p>
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
              <p class="text-xs-left muli">
                We are still in Beta stage. Every week, we will give away a free activity worth $10 to the first 10 people on the list.<br>
                The more people sign up with your code, the faster you move up the list.<br>
                Add your email address to get in the game!
              </p>
              <div class="maitre-section">
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
          <h3 class="ubuntu">What can you do on Impronto?</h3>
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="text-xs-center">
            <h5 class="muli">
              Try new <font color="#FFCF09">activities</font> | Explore new <font color="#FFCF09">experiences</font> | Build new <font color="#FFCF09">stories</font>
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
              <h3 class="ubuntu">Have an idea for <br />your own activity?</h3>
              <br />
              <a href="#" id="squareButton"><i class="fa fa-plus-square fa-5x"></i></a>
              <br />
              <br />
              <h3 class="ubuntu">Add here!</h3>
            </figure>
          </div> <!-- col-lg-4 col-md-4 col-sm-4 -->
        </div>  <!-- row -->
      </div> <!-- imagesSection -->
    </div> <!-- eventsContainer -->

    <!--  notes, screen, communication, three-->

    <div id="howItWorks" class="container-fluid">
      <div class="row">
        <h3 class="text-xs-center ubuntu hiw-title" id="hiw-title">How will <font color="#FF7469">Im</font><font color="#FFCF09">pronto</font> work</h3>
      </div> <!-- row -->
      <div class="row">
        <div class="col-md-3">
          <div class="text-xs-center hiw-image">
            <img src="assets/images/iconpic2.png">
          </div>
          <div class="text-xs-center hiw-des">
            <h5 class="hiw-des-title muli"><span>1.</span> Join Impronto</h5>

              <p class="muli text-xs-left">Sign up with your umich email address.</p>

          </div>
        </div> <!-- col-md-3 -->
        <div class="col-md-3">
          <div class="text-xs-center hiw-image">
            <img src="assets/images/iconpic4.png">
          </div>
          <div class="text-xs-center hiw-des muli">
            <h5 class="hiw-des-title muli"><span>2.</span> Join an activity</h5>

              <p class="muli text-xs-left">Choose something that interests you from a list of paid or free.</p>

          </div>
        </div> <!-- col-md-3 -->
        <div class="col-md-3">
          <div class="text-xs-center hiw-image">
            <img src="assets/images/iconpic1.png">
          </div>
          <div class="text-xs-center hiw-des">
            <h5 class="hiw-des-title muli"><span>3.</span> Get in touch</h5>

              <p class="muli text-xs-left">Chat with other users who signed up for the same activity before meeting them.</p>

          </div>
        </div> <!-- col-md-3 -->
        <div class="col-md-3">
          <div class="text-xs-center hiw-image">
            <img src="assets/images/iconpic3.png">
          </div>
          <div class="text-xs-center hiw-des">
            <h5 class="hiw-des-title muli"><span>4.</span> Attend your activity!</h5>

              <p class="muli text-xs-left">Have fun at the activity. Keep in touch if you'd like. Build friendships and connections.</p>

          </div>
        </div> <!-- col-md-3 -->
      </div> <!-- row -->
    </div>

    <div id="infoContainer" class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h3 class="text-xs-center ubuntu ict">Spilling the beans on Impronto...</h3>
          <h5 class="text-xs-left muli yellow icq">
            What is this platform about?
          </h5>
          <p class="text-xs-left muli info-answer white ica">
            Our platform will allow users to create their own activities (both free & paid ones) for other people to join. When you create a paid activity, every user signing up for it would need to pay a fee decided by you. <br>This will be a way for you to meet like-minded people doing something you enjoy. For the most outgoing people, you get to build social communities around your favorite hobbies and hangout spots.

          </p>
          <h5 class="text-xs-left muli yellow icq">
            Why do I want to join Impronto?
          </h5>
          <p class="text-xs-left muli info-answer white ica">
            Ever wanted to do something and could never find any company? Your friends are busy or not interested in that Japanese movie you want to watch or ethiopian food you want to try. With Impronto you can join such random plans or even create your own. Impronto lets you do these activities, helping take away the initial awkwardness of meeting new people while also doing something fun. You can also stay in touch with these people and plan another event.
          </p>
          <h5 class="text-xs-left muli yellow icq">
            What kind of activites are we allowed to host?
          </h5>
          <p class="text-xs-left muli info-answer white ica">
            These activities can be anything fun, from playing frisbee at the diag, to watching a movie, or attending a music concert. We want give our users great experiences. Use your imagination, creativity and individuality to create the activity of a lifetime.
          </p>
          <h5 class="text-xs-left muli yellow icq">
            How do I list my activity?
          </h5>
          <p class="text-xs-left muli info-answer white ica">
            We will make it easy for you. Just click<font color="#FFCF09"><a style="text-decoration: none;" id="eventHereButton"> here</a></font>!
          </p>
          <h5 class="text-xs-left muli yellow icq">
            What happens next?
          </h5>
          <p class="text-xs-left muli info-answer white ica">
            We will review your activity and be in touch with you within the next 24 hours.
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

    <div id="footer" class="container-fluid">
    	<div class="row">
    		<p class="text-xs-right muli"> Icons designed by <a href="http://www.freepik.com/">Freepik</a></p>
    	</div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/clock.js"></script>
  </body>
</html>
