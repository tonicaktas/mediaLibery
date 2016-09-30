<?php
function get_item_html($id,$item){
  $output = "<li><a href='#'><img src='"
   . $item["img"] . "' alt='"
   . $item["title"] . "' />"
   . "<p>View Details</p>"
   . "</a></li>";
   return $output;
}

function array_category($catalog,$category){ // array och vad jag vill ha return
  
  $output = array();

  foreach ($catalog as $id => $item){
    if($category == null OR strtolower($category) == strtolower($item["category"])){// kollar om $item matchar $category parameter
        $sort = $item["title"]; // sorterar
        $sort = ltrim($sort, "The " ); // tar bort för sortering
        $sort = ltrim($sort, "A " );
        $sort = ltrim($sort, "And " );
        $output[$id] = $sort; // om loopen hittar rätt så lägger den till id till$item som den hittar
    }
  }
  asort($output);
  return array_keys($output);
}
