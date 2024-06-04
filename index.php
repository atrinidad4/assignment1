<?php

/*******w******** 
    
    Name: Alyssa Trinidad
    Date: 2024-05-20
    Description: 

****************/

$config = [

    'Alyssa Gallery' => 'Alyssa Gallery',
 
    'alyssa_categories' => ['Japan','CherryBlossom','Ocean','City', 'Beach', 'Aesthetic'],
 
    'local_images' => [
        'japan.jpg' => ['photographer' => 'Nicole Geri', 'unsplash_url' => 'https://unsplash.com/@nicolegeri'],
        'cherryblossom.jpg' => ['photographer' => 'Sung Jin Cho', 'unsplash_url' => 'https://unsplash.com/@mbuff'],
        'ocean.jpg' => ['photographer' => 'Vikas Gurjar', 'unsplash_url' => 'https://unsplash.com/@vikasgurjar'],
        'city.jpg' => ['photographer' => 'Luke Miller', 'unsplash_url' => 'https://unsplash.com/@bylukemiller'],
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title><?="{$config['Alyssa Gallery']}";?></title>
</head>
<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->
    <?php
 
echo "<h1>{$config['Alyssa Gallery']}</h1>";
    ?>

    <div id ="gallery">
    <?php
// Displaying random Unsplash image for each category in a loop.
// Created a config file to call this array then stored it into a "category" variable
// retrieved the $i variable from the array and assigning it to the alyssa_categories variable.
// displaying the "category" in an h2 tag which will display the value of $category.

    for ($i = 0; $i < count($config['alyssa_categories']); $i++) {
        $category = $config['alyssa_categories'][$i];
        echo "<h2>$category</h2>";

// Display random Unsplash images for each category
echo "<img src='https://source.unsplash.com/300x200/?$category' alt='$category image'>";
}
    ?>
</div>

    <div id ="large-images">
    <?php
// Display "Large Images" section in an h1 tag, creating another config file calling this array.
echo "<h1>" . count($config['local_images']) . " Large Images </h1>";

// Display local images in a foreach loop, and once again creating a config file to call the local images, then storing
// into a variable called image, for each iteration the key is stored in the variable images then the value is stored in details. 
// then displaying the detail config which is array that stores the splash photographers url.

foreach ($config['local_images'] as $image => $details) {
    echo "<div>";
    echo "<img src='images/$image' alt='Local image'><br>";
    echo "<a href='{$details['unsplash_url']}'>{$details['photographer']}</a>";
    echo "</div>";
}
?>
</div>
</body>
</html>