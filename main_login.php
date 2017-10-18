<?php
session_start();
if (isset($_SESSION['adname'])) {
    header("location: adminitrator/index.php");
}

include("config.php"); 
?>

<head>
        <link href="index.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,300,300i,400,700,700i,900,900i" rel="stylesheet">
    </head>
<header>
<img id="logoimg" src="img/logo.png">
    <nav id="admin-login-menu">
        <ul>
            <li>
                <a class="<?php echo ($current_page == 'main_login.php') ? 'active' : NULL ?>" href="main_login.php">Log in</a>
            </li>
        </ul>
    </nav>
</header>

<?php if(isset($_POST) && !empty($_POST)) : ?>

<?php 
	$myadname =  stripslashes($_POST['myadname']);
	$myadpassword =  stripslashes($_POST['myadpassword']);
	
	@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

	if ($db->connect_error) {
		echo "could not connect: " . $db->connect_error;
		exit();
	}

	$stmt = $db->prepare("SELECT adname, adpassword FROM admin WHERE adname = ?");
	$stmt->bind_param('s', $myadname);
	$stmt->execute();
	
    $stmt->bind_result($adname, $adpassword);

    while ($stmt->fetch()) {
        if (sha1($myadpassword) == $adpassword)
		{
			$_SESSION['adname'] = $myadname;
			header("location:administrator/index.php");
			exit();
		}
    }

?>

<?php endif;?>


<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

    <form method="POST" action="">
            <input type="text" name="myadname" placeholder="name">
            <input type="password" name="myadpassword" placeholder="password">
            <input type="submit" value="Log in">
    </form>
<?php include("footer.php"); ?>