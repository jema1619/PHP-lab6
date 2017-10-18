<!DOCTYPE html>
<html>
    <head>
        <link href="index.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,300,300i,400,700,700i,900,900i" rel="stylesheet">
    </head>
    <body>
        <?php 
            include("config.php");
            include("header.php");
            ?>
        <main>

<div id="pagecontainer">
            <h3>Contact</h3>
           
			</div>
          
		<form  class="contactform">
			<fieldset>
	         
	         	<label>Name:</label>
		        <input type="text" name="name">
		        <label>E-mail:</label>
		        <input type="email" name="email" >
			<label>Message</label>
		        <textarea></textarea>
		        <input class="submit" type="submit" value="Send" align="center">
	        </fieldset> 
	    </form>

       
                </main>
<?php include("footer.php");?>
    </body>
</html>