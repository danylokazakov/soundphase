<?php
include("includes/config.php");

//session_destroy(); LOGOUT
// If user is not logged in go to register.php
if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
} else {
    header("Location: register.php");
}
?>
<html>

<head>
    <title>Soundphase</title>
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- Container for main content -->
    <div id="mainContainer">
        <div id="topContainer">
            <?php include("includes/navBarContainer.php") ?>
        </div>
    </div>
    <?php include("includes/nowPlayingBar.php") ?>

</body>

</html>