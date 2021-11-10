<?php
require('./includes/dp.php');
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>

<body>
    <!--Marquee-->
    <marquee width="100%" direction="left" height="30px" class="sticky-top">
        This is a sample scrolling text that has scrolls texts to right.
    </marquee>
    <?php include_once('includes/navbar.php'); ?>
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="hover">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1400x400/?code,technology
            " class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Coding</h5>
                    <p>A best way to learn coding</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x400/?code,technology,program" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Coding</h5>
                    <p>A best way to learn coding</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1400x400/?code,technology,night" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Coding</h5>
                    <p>A best way to learn coding</p>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--Example-->

        <!--Paragraphs-->
        <div class="container">
            <div class="row">
                <div class=" col-md-8 bg-light my-4 ">
                    <h3>Curabitur blandit tempus porttitor</h3>
                    <p class="font-italic">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus.
                        Aenean eu leo quam.
                        Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at
                        lobortis. Cras
                        mattis consectetur purus sit amet fermentum.</p>

                    <p> Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam
                        id
                        dolor id
                        nibh ultricies vehicula ut id elit.</p>

                    <p> Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet
                        fermentum. Aenean
                        lacinia bibendum nulla sed consectetur.</p>
                </div>





                <div class="col-12 col-sm-4 col-md-4 my-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-home"></i> Category
                        </div>
                        <div class="card-body text-dark bg-light">
                            <p><a href="#">News</a></p>
                            <p><a href="#">Chhatisgarh Board of Secondary Education</a></p>
                            <p><a href="#">World Cup </a></p>
                            <p><a href="#">Social Science</a></p>
                            <p><a href="#"> Films</a></p>

                        </div>

                    </div>
                </div>
                <!--Related topics-->
                <div class="container">
                    <div class="row">
                        <div class="col-12  col-md-9 my-4">
                            <div class="card bg-light mb-3">
                                <div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-home"></i>
                                    Related Topics
                                </div>
                                <div class="card-body ">
                                    <p><a href="#" class="text-dark"> > Pre-university course-Degree</a></p>
                                    <p><a href="#" class="text-dark"> > Chhatisgarh Board of Secondary Education</a></p>
                                    <p><a href="#" class="text-dark"> > Chhatisgarh Board of Secondary Education-State
                                            agency </a></p>
                                    <p><a href="#" class="text-dark"> > Social Science-Field of study</a></p>
                                    <p><a href="#" class="text-dark"> > Angrezi Medium-2020 FIlm</a></p>

                                </div>
                            </div>
                        </div>
                        <div class="col-12  col-md-3 my-4">
                            <div class="card bg-light mb-3">
                                <div class="card-header bg-dark text-white text-uppercase"><i class="	fa fa-google"></i>
                                    According to Months
                                </div>
                                <div class="card-body">
                                    <p><a>Jan-Mar,2020</a></p>
                                    <p><a>April-june,2020</a></p>
                                    <p><a> july-sept. 2020</a></p>
                                    <p><a> Oct-Dec,2020</a></p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <h1 class="text-center">latest blog</h1>
            <div>

                <div class="container m-auto mt-3 row ">
                    <div class="col">

                        <?php
                        $postQuery = "SELECT *FROM posts limit 4";
                        $runPQ = mysqli_query($db, $postQuery);
                        while ($post = mysqli_fetch_assoc($runPQ)) {
                        ?>
                            <div class="card mb-3 bsi"  style="display: inline-block; width:49%;">
                                <a href="post.php?id=<?= $post['id'] ?>" style="text-decoration:none;color:black">
                                    <div class="row g-0">
                                        <div class="col-md-5" style="background-image: url('https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg');background-size: cover">
                                            <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $post['id'] ?><?= $post['title'] ?></h5>
                                                <p class="card-text text-truncate"><?= $post['content'] ?></p>
                                                <p class="card-text"><small class="text-muted">posted on<?= date('F, jS, Y', strtotime($post['created_at'])) ?> </small></p>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>


                    </div>
                    <div class="text-center">
                     <button style="width: 110px; height:50px; border-radius: 15px "><a href="/myblog/home.php">Read more</a></button></div>
                </div>
                
               
                <?php


                ?>
            </div>
            <div class="container mt-5 shadow  bg-white rounded">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Downloads</h5>
                        <div class="card p-3 ">

                            <div class="d-flex flex-row mb-3"><img src="https://i.imgur.com/ccMhxvC.png" width="70" class="strach">
                                <div class="d-flex flex-column ml-2"><span>Stripe</span><span class="text-black-50">Payment
                                        Services</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                            </div>
                            <h6>Get more context on your users with stripe data inside our platform.</h6>
                            <div class="d-flex justify-content-between install mt-3"><span>Installed 172
                                    times</span><span class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Downloads</h5>
                        <div class="card p-3 shadow  bg-white rounded">
                            <div class="d-flex flex-row mb-3"><img src="https://i.imgur.com/IpKQiNu.png" width="70" class="strach">
                                <div class="d-flex flex-column ml-2"><span>Mailchimp</span><span class="text-black-50">Project Management</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                            </div>
                            <h6>Capture and sync subscribers from your mailchimp platform to ours with ease.</h6>
                            <div class="d-flex justify-content-between install mt-3"><span>Installed 1234
                                    times</span><span class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Downloads</h5>
                        <div class="card p-3 shadow  bg-white rounded">
                            <div class="d-flex flex-row mb-3">
                                <img src="https://i.imgur.com/42SqVZd.png" width="70" class="strach">
                                <div class="d-flex flex-column ml-2"><span>Dropbox</span><span class="text-black-50">File
                                        Management</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                            </div>
                            <h6>Use dropbox to sync your photos to our platform and share it with others.</h6>
                            <div class="d-flex justify-content-between install mt-3"><span>Installed 1234
                                    times</span><span class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 shadow  bg-white rounded">
                            <div class="d-flex flex-row mb-3">
                                <img src="https://i.imgur.com/lXEUCY8.png" width="70" class="strach">
                                <div class="d-flex flex-column ml-2"><span>Shopify</span><span class="text-black-50">Ecommerce</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                            </div>
                            <h6>Sell you items with ease with having any website with our free platform</h6>
                            <div class="d-flex justify-content-between install mt-3"><span>Installed 1234
                                    times</span><span class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 shadow  bg-white rounded">
                            <div class="d-flex flex-row mb-3">
                                <img src="https://i.imgur.com/S2In5pz.png" width="70" class="strach">
                                <div class="d-flex flex-column ml-2"><span>Atlassian</span><span class="text-black-50">Project management</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                            </div>
                            <h6>Developing products for developers,project managers and architects.</h6>
                            <div class="d-flex justify-content-between install mt-3"><span>Installed 345
                                    times</span><span class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 shadow  bg-white rounded">
                            <div class="d-flex flex-row mb-3">
                                <img src="https://i.imgur.com/S5oK3Oe.png" width="70" class="strach">
                                <div class="d-flex flex-column ml-2">
                                    <span>Salesforce</span><span class="text-black-50">Project management</span>
                                    <span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                </div>
                            </div>
                            <h6>Developing products for developers,project managers and architects.</h6>
                            <div class="d-flex justify-content-between install mt-3"><span>Installed 345
                                    times</span><span class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--popular posts-->

            <!--foooter-->
            <?php include_once('includes/footer.php'); ?>

            <!-- Optional JavaScript; choose one of the two! -->
            <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

            <script src="https://kit.fontawesome.com/76c9e58e8b.js" crossorigin="anonymous"></script>



            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>

</html>