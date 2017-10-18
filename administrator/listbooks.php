
    <body>  
        <?php
            include("../config.php");
            include("header.php");
            
        ?>
       
        <main>
     
            <div id="pagecontainer">
                <form action="listbooks.php" method="POST" class="form">
			<fieldset>
	         	<label>Author:</label>
		        <input type="text" name="searchauthor">
		        <label>Title:</label>
		        <input type="text" name="searchtitle">
                        <INPUT type="submit" name="submit" value="Submit">
		       
	        </fieldset> 
	    </form>
 <?php 
            
            
            
 $searchauthor='';
 $searchtitle='';
 
 


if (isset($_POST) && !empty($_POST)) {
        
# Get data from form
    $searchtitle = trim($_POST['searchtitle']);
    $searchauthor = trim($_POST['searchauthor']);
    
   
}

	//if (!$searchtitle && !$searchauthor) {
	//  echo "You must specify either a title or an author";
	//  exit();
	//}

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

$query = "SELECT isbn, title, author, onloan FROM booktable";
if ($searchtitle && !$searchauthor) { // Title search only
    $query = $query . " where title like '%" . $searchtitle . "%'";
}
if (!$searchtitle && $searchauthor) { // Author search only
    $query = $query . " where author like '%" . $searchauthor . "%'";  
}

if ($searchtitle && $searchauthor) { // Title and Author search
    $query = $query . " where title like '%" . $searchtitle . "%' and author like '%" . $searchauthor . "%'"; // unfinished
}

    $stmt = $db->prepare($query);
    $stmt->bind_result($isbn, $title, $author, $onloan);
    $stmt->execute();
    

    echo '<table bgcolor="#dddddd" cellpadding="6">';
    echo '<tr><b><td>Author</td> <td>Title</td> <td>Delete</td> </b> </tr>';
    while ($stmt->fetch()) {
        
        echo "<tr>";
        echo "<td> $author </td><td> $title </td>";
        echo '<td><a href="deletebook.php?isbn=' . urlencode($isbn) . '"> Delete </a></td>';
        echo "</tr>";
    }
    echo "</table>";
   ?>
        </div>
        </main>
        <?php include("../footer.php");?>
    </body>
</html>

