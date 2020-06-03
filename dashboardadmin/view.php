<?php 
    require_once("headerpage.php");
?>

<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Data Anggota</li>
</ol>
      <div class="row">
        <div class="col-12">
          <h1 style="text-align:center">Data Anggota UKM Duta Filia UKDW</h1>
 
        </div>
      </div>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dutafilia";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
  
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$sql = "SELECT * FROM pengguna ORDER BY username ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql);  
?> 

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script>
</script>
</head>
<body>
<div class="container" style="padding-top:20px;">
<table class="table table-bordered">  
<thead>  
<tr>  
<th>NIM</th>  
<th>Nama Mahasiswa</th>
<th>Email</th>  
<th>No. Telpon</th>
<th>Status</th>

</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
            <tr>  
            <td><?php echo $row["username"]; ?></td>  
            <td><?php echo $row["nama"]; ?></td>  
            <td><?php echo $row["email"]; ?></td> 
            <td><?php echo $row["telp"]; ?></td> 
            <td><?php echo $row["status"]; ?></td> 
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>
  


<?php 
    require_once("footerpage.php");
?>