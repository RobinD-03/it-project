<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    if ($_POST['html'] === 'correct') {
        $score++;
    }

    $correctFrontEndValues = ["html", "css", "javascript"];

    if (isset($_POST['frontend']) && is_array($_POST['frontend'])){
        $checkedValues = $_POST['frontend'];
        $checkedCount = 0;
    
        foreach ($correctFrontEndValues as $correctFValue) {
            if (in_array($correctFValue, $checkedValues)) {
                $checkedCount++;
            }
        }
    
        if ($checkedCount === count($correctFrontEndValues)) {
            $score++; 
        }
    }

    


    if ($_POST['py'] === 'correct') {
        $score++;
    }

    if ($_POST['c++'] === 'correct') {
        $score++;
    }

    $correctValues = ["maria", "mysql", "oracle"];


    if (isset($_POST['sql']) && is_array($_POST['sql'])){
        $checkedValues = $_POST['sql'];
        $checkedCount = 0;

        foreach ($correctValues as $correctValue) {
            if (in_array($correctValue, $checkedValues)) {
                $checkedCount++;
            }
        }

        if ($checkedCount === count($correctValues)) {
            $score++;
        }
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
