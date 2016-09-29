<?php

$catalog = array ();
$catalog [101] =  "Braveheart";
$catalog [201] =  "Buster";
$catalog [301] =  "In Bruge";
$catalog [102] =  "Clean Code";


$pageTitle = "Full Catalog";
$section = null; // variabel som säger på vilken sida vi på. Med hjälp av den lägger jag underline på li

if(isset($_GET["cat"])) {

if ($_GET["cat"] == "books"){
    $pageTitle = "Books";
    $section = "books";
} else if ($_GET["cat"] == "movies"){
    $pageTitle = "Movies";
    $section = "movies";
} else if ($_GET["cat"] == "music"){
    $pageTitle = "Music";
    $section = "music";
  }
}




include('inc/header.php'); ?>

<div class="section catalog page">

  <div class="wrapper">
	   <h1><?php echo $pageTitle; ?></h1>
        <ul>
            <?php foreach($catalog as $item){
              echo "<li>" . $item . "</li>";
            }
            ?>

        </ul>

</div>


<?php include('inc/footer.php'); ?>
