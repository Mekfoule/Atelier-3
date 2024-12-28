<!DOCTYPE html>
<html lang="fn">

<head>
  <meta charset="UTF-8">
  <title>Page login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #cfdfd0;
      /* Couleur personnalisée */
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class=" vh-100 d-flex align-items-center justify-content-center">
  <div class="screen-1 p-4 border rounded bg-white shadow" style="width: 400px; height: 400px;">
    <form method="POST" class="loginForm">
      <div class="">
        <div class=" text-end fs-3 fst-italic fw-bold">
          <p>Se connecter</p>
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check mb-3">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="d-flex justify-content-between mt-3  gap-2">
          <button type="submit" class="btn btn-primary  flex-grow-1 ">Submit</button>
          <button type="submit" class="btn btn-secondary flex-grow-1 ">Mot de passe oublié?</button>
        </div>
        <div class="d-flex  mt-3 gap-1">
          <p>Vous n'avez pas de compte ?</p>
          <a href="SignUp.php" target="_blank ">inscrivez-vous</a>
        </div>
      </div>
    </form>
  </div>
</body>

</html>