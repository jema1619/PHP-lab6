 <head>
        <link href="index.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,300,300i,400,700,700i,900,900i" rel="stylesheet">
    </head>
    
<?php
include ('header.php');
include ('config.php');

if (isset($_FILES['upload'])){
    
    $allowedextensions = array('jpg', 'jpeg', 'gif', 'png');
    
    $extension = strtolower(substr($_FILES['upload']['name'], strrpos($_FILES['upload']['name'], '.') + 1));
            
    echo $extension;
    
    $error = array();
    
    if(in_array($extension, $allowedextensions) === false) {
        
        $error[] = "Extension is not allowed";
    }
    
    if($_FILES['upload']['size']>10000000) {
        $error[] = "The file is to big, MAX 10MB";
    }
    
    if(empty($error)){
        move_uploaded_file($_FILES['upload']['tmp_name'], "imgGallery/{$_FILES ['upload']['name']}");
        
    }
    
   
    
}
    



?>
           
           <body>
                <h3>Gallery</h3>
               <div>
                   <?php 
                   
                    if (isset($error)){
                       if (empty($error)){
                           
                        echo '<a href="imgGallery/'. $_FILES['upload']['name'].'">Check file';
                         if (is_uploaded_file($_FILES['upload']['tmp_name'])) {
  
}
                           
                       } else {
                            foreach ($error as $err){
                               echo $err;
                           }
                           
                       }
                   }
                   
                   ?>
               </div>
               
               <!-- This is our form, important to use "enctype="multipart/form-data"
               
               -->
               <div>
                   
                   <form action="" method="POST" enctype="multipart/form-data">
                       <input type="file" name="upload" /></br>
                       <input  type="submit" value="submit" />
                   </form>                   
               </div>
           </body>
    
 
    

<?php
 
 
            $folder = "imgGallery/";
            $images = glob($folder."*");
            usort($images, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));
            foreach($images as $image) {

                echo '<img src="'.$image.'" width="320" height="200" />';
            }
        
         
        include ('footer.php');
    ?>
    
   