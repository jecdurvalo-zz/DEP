<?php
  if (isset($_POST['submit'])) {
      $user = $_POST['user'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $state = $_POST['state'];
      $erro = FALSE;

      if (strlen($user) < 5 || strlen($user) > 10) {
        echo "O nome de usuário deve ter no mínimo 5 caracteres e no máximo 10 <br>";
        $erro = TRUE;
      }
      if (strlen($password) < 4) {
        echo "A senha deve ter no mínimo 4 caracteres <br>";
        $erro = TRUE;
      }
      if (!strstr($email, '@')) {
        echo "O e-mail deve conter '@' <br>";
        $erro = TRUE;
      }
      if (strlen($state) > 2) {
        echo "Coloque só a sigla da sua cidade <br>";
        $erro = TRUE;
      }
      if (!$erro) {
        echo "Validado!";
      }
    }

?>
