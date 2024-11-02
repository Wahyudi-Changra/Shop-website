<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="form-container">
        <div class="form-box">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <button type="submit" class="btn login-btn">Login</button>
            </form>
            <div class="social-login">
                <p>Or login with</p>
                <button class="btn facebook-btn">Facebook</button>
                <button class="btn google-btn">Google</button>
            </div>
            <p class="signup-link">Not a member? <a href="register.php">Sign up now</a></p>
        </div>
    </div>
</body>
</html>
