<?php
ob_start();
session_start(); //starts user session and keeps it through pages

$timezone = date_default_timezone_set("Europe/London");
//servername, username, password, database name
$con = mysqli_connect("localhost", "root", "", "soundphase");
if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
