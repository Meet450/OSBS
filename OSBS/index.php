<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
 <!--  header section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">OSBS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav margin" id="margin">
            <li class="nav-item">
              <span><a class="nav-link active" aria-current="page" href="#">Home</a></span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sell</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rental</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <i class="fa fa-shopping-cart" aria-hidden="true"><a class="nav-link" href="#"></a></i><a class="nav-link" href="#"></a>
            </li>

            <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <i class="fas fa-search"></i>
            </form>
        </ul>
        </div>
      </div>
</nav>

<!--silderbar-->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="book1.jpg" class="d-block w-100" alt="..." width="300px" height="400px">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="book2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="book3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
</nav>

<!-- footer section -->
<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
      <footer class="footer layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-12">
                  <a href="index.html"><img class="img-responsive" src="images/logo2.png" alt="#" /></a>
               </div>

               <div class="col-md-3 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>Address</h3>
                  </div>
                  <div class="address_infor">
                     <p> 
                        <span class="icon"><img src="images/location_icon.png" alt="#" /></span>
                        <span class="addrs">Ahemdabad,Gujarat,India</span>
                     </p>
                  </div>
               </div>

               <div class="col-md-3 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>Social Link</h3>
                  </div>
                  <div class="social_icon">
                    <ul>
                       <li><a href="#"><img src="images/fb.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/tw.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/gp.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/in.png" alt="#" /></a></li>
                    </ul>
                  </div>
               </div>
               
               <div class="col-md-3 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>Newsletter</h3>
                  </div>
                  <div class="email_address_bottom">
                     <form>
                        <fieldset>
                           <div class="field_email">
                              <input type="email" name="email" placeholder="Enter Your Email">
                              <button><i class="fa fa-search"></i></button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="cpy">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <p>© 2020 All Rights Reserved by Choice is your.</p>
             </div>
           </div>
        </div>
      </div>
</nav>
</body>
</html>