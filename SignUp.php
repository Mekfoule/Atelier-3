<!DOCTYPE html>
<html lang="fn">

<head>
  <meta charset="UTF-8">
  <title>Page SignUp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #cfdfd0; /* Couleur personnalisée */
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class=" vh-100 d-flex align-items-center justify-content-center">
    <div class="screen-1 p-4 border rounded bg-white shadow" style="width:400px; height: 500px;">
        <form>
            <div class=" text-end fs-3 fst-italic fw-bold">
                <p>S'inscrire</p>
               </div>
            <div class="form-row">
              <div class="form-group col-md-6 mb-3 ">
                <input type="email" class="form-control " id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6  mb-3">
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
            </div>
            <div class="form-group  mb-3">
              <input type="text" class="form-control w-100" id="inputAddress" placeholder="Prénom">
            </div>
            <div class="form-group  mb-3">
              <input type="text" class="form-control w-100" id="inputAddress2" placeholder="Nom de la famille">
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">Sexe</label>
                <select id="inputState" class="form-control ">
                  <option selected>Choose...</option>
                  <option >Homme</option>
                  <option >Femme</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary w-50 mt-3">Sign in</button>
            <div class="m-3 d-flex justify-content-between">
                <p>Vous avez déjà un compte ?</p>
                <a href="Login.php" target="_blank  ">Connectez-vous</a>
            </div>
        </form>
    </div>
  </body>

</html>
