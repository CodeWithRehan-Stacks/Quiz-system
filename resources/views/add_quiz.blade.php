<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Create Quiz</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="add_quiz.css"> -->
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
        display: flex;
        min-height: 100vh;
        background-color: #f4f7f6;
    }

    /* Sidebar (Reused) */
    .sidebar {
        width: 260px;
        background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
        color: #fff;
        padding: 20px;
        display: flex;
        flex-direction: column;
        position: fixed;
        height: 100%;
    }

    .logo {
        text-align: center;
        margin-bottom: 40px;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .logo h2 {
        font-family: 'Nunito', sans-serif;
        color: #36D1DC;
    }

    .menu {
        list-style: none;
        flex-grow: 1;
    }

    .menu li {
        margin-bottom: 15px;
    }

    .menu a {
        text-decoration: none;
        color: #b0c4de;
        display: flex;
        align-items: center;
        padding: 12px 15px;
        border-radius: 10px;
        transition: 0.3s;
    }

    .menu a i {
        margin-right: 12px;
        width: 20px;
        text-align: center;
    }

    .menu li.active a,
    .menu a:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        border-left: 4px solid #36D1DC;
    }

    .logout a {
        color: #ff6b6b;
    }

    /* Main Content */
    .main-content {
        margin-left: 260px;
        padding: 30px;
        width: 100%;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .header-title h1 {
        font-family: 'Nunito', sans-serif;
        color: #2c3e50;
    }

    .header-title p {
        font-size: 14px;
        color: #7f8c8d;
    }

    .btn {
        padding: 10px 25px;
        border-radius: 30px;
        border: none;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s;
    }

    .secondary {
        background: #ddd;
        color: #555;
        margin-right: 10px;
    }

    .secondary:hover {
        background: #ccc;
    }

    .primary {
        background: linear-gradient(to right, #36D1DC, #5B86E5);
        color: white;
        box-shadow: 0 4px 15px rgba(54, 209, 220, 0.4);
    }

    .primary:hover {
        transform: translateY(-2px);
    }

    /* --- The Exam Paper Container --- */
    .paper-container {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        /* Notebook Paper Texture */
        background-image: linear-gradient(#f0f0f0 1px, transparent 1px);
        background-size: 100% 30px;
        padding: 40px;
        border-top: 20px solid #fff;
        max-width: 900px;
        margin: 0 auto;
        position: relative;
    }

    /* Red Margin Line Effect */
    .paper-container::before {
        content: '';
        position: absolute;
        left: 60px;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #ffb7b2;
        z-index: 0;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
        z-index: 1;
        /* Above margin line */
    }

    .form-row {
        display: flex;
        gap: 30px;
    }

    .form-row .form-group {
        flex: 1;
    }

    label {
        display: block;
        font-weight: bold;
        color: #555;
        margin-bottom: 5px;
        font-size: 14px;
        font-family: 'Nunito', sans-serif;
    }

    /* Handwriting Input Style */
    .paper-input {
        width: 100%;
        border: none;
        border-bottom: 2px solid #aaa;
        background: rgba(255, 255, 255, 0.6);
        padding: 5px 10px;
        font-size: 16px;
        outline: none;
        font-family: 'Poppins', sans-serif;
        color: #333;
        transition: 0.3s;
    }

    .paper-input:focus {
        border-bottom-color: #36D1DC;
        background: rgba(255, 255, 255, 0.9);
    }

    .divider {
        border: 0;
        border-top: 2px dashed #ddd;
        margin: 30px 0;
        position: relative;
        z-index: 1;
    }

    /* --- Question Blocks --- */
    .question-block {
        background: #fff;
        border: 1px solid #eee;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        z-index: 1;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        border-left: 5px solid #36D1DC;
        /* Admin Blue Highlight */
    }

    .q-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .q-header h3 {
        font-size: 16px;
        color: #36D1DC;
    }

    .delete-btn {
        background: transparent;
        border: none;
        color: #ff6b6b;
        cursor: pointer;
        font-size: 16px;
    }

    .q-text {
        font-weight: 500;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .options-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .option-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .option-item input[type="radio"] {
        accent-color: #2ecc71;
        /* Green for correct answer */
        transform: scale(1.2);
        cursor: pointer;
    }

    /* Add Button Container */
    .add-more-box {
        text-align: center;
        margin-top: 30px;
        position: relative;
        z-index: 1;
    }

    .add-q-btn {
        background: white;
        border: 2px dashed #36D1DC;
        color: #36D1DC;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .add-q-btn:hover {
        background: #36D1DC;
        color: white;
    }
</style>

<body>

    <nav class="sidebar">
        <div class="logo">
            <h2><i class="fas fa-chalkboard-teacher"></i> AdminPanel</h2>
        </div>
        <ul class="menu">
            <li><a href="admin_dashboard.html"><i class="fas fa-chart-pie"></i> Overview</a></li>
            <!-- <li><a href="#"><i class="fas fa-users"></i> Students</a></li> -->
            <li class="active"><a href="#"><i class="fa-plus-circle"></i> Create Quiz</a></li>
            <!-- <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li> -->
        </ul>
        <div class="logout">
            <a href="admin_login.html"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
    </nav>

    <main class="main-content">

        <header>
            <div class="header-title">
                <h1>Draft New Assessment</h1>
                <p>Create a quiz and assign it to a class.</p>
            </div>
            <div class="action-buttons">
                <button class="btn secondary">Cancel</button>
                <button class="btn primary">Publish Quiz <i class="fas fa-paper-plane"></i></button>
            </div>
        </header>

        <div class="paper-container">

            <div class="quiz-meta-data">
                <div class="form-group">
                    <label>Quiz Title</label>
                    <input type="text" class="paper-input" placeholder="e.g., Physics Mid-Term">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Subject</label>
                        <select class="paper-input">
                            <option>Mathematics</option>
                            <option>Physics</option>
                            <option>Chemistry</option>
                            <option>History</option>
                            <option>Computer Science</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Duration (Minutes)</label>
                        <input type="number" class="paper-input" placeholder="45">
                    </div>
                </div>
            </div>

            <hr class="divider">

            <div id="questions-container">

                <div class="question-block">
                    <div class="q-header">
                        <h3>Question 1</h3>
                        <button class="delete-btn" onclick="removeQuestion(this)"><i class="fas fa-trash"></i></button>
                    </div>

                    <input type="text" class="paper-input q-text" placeholder="Type your question here...">

                    <div class="options-grid">
                        <div class="option-item">
                            <input type="radio" name="q1_correct" title="Mark as correct answer">
                            <input type="text" class="paper-input" placeholder="Option A">
                        </div>
                        <div class="option-item">
                            <input type="radio" name="q1_correct">
                            <input type="text" class="paper-input" placeholder="Option B">
                        </div>
                        <div class="option-item">
                            <input type="radio" name="q1_correct">
                            <input type="text" class="paper-input" placeholder="Option C">
                        </div>
                        <div class="option-item">
                            <input type="radio" name="q1_correct">
                            <input type="text" class="paper-input" placeholder="Option D">
                        </div>
                    </div>
                </div>

            </div>

            <div class="add-more-box">
                <button class="add-q-btn" onclick="addQuestion()">
                    <i class="fas fa-plus"></i> Add Another Question
                </button>
            </div>

        </div>

    </main>

    <script>
        // Variable to keep track of question count
        let questionCount = 1;

        function addQuestion() {
            questionCount++;

            const container = document.getElementById('questions-container');

            // Create the HTML for a new question block
            const newBlock = document.createElement('div');
            newBlock.classList.add('question-block');
            newBlock.innerHTML = `
        <div class="q-header">
            <h3>Question ${questionCount}</h3>
            <button class="delete-btn" onclick="removeQuestion(this)"><i class="fas fa-trash"></i></button>
        </div>
        
        <input type="text" class="paper-input q-text" placeholder="Type your question here...">
        
        <div class="options-grid">
            <div class="option-item">
                <input type="radio" name="q${questionCount}_correct">
                <input type="text" class="paper-input" placeholder="Option A">
            </div>
            <div class="option-item">
                <input type="radio" name="q${questionCount}_correct">
                <input type="text" class="paper-input" placeholder="Option B">
            </div>
            <div class="option-item">
                <input type="radio" name="q${questionCount}_correct">
                <input type="text" class="paper-input" placeholder="Option C">
            </div>
            <div class="option-item">
                <input type="radio" name="q${questionCount}_correct">
                <input type="text" class="paper-input" placeholder="Option D">
            </div>
        </div>
    `;

            // Append the new block to the container
            container.appendChild(newBlock);

            // Smooth scroll to the new question
            newBlock.scrollIntoView({
                behavior: 'smooth'
            });
        }

        function removeQuestion(button) {
            // Prevent deleting the last remaining question (optional UX choice)
            const totalQuestions = document.querySelectorAll('.question-block').length;
            if (totalQuestions > 1) {
                button.closest('.question-block').remove();
            } else {
                alert("You must have at least one question.");
            }
        }
    </script>
</body>

</html>