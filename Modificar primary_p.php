<head>
  <title>Modificar primary_p</title>
</head>

<body>

  <?php

  $conexion = mysqli_connect("localhost", "root", "", "yazaw") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from primary_p
                        where Codigo='$_REQUEST[ID]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="primary_medoficado.php" method="post">
      Ingrese nuevo ID:
      <input type="text" name="IDnuevo" value="<?php echo $reg['Codigo'] ?>">
      <br>
      <input type="hidden" name="IDviejo" value="<?php echo $reg['Codigo'] ?>">
	  Ingrese nuevo Nombre:
      <input type="text" name="Nombrenuevo" value="<?php echo $reg['Nombre'] ?>">
      <br>
      <input type="hidden" name="Nombreviejo" value="<?php echo $reg['Nombre'] ?>">
	  Ingrese nuevo Precio:
      <input type="text" name="Precionuevo" value="<?php echo $reg['Precio'] ?>">
      <br>
      <input type="hidden" name="Precioviejo" value="<?php echo $reg['Precio'] ?>">
	  Ingrese nuevo Entrada:
      <input type="text" name="Entradanuevo" value="<?php echo $reg['Entrada'] ?>">
      <br>
      <input type="hidden" name="Entradaviejo" value="<?php echo $reg['Entrada'] ?>">
	  Ingrese nuevo Salida:
      <input type="text" name="Salidanuevo" value="<?php echo $reg['Salida'] ?>">
      <br>
      <input type="hidden" name="Salidaviejo" value="<?php echo $reg['Salida'] ?>">
	  Ingrese nuevo Cantidad:
      <input type="text" name="Cantidadnuevo" value="<?php echo $reg['Cantidad'] ?>">
      <br>
      <input type="hidden" name="Cantidadviejo" value="<?php echo $reg['Cantidad'] ?>">
      <input type="submit" value="Modificar">
    </form>

  <?php
  } else
    echo "No existe producto con ese ID";
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