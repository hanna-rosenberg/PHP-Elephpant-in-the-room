<?php require __DIR__ . '/data.php'; ?>
<?php require __DIR__ . '/header.php'; ?>

<body>
    <header>
        <nav>
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </nav>
    </header>

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

            usort($tacos, "sortByDate");

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
                    echo rating($grade)
                    ?>

                </p>
                <p class="border">
                </p>
                <?php if (++$i === $numItems) : ?>

                    <div class="randomFact">

                        <p id="randomFactButton" class="button"></p>
                        <p id="fact">Press the taco for a random taco-fact!</p>

                        <script>
                            const fact = document.getElementById("fact");
                            const button = document.getElementById("randomFactButton");

                            const facts = [
                                'There is a National Taco Day',
                                'The Word Taco Means Light Lunch',
                                'Tacos Have Been Around for Millennia',
                                'You Cant Get Tacos at Lunchtime in Mexico',
                                'Americans ate over 4.5 billion tacos last year!',
                                'The first taco party in history was held in 1520'
                            ];

                            button.addEventListener("click", () => {
                                const randomElement = facts[Math.floor(Math.random() * facts.length)];
                                fact.innerHTML = randomElement;
                            })
                        </script>

                    </div>
                <?php endif; ?>

            <?php
            endforeach ?>

        </div>
    </div>

    <?php require __DIR__ . '/footer.php'; ?>


    <!-- Kvar: Skriv kommentarer i index.php. Kolla igenom CSS:en, kan något mer
    // tas bort? Är det bra uppdelning på CSS:en? Ändra stavningar, tex recepiets -->