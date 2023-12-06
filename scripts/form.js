function submitQuiz() {
    let score = 0;

    // Check the first question (HTML)
    let htmlOptions = document.getElementsByName('html');
    for (let i = 0; i < htmlOptions.length; i++) {
        if (htmlOptions[i].checked && htmlOptions[i].value === 'correct') {
            score++;
            break;
        }
    }

    // Check the second question (Frontend languages)
    let frontendOptions = document.getElementsByName('frontend');
    let frontendChecked = false;
    for (let i = 0; i < frontendOptions.length; i++) {
        if ((frontendOptions[i].checked && frontendOptions[i].value === "php") || (!frontendOptions[i].checked && frontendOptions[i].value === "html") || (!frontendOptions[i].checked && frontendOptions[i].value === "javascript") || (!frontendOptions[i].checked && frontendOptions[i].value === "css")) {
            frontendChecked = false;
            break;
        } else {
            frontendChecked = true;
        }
    }
    if (frontendChecked) {
        score++;
    }

    // Check the third question (Python creator)
    let pythonOptions = document.getElementsByName('py');
    for (let i = 0; i < pythonOptions.length; i++) {
        if (pythonOptions[i].checked && pythonOptions[i].value === 'correct') {
            score++;
            break;
        }
    }

    // Check the fourth question (C++ year)
    let cplusplusOptions = document.getElementsByName('c++');
    for (let i = 0; i < cplusplusOptions.length; i++) {
        if (cplusplusOptions[i].checked && cplusplusOptions[i].value === 'correct') {
            score++;
            break;
        }
    }

    // Check the fifth question (RDBMS with SQL)
    let sqlOptions = document.getElementsByName('sql');
    let correctValues = ["maria", "mysql", "oracle"];
    let sqlChecked = false;
    for (let i = 0; i < sqlOptions.length; i++) {
        if ((sqlOptions[i].checked && sqlOptions[i].value === "mongo") || (!sqlOptions[i].checked && sqlOptions[i].value === "maria") || (!sqlOptions[i].checked && sqlOptions[i].value === "mysql") || (!sqlOptions[i].checked && sqlOptions[i].value === "oracle")) {
            sqlChecked = false;
            break;
        } else {
            sqlChecked = true;
        }
    }
    if (sqlChecked) {
        score++;
    }

    // Check the sixth question (Most popular backend language)
    let backendOptions = document.getElementsByName('backend');
    for (let i = 0; i < backendOptions.length; i++) {
        if (backendOptions[i].checked && backendOptions[i].value === 'correct') {
            score++;
            break;
        }
    }

    // Display the result
    window.location.href = '../pages/results/calculated.html?score=' + score;
}

function resetQuiz() {
    // Reset all form elements
    document.getElementById('myForm').reset();
}