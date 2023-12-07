<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    if ($_POST['html'] === 'correct') {
        $score++;
    }

    $frontendChecked = false;

    foreach ($_POST['frontend'] as $selectedOption) {
        if (($selectedOption === "php") || ($selectedOption === "html") || ($selectedOption === "javascript") || ($selectedOption === "css")) {
            $frontendChecked = true;
        } else {
            $frontendChecked = false;
            break;
        }
    }

if ($frontendChecked) {
    $score++;
}


    if ($_POST['py'] === 'correct') {
        $score++;
    }

    if ($_POST['c++'] === 'correct') {
        $score++;
    }

    $correctValues = ["maria", "mysql", "oracle"];
    $sqlChecked = false;

    foreach ($_POST['sql'] as $selectedOption) {
        if (($selectedOption === "mongo") || ($selectedOption === "maria") || ($selectedOption === "mysql") || ($selectedOption === "oracle")) {
            $sqlChecked = false;
            break;
        } else {
            $sqlChecked = true;
        }
    }

    if ($sqlChecked) {
        $score++;
    }


    if ($_POST['backend'] === 'correct') {
        $score++;
    }

    header("Location: ../pages/results/calculated.php?score=" . $score);
    exit();
} else {
    // Redirect to the home page if accessed directly
    header("Location: index.html");
    exit();
}
?>
