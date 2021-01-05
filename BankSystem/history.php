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
          <a href="#" class="btn btn-outline-success my-2 my-sm-0">Search
         </a>
         </form>
        
    </nav>
  </section>

<center style="margin-top:5rem;">
 <h2>Transation History</h2>
</center>
<style>
.fac 
    {
        height: 25rem;
        background-image: url("./img/view.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        background-attachment: fixed;
    }
    table 
    {
      border:black solid 2px;
    }
    </style>
 <div class="container cs"  style="padding:0px;">
 <div class="col-lg-12"  style="padding:0px;">
 <br><br>
 <h1 class="text-warning text-center"  >  </h1>
 <br>
 <table  id="tabledata" class=" table pb-0 pt-0 table-hover cs"  style="padding:0px; border:black solid 2px; vertical-align: middle;">
 
 <tr class="bg-dark text-white text-center" style="padding:0px; vertical-align: middle; font-size:bold; border:black solid 2px;">
 
 <th>Transaction ID</th>
 <th>Trnsaction date</th>
 <th>Sender's name </th>
 <th> Recipient Name </th>
 <th>sender's Account Number</th>
 <th>Recipient's Account Number</th>
 <th>Transacted Amount</th>
 <th>Message</th>
 
 </tr >

 <?php

include('connection.php');


$query="SELECT * FROM `transaction` ";
$query_run= mysqli_query($con,$query);


 while($res = mysqli_fetch_array($query_run)){
  ?>
 <tr class="text-center" style="font-weight:bold;border:black solid 2px;">
 <td> <?php echo $res['tid'];  ?> </td>
 <td><?php
echo   date("Y/m/d");
?></td>
 <td > <?php echo $res['senderName'];  ?> </td>
 <td> <?php echo $res['recipientName'];  ?> </td>
 <td> <?php echo $res['senderAccountNum'];  ?> </td>
 <td> <?php echo $res['recipientAccountNum'];  ?> </td>
 <td> <?php echo $res['amount'];  ?> </td>
 <td> <?php echo $res['msg'];  ?> </td>
 
 
 
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
<div class="text-center pb-2">
                <a href="transact.html" class="btn btn-primary">
                <i class="fa fa-check mr-2"></i>Transact Now
                </a>
                </div> 
 </body>
 </html>

 