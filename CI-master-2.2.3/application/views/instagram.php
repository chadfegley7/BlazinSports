<?php
  set_time_limit(0);
  ini_set('default_socket_timeout', 300);
  session_start();

  define("clientID", '038447f31e884aeca02d0cf4ac9970ab');
  define("clientSecret", 'cf35fafee89c42c7ac107b0719da6cc0');
  define("redirectURI", 'http://localhost:8888');
  $clientID = '038447f31e884aeca02d0cf4ac9970ab';
//Connect with Instagram
  function connect_to_Instagram($url){
    $ch = curl_init();

    curl_setopt_array($ch, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_SSL_VERIFYHOST => 2
      ));

    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
  if($_GET['code']){
    $code = $_GET['code'];
    $url = "https://api.instagram.com/oauth/access_token";
    $access_token_settings = array(
      'client_id' => clientID,
      'client_secret' => clientSecret,
      'grant_type' => 'authorization_code',
      'redirect_uri' => redirectURI,
      'code' => $code
      );

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $access_token_settings);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $result = curl_exec($curl);
    curl_close($curl);

    $results = json_decode($result, true);
    $userName = $results['user']['username'];
    $userID = $results['user']['id'];
    $profile_pic = $results['user']['profile_picture'];
}
?>
 <a href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">Login</a>