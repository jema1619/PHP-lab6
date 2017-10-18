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

			  <div>
				<h3> My Books <h3>
			</div>
             
         <?php
# This is the mysqli version

$searchtitle = "";
$searchauthor = "";

if (isset($_POST) && !empty($_POST)) {
# Get data from form
    $searchtitle = trim($_POST['searchtitle']);
    $searchauthor = trim($_POST['searchauthor']);
}

//	if (!$searchtitle && !$searchauthor) {
//	  echo "You must specify either a title or an author";
//	  exit();
//	}

$searchtitle = addslashes($searchtitle);
$searchauthor = addslashes($searchauthor);

# Open the database
@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

# Build the query. Users are allowed to search on title, author, or both

$query = "select isbn, title, author, onloan from booktable where onloan='YES'";
if ($searchtitle && !$searchauthor) { // Title search only
    $query = $query . " and title like '%" . $searchtitle . "%'";
}
if (!$searchtitle && $searchauthor) { // Author search only
    $query = $query . " and author like '%" . $searchauthor . "%'";
}
if ($searchtitle && $searchauthor) { // Title and Author search
    $query = $query . " and title like '%" . $searchtitle . "%' and author like '%" . $searchauthor . "%'"; // unfinished
}


# Here's the query using bound result parameters
    // echo "we are now using bound result parameters <br/>";
   $stmt = $db->prepare($query);
   $stmt->bind_result($isbn, $title, $author, $onloan);
   $stmt->execute();
    
 //  $stmt2 = $db->prepare("update onloan set 0 where isbn like ". $isbn);
 //  $stmt2->bind_result($title, $author, $onloan, $isbn);
   

    echo '<table bgcolor="dddddd" cellpadding="6">';
    echo '<tr><b><td>isbn</td><b> <td>Author</td> <td>Title</td> <td>Reserved?</td> </b> <td>Return</td> </b></tr>';
    while ($stmt->fetch()) {
        if($onloan==1)
            $onloan="Yes";
       
        echo "<tr>";
        echo "<td> $isbn </td><td> $author </td><td> $title </td><td> $onloan </td>";
        echo '<td><a href="returnBook.php?isbn=' . urlencode($isbn) . '">Return</a></td>';
        echo "</tr>";
        
    }
    echo "</table>";
    ?>
       
            
           <div id="pagecontainer">
    
        </div>
            <div class="container">
           

            
        </div>
         
          

       </main>
			<?php include("footer.php");?>
    </body>
</html>