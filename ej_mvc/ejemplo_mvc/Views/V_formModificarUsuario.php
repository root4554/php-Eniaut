<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>

<body>

    <form action="C_modificarUsuario.php" method="post">
        <input type="text" name="username" value="<?php echo $_GET['username']; ?>" readonly>
        <input type="text" name="nombre" placeholder="nombre" required>
        <input type="text" name="password" placeholder="password" required>
        <input type="submit" value="Modificar">
    </form>
</body>

</html>