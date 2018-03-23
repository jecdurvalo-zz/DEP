<?php include 'db.php';



    function createPokemon(){

        global $connection; 

        if (isset($_POST['submit'])) {
          $name = $_POST['name'];
          $type = $_POST['type'];
          $hp   = $_POST['hp'];
                   
          $query = "INSERT INTO pokemons(name, type, hp) VALUES('$name', '$type', $hp)";
        
          $newPokemon = mysqli_query($connection, $query);
      
          if (!$newPokemon) {
            die('Erro da criação de novo usuário: ' . mysqli_error($connection));
            } else {
            echo "<div class='alert alert-success' role='alert'>Pokemon cadastrado com sucesso!</div>";
          }
        }
    }


    function readPokemon(){

        global $connection;

        $query = "SELECT * FROM pokemons WHERE type = 'fogo'";
        $response = mysqli_query($connection, $query);
    
        while($row = mysqli_fetch_assoc($response)){
          echo "<pre>";
          
          print_r($row);
    
          echo "</pre>";
        }
        
    }

    function updatePokemon(){
    global $connection; 
  
    $query = "SELECT * FROM pokemons";
    $result = mysqli_query($connection, $query);
   
    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $type = $_POST['type'];
        $hp = $_POST['hp'];
        $id = $_POST['id'];

      $updateQuery = "UPDATE pokemons SET 
                      name= '$username', 
                      type = '$type',
                      hp = '$hp' 
                      WHERE id = $id ";

      $resultQuery = mysqli_query($connection, $updateQuery);
      // $query .=    --> concatenar variavel

      if (!$resultQuery) {
        die("Falha na atualização: " . mysqli_error($connection));
      }else{
        echo "<div class='alert alert-success' role='alert'>Pokemon atualizado com sucesso!</div>";
      }
    }     
}

    function deletePokemon(){
        global $connection; 

    $query = "SELECT * FROM pokemons";
    $result = mysqli_query($connection, $query);

    if(isset($_POST['submit'])){
      $id = $_POST['id'];

      $updateQuery = "DELETE FROM pokemons WHERE id = $id";

      $resultQuery = mysqli_query($connection, $updateQuery);
      // $query .=    --> concatenar variavel

      if (!$resultQuery) {

        die("Falha na atualização: " . mysqli_error($connection));

      } else{
        echo "<div class='alert alert-warning' role='alert'>Pokemon deletado :( !</div>";
      }
    }
    }

    function showPokemon(){

        global $connection;
  
         $query = "SELECT * FROM pokemons";
        $result = mysqli_query ($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];

       echo "<option value='$id'>$id</option>";
    }
        
} 

    ?>