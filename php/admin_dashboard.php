<?php
session_start();
error_reporting(E_ALL);  
include('../config/config.php');  
include('functions.php');
if(strlen($_SESSION['alogin'])=="")  
    {     
    header("Location:../login.php");  
    }  
    else  
    {  
           $email = $_SESSION["alogin"];
          //  Check that the author is logged in to the section or not starts here 
            $sql = "SELECT admin.id,admin.username,admin.fullname,admin.password,admin.email,admin.contact from admin where email='$email '"; 
            $query = $dbh->prepare($sql); 
            $query->execute(); 
            $results=$query->fetchAll(PDO::FETCH_OBJ); 
            $cnt=1;
            if($query->rowCount() > 0) 
            {
          // Check that the author is logged in to the section or not ends here 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widt
    h=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
</head>

<body class="container">

<table id="dtBasicExample" class="table table-striped table-bordered table-hover" cellspacing="0">

<thead>
    <tr>
        <th>Name</th>
        <th>Contact</th>
    </tr>
</thead>

<tbody id="myTable-admin">
    <?php $sql = "SELECT user.id,user.profile_picture,user.name,user.fathername,user.mothername,user.village,user.post,user.word,user.upozilla,user.zilla,user.country,user.nationality,user.p_village,user.p_post,user.p_word,user.p_upozilla,user.p_zilla,user.p_country,user.p_nationality,user.bloodgroup,user.religion,user.height,user.weight,user.color,user.contact,user.password,user.occupation,user.exam_name,user.education_group,user.passing_year,user.gpa,user.board,user.institute,user.father_work,user.father_contact,user.mother_contact,user.brother_details,user.special_quality,user.patri_details,user.gallery_image_1,user.gallery_image_2,user.gallery_image_3 from user";
        $query = $dbh->prepare($sql); 
        $query->execute(); 
        $results=$query->fetchAll(PDO::FETCH_OBJ);  
        $cnt=1;
        if($query->rowCount() > 0) 
        {
        foreach($results as $result) 
        {   ?>
    <tr>
        <td><a href="details.php?contact=<?php echo htmlentities($result->contact)?>"><?php echo htmlentities($result->name);?></a></td>
        <td><?php echo htmlentities($result->contact);?></td>

    </tr>


</tbody>
</table>
</body>
<!-- Script file  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="../js/jquery.dataTables.min.js"></script>
<!-- Script file  -->

</html>
<?php 
        }}
else {
  echo "<script>alert('You are not a user.Try to log in as an user');</script>";
//   header("refresh:0;url=../login");
}
            }}
?>