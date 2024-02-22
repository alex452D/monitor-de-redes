<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/inventory.css">
    <title>Vista General del Inventario</title>
    <style>
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
        }
    
        nav {
          background-color: #333;
        }
    
        nav ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          text-align: center; /* Centra los elementos */
        }
    
        nav ul li {
          display: inline-block; /* Muestra los elementos en línea horizontal */
        }
    
        nav ul li a {
          display: block;
          color: white;
          text-decoration: none;
          padding: 15px 20px;
        }
    
        nav ul li a:hover {
          background-color:#555;
        }
    
        .content {
          padding: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
          <li><a href="../../Localizacion-Dispositivos/Dispositivos.html">Localizar Dispositivos</a></li>
          <li><a href="../inventarioG.php">Inventario</a></li>
          <li><a href="../../planes/planes.php">Planes de Prevención</a></li>
          <li><a href="../../seguimiento_Fallas/Fallas_main.php">Seguimiento de Fallas</a></li>
          <li><a href="#Configuraciones">Configuraciones</a></li>
        </ul>
    </nav>
    <?php
      include_once("../sql/sqlQuery.php");
      $op=new SQLModel();
      $op->getEditB($id);
    ?>
    <script src="JS/noEmpty3.js"></script>
    <script src="JS/noLess2.js"></script>
</body>
</html>