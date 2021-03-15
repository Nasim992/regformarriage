<?php 
// Navbar functions 
function navbar() {
    ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><b>Marriage Registration</b></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">User</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php
}
// Navbar functions 

// Registration form 
function registration_form() {
    ?>
   <form id="logreg-forms" class="form-signup marginbtm" method="post" enctype="multipart/form-data">
    <div class="logo-container">
    </div>
    <h2 style="text-align:center;font-size:18px;padding:5px;"><b>রেজিষ্ট্রেশন ফরম তথ্য </b></h2>

    <div style="font-size:11px;" class="input-group">
        <label class="col-sm-6 col-form-label" for="formGroupExampleInput"><b>Upload Profile Picture</b></label>
        <div class="col-sm-6">
            <input type="file" class="form-control-file" name="profile_image" accept="image/*" required>
        </div>
    </div>

    <input style="font-size:11px;" type="text" class="form-control" name="name" placeholder="নাম" required="">

    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="fathername"
            placeholder="পিতা" required>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="mothername"
            placeholder="মাতা" required>
    </div>
    <!-- Permanent Address -->
    <h6 style="font-size:15px"><b>স্থায়ী ঠিকানাঃ</b></h6>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="village"
            placeholder="গ্রাম" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="post"
            placeholder="পোস্ট" required>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="word"
            placeholder="ইউ/পি/ ওয়ার্ড" required>
    </div>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="upozilla"
            placeholder="উপজেলা/সিটি" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="zilla"
            placeholder="জেলা" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="country"
            placeholder="দেশ" required>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="nationality"
            placeholder="জাতীয়তা" required>
    </div>
    <!-- Permanent Address -->
    <!-- Present Address -->
    <h6 style="font-size:15px"><b>বর্তমান ঠিকানাঃ</b></h6>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="p_village"
            placeholder="গ্রাম" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="p_post"
            placeholder="পোস্ট" required>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="p_word"
            placeholder="ইউ/পি/ ওয়ার্ড" required>
    </div>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="p_upozilla"
            placeholder="উপজেলা/সিটি" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="p_zilla"
            placeholder="জেলা" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="p_country"
            placeholder="দেশ" required>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="p_nationality"
            placeholder="জাতীয়তা" required>
    </div>
    <!-- Present Address -->

    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="bloodgroup"
            placeholder="রক্তের  গ্রুপ" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="religion"
            placeholder="ধর্ম" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="height"
            placeholder="উচ্চতা" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="weight"
            placeholder="ওজন" required>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="color"
            placeholder="গায়ের রং" required>
    </div>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="contact"
            placeholder="মোবাইল নাম্বার" required>
            <input style="font-size:11px;" type="password" class="form-control col-sm-6 ml-1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="কমপক্ষে একটি নম্বর এবং একটি বড় হাতের অক্ষর এবং ছোট হাতের অক্ষর এবং কমপক্ষে 8 বা ততোধিক অক্ষর থাকতে হবে" name="password"
            placeholder="Account password" required>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6" name="occupation"
            placeholder="আপনার পেশা" required>
    </div>

    <!-- Education  -->
    <h6 style="font-size:15px"><b>শিক্ষাগত যোগ্যতার বিবরণ:</b></h6>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="exam_name"
            placeholder="পরীক্ষার নাম" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="education_group"
            placeholder="বিভাগ শাখা" required>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="passing_year"
            placeholder="পাশের সন" required>
    </div>
    <div class="input-group">
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="gpa"
            placeholder="প্রাপ্ত জিপিএ" required>
        <input style="font-size:11px; margin-right:10px;" type="text" class="form-control col-sm-6" name="board"
            placeholder="বোর্ড" required>
        <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="institute"
            placeholder="শিক্ষা প্রতিষ্ঠানের নাম" required>
    </div>
    <!-- Education  -->

    <!-- Other Information  -->
    <textarea style="font-size:11px;" class="form-control" id="exampleFormControlTextarea1" rows="5" name="father_work"
        placeholder="আপনার পিতার পেশা কর্মস্থলের বিবরণ"></textarea>
    <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="father_contact"
        placeholder="পিতা-মাতার মোবাইল নাম্বার (জীবিত থাকলে অবশ্যই)" required>
    <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="mother_contact"
        placeholder="আপনার মাতার মোবাইল নাম্বার (জীবিত থাকলে অবশ্যই)" required>
    <input style="font-size:11px;" type="text" class="form-control col-sm-6 ml-1" name="mother_occupation"
        placeholder="আপনার মাতার পেশা" required>
    <textarea style="font-size:11px;" class="form-control" id="exampleFormControlTextarea1" rows="5" name="brother_details"
        placeholder="আপনার ভাই-বোন কয়জন বিস্তারিত"></textarea><br>
    <textarea style="font-size:11px;" class="form-control" id="exampleFormControlTextarea1" rows="5" name="special_quality"
        placeholder="আপনার বিশেষ গুণ কি যা আপনার অপরপক্ষকে মুগ্ধ করতে পারে"></textarea><br>
    <textarea style="font-size:11px;" class="form-control" id="exampleFormControlTextarea1" rows="5" name="patri_details"
        placeholder="আপনি কেমন পাত্র পাত্রী চান? উচ্চতা, বয়স, পেশা, গায়ের রং কেমন চান তা বিস্তারিত লিখুন"></textarea><br>
    <!-- Other Information  -->

    <!-- Gallery Images -->
    <h6 style="font-size:15px"><b>Upload Gallery Images</b></h6>
    <div style="font-size:11px;" class="input-group">
        <label class="col-sm-6 col-form-label" for="formGroupExampleInput"><b>Gallery Image 1</b></label>
        <div class="col-sm-6">
            <input type="file" class="form-control-file" name="gallery_image_1" accept="image/*" required>
        </div>
    </div>
    <div style="font-size:11px;" class="input-group">
        <label class="col-sm-6 col-form-label" for="formGroupExampleInput"><b>Gallery Image 2</b></label>
        <div class="col-sm-6">
            <input type="file" class="form-control-file" name="gallery_image_2" accept="image/*" required>
        </div>
    </div>
    <div style="font-size:11px;" class="input-group">
        <label class="col-sm-6 col-form-label" for="formGroupExampleInput"><b>Gallery Image 3</b></label>
        <div class="col-sm-6">
            <input type="file" class="form-control-file" name="gallery_image_3" accept="image/*" required>
        </div>
    </div>
    <!-- Gallery Images -->

    <button name="registration" class="btn btn-info text-white" type="submit">রেজিষ্ট্রেশন</button>
    <br>
</form>
<?php 
}
// Registration form 

// function Registration 
function registration() {
    global $dbh;
    $profile_image = $_FILES['profile_image'];
    $profile_picture = $_FILES['profile_image']['name'];
    $filetmp = $_FILES['profile_image']['tmp_name'];
    $type = $_FILES['profile_image']['type'];
    $name=$_POST['name'];
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $village = $_POST['village'];
    $post =$_POST['post'];
    $word =$_POST['word'];
    $upozilla =$_POST['upozilla'];
    $zilla =$_POST['zilla'];
    $country = $_POST['country'];
    $nationality = $_POST['nationality'];
    $p_village = $_POST['p_village'];
    $p_post = $_POST['p_post'];
    $p_word = $_POST['p_word'];
    $p_upozilla =$_POST['p_upozilla'];
    $p_zilla =$_POST['p_zilla'];
    $p_country = $_POST['p_country'];
    $p_nationality = $_POST['p_nationality'];
    $bloodgroup = $_POST['bloodgroup'];
    $religion = $_POST['religion'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $color = $_POST['color'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);
    $occupation = $_POST['occupation'];
    $exam_name = $_POST['exam_name'];
    $passing_year = $_POST['passing_year'];
    $education_group = $_POST['education_group'];
    $gpa = $_POST['gpa'];
    $board = $_POST['board'];
    $institute = $_POST['institute'];
    $father_work = $_POST['father_work'];
    $father_contact = $_POST['father_contact'];
    $mother_contact = $_POST['mother_contact'];
    $mother_occupation = $_POST['mother_occupation'];
    $brother_details = $_POST['brother_details'];
    $special_quality = $_POST['special_quality'];
    $patri_details = $_POST['patri_details'];

    $gallery_image_1 = $_FILES['gallery_image_1'];
    $gallery_image_1_name = $_FILES['gallery_image_1']['name'];
    $gallery_image_1_temp = $_FILES['gallery_image_1']['tmp_name'];
    $gallery_image_1_type = $_FILES['gallery_image_1']['type'];

    $gallery_image_2 = $_FILES['gallery_image_2'];
    $gallery_image_2_name = $_FILES['gallery_image_2']['name'];
    $gallery_image_2_temp = $_FILES['gallery_image_2']['tmp_name'];
    $gallery_image_2_type = $_FILES['gallery_image_2']['type'];

    $gallery_image_3 = $_FILES['gallery_image_3'];
    $gallery_image_3_name = $_FILES['gallery_image_3']['name'];
    $gallery_image_3_temp = $_FILES['gallery_image_3']['tmp_name'];
    $gallery_image_3_type = $_FILES['gallery_image_3']['type'];

    // echo $name;
    // echo $profile_picture;
    // echo $fathername;
    // echo $mothername;
    // echo $village;
    // echo $post;
    // echo $word;
    // echo $upozilla;
    // echo $zilla;
    // echo $nationality;
    // echo $country;
    // echo $p_village;
    // echo $p_post;
    // echo $p_word;
    // echo $p_upozilla;
    // echo $p_zilla;
    // echo $p_nationality;
    // echo $p_country;
    // echo $bloodgroup;
    // echo $religion;
    // echo $height;
    // echo $weight;
    // echo $color;
    // echo $contact;
    // echo $password;
    // echo $occupation;
    // echo $passing_year;
    // echo $gpa;
    // echo $board;
    // echo $institute;
    // echo $father_work;
    // echo $father_contact;
    // echo $mother_contact;
    // echo $mother_occupation;
    // echo $brother_details;
    // echo $patri_details;
    // echo $gallery_image_1_name;
    // echo $gallery_image_2_name;
    // echo $gallery_image_3_name;

    $sql="INSERT INTO  user(profile_picture,name,fathername,mothername,village,post,word,upozilla,zilla,country,nationality,p_village,p_post,p_word,p_upozilla,p_zilla,p_country,p_nationality,bloodgroup,religion,height,weight,color,contact,password,occupation,exam_name,education_group,passing_year,gpa,board,institute,father_work,father_contact,mother_contact,mother_occupation,brother_details,special_quality,patri_details,gallery_image_1,gallery_image_2,gallery_image_3)
    VALUES(:profile_picture,:name,:fathername,:mothername,:village,:post,:word,:upozilla,:zilla,:country,:nationality,:p_village,:p_post,:p_word,:p_upozilla,:p_zilla,:p_country,:p_nationality,:bloodgroup,:religion,:height,:weight,:color,:contact,:password,:occupation,:exam_name,:education_group,:passing_year,:gpa,:board,:institute,:father_work,:father_contact,:mother_contact,:mother_occupation,:brother_details,:special_quality,:patri_details,:gallery_image_1_name,:gallery_image_2_name,:gallery_image_3_name)";

    $query = $dbh->prepare($sql);
    $query->bindParam(':profile_picture',$profile_picture,PDO::PARAM_STR);
    $query->bindParam(':name',$name,PDO::PARAM_STR);
    $query->bindParam(':fathername',$fathername,PDO::PARAM_STR);
    $query->bindParam(':mothername',$mothername,PDO::PARAM_STR);
    $query->bindParam(':village',$village,PDO::PARAM_STR);
    $query->bindParam(':post',$post,PDO::PARAM_STR);
    $query->bindParam(':word',$word,PDO::PARAM_STR);
    $query->bindParam(':upozilla',$upozilla,PDO::PARAM_STR);
    $query->bindParam(':zilla',$zilla,PDO::PARAM_STR);
    $query->bindParam(':country',$country,PDO::PARAM_STR);
    $query->bindParam(':nationality',$nationality,PDO::PARAM_STR);
    $query->bindParam(':p_village',$p_village,PDO::PARAM_STR);
    $query->bindParam(':p_post',$p_post,PDO::PARAM_STR);
    $query->bindParam(':p_word',$p_word,PDO::PARAM_STR);
    $query->bindParam(':p_upozilla',$p_upozilla,PDO::PARAM_STR);
    $query->bindParam(':p_zilla',$p_zilla,PDO::PARAM_STR);
    $query->bindParam(':p_country',$p_country,PDO::PARAM_STR);
    $query->bindParam(':p_nationality',$p_nationality,PDO::PARAM_STR);
    $query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
    $query->bindParam(':religion',$religion,PDO::PARAM_STR);
    $query->bindParam(':height',$height,PDO::PARAM_STR);
    $query->bindParam(':weight',$weight,PDO::PARAM_STR);
    $query->bindParam(':color',$color,PDO::PARAM_STR);
    $query->bindParam(':contact',$contact,PDO::PARAM_STR);
    $query->bindParam(':password',$password,PDO::PARAM_STR);
    $query->bindParam(':occupation',$occupation,PDO::PARAM_STR);
    $query->bindParam(':exam_name',$exam_name,PDO::PARAM_STR);
    $query->bindParam(':education_group',$education_group,PDO::PARAM_STR);
    $query->bindParam(':passing_year',$passing_year,PDO::PARAM_STR);
    $query->bindParam(':gpa',$gpa,PDO::PARAM_STR);
    $query->bindParam(':board',$board,PDO::PARAM_STR);
    $query->bindParam(':institute',$institute,PDO::PARAM_STR);
    $query->bindParam(':father_work',$father_work,PDO::PARAM_STR);
    $query->bindParam(':father_contact',$father_contact,PDO::PARAM_STR);
    $query->bindParam(':mother_contact',$mother_contact,PDO::PARAM_STR);
    $query->bindParam(':mother_occupation',$mother_occupation,PDO::PARAM_STR);
    $query->bindParam(':brother_details',$brother_details,PDO::PARAM_STR);
    $query->bindParam(':special_quality',$special_quality,PDO::PARAM_STR);
    $query->bindParam(':patri_details',$patri_details,PDO::PARAM_STR);
    $query->bindParam(':gallery_image_1_name',$gallery_image_1_name,PDO::PARAM_STR);
    $query->bindParam(':gallery_image_2_name',$gallery_image_2_name,PDO::PARAM_STR);
    $query->bindParam(':gallery_image_3_name',$gallery_image_3_name,PDO::PARAM_STR);

    $query->execute();

    $results=$query->fetchAll(PDO::FETCH_OBJ);

    if($query->rowCount() > 0) 
    {         
        move_uploaded_file($filetmp,"images/".$profile_picture);
        move_uploaded_file($gallery_image_1_temp,"images/".$gallery_image_1_name);
        move_uploaded_file($gallery_image_2_temp,"images/".$gallery_image_2_name);
        move_uploaded_file($gallery_image_3_temp,"images/".$gallery_image_3_name);

    echo "<script>alert('Registration Successfull');</script>";
    // echo "<script type='text/javascript'> document.location = 'login'; </script>";
    } else{
        echo "<script>alert('Invalid Details !');</script>";
        // header("refresh:0;url=login");
    }     
    
}
// Function Registration

// Function User Login 
// Author login 
function author_login() { 
    global $dbh;
    $email = $_POST['input-email']; 
    $password=md5($_POST["input-password"]); 
    $_SESSION["email"]=$_POST['input-email'];
    $sql ="SELECT primaryemail,password,activation FROM author WHERE primaryemail=:email and password=:password and activation IS NOT NULL";
    $query= $dbh -> prepare($sql); 
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();  

    $results=$query->fetchAll(PDO::FETCH_OBJ);

    if($query->rowCount() > 0) 
    {
    $_SESSION['alogin']=$_POST['input-email'];
    echo "<script>alert('Logged in Success');</script>";
    echo "<script type='text/javascript'> document.location = 'author/dashboard'; </script>";
    } else{ 
        echo "<script>alert('Invalid Details.Or, You are not a activate your account');</script>";
        header("refresh:0;url=login");
    }
}
// Function User Login 

?>