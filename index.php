<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CMPDI</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>

<body>

    <div class="wrapper">


        <div class="form-box login">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="input-box">
                    <input type="text" required>
                    <label>Username</label>  
                    <i class='bx bx-user' ></i>  
                </div>      
                <div class="input-box">
                    <input type="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt' ></i>
                 </div>
                 <button type="submit" class="btn">Login</button> 
                 <div class="logreg-link">
                    <p>Don't have an account? <a href="#"
                     class="register-link">Sing Up</a></p>
                 </div>
      
            </form>
        </div>
        <div class="info-text login">
            <h2>Welcome back!</h2>
        </div>
    </div>
    
</body>
</html>
