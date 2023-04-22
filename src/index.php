<?php

include('header.php');

$blogs = [
    ['mario party', 'mario', 'lorem', 30],
    ['mario kart', 'toad', 'lorem', 25],
    ['zelda hidden chest', 'link', 'lorem', 50]
];

$blogs2 = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
    ['title' => 'zeldas hidden chest', 'author' => 'link', 'content' => 'lorem', 'likes' => 50],

];

$blogs2[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];

?>

<body class="container mx-auto pt-5">
    <div class="">
        <?php
        echo '<h1 class="text-red-500 text-2xl font-bold">Hello World!</h1>'
        ?>
    </div>

</body>
<?php

include('footer.php')
?>