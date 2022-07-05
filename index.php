<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
    <h2>Verificando Usuário</h2>
</body>
</html>
<?php
  $login_cookie = $COOKIE['login'];
   if(isset($login_cookie)){
    echo "Bem vindo, $login_cookie <br>";
    echo "logado";
   }else{
    echo "Faça o login por favor";
    echo "<a href='index.html'>Clique aqui para entrar na sua conta</a>";
   }
?>