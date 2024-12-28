<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Page SignUp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #e8f3ed;
      /* Couleur personnalisée */
    }

    /* Enlève l'alignement centré, et aligne le texte au début */
    .col.py-3 {
      display: flex;
      flex-direction: column;
      padding-top: 20px;
      /* Espacement pour le début de la page */
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-screen">
  <div>
    <?php include "navbar.php"; ?>
  </div>
  <div class="container-fluid flex-grow-1">
    <div class="row flex-nowrap">
      <?php include "sidebar.php"; ?>
      <div class="col py-3 mt-5 pt-5">
        <!-- Zone centrale où tu peux écrire -->
        <h1 class="text-center">Le statistique de Stock</h1>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>