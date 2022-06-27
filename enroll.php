<?php
    
    $server="localhost";
    $username="root";
    $password="";
    $database="zalego";
    $conn = mysqli_connect($server,$username,$password,$database);
    
    if(isset($_POST['submitButton'])){
    //fetch data
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];

    //submit data from
    $insertData=mysqli_query($conn,"INSERT INTO enrollment(fullname,phonenumber,email,gender,course) 
    VALUES('$fullname','$phonenumber','$email','$gender','$course')");
    
    

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll page</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="enroll.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>
<body>
    <!-- navigation bar here -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">zalego academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

                
        
            <div class="collapse navbar-collapse" id="navbardisplaynavigations">
                <div class="navbar-nav">
                     <a href="#" class="nav-link active">Home</a>
                     <a href="aboutus.html" class="nav-link"> About us</a>
                     <a href="#" class="nav-link"><button class=" btn btn-primary ">Register now</button></a>
                     
                     
                </div>
            
            </div>
    
        </div>
        

    </nav>
    <br>

    <!-- end navigation bar here -->
    <main class="p-5 mb-4 bg-light ">
    <h1>
        JULY SOFTWARE ENGINEERING BOOTCAMP
    </h1>
    <span><i class="fa fa-calendar fa-3x"  aria-hidden="true"></i> 20th July 2022</span><p></p>
    <span> <i class="fa fa-map-marker fa-3x" aria-hidden="true"> </i> zalego Academy,  <br>Devan Plaza </span>
    
    </main>
    <p class="text-center" >Looking for a place to kickstart your career in technology? <br>
        whether you're a local, new in tpwn or just cruising through we've got <br> loads of great tips and events for you
    </p>
    <h1 class="text-center">Sign up today?</h1>
    
    <div class="container shadow">
    
        <form action="enroll.php" method="POST">
            <div class="row">
            <div class="col-lg-6">
                <label for="fullname" class="form-label"><b>Full name</b></label>
                <input type="text" name="fullname" class="form-control" placeholder="Enter your full name">
            </div>
            <div class="col-lg-6">
                <label for="phonenumber" class="form-label"><b>Phone Number</b></label>
                <input type="text" name="phonenumber" class="form-control" placeholder="+2547.....">
            </div>
            <div class="col-lg-6">
                <label for="email" class="form-label"><b>Email Address</b></label>
                <input type="text" name="email" class="form-control" placeholder="please enter your email">
            </div>
            <div class="col-lg-6">
                <label for="gender" class="form-label"><b>What's your gender</b></label>
                <select class="form-select" name="gender" aria-label="Default select example">
                    <option selected>--select your gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
  
                    </select>
            </div>
            </div>
            <br>
            <p>In order to complete your registration to the bootcamp, you are required to select one course yoy will be undertaking. Please NOTE that this will be your learning track during the w-weeeks immersion</p>
            <br>
            <div class="col-lg-6">
                <label for="course" class="form-label"><b>What's your preferred course?</b></label>
                <select class="form-select" name="course"  aria-label="Default select example">
                    <option selected>--select your preffered course</option>
                    <option value="Web Design">Web Design</option>
                    <option value="Data Analysis">Data Analysis</option>
                    <option value="Cyber security">Cyber security</option>
                </select>
            </div>
            <br>
            <p>You agree by providing your information you understand all our data privacy and protection policy outlined in our terms & condition and the privacy policy terms</p>
        
            <div class = "form-check">  
                <input class = "form-check-input"   type = "checkbox" id = "checkbox1" name="option1" value="good" >  
                <label class="form-check-label"><b>Agreeing terms and conditions</b></label>  
            </div>
            <button class="btn btn-primary" type="submit" name="submitButton">Submit application</button>  
        
                      
    </div>
    
        <p class="text-center">Subscribe to get information latest news about <br> zalego Academy</p>
    <div class="container ">
        <div class="row">
            <div class="col-lg-6">
                
                <input type="text" class="form-control" placeholder="your email address">
            </div>
            <div class="col-lg-6">
                <button class="btn btn-primary">Subscribe</button>
            </div>
        </div>    
            
        </form>    
    <hr>
    <footer>
                &copy;company 2022
            </footer>
    </div>       

    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>



