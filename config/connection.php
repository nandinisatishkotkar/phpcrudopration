<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
$servername = "localhost";
$username = "root";
$password="";
$dbname="contactus";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>