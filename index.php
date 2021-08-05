<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
      .video-container {
      position: absolute;
      width: 100%;
      height: 100vh;
      overflow: hidden;
}

video {
      object-fit: cover;
      width: 100vw;
      height: 100vh;
      position: absolute;
      top: 0;
      left: 0;
}

.video-container::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      
}
.header {
      position: absolute;
      top: 50%;
      left: 45%;
      transform: translate(-50%, -50%);
}

.header h1 {
      color: #d3ae87;
      font-size: 80px !important;
}
#a {
  padding: 8px 48px;
  }

  #b {
  padding: 8px 26px;
  }

  #c {
  padding: 8px 26px;
  }


.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;  
   color:#586776;
   background-color:#EAF0F1;
   letter-spacing: 0.5px;
}
    </style>

    <title>Basic Banking System</title>
  </head>
  

  <body> 
  <div class="video-container">
                  <video playsinline autoplay muted loop id="bgvid">
                        <source src="img/banl.mp4" type="video/mp4">
                  </video>
            </div> 
            <div class="header">
                  <h3>Welcome to</h3>
                  <h1>BANK OF SPARKS</h1><br>
                  <a href="createuser.php">
                        <button id = "a">Create a User</button></a>
                        <br>
                    <a href="transfermoney.php"><br>
                        <button id = 'b'>Make a Transaction</button></a>
                    <a href="transactionhistory.php"><br><br>
                        <button id = 'c'>Transaction History</button></a>   
                        </div>
                        <div> 
                         <?php
  include 'navbar.php';
  ?>                                       
         
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>