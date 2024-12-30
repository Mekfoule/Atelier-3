<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e8f3ed;
        }

        .table-hover tbody tr:hover {
            background-color: #f8d7da;
            /* Couleur au survol */
        }

        .icon-edit {
            color: #0d6efd;
            /* Bleu pour modifier */
        }

        .icon-delete {
            color: #dc3545;
            /* Rouge pour supprimer */
        }
    </style>
</head>

<body class="d-flex flex-column h-screen">
    <div>
        <?php include "navbar.php"; ?>
    </div>
    <div class="container-fluid flex-grow-1">
        <div class="row flex-nowrap">
            <?php include "sidebar.php"; ?>
            <div class="col py-3 mt-5 pt-5">
                <!-- Zone centrale -->
                <h1 class="text-center mb-4">La liste des Stocks</h1>
                <div>
                    <a href="ajouterStock.php" class="btn btn-success mb-3">
                        <!-- Icône SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add me-2" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                        </svg>
                        Ajouter un Stock
                    </a>
                </div>

                <!-- Tableau des clients -->
                <table class="table table-hover table-bordered text-center">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">Id Produit</th>
                            <th scope="col">Categorie</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Prix unitaire(MAD)</th>
                            <th scope="col">Quantite</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once "conn.php";
                        $req = mysqli_query($conn, "SELECT * FROM produit");
                        if (mysqli_num_rows($req) == 0) {
                            echo "<tr><td colspan='7'>Il n'y a pas encore de stock ajouté !</td></tr>";
                        } else {
                            while ($row = mysqli_fetch_assoc($req)) {
                        ?>
                                <tr>
                                    <td><?= $row['idProduit'] ?></td>
                                    <td><?= $row['categorie'] ?></td>
                                    <td><?= $row['designation'] ?></td>
                                    <td><?= $row['prixUnitaire'] ?></td>
                                    <td><?= $row['quantite'] ?></td>
                                    <td>
                                        <a href="#" class="icon-edit">
                                            <!-- Icône modifier -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="icon-delete">
                                            <!-- Icône supprimer -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>