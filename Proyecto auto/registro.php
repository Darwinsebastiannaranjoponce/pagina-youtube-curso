<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="form-content">
            <h1 id="title">Registro</h1>
            <form action="php/registro_usuario_be.php" method="POST">
                <div class="input-group">
                    <div class="input-field" id="nameInput">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Nombre" name="Nombre">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Correo" name="Correo">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Contraseña" name="Contrasena">
                    </div>
                </div>
                <p>

                </p>
                <div class="btn-field">
                    <button >Registrarse</button>
                    <button id="singIn" type="button" class="disable" onclick="location.href='http://localhost/proyecto%20auto/inicio.php'">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>