<head>
    <title>Primary_p modificado</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "yazaw") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update primary_p
                          set Codigo='$_REQUEST[IDnuevo]' 
                        where Codigo='$_REQUEST[IDviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El ID fue modificado con exito";
	
	
    mysqli_query($conexion, "update primary_p
                          set Nombre='$_REQUEST[Nombrenuevo]' 
                        where Nombre='$_REQUEST[Nombreviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El Nombre fue modificado con exito";
	
	mysqli_query($conexion, "update primary_p
                          set Precio='$_REQUEST[Precionuevo]' 
                        where Precio='$_REQUEST[Precioviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El Precio fue modificado con exito";
	
	mysqli_query($conexion, "update primary_p
                          set Entrada='$_REQUEST[Entradanuevo]' 
                        where Entrada='$_REQUEST[Entradaviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El Entrada fue modificado con exito";
	
	mysqli_query($conexion, "update primary_p
                          set Salida='$_REQUEST[Salidanuevo]' 
                        where Salida='$_REQUEST[Salidaviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El Salida fue modificado con exito";
	
	mysqli_query($conexion, "update primary_p
                          set Cantidad='$_REQUEST[Cantidadnuevo]' 
                        where Cantidad='$_REQUEST[Cantidadviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El Cantidad fue modificado con exito";
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

<button onclick="window.history.go(-3);">Regresar</button>
</body>