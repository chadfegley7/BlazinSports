
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
      $('.parallax').parallax();
      $(".dropdown-button").dropdown();
    });
  </script>
</head>
<body>
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
    <a href="/" class="brand-logo center">Blazin' Sports</a>
    <ul class="right">
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
  </nav>
   <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="/assets/pics/celebration.jpg"></div>
  </div>
  <div class="row">
     <div class="col s12 m12 l12 card large hide-on-med-and-down hoverable">
          <div class="card blue darken-4">
            <div class="card-content white-text">
              <span class="card-title"><h3>Barcelona Wins Champions League, Flexing Their Dominance</h3></span>
            </div>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue consequat metus, euismod scelerisque odio pulvinar quis. Suspendisse potenti. Quisque nec fermentum leo. Phasellus scelerisque mi congue nibh rutrum volutpat. Nullam vitae cursus ligula. Nullam lectus lorem, ultricies at sagittis posuere, vestibulum ac nulla. Suspendisse non molestie elit. Quisque neque velit, tempus vitae purus et, faucibus tincidunt lacus. Phasellus nunc libero, porta eu augue lobortis, dignissim hendrerit elit. Pellentesque vitae lectus tempus, aliquet orci vel, rhoncus massa. Morbi ut neque in odio hendrerit dapibus et ut erat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue consequat metus, euismod scelerisque odio pulvinar quis. Suspendisse potenti. Quisque nec fermentum leo. Phasellus scelerisque mi congue nibh rutrum volutpat. Nullam vitae cursus ligula. Nullam lectus lorem, ultricies at sagittis posuere, vestibulum ac nulla. Suspendisse non molestie elit. Quisque neque velit, tempus vitae purus et, faucibus tincidunt lacus. Phasellus nunc libero, porta eu augue lobortis, dignissim hendrerit elit. Pellentesque vitae lectus tempus, aliquet orci vel, rhoncus massa. Morbi ut neque in odio hendrerit dapibus et ut erat. Suspendisse potenti. Quisque nec fermentum leo. Phasellus scelerisque mi congue nibh rutrum volutpat. Nullam vitae cursus ligula. Nullam lectus lorem, ultricies at sagittis posuere, vestibulum ac nulla. Suspendisse non molestie elit. Quisque neque velit, tempus vitae purus et, faucibus tincidunt lacus. Phasellus nunc libero, porta eu augue lobortis, dignissim hendrerit elit. Pellentesque vitae lectus tempus, aliquet orci vel, rhoncus massa. Morbi ut neque in odio hendrerit dapibus et ut erat.</p>
        </div>
  </div>
    <div class="row">
    <form class="col s12" action="/message" method='post'>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" name="message" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Must be signed in to post message </label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
      <i class="material-icons right">send</i>
      </button>
    </form>
  </div>
  <?php if($this->input->post()){
  foreach ($messages as $message) { ?>  
   <div class="col s12 m4 l4 offset-m2 l6 offset-l3"> 
        <div class="card-panel grey lighten-5 z-depth-1 hoverable">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="/assets/pics/chad.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
               <h5> <?php echo $message['first_name'] .' '. $message['last_name']; ?></h5><br>
                <h6><?php echo $message['message']; ?></h6>
              </span>
            </div>
          </div>
        </div>
      </div>
<?php } }?>
</body>
</html>