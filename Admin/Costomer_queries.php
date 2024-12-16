<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
  <style>
    body,
    html {
      background: #E2E8C0;
      height: 100%;
      width: 100vw;
    }

    a {
      text-decoration: none;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: 1.2vw;
      color: white;
      font-weight: bold;
    }

    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    .header {
      display: flex;
      border-bottom: 2px solid black;
      gap: 2vw;
    }

    nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: blue;
      padding-top: 2vw;
      padding-bottom: 2vw;
      font-size: 2vw;
      font-weight: bold;
      height: 100%
        /* align-items: center; */
        border: 2px solid black;
      border-radius: 10px 100px / 120px;
      width: 100%;
      position: relative;
      overflow: hidden;
    }

    .cosqueries {
      border-bottom: 3px solid black;
    }

    .nav1 {
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 2vw;
      font-size: 1.2vmax;
      font-weight: bold;
      border-bottom: none;
    }

    .nav1 a {
      margin: 0 2vw;
    }

    .nav1 a:hover {
      border-bottom: 3px solid black;
      cursor: pointer;
    }

    .nav a {
      margin-right: 2vw;
      margin-top: 1vh;
    }

    .nav a:hover {
      cursor: pointer;
    }

    .logoutbtn {
      margin-right: 10px;
      margin-top: 5px;
    }

    .icon {
      height: 100px;
      width: 200px;
      margin-top: 1vh;
      margin-right: 2vw;
      margin-left: 2vw;
    }

    .ri-menu-line {
      display: none;
    }

    .ri-menu-line:hover {
      cursor: pointer;
    }

    .page {
      display: flex;
      position: relative;
      height: calc(100% - 105px);
      width: 100%;
    }

    .page h1 {
      font-size: 3vw;
      margin: 0vw 2vw;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .left {
      height: 100%;
      width: 50%;
      margin: 2vw 2vw;
    }

    .right {
      height: 100%;
      width: 50%;
    }

    .page img {
      height: 100%;

    }

    .page span {
      color: #5D17EB;
    }
    .right{
      background-color: blue;
      font-weight: bold;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      font-size: 1.2vw;
      color: white;
    }

    @media (max-width:600px) {
      .header {
        display: flex;
        flex-direction: column;
      }

      .nav {
        flex-direction: column;
        display: none;
        font-size: 2vh;
        background-color: #BF4F51;
        height: 100%;
        width: 100%;
      }

      .ri-menu-line {
        height: 3vw;
        width: 3vh;
        display: contents;
      }

      .header {
        align-items: center;
        justify-content: center;
        background-color: blue;
      }

      .nav1 {
        flex-direction: column;
        background-color: blue;
        font-size: 2vh;
        width: 100%;
        height: ;
        gap: 1vh;
      }

      .icon {
        height: 100px;
        width: 200px;
        border-radius: 4px;
      }

      .nav1 a,
      logooutbtn {
        font-size: 5vmin;
        width: 100%;
        text-align: center;
      }

      .nav1 a:hover {
        cursor: pointer;
        background-color: ;
      }
    }
  </style>
  <script>
    // let btn = document.querySelector('#btn').addEventListener('click',console.log("clicked"));
    function togglemenu() {
      if (document.querySelector('.nav').style.display == "contents")
        document.querySelector('.nav').style.display = "none";
      else {
        document.querySelector('.nav').style.display = "contents";
      }
    }
  </script>
  <div class="header">
    <img class="icon" src="../icons/Pp.jpg" alt="">
    <i id="btn" style="width: 3vw;" onclick="togglemenu();" class="ri-menu-line"></i>
    <nav class="nav">
      <ul class="nav1">
        <a class="homepagenav" href="homepage.php">Home</a>
        <a class="dashboardnav" href="dashboard.php">Dashboard</a>
        <a class="bilnav" href="Bills.php">Bills </a>
        <a class="cosdetails" href="Costomer_details.php">Customer details</a>
        <a class="cosqueries" href="Costomer_queries.php">Customer Queries</a>
      </ul>
      <a class="logoutbtn" href="../login/index.php">Logout
        <svg title="Logout" xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 -0.5 16 16" fill="none" stroke="#000000"
          stroke-linecap="round" stroke-linejoin="round" id="Log-Out--Streamline-Lucide" height="16" width="16">
          <desc>Log Out Streamline Icon: https://streamlinehq.com</desc>
          <path
            d="M5.295 14.115H2.355C1.5431249999999999 14.1150625 0.885 13.456875 0.885 12.645V2.355C0.885 1.5431249999999999 1.5431249999999999 0.8849374999999999 2.355 0.885H5.295"
            stroke-width="2"></path>
          <path d="M10.440000000000001 11.174999999999999L14.115 7.5L10.440000000000001 3.825" stroke-width="1"></path>
          <path d="M14.115 7.5H5.295" stroke-width="1"></path>
        </svg>
      </a>
    </nav>
  </div>
  <div class="page">
    <div class="left">
      <h1>Make it easier with<span>PowerPay</span></h1>
    </div>
    <div class="right">
      <h1>Customer Queries</h1>
      <?php
      if (!isset($_SESSION['email'])) {
        header("Location: ../login/index.php");
        exit();
      }
      $email = $_SESSION['email'];
      $query = mysqli_query($conn, "SELECT id FROM admin_users WHERE email='$email'");
      $row = mysqli_fetch_assoc($query);
      $admin_id = $row['id'];

      $query = "SELECT * FROM queries WHERE admin_id = '$admin_id'";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $user_id = $row['user_id'];
          $query_content = $row['query_text'];
          $user_query = mysqli_query($conn, "SELECT firstName, lastName,id FROM users WHERE id='$user_id'");
          $user_row = mysqli_fetch_assoc($user_query);

          echo "<div class='query-box'>";
          echo '<p><strong>User:</strong> ' . $user_row['firstName'] . " " . $user_row['lastName'] . " id :".$user_row['id'] . "</p> ";
          echo "<p><strong>Query:</strong> " . nl2br($query_content) . "</p> </br>"; // nl2br to preserve newlines in the query
          echo "</div><hr>";
        }
      } else {
        echo "<p>No queries found for this admin.</p>";
      }
      ?>
    </div>
  </div>

</body>

</html>