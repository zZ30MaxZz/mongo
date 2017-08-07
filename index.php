<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Conectando con la base de Datos</title>
   <style type="text/css">
      body{
         background-color: gray;
      }
      form{
         background-color: white;
          font-family: Consolas;
      }
       h1{
           font-family: "OCR-B 10 BT";
           color: white;
       }
       h2{
           font-family: "OCR-B 10 BT";
       }
       div{
           color: white;
       }
       button{
           font-family: "Consolas";
           font-size: 20px;
           border-radius: 10px 10px 10px 10px;
       }
       input{
           border-radius: 5px 5px 5px 5px;
       }
       .footer{
           font-family: "Footlight MT Light";
           color: silver;
           position: fixed;
           bottom: 1%;
           text-align: center;
           width: 100%;

       }
      
   </style>
</head>
<body>
<h1>PHP en Heroku <?php echo ('Salida en PHP');?> </h1>
<form action ="guardar.php" method="post">
    <fieldset>
        <center><h2>Datos</h2></center><br>
        <label for="llave">Llave </label>
        <input id="llave" name="llave" type="text"  required focus>

        <label for="descripcion">Descripción </label>
        <input id="descripcion" name="descripcion" type="text"  required focus>

        <center><button type="submit">Guardar</button>
    </fieldset>
</form>
<div>
    Salida
    <?php
    //$llave = $_POST["llave"]; //Cuando enviemos
    //$descripcion = $_POST["descripcion"]; //Cuando enviemos
    require 'vendor/autoload.php';
    $uname = "dbgamemax";
    $pass = "dbgamemax123";
    $dbName = "dbgame";
    $uri = "mongodb://".$uname.":".$pass."@ds127983.mlab.com:27983/dbgame";
    $collection = "foo";

    $conn = new MongoDB\Client($uri);

    echo ('Nuestra base de datos en mLAB:');
    echo $conn; // para asegurarse que la conexión esté bien.
    echo ('<br>');


    //header("Location:index.php"); //Solo lo activaremos en casos de pruebas.
    ?>
</div>
<footer>
    <div class="footer">
    <h4>Sistemas Distribuidos - UNAMBA 2017</h4>
    </div>
</footer>
</body>
</html>
