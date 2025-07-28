<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOK System LogIn</title>
    <title>Websites With SignUp Pages HOK_5v5Championship</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <div class="contentSignUpPage">
             <h2>Honor Of Kings</h2>
             <p>Welcome to our websites. At our websites you can know about HOK_5v5Championship</p>
        </div>

        <div class="container" id="signUp" style="display: none">
            <h2>Register</h2>
            <form method="post" action="register.php">
                    <div class="input-block">
                        <span class="icon">
                        <ion-icon name="document-text"></ion-icon></span>
                        <i class="fas fa-user"></i>
                        <input type="text" name="fName" id="fName" required>
                        <label for="fName">First Name</label>
                    </div>
                        <div class="input-block">
                        <span class="icon">
                        <ion-icon name="document-text"></ion-icon></span>
                        <i class="fas fa-user"></i>
                        <input type="text" name="lName" id="lName" required>
                        <label for="lName">Last Name</label>
                    </div>
                    <div class="input-block">
                        <span class="icon">
                        <ion-icon name="mail"></ion-icon></span>
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" required>
                        <label for="email">Enter your email</label>
                    </div>
                    <div class="input-block">
                        <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon></span>
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" required>
                        <label for="password">Enter your password</label>
                   </div>
                <input type="submit" class="btn" value="Sign Up" name="signUp" >
            </form>
            <p class="or">
               --------------------or--------------------
            </p>
            <div class="links">
               <p>Already Have An Account?</p>
               <button id="signInButton">Sign In</button>
            </div>
        </div>

        <div class="container" id="signIn" style="">
        <h2>Sign In</h2>
        <form method="post" action="register.php">
                <div class="input-block">
                    <span class="icon">
                    <ion-icon name="mail"></ion-icon></span>
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Enter your email</label>
                </div>
                <div class="input-block">
                    <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon></span>
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" required>
                    <label for="password">Enter your password</label>
                </div>
                <p class="recover">
                    <a href="#">Recover Password</a>
                </p>
                <input type="submit" class="btn" value="Sign In" name="signIn" >
            </form>
            <div class="links">
                <p>Don't Have An Account Yet?</p>
                <button id="signUpButton">Sign Up</button>
            </div>
        </div>
        <script src="script.js"></script>

</body>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
