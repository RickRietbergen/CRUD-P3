<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlog Pagina</title>
    <!--link css-->
    <link rel="stylesheet" href="../CSS/styles.css"/>
</head>
<body>
    <main class="inlog-main">
        <h2>Sign In</h2>
        <form action="authenticate.php" method="POST">
            <label id="" for="">Full Name</label>
          <input
            id="username"
            type="text"
            name="USERNAME"
            maxlength="25"
            placeholder="Enter Username:"
            required
          />

          <label id="" for="">Full Name</label>
          <input
            id="password"
            type="text"
            name="PASSWORD"
            maxlength="25"
            placeholder="Enter Password:"
            required
          />
          <input id="login-submit" type="submit" value="Login">
        </form>
    </main>
</body>
</html>