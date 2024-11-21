<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $secretKey = '6Lcpm4UqAAAAACPxLZX0-isGAhZjBZuOl9JF8NO5';
  $token = $_POST['g-recaptcha-response'];

  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array(
    'secret' => $secretKey,
    'response' => $token,
    'remoteip' => $_SERVER['REMOTE_ADDR']
  );

  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );
  $context  = stream_context_create($options);
  $response = file_get_contents($url, false, $context);
  $res = json_decode($response, true);

  if ($res['success'] == true && $res['score'] >= 0.5) {
    // reCAPTCHA successful 
    echo "reCAPTCHA successful! Score: " . $res['score'];
    // Process form data here (e.g., send email, save to database)
  } else {
    // reCAPTCHA failed
    echo "reCAPTCHA failed! Score: " . $res['score']; 
  }
}
?>