<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e8f3ed;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 600px;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
        }

        .btn-submit {
            background-color: #333;
            color: #ffffff;
            border-radius: 20px;
            padding: 10px 20px;
            font-weight: bold;
            text-align: center;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div>
        <?php if (file_exists("navbar.php")) include "navbar.php"; ?>
    </div>
    <div class="container-fluid flex-grow-1">
        <div class="row flex-nowrap">
            <?php if (file_exists("sidebar.php")) include "sidebar.php"; ?>
            <div class="col py-3 mt-5 pt-5 d-flex justify-content-center align-items-center">
                <div class="form-container">
                    <h1 class="text-center mb-4">Ajouter un client</h1>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Nom</label>
                                <input type="nom" class="form-control" id="inputEmail4" placeholder="Nom">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Prénom</label>
                                <input type="prenom" class="form-control" id="inputPassword4" placeholder="Prénom" autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Rue principale">
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress2" class="form-label">Ville</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Appartement, studio...">
                        </div>
                        <button type="submit" class="btn  w-100 text-white" style="background-color:#154c79;">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>