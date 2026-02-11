<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Question</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="quiz.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        min-height: 100vh;
        /* Blackboard Green Background */
        background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .desk-container {
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 20px;
    }

    /* --- The Notebook Paper --- */
    .exam-paper {
        background: #fff;
        width: 600px;
        padding: 40px 50px;
        border-radius: 5px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        position: relative;

        /* Notebook Lines Pattern */
        background-image:
            linear-gradient(90deg, transparent 49px, #ffb7b2 49px, #ffb7b2 51px, transparent 51px),
            /* Red Margin Line */
            linear-gradient(#e1e1e1 1px, transparent 1px);
        /* Blue Horizontal Lines */
        background-size: 100% 100%, 100% 30px;
        /* Size of lines */
        background-position: 0 0, 0 15px;
        /* Alignment */
    }

    /* Holes in the paper (Visual Detail) */
    .exam-paper::before {
        content: "";
        position: absolute;
        left: 15px;
        top: 40px;
        width: 15px;
        height: 15px;
        background: #203a43;
        /* Matches body bg to look like a hole */
        border-radius: 50%;
        box-shadow: 0 300px 0 #203a43, 0 150px 0 #203a43;
        /* Two more holes */
    }

    /* --- Header --- */
    .quiz-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        position: relative;
        z-index: 2;
        /* Sits above lines */
    }

    .title-section h2 {
        margin-left: 10px;
        font-family: 'Nunito', sans-serif;
        color: #333;
        font-weight: 800;
    }

    .badge {
        margin-left: 10px;
        background: #3498db;
        color: white;
        font-size: 10px;
        padding: 2px 8px;
        border-radius: 10px;
        text-transform: uppercase;
    }

    .timer-box {
        background: #333;
        color: #f1c40f;
        /* Digital clock yellow */
        padding: 8px 15px;
        border-radius: 5px;
        font-family: 'Courier New', monospace;
        font-weight: bold;
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
    }

    /* --- Progress Bar --- */
    .progress-container {
        width: 100%;
        height: 8px;
        background: #eee;
        border-radius: 10px;
        margin-bottom: 30px;
        overflow: hidden;
    }

    .progress-bar {
        height: 100%;
        background: linear-gradient(to right, #f1c40f, #d35400);
        /* Pencil gradient */
        border-radius: 10px;
        transition: width 0.3s;
    }

    .question-count {
        margin-left: 10px;
        color: #777;
        font-size: 14px;
        margin-bottom: 10px;
        font-weight: 600;
    }

    /* --- Question & Options --- */
    .question-text {
        align-items: center;
        margin-left: 10px;
        font-size: 20px;
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 30px;
        line-height: 30px;
    }

    .options-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .option {
        background: rgba(255, 255, 255, 0.9);
        /* White background to block lines */
        border: 2px solid #ddd;
        padding: 12px 20px;
        border-radius: 30px;
        /* Bubble shape */
        cursor: pointer;
        transition: 0.2s;
        display: flex;
        align-items: center;
        font-weight: 500;
        color: #555;
    }

    .option:hover {
        border-color: #f1c40f;
        background: #fff;
        transform: translateX(5px);
    }

    /* Selected State */
    .option.selected {
        border-color: #d35400;
        background: #fff3e0;
        color: #d35400;
        font-weight: bold;
    }

    .letter {
        width: 30px;
        height: 30px;
        background: #eee;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 14px;
        font-weight: bold;
        color: #777;
    }

    .option.selected .letter {
        background: #d35400;
        color: #fff;
    }

    /* --- Footer --- */
    .quiz-footer {
        margin-top: 40px;
        display: flex;
        justify-content: flex-end;
    }

    .nav-btn {
        padding: 10px 25px;
        border: none;
        border-radius: 25px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
        font-family: 'Poppins', sans-serif;
    }

    .nav-btn.next {
        background: linear-gradient(to right, #f1c40f, #d35400);
        color: #fff;
        box-shadow: 0 4px 10px rgba(211, 84, 0, 0.3);
    }

    .nav-btn.next:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 15px rgba(211, 84, 0, 0.4);
    }
</style>

<body>

    <div class="desk-container">

        <div class="exam-paper">

            <div class="quiz-header">
                <div class="title-section">
                    <h2>Algebra Basics</h2>
                    <span class="badge">Math 101</span>
                </div>
                <div class="timer-box">
                    <i class="fas fa-stopwatch"></i>
                    <span id="time">09:45</span>
                </div>
            </div>

            <div class="progress-container">
                <div class="progress-bar" style="width: 40%;"></div>
            </div>

            <div class="question-count">
                Question 3 of 10
            </div>

            <div class="question-text">
                If 2x + 5 = 15, what is the value of x?
            </div>

            <div class="options-list">
                <div class="option" onclick="selectOption(this)">
                    <span class="letter">A</span>
                    <span class="text">x = 10</span>
                </div>
                <div class="option" onclick="selectOption(this)">
                    <span class="letter">B</span>
                    <span class="text">x = 5</span>
                </div>
                <div class="option" onclick="selectOption(this)">
                    <span class="letter">C</span>
                    <span class="text">x = 2.5</span>
                </div>
                <div class="option" onclick="selectOption(this)">
                    <span class="letter">D</span>
                    <span class="text">x = 20</span>
                </div>
            </div>

            <div class="quiz-footer">
                <button class="nav-btn next">Next Question <i class="fas fa-arrow-right"></i></button>
            </div>

        </div>
    </div>

    <script>
        function selectOption(element) {

            const allOptions = document.querySelectorAll('.option');
            allOptions.forEach(opt => {
                opt.classList.remove('selected');
            });

            element.classList.add('selected');
        }
    </script>
</body>
</html>