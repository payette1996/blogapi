<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>Blogapi</title>
</head>
<body>
<form action="login.php" method="POST">
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>
  
  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  </div>
  
  <div>
    <input type="submit" value="Login">
  </div>
</form>

</body>
</html>