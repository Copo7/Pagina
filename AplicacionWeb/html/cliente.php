<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>  
<main class="container my-5">
  <form action="cliente.php" method="post" class="p-4 border rounded shadow-sm mx-auto" style="max-width: 800px;">
    <img class="mb-4 d-block mx-auto" src="https://cdn.icon-icons.com/icons2/520/PNG/512/Persons_icon-icons.com_51961.png" alt="" width="80" height="94">
    <h1 class="h3 mb-3 fw-normal text-center">Lista de Clientes</h1>

    <div class="row g-3">
      <div class="col-md-6">
        <label for="id" class="form-label">ID</label>
        <input type="text" class="form-control" id="id" name="id" placeholder="ID" required>
      </div>
      <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
      </div>
      <div class="col-md-6">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>
      </div>
      <div class="col-md-6">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="phone" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
      </div>
      <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="mail" class="form-control" id="email" name="email" placeholder="Email" required>
      </div>
    </div>
    <button class="btn btn-primary w-100 mt-4" type="submit">Crear</button>
  </form>
</main>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>  