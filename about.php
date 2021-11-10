<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>About Page</title>
    <style>
        body{
            background-color: rgb(176, 224, 245);
        }
        footer {
            background: #343a40;
            padding: 40px;
        }

        footer a {
            color: #f8f9fa !important
        }
        .paddingTB60 {
    padding-top:60px;
    padding-bottom:60px;
}
.image-aboutus-banner {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("https://images.pexels.com/photos/556962/pexels-photo-556962.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    padding-top: 110px;
    padding-bottom:110px;
 }
 
  .image-aboutus-sm-banner {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url("https://images.pexels.com/photos/631008/pexels-photo-631008.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    padding-top: 30px;
    padding-bottom:30px;
 }
    </style>
</head>

<body>

    
     <!--Navbar-->
     <?php include_once('includes/navbar.php'); ?>
    <!--image-->
    <div class="image-aboutus-banner"style="margin-top:70px">
        <div class="container">
         <div class="row">
             <div class="col-md-12">
              <h1 class="lg-text">About Us</h1>
              <p class="image-aboutus-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
         </div>
     </div>
     </div>








        <!--what we are-->
        <div class="aboutus-secktion paddingTB60 my-4 border">
            <div class="container">
                <div class="row">
                            <div class="col-md-6">
                                <h1 class="strong">Who we are and<br>what we do</h1>
                                <p class="lead">This is the world's leading portal for<br>easy and quick </p>
                            </div>
                            <div class="col-md-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet. Nulla convallis egestas rhoncus.</p>
                            </div>
        </div>
            </div>
        </div>
        <hr>
        <!--our team-->
        <div class="container team-sektion paddingTB60 ">
            <div class="row">
                <div class="site-heading text-center">
                                <h2>Our Team</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <br> ut labore et dolore magna aliqua. Ut enim ad minim </p>
                                <div class="border"></div>
                            </div>
            </div>
            </div>



<div class="container">
    <div class="row ">
        <div class="col-md-3 col-sm-6">
            <img src="1.png" class="card-img-top" alt="...">
            <div class="card-body ">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <img src="1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <img src="1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <img src="1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include_once('includes/footer.php'); ?>
<script src="https://kit.fontawesome.com/76c9e58e8b.js" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
crossorigin="anonymous" />
   
</body>

</html>