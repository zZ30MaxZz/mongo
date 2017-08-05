<?php
//$llave = $_POST["llave"]; //Cuando enviemos
//$descripcion = $_POST["descripcion"]; //Cuando enviemos

   $uname = "dbgamemax";
   $pass = "dbgamemax123";
   $dbName = "dbgame";
   $uri = "mongodb://".$uname.":".$pass."@ds127983.mlab.com:27983/dbgame";
   $collection = "foo";

   $conn = new MongoClient($uri);

   echo ('Nuestra base de datos en mLAB:');
   echo $conn; // para asegurarse que la conexión esté bien.
   echo ('<br>');



   $db = $conn->selectDB($dbName);
   //echo $db;

   $col = new MongoCollection($db, $collection);
   $cur = $col->find();

   $result = array();
   foreach ($cur as $doc) {
   	$tmp = array();
   	$tmp["a"] = $doc["a"];
   	array_push($result, $tmp);
   }

   echo json_encode($result);
   //header("Location:index.php"); //Solo lo activaremos en casos de pruebas.
?>