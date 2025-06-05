<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Iniciar Sesión | Glam Beauty</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

    .text-pink {
      color: #ec407a !important;
    }

    .card-title i {
      color: #d81b60;
    }

    a {
      color: #ad1457;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    h4 {
      color: #880e4f;
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
            <i class="fas fa-magic fa-3x mb-2"></i>
            <h4 class="fw-bold">Iniciar Sesión</h4>
          </div>

          <!-- ✅ Formulario corregido -->
          <form action="index.php?action=login" method="POST" autocomplete="off">
            <div class="mb-3">
              <label for="correo" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="correo" name="correo" placeholder="usuario@ejemplo.com" required>
            </div>
            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña</label>
              <input type="contraseña" class="form-control" id="contraseña" name="contraseña" placeholder="••••••••" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
          </form>

          <div class="text-center mt-3">
            <p class="mb-0">¿No tienes una cuenta? <a href="index.php?action=register">Regístrate aquí</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
