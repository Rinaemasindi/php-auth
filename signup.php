<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="includes/Signup.php" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="email" name="email" id="email" placeholder="email"><br>
        <input type="password" name="password" id="password" placeholder="*****"><br>
        <input type="password" name="password_confirm" id="password_confirm" placeholder="*****"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="index.php">Already have an account? Log in</a>
</body>
</html>