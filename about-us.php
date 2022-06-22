<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";
$conn = mysqli_connect($server,$username,$password,$database);

if( isset($_POST ['subscribeButton']))
{
// fetching data
$email=$_POST['email'];

// submitting data
$insertData = mysqli_query($conn,"INSERT INTO subscribers(email)
VALUES('$email')");
if($insertData)
{
    echo "data submitted successfully";
}
else{
    echo "error occured";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
                     <a href="index.html" class="nav-link active">Home</a>
                     <a href="aboutus.html" class="nav-link"> About us</a>
                     <a href="#" class="nav-link">Contact us</a>
                     
                     
                </div>
            
            </div>
    
        </div>
        

    </nav>

    <!-- end navigation bar here -->

    <main class="p-5 mb-4 bg-light ">
        <h1>
            About us
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolore rerum minima alias repellendus quidem eaque aspernatur doloribus, illum accusamus? 
        </p>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-6"> 
                <h3>Our Program</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis accusantium minima asperiores ipsum, quia autem cum voluptas facilis deleniti omnis sit, atque ratione quaerat dignissimos explicabo alias odio? Tempora, dolorem!1</p>
                
            </div>
            <div class="col-lg-6">
                <img src="images/download.jpg" alt="">
            </div>
        </div>
            <div class="row">
                <h1>The Programs</h1>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>Skill discovery</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ea porro eos dolores, quaerat eaque.</p>
                            <button class="btn btn-primary"> 
                            view details
                        </div>
                        </div>

                </div>

                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                        <h4>upskilling Program</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ea porro eos dolores, quaerat eaque.</p>
                    
                    <button class="btn btn-primary"> 
                        view details
                        </div>
                    </div>    
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                    <h5>Path finding Program</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ea porro eos dolores, quaerat eaque.</p>
                    <button class="btn btn-primary"> 
                        view details
                    </button>
                        </div>
                    </div>
                
                    
                        
                 
                        

                       
                        
                    
               
                <br>

            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <h6>Subscribe to get information,latest news about Zalego Academy</h6>
                </div>
                <div class="col-lg-12">

                    <form action="about-us.php" method="POST">
                        
                        <input type="text"  placeholder="enter your email address" name="email">
                        <button class="btn btn-primary"  name="subscribeButton" type="
                        submit">subscribe</button>
                    
                    </form>
                    </div>
                </div>
                <hr>
            </div>
            <footer>
                &copy;company 2022
            </footer>
    
    </div>




    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    
</body>
</html>