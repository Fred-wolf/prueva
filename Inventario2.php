<head>
  <title>Inventario</title>
</head>

<body>
  <h1>Yazaw inventario</h1>
  <button onclick="window.history.back();">Regresar</button>
  <br><br><br>
  <form action="secondary.php" method="post">
  Ingrese su Codigo:
    <input type="text" name="Codigo2" required><br>
    Ingrese el Nombre:
    <input type="text" name="Nombre2" required><br>
    Ingrese el Precio:
    <input type="text" name="Precio2" required><br>
	Ingrese las Entradas:
    <input type="text" name="Entrada2" required><br>
    Ingrese las Salidas:
    <input type="text" name="Salida2" required><br>
	Ingrese la Cantidad:
    <input type="text" name="Cantidad2" required><br>
    <br>
    <input type="submit"  name="Registrar Productos secundarios" id="Registrar Productos secundarios" value="Registrar Productos secundarios">
	
<style>
  button {
    background-color: #8B0000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;/
    margin: 4px 2px;
    cursor: pointer;
  }
</style>

  </form>
</body>