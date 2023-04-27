<head>
  <title>Consulta</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "yazaw") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select Codigo,Nombre,Precio,Entrada,Salida,Cantidad
                        from secondary_p where Codigo='$_REQUEST[ID]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre: " . $reg['Nombre'] . "<br>";
	echo "Precio: " . $reg['Precio'] . "<br>";
	echo "Entrada: " . $reg['Entrada'] . "<br>";
	echo "Salida: " . $reg['Salida'] . "<br>";
	echo "Cantidad: " . $reg['Cantidad'] . "<br>";
  } else {
    echo "No existe el producto.";
  }
  mysqli_close($conexion);
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