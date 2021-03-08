<?php
include("includes/config.php");

//session_destroy(); LOGOUT
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
    <div id="nowPlayingBarContainer">
        <div id="nowPlayingBar">
            <div id="nowPlayingLeft"></div>
            <div id="nowPlayingCenter">
                <div class="content playerControls">
                    <div class="buttons">
                        <button class="controlButton shuffle" title="Shuffle button">
                            <img src="assets/images/icons/shuffle.png" alt="Shuffle"> </button>
                        <button class="controlButton previus" title="Previous button">
                            <img src="assets/images/icons/previous.png" alt="previus"> </button>
                        <button class="controlButton play" title="Play button">
                            <img src="assets/images/icons/play.png" alt="play">
                        </button>
                        <button class="controlButton pause" title="Pause button" style="display:none">
                            <img src="assets/images/icons/pause.png" alt="pause"></button>
                        <button class="controlButton next" title="Next button">
                            <img src="assets/images/icons/next.png" alt="next"> </button>
                        <button class="controlButton repeat" title="repeat button">
                            <img src="assets/images/icons/repeat.png" alt="repeat"> </button>
                    </div>
                    <div class="playbackBar">
                        <span class="progressTime current">0.00</span>
                        <div class="progressBar">'
                            <div class="progressBarBg">
                                <div class="progress">
                                </div>
                            </div>
                        </div>
                        <span class="progressTime remaining">0.00</span>
                    </div>
                </div>
            </div>
            <div id="nowPlayingRight"></div>
        </div>
    </div>
</body>

</html>