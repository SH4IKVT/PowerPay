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
        .bilnav
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
        .searchbar{
            margin: 10px;
        }
        .billpage{
            padding: 2vw;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .searchform{
          display: flex;
          align-items: center;
          justify-content: center;
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
        .billdetails{
            display: flex;
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

        /* measurement */
        .measurement{
            display: none;
            display: flex;
            justify-content: center;
            background-color: blue;
            border: 2px solid #2a9d8f;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 2rem;
            max-width: 70vw;
            margin: 3rem auto;
            text-align: left;
            font-family: Arial, sans-serif;
        }
        .measurement label{
            font-size: 1.2vw;
            color: white;
            font-weight: bold;
        }
        .measurement input{
            border: none;
            background-color: white;
            color: black;
            font-weight: bold;
        }
        .bills{
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: blue;
            border: 2px solid #2a9d8f;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 2rem;
            max-width: 70vw;
            margin: 3rem auto;
            text-align: left;
            font-family: Arial, sans-serif;

        }
        .bills p{
            margin: 8px;
            font-size: 1.2vw ;
            font-weight: bold;
            color: white;
        }
        .sendbillbtn{
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
        .sendbillbtn:hover{
          background-color: skyblue;
          cursor: pointer;
        }
        .notificaion{

            background-color: blue;
            border: 2px solid #2a9d8f;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 2rem;
            font-family: Arial, sans-serif;
            height: ;
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
    <div class="searchbar">
        <form class="searchform" action="Bills.php" method="POST">
          <input placeholder="Generate bill for id" name="userid" class="search-text" type="text">
          <input onclick="window.location.href='bills.php'"value="Search" class="search-btn" type="submit"></input>
        </form>
    </div>
    <div class="billpage">
        <div class="billdetails">
        <?php
            function presentalready($id){
                global $conn;
                $sql = "SELECT *FROM customer_bill WHERE bill_id='$id'";
                $chechquery = mysqli_query($conn,$sql);
                if($chechquery->num_rows>0){
                    return true;
                }
                return false;
            }
        $userId = null;
        $units ;
        $per_unit ;
        $tax_rate ;
        $bill ;
        $tax_amount ;
        $total_bill ;

        if (isset($_POST['userid'])) {
            $userId = $_POST['userid'];
            $adminid = null;
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
                    WHERE u.admin_id = '$adminid' AND u.id = '$userId'
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
        if (isset($_POST['givebill'])) {
            // Fetch input values
            $units = floatval($_POST['units']); // Convert to float for accuracy
            $per_unit = floatval($_POST['per_unit']);
            $tax_rate = floatval($_POST['tax']); // Tax rate in percentag
        
            // Calculate the bill details
            $bill = $units * $per_unit; // Base bill calculation
            $tax_amount = ($bill * $tax_rate) / 100; // Tax amount
            $total_bill = $bill + $tax_amount; // Total bill
            $bill_date = date("Y-m-d"); // Current date
        
            // Insert into the database
            $sql = "INSERT INTO customer_bill(user_id, amount, tax, bill_date, Status) 
                    VALUES ('$userId', '$total_bill', '$tax_amount', '$bill_date', 'not paid')";
            $res = mysqli_query($conn, $sql);
        
            // Display the result
            if ($res) {
                echo "<div class='bills' style='text-align: center; margin-top: 20px;'>
                        <p style='font-size: 20px; font-weight: bold;'>Bill Calculation</p>
                        <p>Units Consumed: $units</p>
                        <p>Rate per Unit: INR $per_unit</p>
                        <p>Tax Rate: $tax_rate%</p>
                        <p>Base Bill: INR $bill</p>
                        <p>Tax Amount: INR $tax_amount</p>
                        <p>Total Bill: INR $total_bill</p>
                        <p style='color: green; font-weight: bold;'>Bill sent successfully!</p>
                      </div>";
            } else {
                echo "<div style='text-align: center; color: red; font-weight: bold;'>
                        Error: Unable to store the bill. Please try again.
                      </div>";
            }
        }
        
        // if(isset($_POST['givebill']))
        // {
        //     $units = $_POST['units'];
        //     $per_unit = $_POST['per_unit'];
        //     $tax_rate = $_POST['tax'];
        //     $bill = $units * $per_unit;
        //     $tax_amount = ($bill * $tax_rate) / 100;
        //     $total_bill = $bill + $tax_amount;
        //     $bill_date = date("Y-m-d");
        //     echo $userId;
        //     $sql = "INSERT INTO customer_bill(user_id, amount, tax, bill_date, Status) VALUES ('$userId','$total_bill','$tax_amount','$bill_date','not paid')";
        //     $res = mysqli_query($conn,$sql);
        //     if($res){
        //         echo "<div class='bills' style='text-align: center; margin-top: 20px;'>
        //                 <p style='text-align:center; font-size: 20px; font-weight: bold;'>Bill Calculation</p>
        //                 <p>Units Consumed: $units</p>
        //                 <p>Rate per Unit: INR $per_unit</p>
        //                 <p>Tax Rate: $tax_rate%</p>
        //                 <p>Base Bill: INR $bill</p>
        //                 <p>Tax Amount: INR $tax_amount</p>
        //                 <p>Total Bill: INR $total_bill</p>
        //               ";
        //                       if ($res) {
        //                           echo "<div class='notificaion'>
        //                           <p>Bill send successfully</p>
        //                         </div>;
        //                     </div>";
        //                       }    
        //               }
        //     }
        ?>

        <div class="measurement">
            <form action="Bills.php" method="POST" style="text-align: center; margin-top: 20px;">
                <input type="hidden" name="userid" value="<?php echo $userId; ?>"> <!-- Hidden input for user ID -->
                <label for="units">Units Consumed:</label>
                <input type="number" id="units" name="units" required placeholder="Enter units consumed" style="margin: 10px; padding: 8px; width: 200px;"><br>

                <label for="tax">Select Tax Rate:</label>
                <select id="tax" name="tax" required style="margin: 10px; padding: 8px; width: 200px;">
                    <option value="0">No Tax</option>
                    <option value="5">5%</option>
                    <option value="10">10%</option>
                    <option value="15">15%</option>
                </select><br>
                <label for="per_unit_rate">Per Unit Rate:</label>
                <input type="number" id="per_unit_rate" name="per_unit" required placeholder="Enter per unit rate" step="0.01" style="margin: 10px; padding: 8px; width: 200px;"><br>
                <input type="submit" name="givebill" value="Give bills" class="sendbillbtn">
            </form>
        </div>
        </div>
    </div>
    <div style="text-align:center; padding:15%;">
      <p style="font-size:50px; font-weight:bold;">
       Hello  
       <?php 
       if(isset($_SESSION['email']))
       {
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT admin_users.* FROM `admin_users` WHERE admin_users.email='$email'");
        while($row=mysqli_fetch_array($query))
        {
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="index.php">Logout</a>
    </div>
</body>
</html>