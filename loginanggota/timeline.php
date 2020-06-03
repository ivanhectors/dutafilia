
<?php 
require_once("auth.php"); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Pengguna</title>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="profile.php">Profile</a> | <a href="logout.php"> Logout</a></p>
                </div>
                
            </div>

            
        </div>


        <div class="col-md-8">
        <h4>Kirim Artikel Baru </h4>
        <div class="form-group">
                <label for="name">Judul Artikel : </label>
                <input class="form-control" type="text" name="name" placeholder="Isi Judul Artikel Disini..." />
            </div>
        <h6>Isi Artikel :</h6>
        <div class="kotak">
		<textarea class="ckeditor" id="ckeditor"></textarea>
        <br/>
        <h6>Artikel Untuk : </h6>




  <form>
    <label class="radio-inline">
      <input type="radio" name="optradio"> Informasi Kesahatan &nbsp&nbsp&nbsp&nbsp&nbsp
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio"> Informasi Umum &nbsp&nbsp&nbsp&nbsp&nbsp
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio"> Event &nbsp&nbsp&nbsp&nbsp&nbsp
    </label>
  </form>
  <br></br>
        <button class="tombol" href="#" >Kirim</button>
        <button class="tombol" href="#" style="background-color:#e92222;">Close</button>
    </div>
    

  

<!--
            for($i=0; $i < 6; $i++){ ?>
            <div class="card mb-3">
                <div class="card-body">
                //contoh menamilkan hasil kiriman.
                </div>
            </div>
           
-->         
        </div>
    
    </div>
</div>

</body>
</html>
<?php
require_once("footer.php");
?>