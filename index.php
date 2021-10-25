<?php require __DIR__ . '/data.php'; ?>
<?php require __DIR__ . '/header.php'; ?>

<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </nav>


    <h1>Taco!</h1>
    <h1 class="headerTaco">Taco!</h1>

    <p class="headerFact">
        <?php echo $amountOfTacos; ?>
    </p>

    <h2>
        <?php echo whatday(); ?>
    </h2>
    <h2>Get inspired :</h2>

    <div class="parent">
        <div class="child">

            <?php
            $numItems = count($tacos);
            $i = 0;

            foreach ($tacos as $taco) :
                $img = $taco['image'];
                $name = $taco['title'];
                $grade = $taco['rating'];
            ?>

                <p><img src="<?php echo "$img"; ?>"></p>
                <p class="recipes-title">
                    <?php echo $name; ?>
                </p>
                <ul>
                    <p class="main-titles">
                        <?php echo "Ingredients: "; ?></p>

                    <?php foreach ($taco['ingredients'] as $ingredient) { ?>
                        <li>
                            <?php echo $ingredient; ?>
                        </li>
                    <?php } ?>
                    <p class="main-titles">
                        <?php echo "Directions: "; ?></p>
                    <?php foreach ($taco['directions'] as $direction) { ?>
                        <li>
                            <?php echo $direction; ?>
                        </li>
                    <?php } ?>
                </ul>

                <p class="recipes-rating">
                    <?php
                    echo "Rating: $grade"; ?>

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
                <?php if (++$i === $numItems) : ?>

                    <div class="randomFact">
                        <button class="button"></button>
                        <p>Press the taco for a random taco-fact!</p>

                    </div>
                <?php endif; ?>

            <?php
            endforeach ?>

        </div>
    </div>

    <?php require __DIR__ . '/footer.php'; ?>



    <!-- <?php echo $randomFact[shuffle($randomFact)];            ?> -->

    <!-- Shufflar ett fakta varje gång sidan laddas. Men jag vill att
    den skall shuffla när man trycker på knappen. -->

    <!-- Kvar: Skriv kommentarer i index.php. Kolla igenom CSS:en, kan något mer
    tas bort? Är det bra uppdelning på CSS:en?  -->