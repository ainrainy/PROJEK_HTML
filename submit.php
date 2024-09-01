<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $status = htmlspecialchars($_POST['status']);
    $height = htmlspecialchars($_POST['height']);
    $loveLanguage = htmlspecialchars($_POST['love-language']);
    $learningLanguage = htmlspecialchars($_POST['learning-language']);
    $motivation = htmlspecialchars($_POST['motivation']);
    $codingPartner = htmlspecialchars($_POST['coding-partner']);
    $whoSmarter = htmlspecialchars($_POST['who-smarter']);
    $future = htmlspecialchars($_POST['future']);

    // Save the data to a file
    $file = fopen("data.txt", "a");
    fwrite($file, "Name: $name\nAge: $age\nStatus: $status\nHeight: $height\nLove Language: $loveLanguage\nLearning Language: $learningLanguage\nMotivation: $motivation\nCoding Partner: $codingPartner\nWho Smarter: $whoSmarter\nFuture: $future\n\n");
    fclose($file);

    // Redirect to THANKS LOL.html
    header("Location: THANKS LOL.html");
    exit();
}
?>
