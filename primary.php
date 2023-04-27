<head>
  <title>Primary</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "yazaw") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into primary_p(Codigo,Nombre,Precio,Entrada,Salida,Cantidad) values 
                       ('$_REQUEST[Codigo]','$_REQUEST[Nombre]','$_REQUEST[Precio]','$_REQUEST[Entrada]','$_REQUEST[Salida]',$_REQUEST[Cantidad])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "Los datos se ingresaron correctamente";
  ?>
  <style>
  button {
    background-color: #8B0000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
</style>

<button onclick="window.history.go(-2);">Regresar</button>
</body>