<?
$user = array(
    'nick' => $methods->request('nick'),
    'pass' => $methods->request('pass'),
    'pass1' => $methods->request('pass1'),
    'email' => $methods->request('email')
);
$message = $signUp->input($user);



?>