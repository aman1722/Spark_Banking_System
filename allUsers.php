<!DOCTYPE HTML>
<html lang="en">


  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Users - The Sparks Bank</title>

    <!-- Link Favicon -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

    <!-- Link CSS File  -->
    <style>
      <?php include 'css/style.css'; ?><?php include 'css/allUser.css'; ?>
    </style>


    <!-- Link Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  </head>

  <body>
    <nav>
      <div class="logo">
        
      </div>
      <ul>
        <li class="link"><a href="index.php">HOME</a></li>
        <li class="link"><a href="about.php">ABOUT ME</a></li>
        <li class="link"><a href="sendMoney.php">SEND MONEY</a></li>
        <li class="link"><a href="allUsers.php">ALL USERS</a></li>
        <li class="link"><a href="contact.php">CONTACT ME</a>
        </li>
      </ul>
    </nav>

    <div class="users">
      <h1>All Users of Bank</h1>
      <?php

      $conn = mysqli_connect("localhost", "root", "", "sparksBank");
      if ($conn) {
        $query = "SELECT * FROM users";
        $query_exc = mysqli_query($conn, $query);

        if ($query_exc) {
          echo "<table class=\"alluser\"> 
          <thead>
          <th>S. No</th> 
          <th>Name</th>
          <th>Mobile Number</th>
          <th>Account Number</th>
          <th>Balance Amount</th>
          </thead>";
          while ($row = mysqli_fetch_array($query_exc)) {
            echo "<tr> <td>" . $row['S_No'] . "</td> 
            <td>" . $row['Name'] . "</td>
            <td>" . $row['Mobile'] . "</td>
            <td>" . $row['Account'] . "</td>
            <td>" . $row['Balance'] . "</td>";
            "</tr><br/>";
          }
          echo "</table>";
        }
      } else {
        echo "<script>alert('Connection to Database Failed');</script>";
      }

      ?>
    </div>

    <footer><small>&copy; Copyright 2023, Harsh Anand kumar</small></footer>
  </body>
</html>