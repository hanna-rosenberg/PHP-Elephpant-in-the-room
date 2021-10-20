<?php require __DIR__ . '/data.php'; ?>
<?php require __DIR__ . '/header.php'; ?>

<<<<<<< Updated upstream
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
=======
<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </nav>
    <h1>Taco!</h1>
    <h1>Taco!</h1>
    <h2>Tacos of the week :</h2>
    <div class="parent">
        <div class="child">

            <?php foreach ($tacos as $taco) :
                $img = $taco['image'];
                $name = $taco['title'];
                $recipes = $taco['content'];
                $grade = $taco['rating'];
            ?>
>>>>>>> Stashed changes

                <p><img src="<?php echo "$img"; ?>"></p>
                <p class="recipes-title"><?php
                                            echo $name; ?>
                <p><?php
                    echo $recipes; ?>
                <p class="recipes-rating">Rating: <?php
                                                    echo $grade; ?>

                    <?php
                    if ($grade >= 9) {
                        echo "- This taco is a FAVORITE!";
                    } elseif ($grade > 7 && $grade < 9) {
                        echo "- This is a good one!";
                    } elseif ($grade < 7 && $grade > 4) {
                        echo "- This taco is allright!";
                    } else {
                        echo "- This taco is BAD!!";
                    }
                    ?>
                </p>
                <p class="border">
                </p>
            <?php
            endforeach ?>

            <?php echo $randomFact[2];

            ?>
        </div>
    </div>

<<<<<<< Updated upstream
    <body>
        <img src="https://media.giphy.com/media/EsDCYBUQM0KlO/giphy.gif" alt="Taco!" />
    </body>
=======
>>>>>>> Stashed changes

</body>

</html>