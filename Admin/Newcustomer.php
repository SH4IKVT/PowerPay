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
        .cosdetailnav
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
        .logooutbtn svg{
            stroke: white;
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
          font-size: 2vw;
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
          margin:0 1vw; /* Adds space between Search and Show All buttons */
      }

      .showall-btn:hover {
          background-color: skyblue;
          cursor: pointer;
      }
      .page form{
        color: white;
        font-weight: bold;
        font-size: 1.2vmax;
        padding: 20px;
        background-color: blue;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        width: 50vw;
        height: auto;
      }
      .newcustomerform {
          margin: 2vh;
          height: 90vh;
          width: 40vw;
      }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.2vw;
            color: black;
            font-weight: bold;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .page{
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            height: fit-content;
        }
        .submit-btn {
            font-size: 1.1vw;
            font-weight: bold;
            background-color: white;
            color: black;
            padding:1vw 1.2vw;

        }

        .submit-btn:hover {
            cursor: pointer;

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
        <?php
            $name;
            if(isset($_POST['username']))
            {
                $name=$_POST['username'];
                $sql = "SELECT *FROM users WHERE firstName = $name";
                $res = mysqli_query($conn,$sql);
            }
            if(isset($_POST['newcustomer'])){

            }
        ?>
        <div class="top">
          <h2 onclick="window.location.href='Newcustomer.php'" class="add-btn" name="newcustomer">Add New Customer</h2>
        </div>  
        <div class="page">
          <form class="newcustomerform" method="POST" action="Newcustomer.php">
            <div>
                <h1 style="text-align:center;">Create new Customer Account </h1>
                <label for="firstName"><strong>First Name:</strong></label>
                <input type="text" id="firstName" name="firstName"
                    required
                <label for="lastName"><strong>Last Name:</strong></label>
                <input type="text" id="lastName" name="lastName" required>
                
                <label for="email"><strong>Email:</strong></label>
                <input type="email" id="email" name="email" required>
                
                <label for="phonenumber"><strong>Phonenumber:</strong></label>
                <input type="text" id="phonenumber" name="phone_number" required>
                
                <label for="pincode"><strong>pincode:</strong></label>
                <input type="text" name="pincode" id="pincode" required>

                <label for="district"><strong>district:</strong></label>
                <input type="text" name="district" id="district" required>

                <label for="streetname"><strong>street name:</strong></label>
                <textarea type="text" name="streetname" id="streetname" required></textarea>
                
                <label for="password"><strong>password:</strong></label>
                <input type="text" id="password" name="password" required>
            </div>
            <input class="submit-btn" type="submit" name="addcustomer" value="Add customer">
            <?php
            $adminid;
            if(isset($_SESSION['email']))
            {
             $email=$_SESSION['email'];
             $query=mysqli_query($conn, "SELECT admin_users.* FROM `admin_users` WHERE admin_users.email='$email'");
             if($row=mysqli_fetch_array($query))
             {
                $adminid = $row['id'];
             }
            }
            echo "<h1> Your admin id is $adminid </h1>" ;
            if(isset($_POST['addcustomer']))
            {
                $firstName=$_POST['firstName'];
                $lastName=$_POST['lastName'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $password=md5($password);
                $pincode = $_POST['pincode'];
                $district = $_POST['district'];
                $streetname = $_POST['streetname'];
                $phonenumber = $_POST['phone_number'];

                $checkEmail="SELECT * From users where email='$email'";
                $result=$conn->query($checkEmail);
                if($result->num_rows>0){
                echo "Email Address Already Exists !";
                }
                else
                {
                    mysqli_begin_transaction($conn);
                    try
                    {
                        $checkAddressQuery = "SELECT address_id FROM address WHERE pincode = '$pincode' AND district = '$district' AND street_name = '$streetname'";
                        $result = mysqli_query($conn, $checkAddressQuery);
                        if (mysqli_num_rows($result) > 0) 
                        {
                            $row = mysqli_fetch_assoc($result);
                            $address_id = $row['address_id'];
                        } 
                        else
                        {
                            $insertAddressQuery = "INSERT INTO address (pincode, district, street_name) VALUES ('$pincode', '$district', '$streetname')";
                            if (!mysqli_query($conn, $insertAddressQuery)) {
                                throw new Exception("Failed to insert address: " . mysqli_error($conn));
                            }
                            $address_id = mysqli_insert_id($conn);
                        }
                        $insertUserQuery = "INSERT INTO users (admin_id,firstName, lastName, email, phone_number, address_id, password) 
                                            VALUES ('$adminid','$firstName', '$lastName', '$email', '$phonenumber', '$address_id', '$password')";
                        if (!mysqli_query($conn, $insertUserQuery)) {
                            throw new Exception("Failed to insert user: " . mysqli_error($conn));
                        }
                        // Commit transaction
                        mysqli_commit($conn);
                        echo "User Created successfully!";
                    } catch (Exception $e) {
                        // Roll back transaction if something failed
                        mysqli_rollback($conn);
                        echo "Error: " . $e->getMessage();
                    }
                    
                    // Close the connection
                    mysqli_close($conn); 
            }
            }
            ?>
            </form>
        </div>
    <div style="text-align:center; padding:15%;">
      <p style="font-size:50px; font-weight:bold;">
       Hello  
       <?php 
       ?>
       :)
      </p>
      <a href="index.php">Logout</a>
    </div>
</body>
</html>