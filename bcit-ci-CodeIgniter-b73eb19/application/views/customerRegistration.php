<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Shala</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>eat.png" alt=""><strong style="color: rgb(255,127,80); font-family:cursive">Food Shala</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Home"><button type="button" class="btn btn-outline-info">Home <span class="sr-only">(current)</span></button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Aboutus"><button type="button" class="btn btn-outline-info">About Us</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contactus"><button type="button" class="btn btn-outline-info">Contact</button></a>
                    </li>
                    <li class="nav-item">
                        <a href="Menu" class="nav-link"><button class="btn btn-outline-info" type="button">Menu</button></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 mr-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 200px;">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mr-left">
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </a>
                            <div class="dropdown-menu ml-auto" aria-labelledby="navbarDropdown" style="left: 0;">   
                                <a class="dropdown-item" href="Customerlogin">Login As A Customer</a>
                                <a href="Restaurantlogin" class="dropdown-item">Login As A Restaurant</a>
                            </div>
                        </button>
                    </li>
                    &nbsp;
                    &nbsp;
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                SignUp
                            </a>
                            <div class="dropdown-menu ml-auto" aria-labelledby="navbarDropdown" style="left: 0;">   
                                <a class="dropdown-item" href="Customerregistration">Register As A Customer</a>
                                <a href="Restaurantregistration" class="dropdown-item">Register As A Restaurant</a>
                            </div>
                        </button>
                    </li>
                    &nbsp;
                    &nbsp;
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Options    
                            </a>
                            <div class="dropdown-menu ml-auto" aria-labelledby="navbarDropdown" style="right: 0;">   
                                <a class="dropdown-item" href="#">Help?</a>
                            </div>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Customer Register Form Starts Here -->
    <div class="container">
        <div class="loginsystem-content">
            <div class="card" id="foodform">
                <div class="card-body">
                    <div class="card-title text-center"><h5 style="color: green;">Customer Registration Form</h5></div>
                    <form action="" method="POST" name="CustomerRegistrationForm" onsubmit="return validation()">
                        <div class="form-group">
                            <label for="emailid">Email Address</label>
                            <input type="email" id="emailID" class="form-control" placeholder="Enter email" name="emailID" value="">
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="preferences">Select Your Preference</label>
                            <select class="form-control" id="preferences" name="category" id="category">
                                <option value="">Select Your Option</option>
                                <option>Vegetarian</option>
                                <option>Non Vegetarian</option>
                                <option>Vegan</option>
                            </select>
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" id="pass" class="form-control" placeholder="Enter Password" name="pass" value="">
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="confirmpass">Confirm Your Password</label>
                            <input type="password" id="confirmpass" class="form-control" placeholder="Renter the password to confirm" name="passagain">
                        </div>
                        <input type="submit" name="save" value="Register" class="btn btn-success" />
                        <a href="Customerlogin">Already A User?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>js/Customerregvalidation.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>