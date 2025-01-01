<?php
include("config/connection.php");
session_destroy();

echo"<script>window.location.href='admin.php'</script>";
?>