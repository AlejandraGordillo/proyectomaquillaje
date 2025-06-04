<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro | Glam Beauty</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      background: linear-gradient(to right, #fce4ec, #f8bbd0);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      background-color: #fff0f5;
    }

    .form-label {
      font-weight: 600;
      color: #880e4f;
    }

    .btn-primary {
      background-color: #ec407a;
      border: none;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background-color: #d81b60;
    }

    h4 {
      color: #880e4f;
    }

    a {
      color: #ad1457;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card p-4">
          <div class="card-body">
            <div class="text-center mb-4">
              <i class="fas fa-user-plus fa-3x mb-2 text-danger"></i>
              <h4 class="fw-bold">Crear Cuenta</h4>
            </div>

            <form action="index.php" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Tu nombre de usuario" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="usuario@ejemplo.com" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
              </div>
              <div class="mb-3">
                <label for="confirm_password" class="form-label">Repetir Contraseña</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="••••••••" required>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Registrarse</button>
                
              </div>
            </form>

            <div class="text-center mt-3">
              <p class="mb-0">¿Ya tienes una cuenta? <a href="../login/login.php">Inicia sesión</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
