<html>

<head>
  <title>Modificar</title>
</head>

<body>
<button onclick="window.history.back();">Regresar</button>
  <form action="Modificar primary_p.php" method="post">
    Ingrese el ID del Producto:
    <input type="text" name="ID"><br>
	Ingrese el Nombre del Producto:
    <input type="text" name="Nombre"><br>
	Ingrese el Precio del Producto:
    <input type="text" name="Precio"><br>
	Ingrese la Entrada del Producto:
    <input type="text" name="Entrada"><br>
	Ingrese la Salida del Producto:
    <input type="text" name="Salida"><br>
	Ingrese la Cantidad del Producto:
    <input type="text" name="Cantidad"><br>
    <input type="submit" value="buscar">
    <input type="submit" value="buscar">
  </form>
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
</style>
</body>

</html>