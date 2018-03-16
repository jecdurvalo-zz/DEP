<?php include "db.php";
  
  function show(){
    //Variavel global
    global $connection;
  
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
  }

  //Desafio 8.1
  function update(){
    global $connection; 
  
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);
    //include: insere um arquivo, dá warning porém funfa
    //require: '', porém para a aplicação

    if(isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];

      $updateQuery = "UPDATE user SET 
                      username= '$username', 
                      password = '$password' 
                      WHERE id = $id ";

      $resultQuery = mysqli_query($connection, $updateQuery);
      // $query .=    --> concatenar variavel

      if (!$resultQuery) {
        die("Falha na atualização: " . mysqli_error($connection));
      }else{
        echo "<div class='alert alert-danger' role='alert'>Usuário atualizado com sucesso!</div>";
      }
    }
  }

  function delete(){
    global $connection; 

    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);

    if(isset($_POST['submit'])){
      $id = $_POST['id'];

      $updateQuery = "DELETE FROM user WHERE id = $id ";

      $resultQuery = mysqli_query($connection, $updateQuery);
      // $query .=    --> concatenar variavel

      if (!$resultQuery) {
        die("Falha na atualização: " . mysqli_error($connection));
      }else{
        echo "<div class='alert alert-warning' role='alert'>Usuário deletado!</div>";
      }
    }

  }

?> 