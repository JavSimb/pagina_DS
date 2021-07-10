
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validacion de datos</title>
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <script type="text/javascript" src="script.js"></script>
  </head>
  <body>
  <div class="login-box">
    <h1>Formulario de registro</h1>
    <form action="database.php" class="formulario" id="formulario" name="formulario"  method="post">
      <p><h2>Nombre: </h2><input type="text" name="nombre" maxlength="15" placeholder="Ingrese su nombre aqui" required></p>
      <p><h2>Apellido:</h2><input type="text" name="apellido" maxlength="15" placeholder="Ingrese su apellido aqui" required></p>
      <p><h2>Cedula: </h2><input type="number" name="cedula" min="10" placeholder= "Ingrese su cedula" required></p>
      <p><h2>Correo: </h2><input type="email" name="correo"  placeholder="Ingrese su correo aqui" required></p>
      <p><h2>Genero:</h2></p>
        <input type="radio" name="genero" value="M" required> Maculino
        <input type="radio" name="genero" value="F" > Femenino
      <p><h2>Estado civil:</h2></p>
        <input type="radio" name="estadocivil" value="c" required > Casado/a
        <input type="radio" name="estadocivil" value="s"> Soltero/a
        <input type="radio" name="estadocivil" value="d"> Divorciado/a
        <input type="radio" name="estadocivil" value="v"> Viudo/a
      <p><h2>Direccion:</h2> <input type="text" name="direccion" size="30" placeholder="Ingrese su direccion aqui" required></p>
      <p><h2>Ingrese su fecha de nacimiento:</h2>
        <input type="number" name="dia" max="31" placeholder= "Dia">
        <input type="number" name="mes" max="12" placeholder="Mes" >
        <input type="number" name="año" min="1980" placeholder="Año" >
      </p>
      <p><h2>Telefono:</h2> <input type="number" name="telefono" min="10" required></p>
      <p>
    <input type="submit" value="Enviar" >
    <input type="reset" value="Borrar">
    <a href="../inicio.php">Volver al inicio</a>
     </p>
    </form>
  </div>
  </body>
</html>

 ?>
