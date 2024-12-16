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
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>
    <style>
        body,html{
            background:#E2E8C0;
            height: 100%;
            width: 100vw;
        }
        a{
            text-decoration: none;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.2vw;
            color: white;
            font-weight: bold;
        }
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        .header {
            display: flex;
            border-bottom: 2px solid black;
            gap: 2vw;
        }
        nav{
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
            overflow:hidden;
        }
        .cosdetails
        {
            border-bottom: 3px solid black;
        }
        .nav1
        {   
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2vw;
            font-size: 1.2vmax;
            font-weight: bold;
            border-bottom: none;
        }
        .nav1 a{
            margin: 0 2vw;
        }
        .nav1 a:hover{
            border-bottom: 3px solid black;
            cursor: pointer;
        }
        .nav a{
            margin-right: 2vw;
            margin-top:1vh;
        }
        .nav a:hover{
            cursor: pointer;
        }
        .logoutbtn{
            margin-right: 10px;
            margin-top:5px;
        }
        .icon
        {
            height: 100px;
            width: 200px;
            margin-top: 1vh;
            margin-right: 2vw;
            margin-left: 2vw;
        }   
        .ri-menu-line{
            display: none;
        }
        .ri-menu-line:hover{
            cursor: pointer;
        }
        .page h1{
          text-align: center;
          border-bottom: 3px solid black;
        }
        .top{
          display: flex;
          align-items: center;
          justify-content: space-between;
          font-size: .9vw;
          color: white;
          margin: 1vh 2vh;
        }
        .add-btn{
            text-align: center;
          height: 6vh;
          width: 10vw;
          font-size: 0.9vw;
          font-weight: bold;
          color: white;
          border: none;
          background-color: blue;
          border-radius: 140px;
          padding:2vh 1vw;
          transition: .6s opacity all;
        }
        .add-btn:hover{
          background-color: skyblue;
          cursor: pointer;
        }
        .searchform{
          display: flex;
          align-items: center;
        }
        .search-text{
          height: 4vh;
          width: 40vw;
          color: black;
          font-size: 1.5vw;
          font-weight: bold;
          text-align: center;
          border: none;
          border-radius: 200;
        }
        .search-btn{
          text-align: center;
          height: 7vh;
          width: 10vw;
          font-weight: bold;
          color: white;
          border: none;
          background-color: blue;
          border-radius: 220px;
          padding:2vh 1vw;
          transition: .6s opacity all;
        }
        .search-btn:hover{
          background-color: skyblue;
          cursor: pointer;
        }
        .showall-btn {
          text-align: center;
          height: 7vh;
          width: 10vw;
          font-weight: bold;
          color: white;
          border: none;
          background-color: blue;
          border-radius: 220px;
          padding:2vh 1vw;
          transition: .6s opacity all;
          margin:0 1vw;
      }

      .showall-btn:hover {
          background-color: skyblue;
          cursor: pointer;
      }
 /* the page for the profile details */
      .page{
        display: flex;
        flex-direction: column;
        align-items: center;

      }
    
    .customer_details{
        background-color: blue;
        border: 2px solid #2a9d8f;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 2rem;
        max-width: 500px;
        margin: 3rem auto;
        text-align: left;
        font-family: Arial, sans-serif;
    }
    .profile-title {
        color: white;
        font-size: 1.8rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 1rem;
    }
    .profile-content h4 {
        color: white;
        font-size: 1.1rem;
        text-align: center;
        padding: 0.3rem 0;
        margin: 10px;
        border-bottom: 1px solid #e9ecef;
    }
    .profile-content h4 strong {
        color: white;
    }
    /* the profile details for all users */
    .customer_table {
        width: 80%;
        margin: 2rem auto;
        border-collapse: collapse;
        color: black;
        font-weight: bold;
        text-align: left;
        font-family: Arial, sans-serif;
    }
    .customer_table th, .customer_table td {
        padding: 1rem;
        border: 1px solid black;
    }
    .customer_table th {
        background-color: blue;
        color: white;
        font-weight: bold;
    }
    .customer_table tr{
        background-color: #E2E8C0;
    }
    @media (max-width:700px){
            .header{
                display: flex;
                flex-direction: column;
            }
            .nav{
                flex-direction: column;
                display: none;
                font-size: 2vh;
                background-color: #BF4F51;
                height: 100%;
                width: 100%;
            }
            .ri-menu-line{
                height: 3vw;
                width: 3vh;
                display: contents;
            }
            .header{
                align-items: center;
                justify-content: center;
                background-color: blue;
            }
            .nav1{
                flex-direction: column;
                background-color: blue;
                font-size: 2vh;
                width: 100%;
                height: ;
                gap: 1vh;
            } 
            .icon
            {
                height: 100px;
                width: 200px;
                border-radius: 4px;
            }  
            .nav1 a{
                font-size: 5vmin;
                width: 100%;
                
                text-align: center;
            }
            .nav1 a:hover{
                cursor: pointer;
                background-color: ;
            } 

        }      
        </style>
        <script>
            // let btn = document.querySelector('#btn').addEventListener('click',console.log("clicked"));
            function togglemenu(){
                    if(document.querySelector('.nav').style.display=="contents")
                        document.querySelector('.nav').style.display="none";
                    else{
                        document.querySelector('.nav').style.display="contents";
                    }
                }
        </script>
        <div class="header">
            <img class="icon"src="../icons/Pp.jpg" alt="">
            <i id="btn" style="width: 3vw;" onclick="togglemenu();" class="ri-menu-line"></i>
            <nav class="nav">
                <ul class="nav1">            
                    <a class="homepagenav" href="homepage.php">Home</a>
                    <a class="dashboardnav" href="dashboard.php">Dashboard</a>
                    <a class="bilnav"href="Bills.php">Bills </a>
                    <a class="cosdetails" href="Costomer_details.php">Customer details</a>
                    <a class="cosqueries"href="Costomer_queries.php">Customer Queries</a>
                </ul>
                <a class="logoutbtn" href="../login/index.php">Logout
                    <svg title="Logout" xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 -0.5 16 16" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" id="Log-Out--Streamline-Lucide" height="16" width="16"><desc>Log Out Streamline Icon: https://streamlinehq.com</desc><path d="M5.295 14.115H2.355C1.5431249999999999 14.1150625 0.885 13.456875 0.885 12.645V2.355C0.885 1.5431249999999999 1.5431249999999999 0.8849374999999999 2.355 0.885H5.295" stroke-width="2"></path><path d="M10.440000000000001 11.174999999999999L14.115 7.5L10.440000000000001 3.825" stroke-width="1"></path><path d="M14.115 7.5H5.295" stroke-width="1"></path></svg>
                </a>
            </nav>
        </div>
        <div class="top">
          <h2 onclick="window.location.href='Newcustomer.php'" class="add-btn" name="newcustomer">Add New Customer</h2>
          <form class="searchform" action="Costomer_details.php" method="POST">
              <input placeholder="Enter the user id" name="userid" class="search-text" type="text">
              <input onclick="window.location.href='Newcustomer.php'"value="Search" class="search-btn" type="submit"></input>
          </form>
          <form action="Costomer_details.php" method="POST">
              <input value="Show All" name="allusers" class="showall-btn" type="submit"></input>
          </form>
        </div>  
        <div class="page">
    <div class="search_details">
    <?php 
        $adminid=0;
        if(isset($_SESSION['email']))
        {
            $email=$_SESSION['email'];
            $query=mysqli_query($conn, "SELECT admin_users.* FROM `admin_users` WHERE admin_users.email='$email'");
            while($row=mysqli_fetch_array($query))
            {
                $adminid = $row['id'];
            }
        }
       ?>
      <?php
        if (isset($_POST['userid'])) {
            $userid = $_POST['userid'];
            $adminid = null;
        
            // Fetch the admin ID based on the logged-in admin's email
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT id FROM admin_users WHERE email='$email'");
                if ($row = mysqli_fetch_assoc($query)) {
                    $adminid = $row['id'];
                }
            }
        
            if ($adminid) {
                $sql = "
                    SELECT 
                        u.id AS user_id, 
                        u.firstName, 
                        u.lastName, 
                        u.email, 
                        u.phone_number, 
                        a.pincode, 
                        a.district, 
                        a.street_name
                    FROM users u
                    LEFT JOIN address a ON u.address_id = a.address_id
                    WHERE u.admin_id = '$adminid' AND u.id = '$userid'
                ";
                $result = mysqli_query($conn, $sql);
        
                if ($result && mysqli_num_rows($result) > 0) {
                    echo '
                    <div class="customer_details">
                        <h1 class="profile-title">User Profile</h1>
                        <div class="profile-content">';
        
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<h4><strong>Name: </strong>" . $row['firstName'] . " " . $row['lastName'] . "</h4>";
                        echo "<h4><strong>Email: </strong>" . $row['email'] . "</h4>";
                        echo "<h4><strong>Phone Number: </strong>" . $row['phone_number'] . "</h4>";
                        echo "<h4><strong>Pincode: </strong>" . $row['pincode'] . "</h4>";
                        echo "<h4><strong>District: </strong>" . $row['district'] . "</h4>";
                        echo "<h4><strong>Street Name: </strong>" . $row['street_name'] . "</h4>";
                    }
                    echo '
                        </div>
                    </div>';
                } else {
                    echo "<p style='text-align:center; color:red;'>User not found.</p>";
                }
            } else {
                echo "<p style='text-align:center; color:red;'>Admin not found or session expired.</p>";
            }
        }
        if (isset($_POST['allusers'])) {
            $adminid = null;
        
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT id FROM admin_users WHERE email='$email'");
                if ($row = mysqli_fetch_assoc($query)) {
                    $adminid = $row['id'];
                }
            }
            if ($adminid) {
                // Fetch users and their address details with JOIN
                $sql = "
                    SELECT 
                        u.id AS user_id, 
                        u.firstName, 
                        u.lastName, 
                        u.email, 
                        u.phone_number, 
                        a.pincode, 
                        a.district, 
                        a.street_name
                    FROM users u
                    LEFT JOIN address a ON u.address_id = a.address_id
                    WHERE u.admin_id = '$adminid'
                ";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result && mysqli_num_rows($result) > 0) {
                    echo '<table class="customer_table">
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Pincode</th>
                                <th>District</th>
                                <th>Street Name</th>
                            </tr>';
        
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>{$row['user_id']}</td>
                                <td>{$row['firstName']}</td>
                                <td>{$row['lastName']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['phone_number']}</td>
                                <td>{$row['pincode']}</td>
                                <td>{$row['district']}</td>
                                <td>{$row['street_name']}</td>
                              </tr>";
                    }
        
                    echo '</table>';
                } else {
                    echo "<p style='text-align:center; color:red;'>No customers found.</p>";
                }
            } else {
                echo "<p style='text-align:center; color:red;'>Admin not found or session expired.</p>";
            }
        }
        
      ?>
    </div>
</div>

</body>
</html>