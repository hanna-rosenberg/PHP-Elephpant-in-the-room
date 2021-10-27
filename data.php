<?php

declare(strict_types=1);


// Array containing title, ingredients, directions, images and rating. Main-content of the page. 
$tacos = [
    [
        'title' => 'SPICY ASIAN',
        'ingredients' => [
            '3 tablespoons reduced sodium soy sauce!',
            '2 tablespoons freshly squeezed lime juice',
            '2 tablespoons canola oil, divided',
            '3 cloves garlic, minced',
            '2 teaspoons chili powder',
            '1 teaspoon ground cumin',
            '1 teaspoon dried oregano',
            '1 pd skirt steak, cut into 1-inch pieces',
            '12 mini flour tortillas, warmed',
            '3/4 cup diced red onion',
            '1/2 cup chopped fresh cilantro leaves',
            '1 lime, cut into wedges',
        ],
        'directions' => [
            'In a medium bowl, combine soy sauce, lime juice, 1 tablespoon canola oil, garlic, chili powder, cumin and oregano.',
            'In a gallon size Ziploc bag or large bowl, combine soy sauce mixture and steak; marinate for at least 1 hour up to 4 hours, turning the bag occasionally.',
            'Heat remaining 1 tablespoon canola oil in a large skillet over medium high heat.',
            'Add steak and marinade, and cook, stirring often, until steak has browned and marinade has reduced, about 5-6 minutes, or until desired doneness.
        Serve steak in tortillas, topped with onion, cilantro and lime.'
        ],
        'image' => '/images/Tacoimg2.jpeg',
        'rating' => 9.2,
        'date' => "2021-09-30"

    ],

    [
        'title' => 'PINEAPPLE-AVOCADO',
        'ingredients' => [
            '3 cups cauliflower florets',
            '2 cups Southern Grove Walnuts, whole',
            '2 individual Pueblo Lindo Chipotles in adobo sauce',
            '1 tablespoon Stonemill Chili Powder',
            '1 teaspoon Stonemill Ground Cumin',
            '1 teaspoon salt',
            '1 pineapple, cored and diced',
            '2 jalapeños, ribs and seeds removed, minced',
            '1 bunch of cilantro, chopped',
            '1/2 red onion, diced',
            '1 teaspoon salt',
            'juice of 2 limes',
            'Avocados',
            'Purple cabbage',
            'Tortillas',
        ],

        'directions' => [
            'Preheat oven to 375 degrees.',
            'Pulse everything in a food processor until evenly ground, similar to the texture of ground meat. Transfer to a greased or parchment-lined baking sheet. Bake for 30 minutes, stirring halfway to prevent browning.',
            'Mix the salsa!',
            'Mash your avocados with some garlic powder, salt, and lime juice. Toss your shredded cabbage with lime juice, olive oil, and salt. Char the tortillas over an open gas burner.',
            'Layer avocado mash, walnut chorizo, pineapple salsa, and slaw into a soft, warm, charred tortilla. Be amazed.'
        ],
        'image' => '/images/Tacoimg3.jpeg',
        'rating' => 8.4,
        'date' => "2021-10-02"
    ],

    [
        'title' => 'TACO-PARMESAN',
        'ingredients' => [
            '1 handful cilantro',
            '5 garlic cloves',
            'Juice of 2 limes',
            'Juice of 1 orange',
            '2 tablespoons vinegar',
            '2 tablespoons Worcestershire',
            '1/2 cup olive oil',
            '1 tablespoon brown sugar',
            '1 tablespoon cumin',
            '1 tablespoon salt',
            '1 teaspoon pepper',
            '2–3 pounds flank steak',
            'Corn or flour tortillas',
            'Red onion',
        ],


        'directions' => [
            'Blend marinade ingredients together until smooth. Place the steak in a large bowl or dish, cover with the marinade, and let rest in the fridge for 1-8 hours (4 hours is pretty ideal)',
            'Prep your other toppings!',
            'Preheat grill to medium heat. Remove meat from marinade and discard remaining marinade. Sprinkle with salt and pepper on both sides. Place steak on grill (it should sizzle!) and grill for 7-9 minutes per side, flipping just once. When a meat thermometer reads 140-145, remove from grill and cover in foil. Let it rest for 5 minutes and boom: perfect medium rare. Grill to 155/160 for medium.',
        ],
        'image' => '/images/Tacoimg4.jpeg',
        'rating' => 2.3,
        'date' => "2021-10-03"
    ],

    [
        'title' => 'FISH-TACO',
        'ingredients' => [
            '1 large jalapeño',
            '1 cup cilantro leaves',
            '1/4 cup green onions',
            '1/4 cup oil',
            '1/4 cup Greek yogurt',
            '1/4 cup water',
            '1/2 avocado',
            '1/2 teaspoon salt',
            '2 lbs. firm white fish like cod',
            '1 cup flour (see notes)',
            '1/4 cup + 2 tablespoons cornmeal',
            '1/4 cup cornstarch',
            '1 teaspoon chili powder or spicy seasoning',
            '1 teaspoon baking powder',
            '1/2 teaspoon salt',
            '1 cup light beer, such as Corona',
            '1 egg, beaten',
            'Vegetable oil for frying',
            '12 flour or corn tortillas',
            'Cilantro for topping',
            'Cotija cheese for topping',
        ],
        'directions' => [
            'Puree all the jalapeño sauce ingredients in a food processor until your desired consistency is reached.',
            'I sometimes add a little more oil or water at the end to make the sauce less gloppy and more drizzle-able.',
            'Pat the fish dry with paper towels and cut into 2-3 inch pieces.',
            'Put 1/2 cup flour in a shallow bowl and set aside. In a separate bowl, whisk 1/2 cup flour, cornmeal, cornstarch, chili powder, baking powder, and salt.',
            'Add the beer and the beaten egg; stir until combined to form the batter.',
            'Pour enough oil in a frying pan so that the fish will be partially submerged while frying. ',
            'Heat the oil until a drip of water sizzles across the top. Dip each piece of fish in the plain flour, then the batter, then transfer to the hot oil. Fry on each side for 3-5 minutes or until golden brown and crispy. Remove from the frying pan and transfer to a plate lined with paper towels to drain excess oil. Sprinkle with salt while still hot; let cool slightly.',
            'Arrange your tacos with a few pieces of fish, cilantro, Cotija cheese, and jalapeño sauce. Yummy!',
        ],
        'image' => '/images/Tacoimg5.jpeg',
        'rating' => 9.8,
        'date' => "2021-10-05"
    ],
];

// Array containing random facts that can be shown when pressing a button.
$randomFact = [
    'There is a National Taco Day',
    'The Word Taco Means Light Lunch',
    'Tacos Have Been Around for Millennia',
    'You Cant Get Tacos at Lunchtime in Mexico',
    'Americans ate over 4.5 billion tacos last year!',
    'The first taco party in history was held in 1520'
];


// Function that easely can change every year when new numbers are given. 
function amount(string $quantity, int $year, int $distance): string
{
    return "
    We give you four new taco-recipes every week. We love tacos almost as much as the Americans.
    Americans ate $quantity tacos $year. That is $distance miles of tacos!!";
}

$amountOfTacos = amount('4.5 billion', 2020, 490000);


// Function that shows a different string depending on what day it is. 
function whatDay(): string
{

    if (date('w') == 0) {
        return "It's taco-sunday!";
    } else if (date('w') == 1) {
        return "It's taco-monday!";
    } else if (date('w') == 2) {
        return "It's taco-tuesday!";
    } else if (date('w') == 3) {
        return "It's taco-wednesday!";
    } else if (date('w') == 4) {
        return "It's taco-thursday!";
    } else if (date('w') == 5) {
        return "It's TACO-FRIDAY!";
    } else if (date('w') == 6) {
        return "It's taco-saturday!";
    }
}

// Sorts recepiets by date.
function sortByDate($recepiets1, $recepiets2): int
{
    if (strtotime($recepiets1['date']) < strtotime($recepiets2['date']))
        return  1;
    else if (strtotime($recepiets1['date']) > strtotime($recepiets2['date']))
        return -1;
    else
        return 0;
}


// Returns string depending on grade.
function rating($grade): string
{
    if ($grade >= 9) {
        return "- This taco is a FAVORITE!";
    } elseif ($grade > 7 && $grade < 9) {
        return "- This is a good one!";
    } elseif ($grade < 7 && $grade > 4) {
        return "- This taco is allright!";
    } else {
        return "- This taco is BAD!!";
    }
}
