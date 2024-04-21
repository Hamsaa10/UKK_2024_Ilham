<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffeeba; /* Attractive background color */
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            color: #007bff;
        }

        p b {
            color: #28a745;
        }

        .nav-item a {
            color: #007bff;
            font-weight: bold;
        }

        .nav-item a:hover {
            text-decoration: underline;
        }

        .nav-item.active a {
            color: #28a745;
        }

        .custom-button {
            background-color: #28a745; /* Green color for the button */
            color: #ffffff; /* White text color */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }

        .custom-button:hover {
            background-color: #218838; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Halaman Home</h1>
        <p>Selamat datang <b><?= $_SESSION['namalengkap'] ?></b></p>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="album.php">Album</a></li>
            <li class="nav-item"><a class="nav-link" href="foto.php">Foto</a></li>
            <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">Landing</a></li>
            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>

        <!-- Button for demonstration purposes -->
        
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts if needed -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
