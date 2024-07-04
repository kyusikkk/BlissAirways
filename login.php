<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            header("Location: home.php");
            exit();
        } else {
            $error_message = "Invalid email or password.";
        }
    } else {
        $error_message = "Invalid email or password.";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bliss Airways</title>
    <link rel="icon" type="image/x-icon" href="assets/plane.png">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
  <body>
   <style>
    body{
        background-image: url('assets/pascal-meier-UYiesSO4FiM-unsplash.jpg');
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        height:100%;
        font-family: 'Poppins', sans-serif;
    }
    .sub {
      background-color: #141C24;
      color: white;
      height: 40px;
      border-radius: 10px;
    }
   </style>
   <div class="login-form">
    <div class="wrapper">
        <div class="container main">
          <div class="row">
            <div class="col-md-6 side-image">
              <img src="" alt="">
              <div class="text">
                <p>Experience the Sky in Style. - <i>Bliss Airways</i></p>
              </div>
            </div>
            <div class="col-md-6 right">
              <div class="input-box">
                <header>Login</header>
                <?php if(isset($error_message)) { echo "<div class='alert alert-danger'>$error_message</div>"; } ?>
                <form action="login.php" method="POST">
                <div class="input-field"> 
                  <input type="text" class="input" id="email" name="email" required autocomplete="off">
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="password" class="input" name="password" id="password" required>
                  <label for="password">Password</label>
                </div>
                <div class="input-field">
                  <input type="submit" class="sub" value="Log In">
                </div>
                <div class="signin">
                  <span>Create an Account? <a href="register.php">Sign up here</a></span>
                </div>
                </form>
              </div> 
            </div>
          </div>
        </div>
    </div>
   </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>