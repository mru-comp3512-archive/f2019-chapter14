<?php

/*
  Return a row containing a single genre
*/
function getSingleGenre($id) {
    try {

    }
    catch (PDOException $e) {
       die( $e->getMessage() );
    }
}

/*
  Return a result set containing all the genres
*/
function getAllGenres() {
   try {

   }
   catch (PDOException $e) {
      die( $e->getMessage() );
   }    
}


/*
 Displays a list of genres
*/
function outputGenres() {
 
}


/*
 Displays a single genre
*/
function outputSingleGenre($genre) {
   echo '<div class="ui fluid card">';
      echo '<div class="ui fluid image">';
 
      echo '</div>';
      echo '<div class="extra">';
         echo '<h4>';
 
         echo '</h4>';
      echo '</div>';
   echo '</div>';
}

/* 
  Constructs a link given the genre id and a label (which could
  be a name or even an image tag
*/
function constructGenreLink($id, $label) {
   $link = '<a href="genre.php?id=' . $id . '">';
   $link .= $label;
   $link .= '</a>';
   return $link;
}
?>