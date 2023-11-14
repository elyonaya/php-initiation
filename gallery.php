<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Initiation PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/style.scss">
</head>

<body>
    <?php
    include "includes/_head.php";
    include "includes/_navbar.php";
    include "data.php";
    ?>

    <br>

    <div class="container">

        <h1>
            <?php echo $title ?>
        </h1>
        <p>
            <?php echo $intro ?>
        </p>

        <div class="row">
            <?php // echo "<pre>"; var_dump($products); die();
            
            foreach ($products as $keyProduct => $valeurProduct) { ?>

                <div class="card" style="width: 18rem;">
                    <img src="img/<?php echo $valeurProduct["image"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $valeurProduct["name"] ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $valeurProduct["description"] ?>
                        </p>
                        <a href="#" class="btn btn-primary">
                            <?php echo $valeurProduct["price"] . " €" ?>
                        </a>
                    </div>
                </div>

            <?php } ?>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>