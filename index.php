
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Gridlayout</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>
<body>
    <!-- navigation bar here -->
    <!-- using include function from navbar.php -->
    <?php
    include("navbar.php");
    ?>

    <!-- end navigation bar here -->
    <main class="p-5 mb-4 bg-light ">
    <h1>
        Welcome, Kevin
    </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dolore rerum minima alias repellendus quidem eaque aspernatur doloribus, illum accusamus? 
    </p>
    <button class="btn btn-primary">learn more</button>
    </main>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h5>Header 1</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ex dolores quidem dolorum, nobis autem quasi consequuntur quod repellat tempore ab reiciendis cum aliquam voluptates impedit, voluptate voluptatum nemo corporis dolor natus. Maxime consequatur sed veniam labore autem ab quaerat sint, laudantium voluptates, debitis obcaecati at tempora dolorum est explicabo?</p>
                <button class="btn btn-primary">view details</button>
            </div>
            <div class="col-lg-4">
                <h5>Header 2</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ex dolores quidem dolorum, nobis autem quasi consequuntur quod repellat tempore ab reiciendis cum aliquam voluptates impedit, voluptate voluptatum nemo corporis dolor natus. Maxime consequatur sed veniam labore autem ab quaerat sint, laudantium voluptates, debitis obcaecati at tempora dolorum est explicabo?</p>
                 <button class="btn btn-primary">view details</button>
            </div>
            <div class="col-lg-4">
                <h5>Header 3</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ex dolores quidem dolorum, nobis autem quasi consequuntur quod repellat tempore ab reiciendis cum aliquam voluptates impedit, voluptate voluptatum nemo corporis dolor natus. Maxime consequatur sed veniam labore autem ab quaerat sint, laudantium voluptates, debitis obcaecati at tempora dolorum est explicabo?</p>
                <button class="btn btn-primary">view details</button>
         </div>

            <!-- contact us page here -->
            <div class="row pt-5">
         <h3>Contact us</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa beatae error non modi illo ad dolore officia cupiditate nemo ducimus delectus provident amet, accusantium, ex est pariatur repudiandae explicabo ipsam?</p>
                <form>
                   <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="Firstname" class="form-label">First name</label>
                        <input type="text" class="form-control" placeholder="please enter your first name">

                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="Lastname" class="form-label">Last name</label>
                        <input type="text" class="form-control" placeholder="please enter your last name">
                    </div>
                   </div>
                   <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">email</label>
                        <input type="text" class="form-control" placeholder="please enter your email">

                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="please enter your last name">
                    </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-12">
                           <label for="message" class="form-label">Your message</label>
                           <textarea cols="30" rows="10" class="form-control" placeholder="enter your message"></textarea>
                       </div>

                   </div>
                   <br>

                   <button class="btn btn-primary">SUBMIT</button>
                </form>
                </div>
                	
            </div>
             <!-- end contact us page -->
        




            
            <hr>
            
            <footer>
                &copy; Company 2022
            </footer>

    
     </div>
     




        
            
    


    

    
    








    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>