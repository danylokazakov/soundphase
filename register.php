<?php


if (isset($_POST['loginButton'])) {
    //login button was pressed
}
if (isset($_POST['registerButton'])) {
    //login button was pressed
    $username = $_POST['username'];
    echo $username;
}




?>


<html>

<head>
    <title>Soundphase</title>
</head>

<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. Elon Musk" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>

                <input id="loginPassword" name="loginPassword" type="password" required>
            </p>
            <button type="submit" name="loginButton">Sign in</button>
        </form>
        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. elonmusk" required>
            </p>
            <p>
                <label for="firstName">First name</label>
                <input id="username" name="username" type="text" placeholder="e.g. Elon" required>
            </p>
            <p>
                <label for="lastName">Last name</label>
                <input id="lastName" name="lastName" type="text" placeholder="e.g.Musk" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. elonmusk@gmail.com" required>
            </p>
            <p>
                <label for="email2">Confirm email</label>

                <input id="email2" name="email2" type="password" placeholder="e.g. elonmusk@gmail.com" required>

            </p>
            <p>
                <label for="password">Password</label>

                <input id="password" name="password" type="password" placeholder="Your password" required>

            </p>
            <p>
                <label for="password2">Confirm password</label>

                <input id="password2" name="password2" type="password" placeholder="Your password" required>

            </p>
            <button type="submit" name="registerButton">Sign up</button>
        </form>
    </div>
</body>

</html>