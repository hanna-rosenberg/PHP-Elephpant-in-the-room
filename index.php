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
    <h1>Taco!</h1>

    <!-- <div class="randomFact">
        <button class="button"></button>
        <p>Press the taco 4 a random taco-fact!</p>
    </div> 

LÄGG DENNA RÄTT. Hamnar på samma rad som h2.-->

    <h2>Tacos of the week :</h2>

    <div class="parent">
        <div class="child">

            <?php foreach ($tacos as $taco) :
                $img = $taco['image'];
                $name = $taco['title'];
                $grade = $taco['rating'];
            ?>

                <p><img src="<?php echo "$img"; ?>"></p>
                <p class="recipes-title"><?php
                                            echo $name; ?>
                    <?php
                    foreach ($taco['ingredients'] as $ingredient) {
                    ?>
                <ul>
                    <li><?php
                        echo $ingredient; ?>
                    </li>
                </ul>
            <?php } ?>

            <p><?php
                foreach ($taco['directions'] as $direction) {
                ?> <li><?php
                        echo $direction; ?>
                    </li>
                <?php } ?>


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

        <?php echo $randomFact[2];            ?>
        </div>
    </div>

    <?php require __DIR__ . '/footer.php'; ?>