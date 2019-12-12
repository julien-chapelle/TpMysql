<?php require('models/carouselQuery.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>LHP3 Arena</title>
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

<body>
    <div class="container-fluid p-0">
        <!-- Header début -->
        <!-- Header fin -->
        <!-- navbar début -->
        <?php include('views/navBar.php'); ?>
        <!-- navbar fin -->
        <!-- carousel début -->
        <div id="carouselExampleCaptions" class="carousel slide my-5" data-ride="carousel">
            <ol class="carousel-indicators">
            <!-- <?php foreach ($data->query($carousel) as $row) { ?> -->
                <li data-target="#carouselExampleCaptions" data-slide-to="<?= $row['id'] ?>"></li>
                <?php }; ?>
                <!-- <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> -->
            </ol>
            <div class="carousel-inner">
                <?php foreach ($data->query($carousel) as $row) { ?>
                    <div class="carousel-item active">
                        <img src="<?= $row['picture'] ?>" class="d-block w-100" alt="<?= 'Photo' . $row['performer'] ?>">
                        <div class="carousel-caption d-none d-md-block text-left">
                            <p class="h1"><?= $row['performer'] ?></p>
                            <p class="h2"><?= $row['title'] ?></p>
                            <p class="h3"><?= 'Le ' . strftime('%d %B %Y', strtotime($row['date'])) ?></p>
                        </div>
                    </div>
                <?php }; ?>
                <!-- <div class="carousel-item">
                    <img src="assets/img_shows/asgeir.jpg" class="d-block w-100" alt="Photo Àsgeir">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img_shows/mayer.jpg" class="d-block w-100" alt="Photo John Mayer">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- carousel fin -->





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