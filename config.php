<?php

#our config file, has information about the database, about the current page we're on
$url = $_SERVER['REQUEST_URI'];

$strings = explode('/', $url);

$current_page = end($strings);

$dbname = 'marina';
$dbuser = 'root';
$dbpass = '';
$dbserver = 'localhost';


if (isset($_COOKIE['counter']))
    $count = $_COOKIE['counter'];
else
    $count = 0;



$count = $count + 1;
setcookie('counter', $count, time() + 24 * 3600);

#the following three will get you the current page, how?
#first you assign the URI (which is the end of the URL as we talked on the Lecture 2)
#You get that by using the superglobal $_SERVER['REQUEST_URI']
#then you create a new variable $strings which contains every string seperated by a "/" from the $url - hard to follow, ha?
#now that you have all strings 

//$url = $_SERVER['REQUEST_URI'];
//print_r($url);
//echo "</br>";
//$strings = explode('/', $url);
//print_r($strings);
//echo "</br>";
//$current_page = end($strings);
//print_r($current_page);
//echo "</br>";
//$dbname = 'library';
//$dbuser = 'root';
//$dbpass = '';
//$dbserver = 'localhost';

//echo "Running the query: $query <br/>"; # For debugging


  # Here's the query using an associative array for the results
//$result = $db->query($query);
//echo "<p> $result->num_rows matching books found </p>";
//echo "<table border=1>";
//while($row = $result->fetch_assoc()) {
//echo "<tr><td>" . $row['isbn'] . "</td> <td>" . $row['title'] . "</td><td>" . $row['author'] . "</td></tr>";
//}
//echo "</table>";
 

# Here's the query using bound result parameters
    // echo "we are now using bound result parameters <br/>";
  



$books = array();
            $books[] = array("title" => "Deep Water", "author" => "Mike Green");
            $books[] = array("title" => "Alice in Wonderland", "author" => "Margareth Stone");
            $books[] = array("title" => "The big bad wolf", "author" => "R. K. Rowling");
            $books[] = array("title" => "No Idea", "author" => "Nolan Ideos");
?>