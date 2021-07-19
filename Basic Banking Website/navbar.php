<!-- navbar -->
<!DOCTYPE html>
<html>

<head>
  <style type="text/css">
    body {
      margin-top: 15px;
          
    }
    .navbar {
      
      background-color: #bdbdbd;
    }

    .logo{
      height: 71px;
      padding-left: 23px;
    }
    .btn {
      border: 2px solid black;
      background-color: white;
      color: black;
      padding: 14px 28px;
      font-size: 16px;
      cursor: pointer;
      margin: 5px;
    }

    .df:hover {
      color: white;
      font-size: 16px;
      background-color: #9dc5c3;
      background-image: linear-gradient(315deg, #131414 0%, #969393 74%);

    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand  " href="index.php"><img src="img/logo2.png" class="logo"></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="btn df" class="nav-link" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="btn df" class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="btn df" class="nav-link" href="contact.php">Contact US</a>
        </li>
    </div>
  </nav>
</body>

</html>