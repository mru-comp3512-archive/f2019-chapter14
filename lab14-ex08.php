<?php 

require_once('config.inc.php'); 
try {
   $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
   die( $e->getMessage() );
}
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
      <h1>User Input</h1>
      <form method="get" action="<?=$_SERVER['REQUEST_URI']?>">
         Gallery: 
         <select name="gallery">
            <option value="0">Select a gallery</option>
            
            <?php
   
            $sql = 'select * from Galleries order by GalleryName';
            $result = $pdo->query($sql);
            while ($row = $result->fetch()) {         
               echo '<option value="' . $row['GalleryID'] . '"';
               if (isset($_GET['gallery']) && $row['GalleryID'] == $_GET['gallery']) 
                  echo ' selected ';
               echo '>';
               echo $row['GalleryName'];
               echo ' (' . $row['GalleryCity'] . ')';
               echo '</option>';
             }
   
            ?>
         </select>
         <input class="ui button" type="submit" value="Submit">
      </form>
   </div>

<div class="ui segment">  
   <div class="ui six cards">
   
      <?php
         // only display painting cards if one has been selected
  
         ?>
              <div class="card">
                  <div class="image">
                     <img src="images/art/works/square-medium/.jpg" 
                        title="" alt="">
                  </div> 
                  <div class="extra">
                      
                  </div>
               </div> <!-- end class=card-->
         <?php          
 
         ?>   
      </div> <!-- end class=four cards-->
   </div>  <!-- end class=segment-->
</main>
<?php
   // close the database connection
   $pdo = null;
?>
</body>
</html>