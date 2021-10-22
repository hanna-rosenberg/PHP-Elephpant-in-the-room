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

    <h1 class="headerTaco">Taco!
    </h1>


    <p class="randomFact">

        <?php echo $amountOfTacos;
        ?>
    </p>


    <h2>Tacos of the week :</h2>

    <div class="parent">
        <div class="child">

            <?php
            $numItems = count($tacos);
            $i = 0; ?>

            <?php foreach ($tacos as $taco) :
                $img = $taco['image'];
                $name = $taco['title'];
                $grade = $taco['rating'];
            ?>

                <p><img src="<?php echo "$img"; ?>"></p>
                <p class="recipes-title"><?php echo $name; ?></p>
                <ul>
                    <?php foreach ($taco['ingredients'] as $ingredient) { ?>
                        <li><?php echo $ingredient; ?></li>
                    <?php } ?>

                    <p>
                        <?php foreach ($taco['directions'] as $direction) { ?>
                            <li><?php echo $direction; ?> </li>
                    </p>
                <?php } ?>
                </ul>
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
                <?php if (++$i === $numItems) : ?>
                    <div class="randomFact">
                        <button class="button"></button>
                        <p>Press the taco 4 a random taco-fact!</p>
                    </div>
                <?php endif; ?>

            <?php
            endforeach ?>

        </div>
    </div>

    <?php require __DIR__ . '/footer.php'; ?>



    <!-- <?php echo $randomFact[shuffle($randomFact)];            ?> -->


    <!-- // shufflar ett fakta varje gång sidan laddas. Men jag vill att
// den skall shuffla när man trycker på knappen. -->

    <!-- 
function getQuote($tacosToEnjoy)
{
    if ([$tacos]['title'] === 'SPICY TACO') {
        return 'LOOO-HOOO-ZUH-HER!';
    }

    if ([$tacos]['title'] === 'FISH-TACO') {
        return 'You\'re a weird guy, Ace. A weird guy.';
    }
} -->
    <!-- 
vill ha en funktion som IF title på tacon är SPICY TACO echo typ "enjoy this Spicy Taco". hade varit bra 
att få in en funktion då som kände av vilken taco det var och skrev ut "enjoy this XX" med hjälp av funktionen.

function enjoy($theTaco)
{
    return "Enjoy the $theTaco";
}


ska man använda en array? 

$tacosToEnjoy = [
    'SPICY ASIAN',
    'PINEAPPLE-AVOCADO',
    'TACO-PARMESAN',
    'FISH-TACO',
]; -->