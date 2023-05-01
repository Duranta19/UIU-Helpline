<?php
include('components/dbConnect.php');

if (isset($_POST['signup'])) {
  $name = $_POST['name'];
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];

  $pic_name = $_FILES['profileImg']['name'];
  $pic_loc = $_FILES['profileImg']['tmp_name'];
  $upload_loc = 'img/' . $pic_name;

  if ($pass == $cpass && $username != "" && $name != "" && $pic_name != "") {
    $sql = "INSERT INTO `accounts` (`name`, `username`, `password`, `c_password`, `photo_loc`) VALUES ('$name', '$username', '$pass ', '$cpass ', '$pic_name')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      move_uploaded_file($pic_loc, $upload_loc);
    }
  } else {
    $showError = 'password do not match';
  }

  header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SignUp</title>
  <link rel="stylesheet" href="signup2.css" />
</head>

<body>

  <?php
  global $showAlret;
  global $showError;
  if ($showAlret) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your Account Has Been Created Successfully</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
  }
  if ($showError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Something Wrong!</strong> ' . $showError . '
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
  <div class="card">
    <div class="left">
      <img src="img/canteen.jpg" alt="" class="limg" />
    </div>
    <div class="right">
      <h1 style="margin-left: 40%;margin-top: 15px">Sign Up</h1>
      <hr>
      <form action="signup.php" method="post" enctype="multipart/form-data">
        <table>
          <tr>
            <td>
              <span>Name</span>
            </td>
          </tr>
          <tr>
            <td>
              <input type="text" name="name" id="name" />
            </td>
          </tr>
          <tr>
            <td>
              <span>Student Id/Username</span>
            </td>
          </tr>
          <tr>
            <td>
              <input type="text" name="username" id="username" />
            </td>
          </tr>
          <tr>
            <td>
              <span>Password</span>
            </td>
          </tr>
          <tr>
            <td>
              <input type="password" name="pass" id="pass" />
            </td>
          </tr>
          <tr>
            <td>
              <span>Confirm Password</span>
            </td>
          </tr>
          <tr>
            <td>
              <input type="password" name="cpass" id="cpass" />
            </td>
          </tr>
          <tr>
            <td> <label for="">Choose picture </label>
              <input type="file" id="img" name="profileImg" accept="image/*" class="imgin">
            </td>
          </tr>
          <tr>
            <td align="center" colspan="2">
              <button id="myButton" type="submit" name="signup">Sign Up</button>
            </td>
          </tr>

        </table>
      </form>
    </div>
  </div>
</body>

</html>
<footer style="
            text-align: center;
            padding: 5px;
            background-color: #15252B;
            color: white;
        ">
        <p style="text-align: center; color: white;"><b>UIU Helpline</b></p>
        <p style="text-align: center; color: white;">www.uiuhelpline.com</p>
        <p style="text-align: center; color: white;">© ALL RIGHTS RESERVE BY TEAM VOID</p>
    </footer>