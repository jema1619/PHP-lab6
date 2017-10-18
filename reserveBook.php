<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include ("config.php");



$isbn = trim($_GET['isbn']);      // From the hidden field
$isbn = addslashes($isbn);

@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if ($db->connect_error) {
        echo "could not connect: " . $db->connect_error;
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
    }
    
   echo "You are reserving book with the ID:"  .$isbn;

    // Prepare an update statement and execute it
    $stmt = $db->prepare("UPDATE booktable SET onloan='YES' WHERE isbn = ?");
    $stmt->bind_param('i', $isbn);
    $stmt->execute();
    printf("<br>Book Reserved!");
    printf("<br><a href=BrowseBooks.php>Search and Book more Books </a>");
    printf("<br><a href=MyBooks.php>Return to Reserved Books </a>");
    printf("<br><a href=index.php>Return to home page </a>");
    exit;
    

?>