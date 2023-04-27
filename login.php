<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <h1>Login</h1>
            <label>Usuario</label>
            <input type="text" name="usu" id="usu" placeholder="Ingrese su usuario" minlength=8 maxlength=16 oninput="this.value = this.value.replace(/[^a-zA-Z0-9]/,'')" pattern="[A-Za-z0-9]{8,16}" required>
            <label>Contraseña</label>
            <input type="password" name="pass" id="pass" placeholder="Ingrese su contraseña" minlength=8 maxlength=16 oninput="this.value = this.value.replace(/[^a-zA-Z0-9]/,'')" pattern="[A-Za-z0-9]{8,16}" required>
            <button type="submit">Ingresar</button>
            <label>
            <?php
                $usuarios = 'jptorrez25';
                $password = '12345678';

                $usu=$_POST['usu'];
                $pass=$_POST['pass'];

                if ($usu == $usuarios && $pass == $password){
                    echo "Ingreso exitoso";
                }else{
                    echo "Usuario o contraseña incorrectos";
                }
            ?>
            </label>
        </form>
    </div>
</body>
</html>