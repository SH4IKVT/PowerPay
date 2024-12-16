<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $pincode = $_POST['pincode'];
    $district = $_POST['district'];
    $streetname = $_POST['streetname'];
    $phonenumber = $_POST['phone_number'];

    $checkEmail="SELECT * From admin_users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
       echo "Email Address Already Exists !";
    }
    else
    {
        mysqli_begin_transaction($conn);
        try{
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
                if (!mysqli_query($conn, $insertAddressQuery)) 
                {
                    throw new Exception("Failed to insert address: " . mysqli_error($conn));
                }
                $address_id = mysqli_insert_id($conn);
            }
            $insertUserQuery = "INSERT INTO admin_users (firstName, lastName, email, phone_number, address_id, password) 
                                VALUES ('$firstName', '$lastName', '$email', '$phonenumber', '$address_id', '$password')";
            if (!mysqli_query($conn, $insertUserQuery))
            {
                throw new Exception("Failed to insert user: " . mysqli_error($conn));
            }
        
            // Commit transaction
            mysqli_commit($conn);
            echo "User signed up successfully!";
            echo "<h2> go to the <a href = 'index.php'> login </a>page </h2>";
        } catch (Exception $e) {
            // Roll back transaction if something failed
            mysqli_rollback($conn);
            echo "Error: " . $e->getMessage();
        }
        
        // Close the connection
        mysqli_close($conn);
        
}
}
if(isset($_POST['signIn']))
{
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password);
   $mode = $_POST['mode'];
   if($mode=='Admin')
   {
       $sql="SELECT * FROM admin_users WHERE email='$email' and password='$password'";
       $result=$conn->query($sql);
       if($result->num_rows>0){//its saying its greater than onw means exits
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['email']=$row['email'];
            echo "Signin successfull";
            header("Location: ../Admin/homepage.php");
            exit(); 
        }
        else
        {
            echo "Not Found, Incorrect Email or Password";
            header("Location: failurelogin.php");
        }
    }
    if($mode=='User'){
        $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {//its saying its greater than onw means exits
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['email']=$row['email'];
            echo "Signin successfull";
            header("Location: ../User/homepage.php");
            exit();
        }
        else{
            echo "Not Found, Incorrect Email or Password";
            header("Location: failurelogin.php");
           }
    }
}

?>