<?php 

require_once('config.inc.php'); 
require_once('lab14-db-functions.inc.php'); 
require_once('lab14-ex11-helpers.inc.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 14</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet"> 
  </head>
<body>
<main class="ui container">
      <div class="ui secondary segment">
         <h1>List of Links</h1>
      </div>
      
      <div class="ui segment">  
         <div class="ui six doubling cards">
            <?php outputGenres(); ?>  
         </div>
      </div>            
</main>




</body>
</html>