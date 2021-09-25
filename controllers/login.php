<?php

session_start();

$ra = '20028909-5';

$senha = 'luis';

$inputRA = filter_input(INPUT_POST, 'number-ra');
$inpuPassword = filter_input(INPUT_POST, 'password');

if($inputRA && $inpuPassword) {
  if($inputRA == $ra && $inpuPassword == $senha) {
    $_SESSION['ra'] = $inputRA;
    header("Location: http://localhost/RA20028909-5/view/alunos.php");
    exit;
  }
}

header("Location: http://localhost/RA20028909-5/");
exit;

 //var_dump($ra, $password);

?>