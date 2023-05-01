<?php
$login = false;
$loginError = '';
if (isset($_POST['login'])) {
  include('components/dbConnect.php');
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  echo $username;
  echo $pass;
  if ($username == "" or $pass == "") {
    $loginError = "Please Enter username and password";
    header('Location: login.php');
  }

  $sql2 = "SELECT * FROM `accounts` WHERE username like '$username'; ";
  $result = mysqli_query($conn,$sql2);
  $numRows = mysqli_num_rows($result);
  $data = mysqli_fetch_assoc($result);

  if ($numRows == 1) {
      if (strcmp($pass,$data['password'])) {
        $login = true;
        session_start();
        $_SESSION['username'] = $data['name'];
        $_SESSION['userID'] = $data['userid'];
        $_SESSION['loggedin'] = true;
        echo "successfull";
        header('Location: dashboard.php');
      } else {
        $loginError = "Invalid Username or Password";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="login.css" />
</head>

<body style="background-color: white;">

  <?php
  if ($login) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Login Successfull!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> ';
  }
  if ($loginError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $loginError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  }
  ?>

  <div class="cover">
    <img src="img/uiu logo.png" alt="" />
    <h1>UIU Helpline</h1>
    <br />
    <p>
      A solution center where students of UIU will find proper <br />
      guidelines, resources and help
    </p>
  </div>
  <img src="img/m2.jpg" class="limg" alt="" />
  <div class="right">
    <form action="login.php" method="post" style="position: relative;">
      <h1 style="margin-left: 0%; margin-bottom: 10px"><u>Login</u></h1>
      <table>
        <tr>
          <td>
            <label for="username">Username/Student Id</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" name="username" id="username" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="password">Password</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="password" name="pass" id="pass" />
          </td>
        </tr>
        <tr>
          <td>
            <a href="" class="a1">Forget Password?</a>
          </td>
        </tr>
        <tr>
          <td align="center" colspan="2">
            <!-- <button> -->
              <!-- <a href="#" name="login" value="login">Log In </a> -->
            <!-- </button> -->
            <input style="width:50%; background-color:rgb(26, 75, 125);color:white;" type="submit" value="Login" name="login">
          </td>
        </tr>
        <tr>
          <td align="center" colspan="2">
            <button>
              <a href="signup.php">Sign Up </a>
            </button>
            <hr />
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>