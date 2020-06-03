<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Pengguna</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style type="text/css">
    	 .inf-content{
    border:1px solid #DDDDDD;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
}			                                                      
    </style>


</head>

           
<body class="bg-light">

<div class="container mt-6">
    <div class="row">
        <div class="col-md-6">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="timeline.php">Tulis Artikel</a> | <a href="logout.php"> Logout</a></p>
                    
                </div>
         <div class="col-md-11">
            <h2 >Profile </h2>
            <div class="table-responsive">
            <table class="table table-condensed table-responsive table-user-information">
                <tbody>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                NIM                                                
                            </strong>
                        </td>
                        <td class="text-primary" >
                        <?php echo $_SESSION['user']['username'] ?>
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                Nama Lengkap                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo $_SESSION['user']['name'] ?> 
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                Tanggal Lahir                                               
                            </strong>
                        </td>
                        <td class="text-primary">
-
                        </td>
                    </tr>
 
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                Jabatan                                                
                            </strong>
                        </td>
                        <td class="text-primary">
-
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                Email                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo $_SESSION['user']['email'] ?>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                Akun Dibuat                                               
                            </strong>
                        </td>
                        <td class="text-primary">
-
                        </td>
                    </tr>
 
                    

                </tbody>
                
            </table>

            </div>
        </div>
    </div>
</div>
</div>                                


            
 

</body>
</html>
<?php
require_once("footer.php");
?>