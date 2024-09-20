<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking Credientials</title>
</head>
<body>
    <section>
        <h1>Checking Credientials</h1>
        <form action="credientials.php" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required><br><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </section>
    
</body>
</html>