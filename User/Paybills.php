<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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

        .paybillsnav {
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
            display: flex;
            margin-right: 10px;
            font-size: 1.2vmax;
            margin: 0 2vw;
            justify-content: center;
            align-items: center;

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

        .page {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3vw;
        }

        .page img {
            height: 100%;

        }

        .page span {
            color: #5D17EB;
        }

        table {
            width: fit-content;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 16px;
            text-align: center;
            background-color: #E2E8C0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 3px solid black;
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: blue;
            /* Green Header */
            color: white;
        }

        thead th {
            padding: 12px 15px;
        }

        tbody tr {
            border-bottom: 1px solid #E2E8C0;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
            /* Highlight row on hover */
            cursor: pointer;
        }

        tbody td {
            padding: 10px 15px;
            margin-left: 20px;
            width: 10vw;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            /* Green button */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
            /* Slightly darker green on hover */
            cursor: pointer;
        }
        #paymentModal{
            color: white;
            font-weight: bold;
            font-size: 1.2vmax;
            padding: 20px;
            background-color: blue;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: auto;
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
        .msg{
            width: auto;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.2vw;
            font-weight: bold;
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
                <a class="accountnav" href="Account.php">Account</a>
                <a class="paybillsnav" href="Paybills.php">Paybills</a>
                <a class="sendqueries" href="sendqueries.php">Send queries</a>
            </ul>
            <a class="logoutbtn" title="Logout" href="../login/index.php">
                <svg title="Logout" xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 -0.5 16 16" fill="none"
                    stroke="#000000" stroke-linecap="round" stroke-linejoin="round" id="Log-Out--Streamline-Lucide"
                    height="30" width="30">
                    <desc>Log Out Streamline Icon: https://streamlinehq.com</desc>
                    <path
                        d="M5.295 14.115H2.355C1.5431249999999999 14.1150625 0.885 13.456875 0.885 12.645V2.355C0.885 1.5431249999999999 1.5431249999999999 0.8849374999999999 2.355 0.885H5.295"
                        stroke-width="2"></path>
                    <path d="M10.440000000000001 11.174999999999999L14.115 7.5L10.440000000000001 3.825"
                        stroke-width="1"></path>
                    <path d="M14.115 7.5H5.295" stroke-width="1"></path>
                </svg>
                <span>Logout</span>
            </a>
        </nav>
    </div>
    <?php
    if (!isset($_SESSION['email'])) {
        header("Location: ../login/index.php");
        exit;
    }
    $user_id;
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        if ($row = mysqli_fetch_array($query)) {
            $user_id = $row['id'];
        }
    }
    $bills_query = mysqli_query($conn, "SELECT * FROM customer_bill WHERE user_id='$user_id' AND Status ='not paid'");

    ?>
    <div class="page">
        <script>
            
        </script>
        <div class="mybills">
            <h2>Your Bills</h2>
            <table border="1" style="margin: 1.2vw; width: 80%; text-align: center;">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>bill ID</th>
                        <th>amount (₹)</th>
                        <th>tax amount</th>
                        <th>bill date</th>
                        <th>action </th>
                    </tr>
                </thead>
                <tbody <?php
                $currentbil_amount;
                $current_bill_id;
                $tax;
                $userid;
                if (isset($_SESSION['email'])) {
                    $email = $_SESSION['email'];
                    $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                    if($row = mysqli_fetch_array($query)) {
                        $userid= $row['id'];
                        echo $userid;

                    }
                }
                if (mysqli_num_rows($bills_query) > 0) {
                    while ($bill = mysqli_fetch_assoc($bills_query)) {
                        $currentbill_amount = $bill['amount'];
                        $current_bill_id = $bill['bill_id'];
                        echo "<tr>
                            <td>{$userid}</td>
                            <td>{$bill['bill_id']}</td>
                            <td>{$bill['amount']}</td>
                            <td>{$bill['tax']}</td>
                            <td>{$bill['bill_date']}</td>
                            <td>
                                <button onclick=\"openModal('{$bill['bill_id']}', '{$bill['amount']}')\">Pay Now</button>
                            </td>
                          </tr>";
                    }
                }
                else
                {
                    echo "<tr><td colspan='3'>No bills found.</td></tr>";
                }
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paid'])) {
                    $bill_id=$current_bill_id;
                    $user_id;
                    $phone_number = $_POST['phone_number'];
                    $card_number = $_POST['card_number'];
                    $amount = $_POST['amount'];
                    $date = date('Y-m-d H:i:s');
    
                    if (strlen($phone_number) !== 10 || strlen($card_number) !== 10) {
                        echo "Invalid phone number or card number.";
                        exit;
                    }
                    $status = "payment successfull";
                    $stmt = $conn->prepare("INSERT INTO payment (bill_id, user_id, phone_number, card_number, date,status) VALUES (?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("iissss", $bill_id, $user_id, $phone_number, $card_number, $date,$status);
    
                    if ($stmt->execute()) {
                        $query = "UPDATE customer_bill SET `Status`='paid' WHERE user_id='$userid' AND bill_id='$bill_id'";
                        $res = mysqli_query($conn, $query);
                        if ($res && mysqli_affected_rows($conn) > 0)
                        {
                            echo "<div class='msg'>Payment successful!</div>";
                        } 
                        else 
                            echo "<div class='msg'>Error or no change in payment status.</div>";

                    } else {
                        echo "Payment failed!";
                    }
    
                    $stmt->close();
                    $conn->close();
                }
                ?> </tbody>
            </table>
            <br>
            <div id="overlay" style="display: none;"></div>
            <div id="paymentModal" style="display: none;">
                <form id="paymentForm" method="POST">
                    <input type="hidden" name="bill_id" id="billId">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <label for="amount">Amount:</label>
                    <input type="text" name="amount" id="amount" readonly>
                    <br><br>
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" name="phone_number" id="phone_number" required>
                    <br><br>
                    <label for="card_number">Card Number:</label>
                    <input type="text" name="card_number" id="card_number" required>
                    <br><br>
                    <button type="submit" name="paid">Pay Now</button>
                    <button type="button" onclick="closeModal()">Cancel</button>
                </form>
            </div>
            <?php

            ?>

            <script>
                function openModal(billId, amount) {
                    document.getElementById('billId').value = billId;
                    document.getElementById('amount').value = amount;
                    document.getElementById('paymentModal').style.display = 'block';
                    document.getElementById('overlay').style.display = 'block';
                }

                function closeModal() {
                    document.getElementById('paymentModal').style.display = 'none';
                    document.getElementById('overlay').style.display = 'none';
                }
            </script>
        </div>
</body>

</html>