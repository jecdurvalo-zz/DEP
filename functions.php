<?php include "db.php";

  // CRUD - Create
  function createUser(){

  global $connection; 

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
             
    $query = "INSERT INTO user(username, password) VALUES('$username', '$password')";
  
    $newUser = mysqli_query($connection, $query);

    if (!$newUser) {
      die('Erro da criação de novo usuário: ' . mysqli_error($connection));
      } else {
      echo "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>";
    }
  }
}

   // CREATE - Read/Read
   function readUser(){

    global $connection;

    $query = "SELECT * FROM user";
    $response = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($response)){
      echo "<pre>";
      
      print_r($row);

      echo "</pre>";
    }
  }

  // CRUD - Read/Update
  function showData(){
    
    global $connection;
  
    $query = "SELECT * FROM user";
    $result = mysqli_query ($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {

       $id = $row['id'];

       echo "<option value='$id'>$id</option>";
    }
  }

  // CRUD - Update
  function updateUser(){
    
    global $connection; 
  
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);
   
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
        echo "<div class='alert alert-success' role='alert'>Usuário atualizado com sucesso!</div>";
      }
    }
  }

  // CRUD - Delete

  function deleteUser(){
    global $connection; 

    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);

    if(isset($_POST['submit'])){
      $id = $_POST['id'];

      $updateQuery = "DELETE FROM user WHERE id = $id";

      $resultQuery = mysqli_query($connection, $updateQuery);
      // $query .=    --> concatenar variavel

      if (!$resultQuery) {

        die("Falha na atualização: " . mysqli_error($connection));

      } else{
        echo "<div class='alert alert-warning' role='alert'>Usuário deletado!</div>";
      }
    }
  }

?> 