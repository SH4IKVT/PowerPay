<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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
            width: 100vw;
        }
        nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 2vw;
            padding-bottom: 2vw;
            background-image: linear-gradient(to bottom right, #007bff, #E2E8C0);
            background-size: 100% 200px; /* adjust the height to your liking */
            background-position: 0% 100%;
            height: 40px; /* adjust the height to your liking */
            font-size: 2vw;
            font-weight: bold;
            height: 100%
            /* align-items: center; */
            border: 2px solid black;
            width: 100%;
            position: relative;
            overflow:hidden;
        }
        body{
  
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .accountnav
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
            display: flex;
            margin-right: 10px;
            font-size: 1.2vmax;
            margin: 0 2vw;
            justify-content: center;
            align-items: center;
            
        }
        .icon
        {
            height: 100px;
            width: 200px;
            margin-top: 1vh;
            margin-right: 2vw;
            margin-left: 2vw;
            border-radius: 5px;
        }   
        .ri-menu-line{
            display: none;
        }
        .ri-menu-line:hover{
            cursor: pointer;
        }
        .page h1{
            font-size: 3vw;
            margin:0vw 2vw;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .left{
            height: 100%;
            width: 50%;
            margin: 2vw 2vw;
        }
        .right{
            height: 100%;
            width: 50%;
        }
        .page img{
            height: 100%;
            
        }
        .page span{
            color:#5D17EB;
        }
        form{
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
        .page{          
            background-image: url('icons/Homepg.png');
            background-size: cover;
            height: 100vh;
            width: 100vw;
        }
        .updateform {
            margin: 2vh;
            height: fit;
            width: 40vw;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .accountdetails-container {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .submit-btn{
            font-size: 1.1vw;
            font-weight: bold;
            background-color: white;
            color: black;
            padding:1vw 1.2vw;
        }
        .submit-btn:hover{
            opacity: 0.6;
            cursor: pointer;
        }
        .accountdetails-container h1{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 50px;
        }
        .popup{
            font-size: 1.1vw;
            font-weight: bold;
            background-color: blue;
            color: white;
            padding:1vw 1.2vw; 
            border-radius: 20px;
        }
        @media (max-width:600px){
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
            .nav1 a,logooutbtn
            {
                font-size: 5vmin;
                width: 100%;
                text-align: center;
            }
            .nav1 a:hover{
                cursor: pointer;
            }
        }
        .nav1 a{
            color: blue;
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
            <nav class="nav">
                <ul class="nav1"> 
                    <a style="align-item:center;"href="">POWER PAY</a>
                    <i id="btn" style="width: 3vw;" onclick="togglemenu();" class="ri-menu-line"></i>
                </ul>
                
            </nav>
        </div>
        <style>
            header nav a{
                text-align: center;
            }
            .page{
                background-image: url(icons/Homepg.png);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: spa;
            }
            .box
            {
                width: 15vw;
                height: 8vw;
                backdrop-filter: blur(7px);
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                gap: 10vw;
                color: black;
                font-size: 20px;
                border: 2px solid blue;
                border-radius: 5px;
                transition: background-color 0.7s ease-in-out, color 0.7s ease-in-out;
            }
            .box:hover
            {
                background-color: blue;
                color: white;
            }
            .page a{
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-size: 50px;
            }
            .heading{
                margin-top: 20px;
                margin-right: 45px;
                margin-bottom: 20px;
            }
            .page .heading p{
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-size: 50px;
                font-weight: bold;
            }
        </style>
    <div class="page">
        <div class="heading">
            <p>
                Join by Create / or Sign-Up
            </p>
        </div>
        <div class="box">
            <a href="login/index.php">join us</a>
        </div>

    </div>


</html>