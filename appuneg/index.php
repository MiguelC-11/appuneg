<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../appuneg/style.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Registro</h1>
      <form method="post" action="register.php">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="fName" id="fName" placeholder="First Name" required>
          <label for="fname">Nombre</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Apellido</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Correo</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Contraseña</label>
        </div>
      <input type="submit" class="btn" value="Registrarse" name="signUp">
      </form>

      <div class="links">
        <p>¿Ya posees una cuenta?</p>
        <button id="signInButton">Inicia sesión</button>
      </div>
    </div>
    
<!--------- Esta es la parte para iniciar sesion ---->

    <div class="container" id="signIn">
        <h1 class="form-title">Inicia Sesión</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Correo</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Contraseña</label>
          </div>
          <p class="recover">

            <!----- Aqui tengo que agregar la Recuperacion de Contraseña ---->

            <a href="#">Recuperacion de contraseña</a>
          </p>
        <input type="submit" class="btn" value="Inicio de Sesión" name="signIn">
        </form>

        <div class="links">
          <p>¿Aún no te has registrado?</p>
          <button id="signUpButton">Registrarse</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>
