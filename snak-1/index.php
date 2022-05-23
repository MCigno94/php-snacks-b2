<!-- 
## Snack 1

Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ

Ad ogni refresh della pagina visualizzare una pubblicità a schermo, tenendo conto che possono essere sorteggiate solo quelle is_active true.

-->

<?php

$ads = [
    [
        'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
        'link' => 'https://www.google.com',
        'is_active' => true,
    ],
    [
        'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
        'link' => 'https://www.facebook.com',
        'is_active' => true,
    ],
    [
        'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
        'link' => 'https://codepen.io',
        'is_active' => false,
    ],
    [
        'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
        'link' => 'https://laravel.com',
        'is_active' => false,
    ],
    [
        'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
        'link' => 'https://www.php.net',
        'is_active' => true,
    ],

];

$random_numbers = [];
//var_dump(count($random_numbers));
var_dump(count($ads));
foreach ($ads as $key => $value) {
    var_dump($key);
    //var_dump($value['is_active']);
    $i = 0;
    while ($i < count($ads)) {
        if($value['is_active'] === true){
            $number = rand(0, count($ads)-1);
            //var_dump($value['is_active']);
        }
        $i++;
    } 
}

var_dump($number);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .invisible {
        display: none;
    }
</style>
<body>

    <?php foreach ($ads as $key => $value) : ?>
        <section class=" <?php echo $key == $number ? '' : 'invisible' ?>">
            <div class=" <?php echo $value['is_active'] == false ? 'invisible' : '' ?>">
                <img src="<?php echo $value['image_path']?>" alt="">
                <a href="#"> <?php echo $value['link']?> </a>
            </div>
        </section>
    <?php endforeach; ?>

    
</body>
</html>