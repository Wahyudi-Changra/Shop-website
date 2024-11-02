<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="form-container">
        <div class="form-box">
            <h2>Register</h2>
            <form action="register.php" method="post">
                <div class="input-group">
                    <input type="text" id="name" name="name" placeholder="Full Name" required>
                </div>
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn register-btn">Register</button>
            </form>
            <div class="social-login">
                <p>Or register with</p>
                <button class="btn facebook-btn">Facebook</button>
                <button class="btn google-btn">Google</button>
            </div>
            <p class="login-link">Already a member? <a href="login.php">Login now</a></p>
        </div>
    </div>
</body>
</html>
