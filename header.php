<?php?>


        <header>
            <img id="logoimg" src="img/logo.png">
                <nav>
                    <ul>
                        <li>
                            <a class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : NULL ?>" href="index.php">Home</a>

                        </li>
			<li>
                            <a class="<?php echo ($current_page == 'AboutUs.php') ? 'active' : NULL ?>" href="AboutUs.php">About us</a>
                        </li>
                        <li>
                            <a class="<?php echo ($current_page == 'BrowseBooks.php') ? 'active' : NULL ?>" href="BrowseBooks.php">Brows Books</a>
                        </li>
			<li>
                            <a class="<?php echo ($current_page == 'MyBooks.php') ? 'active' : NULL ?>" href="MyBooks.php">My Books</a>
                        </li>
                        <li>
                            <a class="<?php echo ($current_page == 'contact.php') ? 'active' : NULL ?>" href="contact.php">Contact</a>
                        </li>
                        <li>
                            <a class="<?php echo ($current_page == 'gallery.php') ? 'active' : NULL ?>" href="gallery.php">Gallery</a>
                        </li>
                    </ul>
                </nav>
        </header>
   

     <?php?>