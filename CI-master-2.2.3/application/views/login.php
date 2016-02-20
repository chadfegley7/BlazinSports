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
  <body>
    <style type='text/css'>
      .fb{
        position: relative;
        left: 490px;
      }
    </style>
     <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
      var clientID = response.authResponse['userID'];
      var token = response.authResponse['accessToken']; 
      var url = 'https://graph.facebook.com/v2.5/' + clientID + '/picture?width=350&height=350';
      FB.api('/me?fields=email,first_name,last_name',function(response) {
        var email = response.email;
        var first_name = response.first_name;
        var last_name = response.last_name;
        $.ajax({
          method: "POST",
          url: '/facebook_login',
          data: {clientID: clientID, accessToken: token, email: email, first_name: first_name, last_name: last_name},
        });
      })
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1558953781086609',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>
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
    <div class="parallax"><img class="responsive-img" src="/assets/pics/battleship.jpg"></div>
  </div>
  <div class="section white z-depth-5">
    <div class="row container">
      <h2 class="header center-align">Login</h2>
      <form class="col s12" action="/process_login" method="post">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">markunread_mailbox</i>
          <input placeholder="Placeholder" id="first_name" type="text" class="validate" name='email'>
          <label for="first_name">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_outline</i>
          <input id="password" type="password" class="validate" name='password'>
          <label for="password">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
      <i class="material-icons right">send</i>
      </button>
      <fb:login-button scope="public_profile,email" onlogin="checkLoginState();" data-auto-logout-link="true" class='fb'>
      </fb:login-button>
    </form>
  </div>
 </div>
  <div class="parallax-container">
    <div class="parallax"><img class="responsive-img" src="/assets/pics/stanford.jpg"></div>
  </div>
  </body>
</html>