<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script>
          $(document).ready(function(){
            $('.slider').slider();
            $(".dropdown-button").dropdown();
            $('.parallax').parallax();
            $('.collapsible').collapsible({
      accordion : false 
    });
          });
      </script>
  </head>

   <body>
      <!--Import jQuery before materialize.js-->
      
   <ul id="dropdown1" class="dropdown-content">
    <li><a href="/login">Login</a></li>
    <li><a href="/register">Register</a></li>
    <li class="divider"></li>
    <li><a href="/stories">Top Stories</a></li>
    <li><a href="/pics">Pics</a></li>
    <li><a href="/destroy">Logout</a></li>
  </ul>
  <nav>
  <div class="nav-wrapper blue darken-4">
    <a href="#!" class="brand-logo center">Blazin' Sports</a>
    <ul class="right">
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
      <div class="slider">
    <ul class="slides">
      <li>
        <img class="slider_pic" src="/assets/pics/blakegriffin.jpg"> 
        <div class="caption center-align">
          <h3>Welcome to Blazin' Sports <?= $this->session->userdata("users_name") ?><?= $this->session->userdata("first_name") ?>!</h3>
          <h5 class="light grey-text text-lighten-3">Where all the biggest sports stories are told</h5>
        </div>
      </li>
      <li>
        <img class="slider_pic" src="/assets/pics/odell.jpg"> 
        <div class="caption center-align">
          <h3>Believe the Unbelievable</h3>
          <h5 class="light grey-text text-lighten-3">All the last second shots captured here</h5>
        </div>
      </li>
      <li>
        <img class="slider_pic" src="/assets/pics/batflip.jpg"> 
        <div class="caption center-align">
          <h3>Knocking It Out of the Park</h3>
          <h5 class="light grey-text text-lighten-3">The hype is real</h5>
        </div>
      </li>
      <li>
        <img class="slider_pic" src="/assets/pics/manny.jpg"> 
        <div class="caption center-align">
          <h3>Work Hard, Play Hard!</h3>
          <h5 class="light grey-text text-lighten-3">Where we crown all the champions</h5>
        </div>
      </li>
    </ul>
  </div>
     <div class="col s12 m12 l12 card small hide-on-med-and-down hoverable">
          <div class="card blue darken-4">
            <div class="card-content white-text">
              <span class="card-title caption center-align"><h2>This Website is Fire!!!</h2></span>
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue consequat metus, euismod scelerisque odio pulvinar quis. Suspendisse potenti. Quisque nec fermentum leo. Phasellus scelerisque mi congue nibh rutrum volutpat. Nullam vitae cursus ligula. Nullam lectus lorem, ultricies at sagittis posuere, vestibulum ac nulla. Suspendisse non molestie elit. Quisque neque velit, tempus vitae purus et, faucibus tincidunt lacus. Phasellus nunc libero, porta eu augue lobortis, dignissim hendrerit elit. Pellentesque vitae lectus tempus, aliquet orci vel, rhoncus massa. Morbi ut neque in odio hendrerit dapibus et ut erat.Donec vel purus vitae arcu fermentum efficitur. Phasellus eu vulputate metus. Quisque commodo, lectus a hendrerit lacinia, magna felis aliquam elit, non tincidunt mauris ipsum suscipit leo. Quisque tincidunt id massa et consectetur...<a href='/stories'>Continue Reading</a></p>
        </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="/assets/pics/stadium.jpg"></div>
  </div>
  <div class="section white z-depth-5">
    <div class="row container">
      <h2 class="header center-align">Blazin' Sports</h2>
      <p class="grey-text text-darken-3 lighten-3">Here at Blazin' Sports we believe in good sports writing, not feed you a bunch of "shit" like ESPN does! I hope you enjoy our website, feel free to subscribe and get daily updates!Donec vel purus vitae arcu fermentum efficitur. Phasellus eu vulputate metus. Quisque commodo, lectus a hendrerit lacinia, magna felis aliquam elit, non tincidunt mauris ipsum suscipit leo. Quisque tincidunt id massa et consectetur. Donec sed luctus lorem. In id venenatis quam. Nullam at dolor pulvinar, imperdiet mi sed, tincidunt mi. Fusce in venenatis tell us</p>
        <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">grade</i>Top Story</div>
      <div class="collapsible-body"><p>Donec vel purus vitae arcu fermentum efficitur. Phasellus eu vulputate metus. Quisque commodo, lectus a hendrerit lacinia, magna felis aliquam elit, non tincidunt mauris ipsum suscipit leo. Quisque tincidunt id massa et consectetur. Donec sed luctus lorem. In id venenatis quam. Nullam at dolor pulvinar, imperdiet mi sed, tincidunt mi. Fusce in venenatis tellus...<a href='/stories'>Continue Reading</a></p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">announcement</i>Breaking News</div>
      <div class="collapsible-body"><p>Donec vel purus vitae arcu fermentum efficitur. Phasellus eu vulputate metus. Quisque commodo, lectus a hendrerit lacinia, magna felis aliquam elit, non tincidunt mauris ipsum suscipit leo. Quisque tincidunt id massa et consectetur. Donec sed luctus lorem. In id venenatis quam. Nullam at dolor pulvinar, imperdiet mi sed, tincidunt mi. Fusce in venenatis tellus...<a href='/stories'>Continue Reading</a></p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">today</i>Favorite Team</div>
      <div class="collapsible-body fave">
        <h4 class="caption center-align">Golden State Warriors</h4>
          <img class="materialboxed responsive-img" data-caption="2015 NBA Champs Golden State Warriors" width="600" src="/assets/pics/champs.jpg">
          <h5 class='header center-align'><a href="http://www.nba.com/warriors/schedule">Go To Schedule</a></h5>
      </div>
    </li>
  </ul>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="/assets/pics/barca.jpg"></div>
  </div>
  </body>
  </html>
        