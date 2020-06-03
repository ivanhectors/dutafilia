<?php 
    require_once("headerpage.php");
?>

<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Tentang</li>
</ol>
      <div class="row">
        <div class="col-12">
          <h1 style="text-align:center">Profile Admin</h1>
 
        </div>
      </div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";

if(!isset($_SESSION['sess_user'])){
$result = viewProfileUser($_SESSION['sess_user']);
    $rows = mysqli_num_rows($result);
    if($rows > 0){
      $dataProfile = mysqli_fetch_assoc($result);
      $_SESSION['sess_nama']    = $dataProfile['fullname']; 
      $_SESSION['sess_usernm']  = $dataProfile['username'];
      $_SESSION['sess_email']   = $dataProfile['email'];
      $_SESSION['sess_alamat']  = $dataProfile['address'];
      $_SESSION['sess_tgl']     = $dataProfile['dates'];
      $_SESSION['sess_bln']     = $dataProfile['month'];
      $_SESSION['sess_thn']     = $dataProfile['year'];
      $_SESSION['sess_kelamin'] = $dataProfile['sex'];
      $_SESSION['sess_hbng']    = $dataProfile['relative_status'];
      $_SESSION['sess_tentang'] = $dataProfile['about'];
      $_SESSION['sess_photo']   = $dataProfile['photo'];
    }
}else{
    header('Location:index.php');
}
    
<div class="about-user">
  <h1><span class="fa fa-info-circle"></span> Biodata Anda</h1>
  <hr>
  <table >
    <tr>
      <td>Nama Lengkap</td>
      <td>: <?= $_SESSION['sess_nama']; ?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td>: @<?= $_SESSION['sess_usernm']; ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>: <?= $_SESSION['sess_email']; ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>: <?= $_SESSION['sess_alamat']; ?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>: <?= $_SESSION['sess_tgl']." ".$_SESSION['sess_bln'] = $dataProfile['month']." ".
      $_SESSION['sess_thn']; ?></td>
    </tr>
    <tr>
      <td>Kelamin</td>
      <td>: <?= $_SESSION['sess_kelamin']; ?></td>
    </tr>
    <tr>
      <td>Status Hubungan</td>
      <td>: <?= $_SESSION['sess_hbng']; ?></td>
    </tr>
  </table>
</div>
    ?>


<?php 
    require_once("footerpage.php");
?>