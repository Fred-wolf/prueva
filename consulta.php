<html>

<head>
  <title>Consulta</title>
</head>

<body>
<button onclick="window.history.back();">Regresar</button>
  <br><br><br>
  <form action="consulta_primary.php" method="post">
    Ingrese el ID del producto a consultar:
    <input type="text" name="ID">
    <br>
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
    font-size: 16px;/
    margin: 4px 2px;
    cursor: pointer;
  }
</style>
</body>

</html>