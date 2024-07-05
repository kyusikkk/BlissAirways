<?php
include 'config.php';

$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if (strlen($password) < 8) {
        $error_message = "Password must be at least 8 characters long.";
    } else {
        $check_email_query = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $check_email_query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $error_message = "This email is already registered.";
        } else {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashed_password);

            if (mysqli_stmt_execute($stmt)) {
                header("Location: login.php");
                exit();
            } else {
                $error_message = "Error: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bliss Airways | Register</title>
    <link rel="icon" type="image/x-icon" href="assets/icon.png">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
   <style>
    body {
        background-image: url('assets/pascal-meier-UYiesSO4FiM-unsplash.jpg');
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        height: 100%;
        font-family: 'Poppins', sans-serif;
    }
    .sub {
      background-color: #141C24;
      color: white;
      height: 40px;
      border-radius: 10px;
    }
   </style>
   <div class="signup_form">
    <div class="wrapper">
        <div class="container main">
          <div class="row">
            <div class="col-md-6 side-image">
              <div class="text">
                <p>Experience the Sky in Style. - <i>Bliss Airways</i></p>
              </div>
            </div>
            <div class="col-md-6 right">
              <div class="input-box">
                <header style="font-size: 20px;">Create Account</header>
                <?php if(!empty($error_message)): ?>
                    <div class="alert alert-danger"><?php echo $error_message; ?></div>
                <?php endif; ?>
                <form action="" method="POST">
                    <div class="input-field">
                      <input type="text" class="input" id="firstName" name="firstname" required autocomplete="off">
                      <label for="firstName">First Name</label>
                    </div>
                    <div class="input-field">
                      <input type="text" class="input" id="lastName" name="lastname" required autocomplete="off">
                      <label for="lastName">Last Name</label>
                    </div>
                    <div class="input-field">
                      <input type="text" class="input" id="email" name="email" required autocomplete="off">
                      <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                      <input type="password" class="input" id="password" name="password" required>
                      <label for="password">Password</label>
                    </div>
                    <div class="input-field">
                      <input type="submit" class="sub" value="Sign Up">
                    </div>
                    <div class="signin">
                      <span>Already have an account? <a href="login.php">Log in here</a></span>
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