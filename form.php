<?php
  //isset = está definido? Verifica a action ao clicar no submit
  //Super global = $_POST['o name do submit']
  if (isset($_POST['submit'])) {
    //Pegando os valores digitados pelo user
    $user = $_POST['user'];
    $password = $_POST['password'];
    $nomes = array('gabriela', 'jessica', 'pablo');
    // echo "Seu usuário: " . $user . "<br>" . "senha:" . $password;

    //Validação de tamanho
    if (strlen($user) < 5) {
      echo "Nome de usuário curto! Digite um usuário com 6 caracteres pelo menos.";
    }if (strlen($user) > 60) {
      echo "Nome de usuário muito grande";
    }

    //in_array = se não estiver contido no array, não tem permissão
    if (!in_array($user, $nomes)) {
      echo "Acesso não permitido";
    }else {
      echo "Bem vindo, " . $user;
    }
  }
?>
