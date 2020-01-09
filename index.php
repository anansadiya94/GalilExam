<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
$page = $_GET['page'];

switch ($page) {
    case 'getUserDetails': 
        include __DIR__.'/Controller/getUserDetails.php';
        break;
    case 'displayUserDetails':
        include __DIR__.'/Controller/displayUserDetails.php';
        break;
    default:
        include __DIR__.'/Controller/getUserDetails.php';
        break;
}
?>