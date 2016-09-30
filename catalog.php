<?php

include("inc/data.php");
include("inc/functions.php");

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

	   <h1><?php if($section != null){
        echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
     }
      echo $pageTitle; ?></h1>

        <ul class="items">
            <?php
            $categories = array_category($catalog,$section); // selects random 4 keys from var $catalog	catalog-random-id
            foreach(  $categories as $id){ // loop som går igenom array och skriver ner varje element
              echo get_item_html($id,$catalog[$id]);
              // function For the parameters, we'll want to pass in the item ID, and the interior array for the single item. You can include multiple parameters for a function by separating them with a comma. In this new function, we'll want to build a string with the HTML needed to display the item in our list view.
            }
            ?>

        </ul>

</div>


<?php include('inc/footer.php'); ?>
