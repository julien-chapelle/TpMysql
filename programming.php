<?php require('models/Query.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Programmes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Logo title -->
    <link rel="shortcut icon" href="assets/img/logoLhp3Arena.png" class="lhp3LogoTitle" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/style/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

</head>

<body class="fontBankGothic">
    <div class="container-fluid p-0">
        <!-- Header début -->
        <!-- Header fin -->
        <!-- navbar début -->
        <?php include('views/navBar.php'); ?>
        <!-- navbar fin -->
        <!-- media object programmation début -->
        <?php foreach ($data->query($media_object_shows) as $row) { ?>

            <p class="mt-0 ml-3 h2"><?= strftime('%B', strtotime($row['date'])) ?></p>

            <?php foreach ($data->query($media_object_shows) as $row) { ?>
                <div class="row media p-3 mx-3 my-5 shadow justify-content-left">
                    <div class="col">
                        <p class="mt-0 h4"><?= $row['type'] ?></p>
                        <img src="<?= $row['picture'] ?>" class="mr-3 sizeShowView rounded" alt="<?= 'image concert de ' . $row['performer'] ?>">
                    </div>
                    <div class="col text-center">
                        <p class="mt-0 h4"><?= $row['title'] . ':' ?></p>
                        <p class="h6"><?= 'Artiste : ' . $row['performer'] . ' - ' . $row['genre'] . ' / ' . $row['genre'] ?></p>
                        <p class="h5"><?= 'Le ' . strftime('%d %B %Y', strtotime($row['date'])) . ' à ' . strftime('%HH%M', strtotime($row['startTime'])) ?></p>
                        <p class="h6"><?= 'Durée ' . strftime('%HH', strtotime($row['duration'])) ?></p>
                        <a class="btn btn-outline-warning btn-sm" href="<?= $row['officialSite'] ?>" target="_blank" title="Aller vers site officiel">Site officiel</a>
                        <input class="btn btn-outline-warning btn-sm" value="Reserver" type="submit" title="Reserver billet" />
                    </div>
                </div>
        <?php };
        }; ?>
        <!-- media object programmation fin -->
        <!-- footer début -->
        <?php include('views/footer.php'); ?>
        <!-- footer fin -->
        <!-- modal mention legale début -->
        <?php include('views/legalMention.php'); ?>
        <!-- modal mention legale fin -->
        <!-- modal plan du site début -->
        <?php include('views/siteMap.php'); ?>
        <!-- modal plan du site fin -->
        <!-- modal contact début -->
        <?php include('views/contact.php'); ?>
        <!-- modal contact fin -->
        <!-- Scrollup début -->
        <?php include('views/scrollUp.php'); ?>
        <!-- Scrollup fin -->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/script/script.js"></script>
    <script type="text/javascript" src="assets/script/jquery.parallax-1.1.3.js"></script>
</body>

</html>