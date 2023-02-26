<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="homepage">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <button onclick="logout()">Logout</button>
    </div>
    
    <script type="text/javascript">
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>
</body>
</html>