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
    <a href="#!" class="brand-logo center">Blazin' Sports</a>
    <ul class="right">
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
  </nav>
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img"src="/assets/pics/homerun.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header capion center-align">Registration</h2>
      <div class="row">
    <form class="col s12" action='/process' method='post'>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input placeholder="Placeholder" id="first_name" type="text" class="validate" name='first_name'>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name='last_name'>
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">markunread_mailbox</i>
          <input id="email" type="email" class="validate" name='email'>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input id="password" type="password" class="validate">
          <label for="confirm_password">Confirm Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
      <i class="material-icons right">send</i>
      </button>
      <a href='/login'><p>Already a member? Log-In Here!</p></a>
    </form>
    </div>
  </div>
 </div>
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img"src="/assets/pics/oregon.jpg"></div>
  </div>
</body>
</html>
