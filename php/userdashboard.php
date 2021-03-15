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
           $contact = $_SESSION["alogin"];
          //  Check that the author is logged in to the section or not starts here 
            $sql = "SELECT user.id,user.profile_picture,user.name,user.fathername,user.mothername,user.village,user.post,user.word,user.upozilla,user.zilla,user.country,user.nationality,user.p_village,user.p_post,user.p_word,user.p_upozilla,user.p_zilla,user.p_country,user.p_nationality,user.bloodgroup,user.religion,user.height,user.weight,user.color,user.contact,user.password,user.occupation,user.exam_name,user.education_group,user.passing_year,user.gpa,user.board,user.institute,user.father_work,user.father_contact,user.mother_contact,user.brother_details,user.special_quality,user.patri_details,user.gallery_image_1,user.gallery_image_2,user.gallery_image_3 from user where contact='$contact'"; 
            $query = $dbh->prepare($sql); 
            $query->execute(); 
            $results=$query->fetchAll(PDO::FETCH_OBJ); 
            $cnt=1;
            if($query->rowCount() > 0) 
            {
              foreach($results as $result) {
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
</head>

<body>
        <!-- Details -->

        <div class="container">
        <form id="logreg-forms" class="form-signup marginbtm" method="post" enctype="multipart/form-data">
    <div class="logo-container">
    </div>
    <h2 style="text-align:center;font-size:18px;padding:5px;"><b>রেজিষ্ট্রেশন ফরম তথ্য </b></h2>

       <div style="font-size:11px;" class="input-group">
        <div class="col-sm-6">
           <img style="width:100px;height:100px;" src="../images/<?php echo htmlentities($result->profile_picture) ?>">
        </div>
    </div>
     <input style="font-size:11px;" type="text" class="form-control" name="name" placeholder="নাম: <?php echo htmlentities($result->name)?>" disabled>

    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="fathername"
            placeholder="পিতা: <?php echo htmlentities($result->fathername)?>" disabled>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="mothername"
            placeholder="মাতা:  <?php echo htmlentities($result->mothername)?>" disabled>
    </div>
    <!-- Permanent Address -->
    <br>
    <h6 style="font-size:15px"><b>স্থায়ী ঠিকানাঃ</b></h6>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="village"
            placeholder="গ্রাম: <?php echo htmlentities($result->village)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="post"
            placeholder="পোস্ট: <?php echo htmlentities($result->post)?>" disabled>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="word"
            placeholder="ইউ/পি/ ওয়ার্ড : <?php echo htmlentities($result->word)?>" disabled>
    </div>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="upozilla"
            placeholder="উপজেলা/সিটি: <?php echo htmlentities($result->upozilla)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="zilla"
            placeholder="জেলা : <?php echo htmlentities($result->zilla)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="country"
            placeholder="দেশ : <?php echo htmlentities($result->country)?>" disabled>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="nationality"
            placeholder="জাতীয়তা : <?php echo htmlentities($result->nationality)?>" disabled>
    </div>
    <!-- Permanent Address -->
    <!-- Present Address -->
    <br>
    <h6 style="font-size:15px"><b>বর্তমান ঠিকানাঃ</b></h6>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="p_village"
            placeholder="গ্রাম: <?php echo htmlentities($result->p_village)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="p_post"
            placeholder="পোস্ট : <?php echo htmlentities($result->p_post)?>" disabled>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="p_word"
            placeholder="ইউ/পি/ ওয়ার্ড : <?php echo htmlentities($result->p_word)?>" disabled>
    </div>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="p_upozilla"
            placeholder="উপজেলা/সিটি : <?php echo htmlentities($result->p_upozilla)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="p_zilla"
            placeholder="জেলা : <?php echo htmlentities($result->p_zilla)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="p_country"
            placeholder="দেশ : <?php echo htmlentities($result->p_country)?>" disabled>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="p_nationality"
            placeholder="জাতীয়তা : <?php echo htmlentities($result->p_nationality)?>" disabled>
    </div>
    <!-- Present Address -->

    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="bloodgroup"
            placeholder="রক্তের  গ্রুপ : <?php echo htmlentities($result->bloodgroup)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="religion"
            placeholder="ধর্ম : <?php echo htmlentities($result->religion)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="height"
            placeholder="উচ্চতা <?php echo htmlentities($result->height)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="weight"
            placeholder="ওজন : <?php echo htmlentities($result->weight)?>" disabled>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="color"
            placeholder="গায়ের রং <?php echo htmlentities($result->color)?>" disabled>
    </div>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="contact"
            placeholder="মোবাইল নাম্বার :<?php echo htmlentities($result->contact)?>" disabled>

        <input style="font-size:11px;" type="text" class="form-control col-sm-6" name="occupation"
            placeholder="আপনার পেশা :<?php echo htmlentities($result->occupation)?>" disabled>
    </div>

    <!-- Education  -->
    <br>
    <h6 style="font-size:15px"><b>শিক্ষাগত যোগ্যতার বিবরণ:</b></h6>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="exam_name"
            placeholder="পরীক্ষার নাম : <?php echo htmlentities($result->exam_name)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="education_group"
            placeholder="বিভাগ শাখা :<?php echo htmlentities($result->education_group)?>" disabled>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="passing_year"
            placeholder="পাশের সন : <?php echo htmlentities($result->passing_year)?>" disabled>
    </div>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="gpa"
            placeholder="প্রাপ্ত জিপিএ :<?php echo htmlentities($result->gpa)?>" disabled>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="board"
            placeholder="বোর্ড : <?php echo htmlentities($result->board)?>" disabled>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="institute"
            placeholder="শিক্ষা প্রতিষ্ঠানের নাম : <?php echo htmlentities($result->institute)?>" disabled>
    </div>
    <!-- Education  -->

    <!-- Other Information  -->
    <textarea style="font-size:11px;" class="form-control" id="exampleFormControlTextarea1" rows="5" name="father_work"
        placeholder="আপনার পিতার পেশা কর্মস্থলের বিবরণ : <?php echo htmlentities($result->father_work)?>"></textarea>
    <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="father_contact"
        placeholder="পিতা-মাতার মোবাইল নাম্বার (জীবিত থাকলে অবশ্যই): <?php echo htmlentities($result->father_contact)?>" disabled>
    <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="mother_contact"
        placeholder="আপনার মাতার মোবাইল নাম্বার (জীবিত থাকলে অবশ্যই) : <?php echo htmlentities($result->mother_contact)?>" disabled>
    <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="mother_occupation"
        placeholder="আপনার মাতার পেশা : <?php echo htmlentities($result->mother_occupation)?>" disabled>
    <textarea style="font-size:11px;" class="form-control" id="exampleFormControlTextarea1" rows="5" name="brother_details"
        placeholder="আপনার ভাই-বোন কয়জন বিস্তারিত : <?php echo htmlentities($result->brother_details)?>"></textarea><br>
    <textarea style="font-size:11px;" class="form-control" id="exampleFormControlTextarea1" rows="5" name="special_quality"
        placeholder="আপনার বিশেষ গুণ কি যা আপনার অপরপক্ষকে মুগ্ধ করতে পারে : <?php echo htmlentities($result->special_quality)?>"></textarea><br>
    <textarea style="font-size:11px;" class="form-control" id="exampleFormControlTextarea1" rows="5" name="patri_details"
        placeholder="আপনি কেমন পাত্র পাত্রী চান? উচ্চতা, বয়স, পেশা, গায়ের রং কেমন চান তা বিস্তারিত লিখুন :<?php echo htmlentities($result->patri_details)?>"></textarea><br>
    <!-- Other Information  -->

    <!-- Gallery Images -->
    <h6 style="font-size:15px"><b>Upload Gallery Images</b></h6>
    <div style="font-size:11px;" class="input-group">
        <label class="col-sm-6 col-form-label" for="formGroupExampleInput"><b>Gallery Image 1</b></label>
        <div class="col-sm-6">
        <img style="width:100px;height:100px;" src="../images/<?php echo htmlentities($result->gallery_image_1) ?>">
        </div>
    </div>
    <div style="font-size:11px;" class="input-group">
        <label class="col-sm-6 col-form-label" for="formGroupExampleInput"><b>Gallery Image 2</b></label>
        <div class="col-sm-6">
        <img style="width:100px;height:100px;" src="../images/<?php echo htmlentities($result->gallery_image_2) ?>">
        </div>
    </div>
    <div style="font-size:11px;" class="input-group">
        <label class="col-sm-6 col-form-label" for="formGroupExampleInput"><b>Gallery Image 3</b></label>
        <div class="col-sm-6">
        <img style="width:100px;height:100px;" src="../images/<?php echo htmlentities($result->gallery_image_3) ?>">
        </div>
    </div>
    <!-- Gallery Images -->
    <br>
     <button class="btn btn-info btn-sm btn-block" onclick="window.print()">Print this page</button>
  </form>
    <a href="../index.php">Go back </a>
        </div>
    <!-- Details -->

    </div>
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
    <!-- Script file  -->
</body>

</html>
<?php 
              }
            }
else {
  echo "<script>alert('You are not a user.Try to log in as an user');</script>";
//   header("refresh:0;url=../login");
}
}
?>