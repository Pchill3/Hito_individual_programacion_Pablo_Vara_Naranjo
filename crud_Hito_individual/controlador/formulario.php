<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="../vistas/style2.css">
  </head>
  <body>
    <!-- un formulario simple donde los datos se obtienen mediante el metodo "post" -->
    <form action="../modelo/insert.php" method="post">
      
      <label for="email">email:</label>
      <input type="email" id="email" name="email">
      
      <label for="titulo">titulo:</label>
      <input type="text" id="titulo" name="titulo">
      
      <label for="contenido">contenido:</label>
      <textarea id="contenido" name="contenido" cols="65" rows="7"></textarea>
      
      <label for="fecha">fecha:</label>
      <input type="date" id="fecha" name="fecha">
      
      <label for="imagen">imagen:</label>
      <input type="text" id="imagen" name="imagen">
      
      <input type="submit" value="Enviar">
    </form>

  </body>
</html>
