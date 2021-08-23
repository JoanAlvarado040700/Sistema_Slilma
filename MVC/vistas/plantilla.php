<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/69aa682ba2.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="vistas/modulos/formularios.css">
    <title>Document</title>
</head>
<body>
    
    <?php 
    include "modulos/menu.php";
     ?>
     
     <?php 
        $rutas = new RutasControlador();
        $rutas -> Rutas();
      ?>
    



</body>
</html>