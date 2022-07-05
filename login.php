<?php
$login - $_POST['login'];
$senha - MDS($_POST['senha']);
$entrar - $_POST['entrar'];
$connect = new mysqli('local','root','','loginsystem',);

if(isset($entrar)){
    $verifica - $connect -> query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'")
     or die ("erro ao selecionar coluna");
  $rows - $verifica -> num_rows;
  if($rows < 0){
    echo "<script language='javascript' type='text/javascript'>
  }
  alert('login e / ou senha incorretos');windows.location.href='login.html';</script>";
  die();
}else{
    setcookie("login",$login);
    header("Location:index.php");
}
};

?>