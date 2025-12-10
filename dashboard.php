<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: auth/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Campus Milpalta</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container dashboard-container">
        <div class="glass-card">
            <div class="header">
                <div class="welcome-text">
                    Welcome back, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!
                </div>
                <a href="logout.php" class="logout-btn">Sign Out</a>
            </div>
            
            <div class="content">
                <h3>Dashboard Overview</h3>
                <p style="margin-top: 1rem; color: #cbd5e1;">
                    You have successfully logged in to the Campus Milpalta system. 
                    This is a secure area.
                </p>
                
                <div style="margin-top: 2rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                    <div style="background: rgba(255,255,255,0.05); padding: 1.5rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1);">
                        <h4>Status</h4>
                        <p style="color: #4ade80; margin-top: 0.5rem;">Active</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.05); padding: 1.5rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1);">
                        <h4>Role</h4>
                        <p style="color: #60a5fa; margin-top: 0.5rem;">Student / Staff</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.05); padding: 1.5rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1);">
                        <h4>Session</h4>
                        <p style="color: #f472b6; margin-top: 0.5rem;">Secure</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
