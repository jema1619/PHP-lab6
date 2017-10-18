<?php
 include ('loginheader.php');
?>
 <head>
        <link href="../index.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,300,300i,400,700,700i,900,900i" rel="stylesheet">
    </head>
<header>
            <img id="logoimg" src="../img/logo.png">
                <nav>
                    <ul>
                        <li>
                            <a class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : NULL ?>" href="index.php">Home</a>

                        </li>
			<li>
                            <a class="<?php echo ($current_page == 'Addbook.php') ? 'active' : NULL ?>" href="addbook.php">Add book</a>
                        </li>
                        <li>
                            <a class="<?php echo ($current_page == 'listbooks.php') ? 'active' : NULL ?>" href="listbooks.php">Delete book</a>
                        </li>
                        <li>
                            <a class="<?php echo ($current_page == 'gallery.php') ? 'active' : NULL ?>" href="gallery.php">Gallery</a>
                        </li>
			<li>
                            <a class="<?php echo ($current_page == 'logout.php') ? 'active' : NULL ?>" href="logout.php">Log out</a>
                        </li>
                    </ul>
                </nav>
        </header>
   
