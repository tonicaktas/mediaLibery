<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Personal Media Libary";
$section = null;

include('inc/header.php'); ?>

		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

								<ul class="items">
									<?php
									$random = array_category($catalog); // selects random 4 keys from var $catalog	catalog-random-id
									foreach($random as $id){ // loop som går igenom array och skriver ner varje element
										echo get_item_html($id,$catalog[$id]);
										// function For the parameters, we'll want to pass in the item ID, and the interior array for the single item. You can include multiple parameters for a function by separating them with a comma. In this new function, we'll want to build a string with the HTML needed to display the item in our list view.
									}
									?>
								</ul>

			</div>

		</div>


<?php include('inc/footer.php'); ?>
