<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    if ($_POST['html'] === 'correct') {
        $score++;
    }

    $frontendChecked = true;
    $correctFrontEndValues = ["html", "css", "javascript"];
    if (isset($_POST['frontend']) && is_array($_POST['frontend'])){
        foreach ($correctFrontEndValues as $correctFValue) {
            if (!in_array($correctFValue, $_POST['frontend'])) {
                $frontendChecked = false;
                break;
            }
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
    $sqlChecked = true;
    if (isset($_POST['sql']) && is_array($_POST['sql'])){
        foreach ($correctValues as $correctValue) {
            if (!in_array($correctValue, $_POST['sql'])) {
                $sqlChecked = false;
                break;
            }
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
