<?php
   // Include and initialize DB class
   require_once 'DB.class.php';
   $db = new DB();
   
   // images data
   $condition = array('where' => array('status' => 1));
   $images = $db->getRows('images', $condition);
   ?>

<!DOCTYPE <!DOCTYPE html>
<html>

<head> 
   <title>Къща за гости в Гърция</title>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <link rel="icon" href="iconBar.jfif" type="image/x-icon">

   <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">

   <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

   <script src="js/jquery.min.js"></script>

   <meta name="viewport" content="width=device-width, initial-scale=1">.

   <link rel="stylesheet" type="text/css" media="screen" href="layout.css" />
   
   <script src="fancybox/jquery.fancybox.js"></script>

   <script>
      $("[data-fancybox]").fancybox();
   </script>
</head>

<body>
   <div class="header">
      <img src="imagess/logoE.png">
      <h1>Къща за гости - Гърция </h1>

   </div>
   <div class="topnav">
      <a href="home.html" class="button">Home</a>
      <a href="guestHouse.html" class="button">Places Around</a>
      <a href="gallery.php" class="button">Gallery</a>
      <a href="price.html" class="button">Price</a>
      <a href="contacts.html" class="button">Contacts</a>
   </div>
   <!-- Content 
 
   <div class="gallery-1">
      <div class="gallery-2">
         <img src="https://s-ec.bstatic.com/images/hotel/max1024x768/940/94028077.jpg" alt="No photo in gallery">
      </div>
      <div class="gallery-2">
         <img
            src="http://homeworlddesign.com/wp-content/uploads/2016/01/Backyard-pavilion-for-a-Beach-House-Chile-1.jpg"
            alt="No photo in gallery">
      </div>
      <div class="gallery-2">
         <img src="http://aff.bstatic.com/images/hotel/840x460/121/121636024.jpg" alt="No photo in gallery">
      </div>
      <div class="gallery-2">
         <img src="http://www.lustermagazine.com/wp-content/uploads/2016/06/zemi.jpg" alt="No photo in gallery">
      </div>
      <div class="gallery-2">
         <img src="https://i.pinimg.com/originals/a1/65/ea/a165ea964af01f82ca1d0deca315c5e1.jpg"
            alt="No photo in gallery">
      </div>
      <div class="gallery-2">
         <img src="https://s-ec.bstatic.com/images/hotel/max1280x900/940/94028105.jpg" alt="No photo in gallery">
      </div>
      <div class="gallery-2">
         <img src="https://s-ec.bstatic.com/images/hotel/max1280x900/940/94028111.jpg" alt="No photo in gallery">
      </div>
      <div class="gallery-2">
         <img src="https://s-ec.bstatic.com/images/hotel/max1280x900/940/94028112.jpg" alt="No photo in gallery">
      </div>
      <div class="gallery-2">
         <img src="https://t-ec.bstatic.com/images/hotel/max1280x900/940/94028141.jpg" alt="No photo in gallery">
      </div>
      <div class="gallery-2">
         <img src="https://s-ec.bstatic.com/images/hotel/max1280x900/940/94028155.jpg" alt="No photo in gallery">
      </div>
   </div> -->

  <div class="column-1">
      <div class="container">
         <h1>My Gallery</h1>
         <hr>
         <div class="head">
            <a href="manage.php" class="glink">Manage</a>
         </div>
         <div class="gallery">
            <?php
        if(!empty($images)){
            foreach($images as $row){
				$uploadDir = 'uploads/images/';
                $imageURL = $uploadDir.$row["file_name"];
        ?>
            <div class="col-lg-3">
               <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["title"]; ?>">
                  <img src="<?php echo $imageURL; ?>" alt="" />
                  <p><?php echo $row["title"]; ?></p>
               </a>
            </div>
            <?php }
        } ?>
         </div>
      </div>
  </div>
   <!-- End of content -->

   <div class="footer">
      <hr class="hr">
      <p>&copy; 2019 - GEM</p>
   </div>

</body>

</html>