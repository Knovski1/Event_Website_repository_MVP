<?php
session_start();
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     //include("navbar.php"); // this file included will make access to website navigation bar for user when in action:
     include("functions.php"); // link to the functions page here:
    // This is to check if the details entered using the post format:
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Post all the relevant variables:
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        // Checking if they are not both empty:
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){ // !is_numeric username can't be a number:
            //Save to database;
            $user_id = random_num(20); // User ID using a random number:
            // Insert into the database using the query:
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
            // To save the generated query:
            mysqli_query($website_connect,$query);
                
            // Direct users to login page:
            header("Location: login.php");
            die; // This is to stop the code from continuing:
        }
        else{
            echo("Please Enter valid Information");
            die;// to stop the code from continuing:
        }
    }
    
    /*
    if(isset($_POST['submit1']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        // get the form data:
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
    }
    // Checking if they are not both empty:
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){ // !is_numeric username can't be a number:
        //Save to database;
        $user_id = random_num(20); // User ID using a random number:
        // Insert into the database using the query:
        $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
        if(mysqli_query($website_connect, $query)){
            echo "Record added successfully! ";
            // To save the generated query:
            mysqli_query($website_connect,$query);
        }else{
            echo "Error: " . $query . "<br>" . mysqli_error($website_connect);
        }  
        // Direct users to login page:
        header("Location: login.php");
        die; // This is to stop the code from continuing:
    }
    else{
        echo("Please Enter valid Information");
        die;// to stop the code from continuing:
    }
    */
        
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive login and signup form</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="#">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password">
                            <i class="bx bx-hide eye-icon"></i>
                        </div>

                        <div class="field button-field">
                            <button>Signup</button>
                        </div>

                        <div class="form-link">
                            <span>already have an account? <a href="https://mi-linux.wlv.ac.uk/~2065115/login.php" >Login</a>
                            </span>
                        </div>
                    </form>
                </div>
                <!--<div class="line"></div>

                <div class=" media-options">
                    <a href="#" class="field facebook">
                        <i class="bx bxl-facebook facebook-icon"></i>
                        <span>Signup with facebook</span>
                    </a>
                </div>

                <div class=" media-options">
                    <a href="#" class="field google">
                        <img src="images/google.png" alt="" class="google-img">
                        <span>Signup with google</span>
                    </a>
                </div>-->
            </div>
        </section>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- custom js file link  -->
        <script src="js/forms.js"></script>
    </body>
</html>