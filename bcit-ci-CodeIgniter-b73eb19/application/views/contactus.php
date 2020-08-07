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
                    <?php if($this->session->userdata('is_logged_in_restaurant') == FALSE){
                    echo "<li class='nav-item'>
                        <a href='Menu' class='nav-link'><button class='btn btn-outline-info' type='button'>Menu</button></a>
                    </li>";
                    }
                    else{
                        echo "<li class='nav-item'>
                            <a href='Additem' class='nav-link'><button class='btn btn-outline-info' type='button'>Add Item Form</button></a>
                        </li>";
                    }
                    ?>
                </ul>
                <form class="form-inline my-2 my-lg-0 mr-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 200px;">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mr-left">
                    <?php if(($this->session->userdata('is_logged_in_customer') == FALSE) && ($this->session->userdata('is_logged_in_restaurant') == FALSE)){
                    echo "<li class='nav-item dropdown'>
                        <button type='button' class='btn btn-outline-primary btn-sm'>
                            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                Login
                            </a>
                            <div class='dropdown-menu ml-auto' aria-labelledby='navbarDropdown' style='left: 0;'>   
                                <a class='dropdown-item' href='Customerlogin'>Login As A Customer</a>
                                <a href='Restaurantlogin' class='dropdown-item'>Login As A Restaurant</a>
                            </div>
                        </button>
                    </li>";
                    }
                    else if($this->session->userdata('is_logged_in_customer')){
                        echo "<li class='nav-item'>
                            <a href='Orderstatus' class='nav-link'><button type='button' class='btn btn-outline-info'>Order Status</button></a>
                        </li>";
                    }
                    else if($this->session->userdata('is_logged_in_restaurant')){
                        echo "<li class='nav-item'>
                            <a href='Vieworder' class='nav-link'><button type='button' class='btn btn-outline-info'>View Orders</button></a>
                            </li>";
                    }?>
                    &nbsp;
                    &nbsp;
                    <?php if(($this->session->userdata('is_logged_in_customer') == FALSE) && ($this->session->userdata('is_logged_in_restaurant')==FALSE)){
                    echo "<li class='nav-item dropdown'>
                        <button type='button' class='btn btn-outline-primary btn-sm'>
                            <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                SignUp
                            </a>
                            <div class='dropdown-menu ml-auto' aria-labelledby='navbarDropdown' style='left: 0;'>   
                                <a class='dropdown-item' href='Customerregistration'>Register As A Customer</a>
                                <a href='Restaurantregistration' class='dropdown-item'>Register As A Restaurant</a>
                            </div>
                        </button>
                    </li>";
                    }
                    else if($this->session->userdata('is_logged_in_customer')){
                        echo "<li class='nav-item'>
                                <a class='nav-link' href='#'><button type='button' class='btn btn-outline-info'>Payment History</button></a>
                        </li>";
                    }
                    else if($this->session->userdata('is_logged_in_restaurant')){
                        echo "<li class='nav-item'>
                                <a class='nav-link' href='#'><button type='button' class='btn btn-outline-info'>Payments</button></a>
                            </li>";
                    }?>
                    &nbsp;
                    &nbsp;
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Options    
                            </a>
                            <div class="dropdown-menu ml-auto" aria-labelledby="navbarDropdown" style="right: 0;">   
                                <a class="dropdown-item" href="#">Help?</a>
                                <?php if($this->session->userdata('is_logged_in_customer')){
                                    echo "<a class='dropdown-item' href='Logoutcustomer'>Logout</a>";}
                                    else if($this->session->userdata('is_logged_in_restaurant')){
                                        echo "<a class='dropdown-item' href='Logoutrestaurant'>Logout</a>";
                                    }
                                ?>
                            </div>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bhome">
        <div class="container">
            <br>
            <br>
            <img src="<?php echo base_url(); ?>foodshala.png" class="image-center">
            <br>
            <br>
            <br>
            <div class="text-center centretext">Please Contact abc@gmail.com</div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>