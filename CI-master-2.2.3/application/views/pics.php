<html>
<head>
	<title>Blazin Sports</title>
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
      $('.slider').slider();
    });
  </script>
  <style type='text/css'>
  h1{
  	position: relative;
  	left: 725px;
  }
  </style>
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
    <div class="parallax"><img class="responsive-img" src="/assets/pics/champions.jpg"></div>
 </div>
  <div class="row">
     <div class="col s12 m12 l12 card small hoverable">
          <div class="card blue darken-4">
            <div class="card-content white-text">
              <span class="card-title">Community Pictures</span>
              <p>Here is where you can display all your action shots! Show us what you got, and maybe your picture will be displayed as our "Pic of the Day"!</p>
            </div>
          </div>
          <form action="/user_pics" method="post">
    		<div class="file-field input-field">
      			<div class="btn">
        		<span>Upload Picture(s)</span>
        		<input type="file" multiple>
      			</div>
     			 <div class="file-path-wrapper">
       			 <input class="file-path validate" type="text" name="file" placeholder="Upload one or more files">
     			 </div>
   			 </div>
    		 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
      		<i class="material-icons right">send</i>
      		</button>
  		  </form>
        </div>
  </div>
 <br><br><br>
   <div class="row">
     <div class="col s12 m12 l12 card small hoverable">
          <div class="card blue darken-4">
            <div class="card-content white-text">
              <span class="card-title">Gallery</span>
             <p>Want to see a full gallery of all our users pictures? Click the button below to see the gallery</p>
            </div>
          </div>
           <a class="waves-effect waves-light btn-large" a href="/all_pics"><i class="material-icons right">cloud</i>Go to Gallery</a>
        </div>
  </div>
 </div>
</body>
</html>