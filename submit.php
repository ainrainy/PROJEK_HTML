<?php
// Get form data
$name = $_POST['name'];
$age = $_POST['age'];
$status = $_POST['status'];
$height = $_POST['height'];
$love_language = $_POST['love-language'];
$learning_language = $_POST['learning-language'];
$motivation = $_POST['motivation'];
$coding_partner = $_POST['coding-partner'];
$who_smarter = $_POST['who-smarter'];
$future = $_POST['future'];

// Format the data
$data = "Name: $name\nAge: $age\nStatus: $status\nHeight: $height\nLove Language: $love_language\nLearning Language: $learning_language\nMotivation: $motivation\nCoding Partner: $coding_partner\nWho is Smarter: $who_smarter\nFuture: $future\n\n";

// Save the data to a file
file_put_contents('submissions.txt', $data, FILE_APPEND);

// Redirect to the "Thank You" page
header('Location: THANKS LOL.html');
exit();
?>
