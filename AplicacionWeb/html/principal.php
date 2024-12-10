    <h1>Bienvenido, <?php echo ($_SESSION['usuario']); ?>!</h1>
    <p>Nombre, <?php echo $_SESSION['usuario']['nombre_completo']; ?></p>
    <p>Contraseña, <?php echo $_SESSION['usuario']['password']; ?></p>
    <p>email, <?php echo $_SESSION['usuario']['email']; ?></p>
    <p>telefono, <?php echo $_SESSION['usuario']['telefono'];?></p>