<?php
include("includes/classes/Account.php");
include("includes/classes/Constants.php");
$account = new Account();

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
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
                <?php echo $account->getError(Constants::$usernameCharacters);  ?>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. elonmusk" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$firstNameCharacters);  ?>
                <label for="firstName">First name</label>
                <input id="firstName" name="firstName" type="text" placeholder="e.g. Elon" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$lastNameCharacters);  ?>
                <label for="lastName">Last name</label>
                <input id="lastName" name="lastName" type="text" placeholder="e.g.Musk" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$emailsDoNotMatch);  ?>
                <?php echo $account->getError(Constants::$emailInvalid);  ?>

                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. elonmusk@gmail.com" required>
            </p>
            <p>

                <label for="email2">Confirm email</label>
                <input id="email2" name="email2" type="password" placeholder="e.g. elonmusk@gmail.com" required>

            </p>
            <p>
                <?php echo $account->getError(Constants::$passwordsDoNotMatch);  ?>
                <?php echo $account->getError(Constants::$passwordNotAlphanumeric);  ?>
                <?php echo $account->getError(Constants::$passwordCharacters);  ?>

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