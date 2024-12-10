
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loguin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet">
</head>
<body>  
    <main class="form-signin w-100 m-auto">
  <form action="login.php" method="post">
    <img class="mb-4" src="https://i.pinimg.com/originals/7b/a2/7b/7ba27b85ee51849568dd6076d0e44b15.png" alt="" width="152" height="157">
    <h1 class="h3 mb-3 fw-normal">login</h1>

    <div class="form-floating">
    <input class="form-control" type="text" id="usuario" name="usuario" required>
    <label for="floatingInput">nombre</label>
    </div>
    <div class="form-floating">
    <input class="form-control" type="password" id="password" name="password" required>
    <label for="floatingPassword">Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
  </form>
</main>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>  