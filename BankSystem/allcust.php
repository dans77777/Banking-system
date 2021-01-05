<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ECommerce</title>
  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- slick CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/main.css" media="all">
    <link rel="stylesheet" href="./styles/all.min.css" media="all">
    <link rel="stylesheet" href="./styles/fontawesome.min.css" media="all">
   
    <title></title>
  </head>

<body>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  
</body>

</html>
</head>

<body class="fac">
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
  <style>

.fac 
    {
        height: 25rem;
        background-image: url("./img/allcust.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        background-attachment: fixed;
    }
    </style>
<center style="margin-top:5rem;">
  <h2>Welcome to the Customer's Page</h2>
<h4>Here are the details to all the available Customers</h4>
</center>

 <div class="container cs">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" >  </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered cs">
 
 <tr class="bg-dark text-white text-center" >
 
 <th>Customer name </th>
 <th>Account Number </th>
 <th> Account Type </th>
 <th>citizenship</th>
 <th>Email-id</th>
 <th>Current Balance</th>
 <th>View Profile</th>
 
 
 


 </tr >

 <?php

include('connection.php');


$query="SELECT * FROM customer";
$query_run= mysqli_query($con,$query);


 while($res = mysqli_fetch_array($query_run)){
  ?>
 <tr class="text-center" style="color:back; font-weight:bold;">
 <td> <?php echo $res['cname'];  ?> </td>
 <td> <?php echo $res['accNo'];  ?> </td>
 <td> <?php echo $res['accType'];  ?> </td>
 <td> <?php echo $res['citizenship'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['currentBalance'];  ?> </td>
 <td> <button class="btn-primary btn"> <a href="view.php? accNo=<?php echo $res['accNo']; ?>" class="text-dark "> View </a>  </button> </td>
 
 
 
 </tr>

 <?php 
 }

 mysqli_error($con);
  ?>
 

 </table>  

 
 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>

 </body>
 </html>

 