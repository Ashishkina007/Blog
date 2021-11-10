<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Contact Page</title>
    <style>
      hr {border-top: 1px solid #000; width:50%;}

a {color: #000;}

a:link{text-decoration:none;}

.box1{background: rgb(76, 175, 80, 0.6);}
.box2{background: rgb(192, 192, 200, 0.6);}
.box3{background: rgb(255, 0, 0, 0.6);;}



#author a{
  color: #fff;
  text-decoration: none;
    
}
     
      
footer {
    background: #16222A;
    background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
    background: linear-gradient(59deg, #3A6073, #16222A);
    color: white;
    margin-top: 100px;
    width: 100%;
}

footer a {
    color: #fff;
    font-size: 14px;
    transition-duration: 0.2s;
}

footer a:hover {
    color: #FA944B;
    text-decoration: none;
}

body{
  background-color: rgb(238, 188, 188);
}

.footer-middle {
    padding-top: 2em;
    color: white;
}

    </style>
</head>

<body>

      <!--Navbar-->
      <?php include_once('includes/navbar.php'); ?>
     <!--jumbotri-->
     <section class="jumbotron text-center">
      <div class="container">
          <h1 class="jumbotron-heading"> CONTACT US</h1>
          <p class="lead text-muted mb-0"></p>
      </div>
  </section>
  <div class="container">
      <div class="row">
          <div class="col">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item "><a href="Home.html" class="text-dark">Home</a></li>
                      <li class="breadcrumb-item active text-dark" aria-current="page">Contact</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
  <!--contact us-->
  <div class="container">
      <div class="row">
          <div class="col">
              <div class="card">
                  <div class="card-header bg-secondary text-white"><i class="fa fa-envelope"></i> Contact us.
                  </div>
                  <div class="card-body">
                      <form>
                          <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                  placeholder="Enter name" required>
                          </div>
                          <div class="form-group">
                              <label for="email">Email address</label>
                              <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                  placeholder="Enter email" required>
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                  anyone else.</small>
                          </div>
                          <div class="form-group">
                              <label for="message">Message</label>
                              <textarea class="form-control" id="message" rows="6" required></textarea>
                          </div>
                          <div class="mx-auto">
                              <button type="submit" class="btn btn-primary text-right">Submit</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          <div class="col-12 col-sm-4">
              <div class="card bg-light mb-3">
                  <div class="card-header bg-secondary text-white text-uppercase"><i class="fa fa-home"></i> Address
                  </div>
                  <div class="card-body">
                      <p>9, Karni Nagar</p>
                      <p> K-5, Green Park</p>
                      <p> Khatipura Rd, Jaipur,Rajasthan 302012</p>
                      <p>Email : email@example.com</p>
                      <p>Tel. 078499 84030</p>

                  </div>

              </div>
          </div>
      </div>
  </div>
  <hr>
  <!--Google map-->
 
    <div class="container-fluid">
      <h1 class="text-center">Contact Address</h1>
      <hr>
       <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
        <div class="row text-center">
          <div class="col-4 box1 pt-4">
              <a href="tel:+123456789"><i class="fas fa-phone fa-3x"></i>
              <h3 class="d-none d-lg-block d-xl-block">Phone</h3>
              <p class="d-none d-lg-block d-xl-block">Tel. 078499 84030</p></a>
            </div>
            <div class="col-4 box2 pt-4">
              <a href=""><i class="fas fa-home fa-3x"></i>
              <h3 class="d-none d-lg-block d-xl-block">Address</h3>
              <p class="d-none d-lg-block d-xl-block"></p>  9, Karni Nagar
              K-5, Green Park
              Khatipura Rd, Jaipur,Rajasthan 302012
             Email : email@example.com
             </a>
            </div>
          
            <div class="col-4 box3 pt-4">
              <a href="mailto:test@test.com"><i class="fas fa-envelope fa-3x"></i>
              <h3 class="d-none d-lg-block d-xl-block">E-mail</h3>
              <p class="d-none d-lg-block d-xl-block">seekacesolutions@gmail.com</p></a>
            </div>
        </div>
      </div>
      
      
      
      <div class="row text-center bg-success text-white" id="author">
        <div class="col-12 mt-4 h3 ">
        <a href="#">by:SEEKACE SOLUTIONS</a>
      </div>
      <div class="col-12 my-2">
      <a href="https://www.linkedin.com/in/paolofattoruso/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
      </div>
      </div>
   <!--foooter-->
   <?php include_once('includes/footer.php'); ?>
   <script src="https://kit.fontawesome.com/76c9e58e8b.js" crossorigin="anonymous"></script>
  </body>

  </html>
