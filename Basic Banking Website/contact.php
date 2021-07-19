<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System:About US</title>
	</head>
<style>
    body{
         background-color:black;
     } 
  .intro {
    background: #603594;
}
  h1 {
    color: #F5F5F5;
    font-weight: bold;
    transition: 0.3s;
    text-align: center;
}

  
  .pic{
       height: 296px;
    padding-left: 241px;
    padding-bottom: 12px; 
     }
  #ab{
    font-size: 2.00rem;
    color: white;
  }
 
 
  .bank_heading
    {
    display: inline;
    float: left;
    padding-top: 91px;
    margin-left: 74px;
     }
  

  </style>

<body>
    <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
        <!-- Introduction section -->
       <div class="intro py-1">
            <div class="bank_heading" >
                <div >
                   <center> <h1>Welcome to <br> Spark Bank of India </h1></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
             <img src="img/bank5.jpg" class="img-fluid pt-2 pic">
            
            </div>
        </div>

<div class="container"> 
    <div class="row">
      <ol class="col-12 breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php"> Home</a>
        </li>
        <li class="breadcrumb-item active">
          Contact Us
        </li>

       </ol>
      <div class="col-12">
        <h3 id="ab">Contact  US</h3>
        <hr />
      </div>
    </div>
   
   
    <div class="col-12 col-sm-6">
       <div class="row row-content">
      <div class="col-12">
        <h3 id="ab">Location Information</h3>
      </div>
      <div class="col-12 col-sm-4 offset-sm-1">
        <h5 id="ab">Our Address</h5>
        <address style="font-size: 100%;font-size: 100%; width: 234px;" id="ab">
          PN 11/A, Sanjona Complex ,Sindhi Society, <br />
          S H Kalani Marg, Chembur,  <br />
         Mumbai, Maharashtra 400071<br />
          <i class="fa fa-phone"></i>: +852 1234 5562<br />
          <i class="fa fa-fax"></i>: +852 8765 9631<br />
          <i class="fa fa-envelope"></i>:
          <a href="#">Spark@bank.net</a>
        </address>
      </div>

    </div>




</body>

</html>