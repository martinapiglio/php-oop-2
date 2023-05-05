<?php

    require_once './Models/Product.php';
    require_once './Models/Products/Food.php';
    require_once './Models/Products/Toy.php';
    require_once './Models/Products/Medicine.php';

    $categories = [
        new Category("dog", "fa-dog"),
        new Category("cat", "fa-cat"),
    ];

    $royalCaninPuppy = new Food('Royal Canin Puppy', 'https://picsum.photos/170/110', 'Royal Canin', 'Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', $categories[0], 5.11, 'Croquettes', 20);
    $purinaProPlan = new Food('Purina Pro Plan', 'https://picsum.photos/170/110', 'Purina', 'Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', $categories[0], 6.34, 'Wet', 30);
    $ghiottonerie = new Food('Le Ghiottonerie', 'https://picsum.photos/170/110', 'Felix', 'Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', $categories[1], 4.95, 'Croquettes', 50);
    $nextCatNatural = new Food('Next Cat Natural', 'https://picsum.photos/170/110', 'Next', 'Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', $categories[1], 5.99, 'Wet', 10);

    $ball = new Toy('Ball', 'https://picsum.photos/170/110', 'Smilla', 'Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', $categories[0], 5.18, 'Red', 'Plastic');
    $bone = new Toy('Bone', 'https://picsum.photos/170/110', 'Barkoo', 'Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', $categories[0], 3.95, 'White', 'Syntetic Beef');
    $skein = new Toy('Skein', 'https://picsum.photos/170/110', 'Schesir', 'Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', $categories[1], 6.10, 'Blue', 'Wool');
    $scratcher = new Toy('Scratcher', 'https://picsum.photos/170/110', 'Gourmet', 'Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', $categories[1], 10.25, 'Beige', 'Wicker');

    $softGras = new Medicine('Soft Gras', 'https://picsum.photos/170/110', 'Purina', 'Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', $categories[1], 10.50, 'Catnip', false, 20);
    $frontline = new Medicine('Frontline', 'https://picsum.photos/170/110', 'eFarma', 'Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur.', $categories[0], 9.50, 'Flea repellent', true, 15);

    $products = [
        $royalCaninPuppy,
        $purinaProPlan,
        $ghiottonerie,
        $nextCatNatural,
        $ball,
        $bone,
        $skein,
        $scratcher,
        $softGras,
        $frontline
    ];

    // page shows error message id 10<discount<50
    try {
        $products[9]->setDiscount(60);    
    } catch (Exception $e){
        echo $e;
        // echo $e->getMessage();   to get only the text message
    };

?>