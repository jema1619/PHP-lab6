<html>
   
    <body>
          <?php 
          include("../config.php");
          include("header.php");
       
          
          ?>
        <main>
            <div class="imgcontainer">
                <img id="mainimg" src="../Img/mainimg1.jpg">
                <h1>Book Club</h1>            
            </div>
            <div id="pagecontainer">
                
            <h2>Welcome to the book club!</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <FORM action="index.php" method="GET">
                <INPUT type="submit" name="Count" value="Count" class="submit">
                <?php echo "Cookie count is $count";?>
            </FORM>
            
            <FORM action="index.php" method="GET">
                <INPUT type="submit" name="Count" value="Count" class="submit">
                
            </FORM>
			
			<h2>Comming soon...</h2>
            <ul class="grid">
                <li>
                    <div class="inner">
                     <div class="sixboximg"> </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        </p>
                    </div>
                </li>
                <li>
                    <div class="inner">
					<div class="sixboximg"> </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="inner">
                     <div class="sixboximg"> </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        </p>
                    </div>
                </li>
                <li>
                    <div class="inner">
                     <div class="sixboximg"> </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <figure>
             <h2>How we started</h2>
                <article>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam iaculis ex lobortis metus aliquam, eget vestibulum nunc pretium. Ut in mauris mauris. Mauris ut molestie dolor. Morbi sollicitudin, arcu eu efficitur fermentum, justo est luctus mi, at elementum elit leo non est. Curabitur vitae augue molestie, tincidunt leo eget, porta erat. Ut pharetra massa nec elit iaculis sollicitudin. Proin sagittis nisi ac justo ornare, ac feugiat erat laoreet. Duis aliquam sagittis magna, et varius lacus blandit a.
                </article>
        
            </figure>
        </main>
		<?php include("../footer.php");?>

    </body>
</html>