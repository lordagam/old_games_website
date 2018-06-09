<?php

/**************************CONNECT TO THE DB******************************/
class Connection {
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $db = "game";

  function connect_to_db() {
    // Create connection
    $connFunc = mysqli_connect($this->servername, $this->username, $this->password, $this->db);

    // Check connection
    if (!$connFunc) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $connFunc;
  }
}

$a = new Connection();
$conn = $a->connect_to_db();
/**************************************************************************/

/**********************************QUERIES*********************************/
//SELECT HOME PAGE
function get_home_list() {
  $sql="SELECT Title, Pic, Description, GameFile, ID FROM games_DOS Where ID IN (1393, 1389, 1390, 1391, 1392, 849)";
  $result=mysqli_query($conn,$sql);
}

?>
