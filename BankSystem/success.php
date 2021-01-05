<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mycart</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/all.min.css">
    <link rel="stylesheet" href="./styles/fontawesome.min.css">
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</head>
<body class="fc">
    <style>

.fc 
    {
        height: 25rem;
        background-image: url("./img/success.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        background-attachment: fixed;
    }
    </style>
    <section class="navbar1">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php"><img src="./img/logo.jpg" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto pl-4">
                    <li class="nav-item active">
                        <a class="nav-link text-dark" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" href="products.html">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="category.html">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="aboutus.html">About Us</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="contactus.html">Contact US</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
          
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <a href="search.html" class="btn btn-outline-success my-2 my-sm-0">Search
                   </a>
                   </form>
                
              
        </nav>
    </section>
    <div class="container fc">
        <div class="ordercard">
    <div class="card" style="width: 58rem;">
        <i class="fas fa-check-circle icon"></i>
        <div class="card-body text-center">
            <div class="main">
                <h1>Transaction SuccessFull</h1>
                <h2>Thank you for using GRIP Application</h2>
               
            </div>
            <div class="text-center pb-2">
                <a href="history.php" class="btn btn-primary">
                <i class="fa fa-check mr-2"></i>Transaction History
                </a>
                </div> </div>
      </div>
    </div>
    </div>
    <script src="/js/main.js"></script>
</body>
</html>