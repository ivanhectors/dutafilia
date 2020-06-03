<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>

  <link rel="stylesheet" href="css/style.css">


</head>

<body>


  <!-- Form-->
  <div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
      <div class="form-header">
        <img class="tengah" src="duta_filia.png" />
        <h1 style="text-align: center">Account Login</h1>
      </div>
      <div class="form-content">
        <form>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required="required" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required="required" />
          </div>
          <div class="form-group">
            <label class="form-remember">
            <input type="checkbox"/>Remember Me
          </label><a class="form-recovery" href="forgotpassword.html">Forgot Password?</a>
          </div>
          <div class="form-group">
            <button type="submit" name="login" value="Masuk">Log In</button>
            <button href="projectwebdutafiliaukdw/index.html" type="cencel" style="background-color:red">Cencel</button>
          </div>
          <a> Belum memiliki Akun?</a><a href="daftar.html" style="color:blue"> Daftar Sekarang!</a>
        </form>
      </div>
    </div>

    <script src="js/index.js"></script>


</body>

</html>