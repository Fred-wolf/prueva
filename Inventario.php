<head>
  <title>Inventario</title>
</head>

<body>
  <h1>Yazaw inventario</h1>
  <button onclick="window.history.back();">Regresar</button>
  <br><br><br>
  <form action="primary.php" method="post">
  Ingrese su Codigo:
    <input type="text" name="Codigo" required><br>
    Ingrese el Nombre:
    <input type="text" name="Nombre" required><br>
    Ingrese el Precio:
    <input type="text" name="Precio" required><br>
	Ingrese las Entradas:
    <input type="text" name="Entrada" required><br>
    Ingrese las Salidas:
    <input type="text" name="Salida" required><br>
	Ingrese la Cantidad:
    <input type="text" name="Cantidad" required><br>
    <br>
    <input type="submit" name="Registrar Productos primarios" id="Registrar Productos primarios" value="Registrar Productos primarios">
	<br><br><br>
	
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

  </form>
</body>