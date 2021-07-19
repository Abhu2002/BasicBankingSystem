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

    <title>Basic Banking System</title>
    <style type="text/css">
     body{
         background-color:black;
     } 
    .user_pic{
        margin-top:24px;
    }
    .transfer-money{
        margin-top: 25px;
    }
    .transfer_history_button{
        margin-top:30px;
    }
    
    .user_pic{
        height: 236px;
    }
    .transfer-money_pic{
        height: 235px;
    }

    
    .history-pic{
     height: 230px; 
    }
    .bank_heading
    {
         display: inline;
         float: left;
         padding-top: 91px;
         margin-left: 74px;
     }
    
    .pic{
       height: 315px;
    padding-left: 241px;
    padding-bottom: 12px; 
     }
     .history_section{
         margin-top:79px;
     }
    
    .intro {
    background: #603594;
    }
    .main-heading {
    color: #fafafa;
    }

    .navbar {
      
      background-color: #bdbdbd;
    }
    
    button{
            position: relative;
            display: inline-block;
            padding: 12px 36px;
            margin: 10px 0;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 25px;
            letter-spacing: 2px;
            border-radius: 8px;
            background-color: #9dc5c3;
            background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
        }
    </style>

</head>


<body >
    <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
        <!-- Introduction section -->
       <div class="intro py-1">
            <div class="bank_heading">
                   <div>
                   <center> <h1 class="main-heading">Welcome to <br> Spark Bank of India</h1></center>
                   </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
             <img src="img/bank5.jpg" class="img-fluid pt-2 pic">
            
            </div>
        </div>
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
                <img src="img/users1.jpg" class="img-fluid user_pic" >
                <br><br>
                <a href="transfermoney.php"><button>View all Users</button></a>
            </div>
            <div class="col-md act transfer-money">
                <br><br>
                <img src="img/transfer_money1.jpg" class="img-fluid transfer-money_pic">
                <br><br>
                <a href="transfermoney.php"><button>Transfer Money</button></a>
            </div>
            <div class="col-md act history_section">
                <img src="img/history1.jpg" class="img-fluid history-pic">
                <br>
                <a href="transactionhistory.php"><button class="transfer_history_button">View Transfer History</button></a>
            </div>
        </div>
    </div>
    
    
    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Abhay Kapadnis</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
