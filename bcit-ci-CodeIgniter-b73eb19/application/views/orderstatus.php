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
                <?php if(($this->session->userdata('is_logged_in_customer') == FALSE)){
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
                    else{
                        echo "<li class='nav-item'>
                            <a href='#' class='nav-link'><button type='button' class='btn btn-outline-info'>Order Status</button></a>
                        </li>";
                    }?>
                    &nbsp;
                    &nbsp;
                    <?php if($this->session->userdata('is_logged_in_customer') == FALSE){
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
                    else{
                        echo "<li class='nav-item'>
                                <a class='nav-link' href='#'><button type='button' class='btn btn-outline-info'>Payment History</button></a>
                        </li>";
                    }?>
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Options    
                            </a>
                            <div class="dropdown-menu ml-auto" aria-labelledby="navbarDropdown" style="right: 0;">   
                                <a class="dropdown-item" href="#">Help?</a>
                                <?php if($this->session->userdata('is_logged_in_customer')){
                                    echo "<a class='dropdown-item' href='Logoutcustomer'>Logout</a>";}
                                ?>
                            </div>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="menu-content">
        <?php
            if(count($data) == 0)
            {
                echo"<div>No Orders As Of Now</div>";
            }
            foreach($data as $row){
                echo "
                    <div class='card' style='width: 50rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Order</h5>
                            <div><b>Name of Item</b>: $row->itemName</div>
                            <div><b>Item Price</b>: $row->price</div>
                            <div><b>Customer choice for delivery</b>: $row->option1</div>
                            <div><b>Customer choice for payment</b>: $row->option2</div>
                            <div><b>Restaurant Name</b>: $row->rName</div>
                            <div><b>Category Name</b>: $row->categroy</div>
                            <a href='#' class='btn btn-primary'>In Process</a>
                        </div>
                    </div>";
            }
            ?>
    </div>
    <!-- Restaurant View Order Ends Here -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
