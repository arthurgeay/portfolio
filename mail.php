<?php

session_start();

require_once('parameters.php');

  $header="MIME-Version: 1.0\r\n";
  $header.='From:"Arthur Geay - Portfolio"<arthurgeay.contact@gmail.com>'."\n";
  $header.='Content-Type:text/html; charset="uft-8"'."\n";
  $header.='Content-Transfer-Encoding: 8bit';

  $mail = 'arthurgeay.contact@gmail.com';
  $subject = 'Formulaire de contact - arthurgeay.fr';

  $email = htmlspecialchars($_POST['email']);
  $name = htmlspecialchars($_POST['firstname']);
  $message = nl2br(htmlspecialchars($_POST['message']));

  $_SESSION['email'] = $_POST['email'];
  $_SESSION['firstname'] = $_POST['firstname'];
  $_SESSION['message'] = $_POST['message'];

  // Data for recaptcha
	$response = $_POST['g-recaptcha-response'];
	$remoteip = $_SERVER['REMOTE_ADDR'];
  $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
      . $secretKey
      . "&response=" . $response
      . "&remoteip=" . $remoteip ;

  $message='
  <html>
  	<body>
      <ul>
        <li>Adresse mail : ' . $email . '</li>
        <li>Prénom : ' . $name . '</li>
      </ul>
      <p><strong>Message</strong> : </p><p>  ' . $message . '</p>
  	</body>
  </html>
  ';


  $decode = json_decode(file_get_contents($api_url), true);

	if ($decode['success'] == false) {
    $_SESSION['error'] = 'Le champ captcha ne peut être vide.';
    header('Location: index.php#contact');
	}
  else
  {
    if(empty($_POST['firstname']) || trim($_POST['firstname']) == '' || empty($_POST['email']) || trim($_POST['email']) == '' || empty($_POST['message']) || trim($_POST['message']) == '')
    {
      $_SESSION['error'] = 'Les champs ne peuvent être vides.';
      header('Location: index.php#contact');
    }

    elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
      $_SESSION['error'] = 'Veuillez saisir une adresse e-mail valide.';
      header('Location: index.php#contact');
    }

    else {
      $send = mail($mail, $subject, $message, $header);

      if($send)
      {
        $_SESSION['success'] = 'Votre message a bien été envoyé !';
        unset($_SESSION['email'], $_SESSION['firstname'], $_SESSION['message']);
        header('Location: index.php#contact');
      }
    }
  }
