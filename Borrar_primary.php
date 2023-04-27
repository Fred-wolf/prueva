<html>

<head>
  <title>Borrar_primary</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "yazaw") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo from primary_p
                        where Codigo='$_REQUEST[ID]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from primary_p where Codigo='$_REQUEST[ID]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó el borrado del producto con dicho ID.";
  } else {
    echo "No existe producto con ese ID.";
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

</html>