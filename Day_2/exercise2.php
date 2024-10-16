
<?
/*
! Without using loop

$stmt1 = $stmt2 = $stmt3 = $stmt4 = $stmt5 = '';

$answer1 = filter_input(INPUT_POST, "answer1", FILTER_SANITIZE_SPECIAL_CHARS);
$answer2 = filter_input(INPUT_POST, "answer2", FILTER_SANITIZE_SPECIAL_CHARS);
$answer3 = filter_input(INPUT_POST, "answer3", FILTER_SANITIZE_SPECIAL_CHARS);
$answer4 = filter_input(INPUT_POST, "answer4", FILTER_SANITIZE_SPECIAL_CHARS);
$answer5 = filter_input(INPUT_POST, "answer5", FILTER_SANITIZE_SPECIAL_CHARS);

$crtans1 = "chennai";
$crtans2 = "hyderabad";
$crtans3 = "amaravati";
$crtans4 = "bengaluru";
$crtans5 = "thiruvanathapuram";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = null;
    
    $stmt1 = strtolower($answer1) == $crtans1 ? "Correct answer" : "Wrong Answer the correct answer is $crtans1";
    if (strtolower($answer1) == $crtans1) { $score++; }

    $stmt2 = strtolower($answer2) == $crtans2 ? "Correct answer" : "Wrong Answer the correct answer is $crtans2";
    if (strtolower($answer2) == $crtans2) { $score++; }
    
    $stmt3 = strtolower($answer3) == $crtans3 ? "Correct answer" : "Wrong Answer the correct answer is $crtans3";
    if (strtolower($answer3) == $crtans3) { $score++; }
   
    $stmt4 = strtolower($answer4) == $crtans4 ? "Correct answer" : "Wrong Answer the correct answer is $crtans4";
    if (strtolower($answer4) == $crtans4) { $score++; }
   
    $stmt5 = strtolower($answer5) == $crtans5 ? "Correct answer" : "Wrong Answer the correct answer is $crtans5";
    if (strtolower($answer5) == $crtans5) { $score++; }

    echo "<script>alert('Your total score is: $score/5');</script>";
}

*/

// * Using Loop
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $score = 0;

    $crtanswer = [
        "chennai",
        "hyderabad",
        "amaravati",
        "bengaluru",
        "thiruvanathapuram",
    ];

    $useranswer = [
        strtolower(filter_input(INPUT_POST, "answer1", FILTER_SANITIZE_SPECIAL_CHARS)),
        strtolower(filter_input(INPUT_POST, "answer2", FILTER_SANITIZE_SPECIAL_CHARS)),
        strtolower(filter_input(INPUT_POST, "answer3", FILTER_SANITIZE_SPECIAL_CHARS)),
        strtolower(filter_input(INPUT_POST, "answer4", FILTER_SANITIZE_SPECIAL_CHARS)),
        strtolower(filter_input(INPUT_POST, "answer5", FILTER_SANITIZE_SPECIAL_CHARS)),
    ];
    $feedback = [];

    for ($i=0; $i < count($crtanswer); $i++) { 
        if ($crtanswer[$i] == $useranswer[$i]) {
            $feedback[$i] = "Correct Answer";
            $score++;
    } else {
        $feedback[$i] = "Wrong! The correct answer is " . ucfirst($crtanswer[$i]) . ".";

    }

}
echo "<script>alert('Your total score is: $score/5');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: grid;
            /* align-items: center; */
            justify-content: center;
        }
        h4 {
            margin-top: 10px;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
         #answer {
            border-radius: 5px;
            width: 230px;
            height: 30px;
            }
        label {
            padding-top: 20px;
            padding-bottom: 10px;
            }
        #submit {
            margin-top: 30px;
            width: 250px;
            }
        .container {
            height: 700px;
            border: 1px solid black;
            display: grid;
            /* align-items: center; */
            justify-content: center;
            width: 400px;
        }
    </style>
</head>
<body>
    <header>
      <h1 class="heading">Quiz App</h1>
      <h3 class="heading">Guess The Correct Answer</h3> 
    </header>
    <div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
            <label for="question">What is the Capital Of Tamil Nadu?</label>
            <input type="text" name="answer1" id="answer">
            <p><?php echo isset($_POST["submit"]) ? $feedback[0] : ''; ?></p>
            

            <label for="question">What is the Capital Of Telangana?</label>
            <input type="text" name="answer2" id="answer">
            <p><?php echo isset($_POST["submit"]) ? $feedback[1] : ''; ?></p>
            
            <label for="question">What is the Capital Of Andra Pradesh?</label>
            <input type="text" name="answer3" id="answer">
            <p><?php echo isset($_POST["submit"]) ? $feedback[2] : ''; ?></p>
            
            <label for="question">What is the Capital Of Karnataka?</label>
            <input type="text" name="answer4" id="answer">
            <p><?php echo isset($_POST["submit"]) ? $feedback[3] : ''; ?></p>
            
            <label for="question">What is the Capital Of Kerala?</label>
            <input type="text" name="answer5" id="answer">
            <p><?php echo isset($_POST["submit"]) ? $feedback[4] : ''; ?></p>

            <input type="submit" value="Submit" name="submit" id="submit">
            
        </form>
    </div>
</body>
</html>