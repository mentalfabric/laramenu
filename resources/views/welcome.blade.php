<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>



// This will drop your old menu table
Schema::drop('menu');

// This will create your menu table from scratch
Schema::create('menu', function ($table) {
$table->increments('id');
$table->string('type');
$table->string('title');
$table->string('img');
$table->integer('cat_id');
$table->integer('subcat_id');
});

// Batch insert on menu
DB::table('categories')->insert(array(
array('title' => '2 For 20', 'image'=>'2420.jpg'),
array('title' => 'Better for You', 'image'=>'better4u.jpg'),
array('title' => 'Beverages', 'image'=>'beverages.jpg'),
array('title' => 'Handcrafted Burgers', 'image'=>'handcraftedHamburger.jpg'),
array('title' => 'Desserts', 'image'=>'desserts.jpg'),
array('title' => 'Main Entrees', 'image'=>'entrees.jpg'),
array('title' => 'Lunch Combos', 'image'=>'LunchCombos.jpg'),
array('title' => 'Fresh Salads', 'image'=>'salads.jpg'),
array('title' => 'Pub Diet', 'image'=>'pubDiet.jpg'),
array('title' => 'New Handhelds', 'image'=>'handHeld.jpg'),
array('title' => 'Kids', 'image'=>'kids.jpg'),
array('title' => 'New Apps & Bar Snacks', 'image'=>'apps.jpg')));

DB::table('subcategories')->insert(array(
array('title' => 'Appetizers', 'image'=>'apps.jpg', 'cat_id'=>1),
array('title' => 'Entrees', 'image'=>'chicken_penne.jpg', 'cat_id'=>1),
array('title' => 'B4U', 'image'=>'/img/better4u.jpg')
array('title' => 'Alcohol', 'image'=>'wine_toast.jpg', 'cat_id'=>3),
array('title' => 'Refreshments', 'image'=>'Beers.jpg', 'cat_id'=>3),
array('title' => 'Steaks', 'image'=>'steak.jpg', 'cat_id'=>6),
array('title' => 'Ribs', 'image'=>'riblets.jpg', 'cat_id'=>6),
array('title' => 'Chicken', 'image'=>'brewhouse_chicken.jpg', 'cat_id'=>6)));


DB::table('products')->instert(array(
array ('title' => 'Mozzarella Sticks', 'img' => 'mozzeralla_sticks.jpg', 'cat_id' => '1', 'subcat_id' => '13'),
array ('title' => 'Onion Rings', 'img' => 'onion_rings.jpg', 'cat_id' => '1', 'subcat_id' => '13'),
array ('title' => 'Two Side Salads', 'img' => 'caesar_salad.jpg', 'cat_id' => '1', 'subcat_id' => '13'),
array ('title' => 'Three-Cheese Chicken Penne', 'img' => 'chicken_penne.jpg', 'cat_id' => '1', 'subcat_id' => '14'),
array ('title' => 'Chicken Tenders Basket', 'img' => 'chicken_tend.jpg', 'cat_id' => '1', 'subcat_id' => '14'),
array ('title' => 'The American Standard', 'img' => 'allinburger.jpg', 'cat_id' => '1', 'subcat_id' => '14'),
array('title' => 'Smarter Choice', 'img'=>'bourbon_chicken.jpg', 'cat_id'=>2, 'subcat_id'=>''),
array('title' => 'Hot Shot Whiskey Chicken', 'img'=>'bourbon_chicken.jpg', 'cat_id'=>2, 'subcat_id'=>''),
array('title' => 'Savory Cedar Salmon', 'img'=>'salmon.jpg', 'cat_id'=>2, 'subcat_id'=>''),
array('title' => 'Shrimp Wonton Stir-Fry', 'img'=>'shrimpWonton.jpg', 'cat_id'=>2, 'subcat_id'=>''),
array('title' => 'Beers', 'img'=>'Beers.jpg', 'cat_id'=>3, 'subcat_id'=>'15'),
array('title' => 'Wines', 'img'=>'wines.jpg', 'cat_id'=>3, 'subcat_id'=>'15'),
array('title' => 'Tea', 'img'=>'tea.jpg', 'cat_id'=>3, 'subcat_id'=>'15'),
array ('title' => 'Lemon', 'img' => 'lemonades.jpg', 'cat_id' => '3', 'subcat_id' => '16'),
array ('title' => 'Limeaid', 'img' => 'limeades.jpg', 'cat_id' => '3', 'subcat_id' => '16'),
array ('title' => 'Mushroom Swiss', 'img' => 'burger_mushroomswiss.jpg', 'cat_id' => '4', 'subcat_id' => ''),
array ('title' => 'The American Standard', 'img' => 'burger_american.jpg', 'cat_id' => '4', 'subcat_id' => ''),
array ('title' => 'Triple Bacon Burger', 'img' => 'burger_triplebacon.jpg', 'cat_id' => '4', 'subcat_id' => ''),
array ('title' => 'Triple Chocolate Meltdown', 'img' => 'triple_choc.jpg', 'cat_id' => '5', 'subcat_id' => ''),
array ('title' => 'Butter Pecan Blondie', 'img' => 'maple_blondie.jpg', 'cat_id' => '5', 'subcat_id' => ''),
array ('title' => 'Apple Chimi-Cheesecake', 'img' => 'apple_cheesecake.jpg', 'cat_id' => '5', 'subcat_id' => ''),
array ('title' => '7oz Grilled Onion Sirloin with Stout Gravy', 'img' => 'grilled_onion_sirloin.jpg', 'cat_id' => '6', 'subcat_id' => '17'),
array ('title' => '9oz House Sirloin', 'img' => 'sirloin.jpg', 'cat_id' => '6', 'subcat_id' => '17'),
array ('title' => 'Pepper-Crusted Sirloin & Whole Grains', 'img' => 'pepper_sirloin.jpg', 'cat_id' => '6', 'subcat_id' => '17'),
array ('title' => 'Applebees Riblets', 'img' => 'riblets.jpg', 'cat_id' => '6', 'subcat_id' => '18'),
array ('title' => 'Double-Glazed Baby Back Ribs', 'img' => 'ribs.jpg', 'cat_id' => '6', 'subcat_id' => '18'),
array ('title' => 'Crispy Chicken Brewhouse', 'img' => 'brewhouse_chicken.jpg', 'cat_id' => '6', 'subcat_id' => '19'),
array ('title' => 'Burbon Street Chicken & Shrimp', 'img' => 'bourbon_chicken.jpg', 'cat_id' => '6', 'subcat_id' => '19'),
array ('title' => 'Chicken Tenders Platter', 'img' => 'chicken_tenders.jpg', 'cat_id' => '6', 'subcat_id' => '19'),
array ('title' => 'Tomato Basil-Soup', 'img' => 'salmon.jpg', 'cat_id' => '7', 'subcat_id' => ''),
array ('title' => 'House Salad', 'img' => 'oriental_salad.jpg', 'cat_id' => '7', 'subcat_id' => ''),
array ('title' => 'Shrimp-Scampi', 'img' => 'shrimp.jpg', 'cat_id' => '7', 'subcat_id' => ''),
array ('title' => 'Thai Shrimp', 'img' => 'ThaiShrimp.jpg', 'cat_id' => '8', 'subcat_id' => ''),
array ('title' => 'Fiesta-Chicken', 'img'=> 'FiestaChicken.jpg', 'cat_id' => '8', 'subcat_id' => ''),
array ('title' => 'Ceasar Salad', 'img' => 'ChickenCeasar.jpg', 'cat_id' => '8', 'subcat_id' => ''),
array ('title' => 'Shrimp-Wonton', 'img' => 'ShrimpWonton.jpg', 'cat_id' => '9', 'subcat_id' => ''),
array ('title' => 'Sirloin-Stout', 'img' => 'SirloinStout.jpg', 'cat_id' => '9', 'subcat_id' => ''),
array ('title' => 'Cedar Grilled Lemon Chicken', 'img' => 'CedarChicken.jpg', 'cat_id' => '9', 'subcat_id' => ''),
array ('title' => 'Triple-Hog-Dare', 'img' => 'triple_hog_dare_ya.jpg', 'cat_id' => '10', 'subcat_id' => ''),
array ('title' => 'Kickin Turkey Stacker', 'img' => 'turkey_stacker.jpg', 'cat_id' => '10', 'subcat_id' => ''),
array ('title' => 'American BLT', 'img' => 'blt.jpg', 'cat_id' => '10', 'subcat_id' => ''),
array ('title' => 'Kid1', 'img' => 'smores.jpg', 'cat_id' => '11', 'subcat_id' => ''),
array ('title' => 'Kid2', 'img' => 'pepper_crusted_sirloin.jpg', 'cat_id' => '11', 'subcat_id' => ''),
array ('title' => 'Kid3', 'img' => 'lemon_chicken.jpg', 'cat_id' => '11', 'subcat_id' => ''),
array ('title' => 'Shrimp', 'img' => 'lemon_chicken.jpg', 'cat_id' => '12', 'subcat_id' => ''),
array ('title' => 'Meatballs', 'img' => 'lemon_chicken.jpg', 'cat_id' => '12', 'subcat_id' => ''),
array ('title' => 'Smores', 'img' => 'smores.jpg', 'cat_id' => '12', 'subcat_id' => '')));

