<?php
session_start();
include("connect.php");

// if (isset($_POST['updateform'])) {
//     $firstName = $_POST['firstName'];
//     $lastName = $_POST['lastName'];
//     $email = $_POST['email'];
//     $address = $_POST['address'];

//     // Update the admin profile in the database
//     $stmt = $conn->prepare("UPDATE admin_users SET firstName = ?, lastName = ?, email = ?, address = ? WHERE email = ?");
//     $stmt->bind_param("sssss", $firstName, $lastName, $email, $address, $_SESSION['email']);
//     $result = $stmt->execute();
    

//     if ($result) {
//         $_SESSION['email'] = $email; // Update session email if changed
//         echo "<h1 style ='bottom: 0px;align-text:center;'>Profile updated</h1>";
//     } else {
//         echo "Error updating profile";
//     }
// }
if(isset($_POST['updateform']))
{
    $adminid;//will use that to search the admin's address id then modify it
    $address_id;
    $newaddress_id;// it stores the address it has previously
    if(isset($_SESSION['email']))
    {
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT admin_users.* FROM `admin_users` WHERE admin_users.email='$email'");
        while($row=mysqli_fetch_array($query))
        {
            $adminid = $row['id'];
            echo $adminid;
        }
    }
    $sql = "SELECT address_id FROM admin_users WHERE id = $adminid";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $newaddress_id = $row['address_id'];
    }
    $newfirstName=$_POST['firstName'];
    $newlastName=$_POST['lastName'];
    $newemail=$_POST['email'];
    $newpincode = $_POST['pincode'];
    $newdistrict = $_POST['district'];
    $newstreetname = $_POST['streetname'];
    $newphonenumber = $_POST['phonenumber'];
    mysqli_begin_transaction($conn);
    try
    {
        $checkAddressQuery = "SELECT address_id FROM address WHERE pincode = '$newpincode' AND district = '$newdistrict' AND street_name = '$newstreetname'";
        $result = mysqli_query($conn, $checkAddressQuery);
        if (mysqli_num_rows($result) > 0) 
        {
            $row = mysqli_fetch_assoc($result);
            $address_id = $row['address_id'];
        } 
        else
        {
            $insertAddressQuery = "INSERT INTO address (pincode, district, street_name) VALUES ('$newpincode', '$newdistrict', '$newstreetname')";
            if (!mysqli_query($conn, $insertAddressQuery))
            {
                throw new Exception("Failed to insert address: " . mysqli_error($conn));
            }
            $address_id = mysqli_insert_id($conn);
        }
        $sql = "UPDATE `admin_users` SET `firstName`='$newfirstName',`lastName`='$newlastName',`email`='$newemail',`address_id`='$address_id',`phone_number`='$newphonenumber' WHERE id=$adminid";
        $insertUserQuery = "UPDATE `admin_users` SET `firstName`='$newfirstName',`lastName`='$newlastName',`email`='$newemail',`address_id`='$address_id',`phone_number`='$newphonenumber' WHERE id=$adminid";
        
        if (!mysqli_query($conn, $insertUserQuery))
        {
            throw new Exception("Failed to insert user: " . mysqli_error($conn));
        }
        // Commit transaction
        mysqli_commit($conn);
        echo "updated successfully!";
        header('Location: dashboard.php');
    } catch (Exception $e){
        // Roll back transaction if something failed
        mysqli_rollback($conn);
        echo "Error: " . $e->getMessage();
    }
    
    // Close the connection
    mysqli_close($conn); 
}

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

        .dashboardnav {
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
        .logoutbtn{
            margin-right: 10px;
            margin-top:5px;
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

        /* for the inputform */
        form {
            color: white;
            font-weight: bold;
            font-size: 1.2vmax;
            padding: 20px;
            background-color: blue;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 9vw;
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

        .updateform {
            margin: 2vh;
            height: fit-content;
            width: 40vw;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .cdetails-container {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
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

        @media (max-width:700px) {
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

            .nav1 a {
                font-size: 5vmin;
                width: 100%;

                text-align: center;
            }

            .nav1 a:hover {
                cursor: pointer;
            }

            .cdetails-container {
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .updateform {
                display: flex;
                flex-direction: column;
                align-items: center;
                height: 90vw;
                width: 90vw;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            input[type="text"],
            input[type="email"],
            textarea {
                width: 100%;
                padding: 10px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: 3vmax;
                color: black;
                font-weight: bold;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            label{
                font-size: 3vmax;
                font-weight: bold;
            }
            .submit-btn {
                font-size: 3vh;
                font-weight: bold;
                background-color: white;
                color: black;
                padding:1vw 1.2vw;

            }
            .submit-btn:hover {
                cursor: pointer;
            }

        }
        .cdetails-container h1{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 50px;
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
                <svg title="Logout" xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 -0.5 16 16" fill="none"
                    stroke="#000000" stroke-linecap="round" stroke-linejoin="round" id="Log-Out--Streamline-Lucide"
                    height="16" width="16">
                    <desc>Log Out Streamline Icon: https://streamlinehq.com</desc>
                    <path
                        d="M5.295 14.115H2.355C1.5431249999999999 14.1150625 0.885 13.456875 0.885 12.645V2.355C0.885 1.5431249999999999 1.5431249999999999 0.8849374999999999 2.355 0.885H5.295"
                        stroke-width="2"></path>
                    <path d="M10.440000000000001 11.174999999999999L14.115 7.5L10.440000000000001 3.825"
                        stroke-width="1"></path>
                    <path d="M14.115 7.5H5.295" stroke-width="1"></path>
                </svg>
            </a>
        </nav>
    </div>
    <div class="page" style="margin:0px;">
        <div class="cdetails-container">
            <?php
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                    // Fetch admin details from the `admin_users` table
                    $query = mysqli_query($conn, "SELECT * FROM `admin_users` WHERE email='$email'");
                    $row = mysqli_fetch_array($query);
                }
            ?>
                <div class="svgbar">
                    <h1>Admin Dashboard</h1>

                </div>
                <form class="updateform" method="POST">
                        <h1 style="text-align:center;">Admin Profile Details</h1>
                        <label for="firstName"><strong>First Name:</strong></label>
                        <input type="text" id="firstName" name="firstName" value="<?php echo $row['firstName']; ?>" required>

                        <label for="lastName"><strong>Last Name:</strong></label>
                        <input type="text" id="lastName" name="lastName" value="<?php echo $row['lastName']; ?>" required>

                        <label for="email"><strong>Email:</strong></label>
                        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

                        <label for="phonenumber"><strong>Phone number:</strong></label>
                        <input type="text" id="phonenumber" name="phonenumber" value="<?php echo $row['phone_number']; ?>" required>
                        <?php
                            $adminid;//will use that to search the admin's address id then modify it
                            $address_id;
                            if(isset($_SESSION['email']))
                            {
                                $email=$_SESSION['email'];
                                $query=mysqli_query($conn, "SELECT admin_users.* FROM `admin_users` WHERE admin_users.email='$email'");
                                if($row=mysqli_fetch_array($query))
                                {
                                    $adminid = $row['id'];
                                }
                            }

                        $sql = "SELECT address_id FROM admin_users WHERE id = $adminid";
                        $result = mysqli_query($conn, $sql);
                        if ($result && mysqli_num_rows($result) > 0)
                        {
                            // Fetch the result
                            $row = mysqli_fetch_assoc($result);
                            $address_id = $row['address_id'];
                        }

                        $sql = "SELECT pincode, district, street_name FROM address WHERE address_id = $address_id";
                        $result2 = mysqli_query($conn, $sql);
                        $pincode;
                        $district;
                        $streetname;
                        if ($result2 && mysqli_num_rows($result2) > 0) {
                            // Fetch the result
                            $row2 = mysqli_fetch_assoc($result2);
                            $pincode=$row2['pincode'];
                            $district=$row2['district'];
                            $streetname=$row2['street_name'];
                        }
                        else {
                            echo "No address found with ID $address_id.";
                        }
                        ?>
                        <label for="pincode"><strong>Pincode:</strong></label>
                        <input type="text" id="pincode" name="pincode" value="<?php echo $pincode ?>" required>

                        <label for="district"><strong>District:</strong></label>
                        <input type="text" id="district" name="district" value="<?php echo $district; ?>" required>

                        <label for="streetname"><strong>Street name:</strong></label>
                        <input type="text" id="streetname" name="streetname" value="<?php echo $streetname; ?>" required>

                    <input class="submit-btn" type="submit" name="updateform" value="Update Profile">
                </form>
        </div>
        <div style="text-align:center; padding:15%;">
            <p style="font-size:50px; font-weight:bold;">
                <?php
                //    if(isset($_SESSION['email']))
                //    {
                //     $email=$_SESSION['email'];
                //     $query=mysqli_query($conn, "SELECT admin_users.* FROM `admin_users` WHERE admin_users.email='$email'");
                //     while($row=mysqli_fetch_array($query))
                //     {
                //         echo $row['firstName'].' '.$row['lastName'];
                //     }
                //    }
                ?>
            </p>
            <a href="index.php">Logout</a>
        </div>
</body>

</html>