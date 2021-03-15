<?php 
session_start();
error_reporting(E_ALL);
include('config/config.php');
include('php/functions.php');
if(isset($_POST['author-login']))   
{ 
    $contact = $_POST['contact']; 
    $password=md5($_POST["input-password"]); 
    $sql ="SELECT contact,password FROM user WHERE contact=:contact and password=:password";
    $query= $dbh -> prepare($sql); 
    $query-> bindParam(':contact', $contact, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();  
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0) 
    {
    $_SESSION['alogin']=$_POST['contact'];
    echo "<script>alert('Logged in Success');</script>";
    echo "<script type='text/javascript'> document.location = 'php/userdashboard.php'; </script>";
    } else{ 
        $contact = $_POST['contact']; 
        $password=md5($_POST["input-password"]); 
        $sql ="SELECT id,email,contact FROM admin WHERE email=:contact and password=:password";
        $query= $dbh -> prepare($sql); 
        $query-> bindParam(':contact', $contact, PDO::PARAM_STR);
        $query-> bindParam(':password', $password, PDO::PARAM_STR);
        $query-> execute();  
        $results=$query->fetchAll(PDO::FETCH_OBJ);

        if($query->rowCount() > 0)  {
            $_SESSION['alogin']=$_POST['contact'];
            echo "<script>alert('Logged in Success');</script>";
            echo "<script type='text/javascript'> document.location = 'php/admin_dashboard.php'; </script>";
        }else{
            echo "<script>alert('Invalid Details.Or, You are not a activate your account');</script>";
            header("refresh:0;url=login.php");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login form </title>
</head>

<body>
    <!-- Navbar -->
    <?php navbar(); ?>
    <!-- Navbar  -->
    <div class="container">
        <!-- Registration form -->
        <div style="width:70%;text-align:center;margin-left:auto;margin-right:auto;">
            <form id="logreg-forms" class="form-signin marginbtm" method="post">
                <h3 class="h3 mb-3 font-weight-normal" style="text-align: center;font-size:18px; padding:5px;"><b> SIGN IN</b></h3>
                <input style="font-size:13px;" type="text" class="form-control" name="contact" placeholder="Enter your contact number" required="">
                <input style="font-size:13px;" type="password" id="inputPassword"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="কমপক্ষে একটি নম্বর এবং একটি বড় হাতের অক্ষর এবং ছোট হাতের অক্ষর এবং কমপক্ষে 8 বা ততোধিক অক্ষর থাকতে হবে"
                    name="input-password" class="form-control" placeholder="Password" required>
                <button class="btn btn-info btn-block" name="author-login" type="submit">লগ ইন</button>
            </form>
        </div>
        <!-- Registration form -->
    </div>


</body>
<!-- Script file  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
</script>
<!-- Script file  -->

</html>