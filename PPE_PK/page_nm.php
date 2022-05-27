


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon menu web">
    <link rel="icon" sizes="32x32" href="asset/logo_sport.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/page1.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

    <title>Sport+</title>
</head>

<body>

     <div role="region" aria-label="chargement" class="loader" id="loader">
        <img src="asset/spinner-icon-gif-29.gif" alt="">
    </div>
    <?php include_once './header_footer/header_page_nm.php'; ?>
    <main>



        <section>

            <h2>Prêt à la compétition? Remplissez le formulaire proposé dans cette page</h2>

            <p>Tous les mois profitez de toutes les nouveautés et opportunités. A partir du mois
                prochain on vous propose tous les sports et toutes les compétitions.
            </p>

            <ul class="grid-picture-large">
            <?php
            require_once './setup/connect.php';
    $request = $bdd->query('SELECT * FROM evenement');

    while ($donnees = $request->fetch()) {
    ?>
                <li data-image="<?php echo htmlspecialchars($donnees['image']); ?>" data-title="<?php echo htmlspecialchars($donnees['nom']); ?>"
                    data-description="<?php echo htmlspecialchars($donnees['desc']); ?>"
                    data-dates="<?php echo htmlspecialchars($donnees['date_modification']); ?>">
                    <figure>
                        <img src="<?php echo htmlspecialchars($donnees['image']); ?>" alt="<?php echo htmlspecialchars($donnees['nom']); ?>">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <?php
    }

    $request->closeCursor(); // Fin de requète SQL

    ?>
            </ul>

            <a href="page_nm2.php"><button class="redirect_page2">Cliquez ici pour commencer</button></a>

        </section>

        <!-- modale -->
        <div class="parent-modale" role="dialog" aria-label="true">
            <figure class="modale">
                <button aria-label="closed">
                    <span class="material-icons">clear</span>
                </button>
                <img src="https://via.placeholder.com/500" alt="picture" />
                <figcaption class="desc">
                    <h3>title</h3>
                    <p> </p>
                    <time></time> <br>
                    <input type="submit" value="Participer">
                </figcaption>
            
            </figure>
            
        </div>




    </main>

    <?php include_once './header_footer/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="https://kit.fontawesome.com/c62d0ae7da.js" crossorigin="anonymous"></script>
    <script src="./js/notyf/notyf_nm.js"></script>
    <script src="./js/page1.js"></script>
    <script src="./js/themesombre.js"></script>
    <script src="./js/loader.js"></script>

</body>

</html>