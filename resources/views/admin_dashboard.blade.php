<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Student Results</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="admin_dashboard.css"> -->
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

    /* --- Sidebar (Blackboard Green) --- */
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
        /* Admin Blue */
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
        /* Blue Highlight */
    }

    .logout a {
        color: #ff6b6b;
    }

    /* --- Main Content --- */
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

    .search-box {
        background: #fff;
        padding: 10px 20px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        border: 1px solid #eee;
    }

    .search-box input {
        border: none;
        outline: none;
        margin-left: 10px;
    }

    .admin-profile img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        cursor: pointer;
    }

    /* --- Stats Cards --- */
    .stats-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 30px;
    }

    .card {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        /* Notebook Paper Texture */
        background-image: linear-gradient(#f0f0f0 1px, transparent 1px);
        background-size: 100% 24px;
        border-top: 15px solid #fff;
    }

    .stat-card {
        display: flex;
        align-items: center;
        padding: 20px;
        border-left: 4px solid #36D1DC;
        /* Admin Blue */
    }

    .icon-box {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        color: #fff;
        margin-right: 15px;
    }

    .blue {
        background: #36D1DC;
    }

    .purple {
        background: #5B86E5;
    }

    .green {
        background: #2ecc71;
    }

    .stat-card h3 {
        font-size: 24px;
        color: #333;
    }

    .stat-card p {
        font-size: 13px;
        color: #666;
        background: rgba(255, 255, 255, 0.8);
    }

    /* --- Table Section --- */
    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .add-btn {
        background: linear-gradient(to right, #36D1DC, #5B86E5);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: bold;
        box-shadow: 0 4px 10px rgba(54, 209, 220, 0.3);
        transition: 0.3s;
    }

    .add-btn:hover {
        transform: translateY(-2px);
    }

    .table-card {
        padding: 0;
        overflow: hidden;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background: #f8f9fa;
        border-bottom: 2px solid #e9ecef;
    }

    th {
        padding: 15px;
        text-align: left;
        color: #555;
        font-size: 13px;
        text-transform: uppercase;
    }

    td {
        padding: 15px;
        border-bottom: 1px solid #eee;
        color: #333;
        font-size: 14px;
        background: rgba(255, 255, 255, 0.7);
    }

    /* Status Badges */
    .status {
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 12px;
        font-weight: bold;
    }

    .pass {
        background: #d4edda;
        color: #155724;
    }

    .fail {
        background: #f8d7da;
        color: #721c24;
    }

    .action-btn {
        border: none;
        background: transparent;
        color: #777;
        cursor: pointer;
        font-size: 16px;
    }

    .action-btn:hover {
        color: #36D1DC;
    }

    /* --- Modal --- */
    .modal {
        display: none;
        position: fixed;
        z-index: 100;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 30px;
        border: 1px solid #888;
        width: 400px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        position: relative;
        border-top: 5px solid #36D1DC;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover {
        color: #000;
    }

    .modal h2 {
        margin-bottom: 20px;
        font-size: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-size: 13px;
        color: #666;
    }

    .modal-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        outline: none;
    }

    .modal-input:focus {
        border-color: #36D1DC;
    }

    .submit-modal-btn {
        width: 100%;
        padding: 10px;
        background: linear-gradient(to right, #36D1DC, #5B86E5);
        color: white;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        margin-top: 10px;
    }
</style>

<body>

    <nav class="sidebar">
        <div class="logo">
            <h2><i class="fas fa-chalkboard-teacher"></i> AdminPanel</h2>
        </div>
        <ul class="menu">
            <li class="active"><a href="#"><i class="fas fa-chart-pie"></i> Overview</a></li>
            <!-- <li><a href="#"><i class="fas fa-users"></i> Students</a></li> -->
            <li><a href="#"><i class="fas fa-plus-circle"></i> Create Quiz</a></li>
            <!-- <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li> -->
        </ul>
        <div class="logout">
            <a href=""><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
    </nav>

    <main class="main-content">

        <header>
            <div class="header-title">
                <h1>Classroom Overview</h1>
                <p>Manage students and grade quizzes.</p>
            </div>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search student name...">
            </div>
            <div class="admin-profile">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=36D1DC&color=fff" alt="Admin">
            </div>
        </header>

        <div class="stats-container">
            <div class="card stat-card">
                <div class="icon-box blue"><i class="fas fa-user-graduate"></i></div>
                <div>
                    <h3>150</h3>
                    <p>Total Students</p>
                </div>
            </div>
            <div class="card stat-card">
                <div class="icon-box purple"><i class="fas fa-file-alt"></i></div>
                <div>
                    <h3>45</h3>
                    <p>Quizzes Taken</p>
                </div>
            </div>
            <div class="card stat-card">
                <div class="icon-box green"><i class="fas fa-chart-line"></i></div>
                <div>
                    <h3>78%</h3>
                    <p>Class Average</p>
                </div>
            </div>
        </div>



        <div class="card table-card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Quiz Title</th>
                        <th>Score</th>
                        <th>Grade</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#ST01</td>
                        <td>John Doe</td>
                        <td>Algebra Basics</td>
                        <td>85/100</td>
                        <td><span class="status pass">Pass</span></td>
                        <td><button class="action-btn"><i class="fas fa-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>#ST02</td>
                        <td>Sarah Smith</td>
                        <td>Physics: Motion</td>
                        <td>92/100</td>
                        <td><span class="status pass">Pass</span></td>
                        <td><button class="action-btn"><i class="fas fa-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>#ST03</td>
                        <td>Mike Johnson</td>
                        <td>World History</td>
                        <td>45/100</td>
                        <td><span class="status fail">Fail</span></td>
                        <td><button class="action-btn"><i class="fas fa-eye"></i></button></td>
                    </tr>
                    <tr>
                        <td>#ST04</td>
                        <td>Emily Davis</td>
                        <td>Chemistry 101</td>
                        <td>78/100</td>
                        <td><span class="status pass">Pass</span></td>
                        <td><button class="action-btn"><i class="fas fa-eye"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

    </main>


    <script>
        // Get the modal
        var modal = document.getElementById("gradeModal");

        // Function to open the modal
        function openModal() {
            modal.style.display = "block";
        }

        // Function to close the modal
        function closeModal() {
            modal.style.display = "none";
        }

        // Close the modal if the user clicks outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>