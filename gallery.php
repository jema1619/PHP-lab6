   <head>
        <link href="index.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,300,300i,400,700,700i,900,900i" rel="stylesheet">
    </head>

<?php
include ('config.php');
include ('header.php');
?>
    <body>
        <h3>Gallery</h3>
        <p>You must log in to be able to upload an image</p>
    
        <?php
        include ('SQLInjection.php');
 
 
            $folder = "imgGallery/";
            
            $folder = "imgGallery/";
            $images = glob($folder."*");
            usort($images, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));
            foreach($images as $image) {

                echo '<img src="'.$image.'" width="320" height="200" />';
            }
        
        ?>
    
<?php 

include ('footer.php')
?>
</body>