<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    if ($_POST['html'] === 'correct') {
        $score++;
    }

    $correctBackendValues = ["php", "python", "ruby"];
    $backendChecked = true;  // Assume all correct backend values are checked initially

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST['backend']) && is_array($_POST['backend'])) {
            $checkedValues = $_POST['backend'];

            foreach ($correctBackendValues as $correctBValue) {
                if (!in_array($correctBValue, $checkedValues)) {
                    $backendChecked = false;  // If any correct backend value is missing, set $backendChecked to false
                    break;  // No need to continue checking once a missing correct backend value is found
                }
            }
        } else {
            $backendChecked = false;  // If $_POST['backend'] is not an array, set $backendChecked to false
        }

        if ($backendChecked) {
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
    $sqlChecked = true;  // Assume all correct values are checked initially

    if (isset($_POST['sql']) && is_array($_POST['sql'])) {
        foreach ($correctValues as $correctValue) {
            if (!in_array($correctValue, $_POST['sql'])) {
                $sqlChecked = false;
                break; 
            }
        }
    } else {
        $sqlChecked = false;
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
