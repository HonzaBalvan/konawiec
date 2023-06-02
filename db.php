<?php

$server_name = "localhost";

$user_name = "root";

$password = "";

$database_name = "konawiec_sql";

$connection = mysqli_connect($server_name, $user_name, $password, $database_name);

if (!$connection) {
  die("Failed ". mysqli_connect_error());
}
echo "Connection established successfully <br>" ;

$query = "select * from produkty";

$final = mysqli_query($connection, $query);

if (mysqli_num_rows($final) > 0) {
 //get the output of each row
  while($i = mysqli_fetch_assoc($final)) {
      //get id and name columns
    // vypissuje, nepotřebuju --
    echo "id: " . $i["id"] . ", jmeno: " . $i["jmeno"] . ", popis: " . $i["popis"] . ", cena: " . $i["cena"] . ", skladem: " . $i["skladem"] . "<br>";
  }
} else {
  echo "No results";
}

?>
