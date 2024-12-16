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

    .homepagenav {
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
        <svg title="Logout" xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 -0.5 16 16" fill="none" stroke="#000000"
          stroke-linecap="round" stroke-linejoin="round" id="Log-Out--Streamline-Lucide" height="30" width="30">
          <desc>Log Out Streamline Icon: https://streamlinehq.com</desc>
          <path
            d="M5.295 14.115H2.355C1.5431249999999999 14.1150625 0.885 13.456875 0.885 12.645V2.355C0.885 1.5431249999999999 1.5431249999999999 0.8849374999999999 2.355 0.885H5.295"
            stroke-width="2"></path>
          <path d="M10.440000000000001 11.174999999999999L14.115 7.5L10.440000000000001 3.825" stroke-width="1"></path>
          <path d="M14.115 7.5H5.295" stroke-width="1"></path>
        </svg>
        <span>Logout</span>
      </a>
    </nav>
  </div>
  <div class="page">
    <div class="left">
      <h1>Make it easier with <span>PowerPay</span></h1>
    </div>
    <div class="right">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <svg id="svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
        y="0px" viewBox="0 0 1186.4 662.8" style="enable-background:new 0 0 1186.4 662.8;" xml:space="preserve">
        <g id="background">
          <rect x="-9.7" y="0" fill="#E2E8C0" width="1197.1" height="800" />
        </g>
        <g id="table_legs">
          <g>
            <defs>
              <rect id="SVGID_1_" x="-9.7" y="0" width="1197.1" height="800" />
            </defs>
            <clipPath id="SVGID_2_">
              <use xlink:href="#SVGID_1_" style="overflow:visible;" />
            </clipPath>

            <rect x="47.2" y="626.1" style="clip-path:url(#SVGID_2_);fill:#EDCF94;stroke:#0B0B0B;stroke-miterlimit:10;"
              width="34" height="56.4" />

            <rect x="850.5" y="626.6" style="clip-path:url(#SVGID_2_);fill:#EDCF94;stroke:#0B0B0B;stroke-miterlimit:10;"
              width="281.4" height="49.9" />
            <path style="clip-path:url(#SVGID_2_);fill:#FFCF0A;" d="M273.8,586.3" />
          </g>
        </g>
        <g id="table">
          <path style="fill:#EDCF94;stroke:#0B0B0B;stroke-miterlimit:10;" d="M1172,626.1H18.4c-2.7,0-5-1.1-5-2.5v-14.3
                  c0-1.4,2.2-2.5,5-2.5H1172c2.7,0,5,1.1,5,2.5v14.3C1177,625,1174.8,626.1,1172,626.1z" />
          <rect x="851" y="627.2" style="fill:#D7B476;" width="280.4" height="10.5" />
          <rect x="47.7" y="626.7" style="fill:#D7B476;" width="33" height="6.6" />
        </g>
        <g id="computer">
          <polygon style="fill:#888889;stroke:#050606;stroke-miterlimit:10;"
            points="548.7,548.3 544.4,575.1 643.1,575.1 637.8,548.3  " />
          <polyline style="fill:#767677;" points="548.4,555.7 547.6,561.7 639.5,561.7 638.4,554.7 548.9,554.7   " />
          <path style="fill:#E5E9ED;stroke:#050606;stroke-miterlimit:10;"
            d="M768.1,556.4H419.5c-6.8,0-12.3-5.3-12.3-11.8V285.1
                  c0-6.5,5.5-11.8,12.3-11.8h348.5c6.8,0,12.3,5.3,12.3,11.8v259.4C780.4,551.1,774.9,556.4,768.1,556.4z" />
          <path style="fill:#202021;stroke:#050606;stroke-miterlimit:10;" d="M770.8,510.3H413c-3.2,0-5.8-2.6-5.8-5.8V284.2
                  c0-6.1,4.9-11,11-11h350.6c6.4,0,11.7,5.2,11.7,11.7v215.8C780.4,506,776.1,510.3,770.8,510.3z" />
          <rect x="423.3" y="286.1" style="fill:#434445;stroke:#070808;stroke-miterlimit:10;" width="341"
            height="211.3" />
          <path style="fill:#C7C6C6;stroke:#070808;stroke-width:2;stroke-miterlimit:10;" d="M518.9,596.3l1,5.6c0.2,1.3,1.3,2.2,2.6,2.2
                  h138.2c2.9,0,5.4-2.1,5.9-4.9l0-0.1c0.2-1-0.6-1.8-1.5-1.8L518.9,596.3z" />
          <path style="fill:#A3A3A2;stroke:#070808;stroke-miterlimit:10;" d="M544.1,575.1l-25.4,20.3c-1.3,1.1-0.6,3.3,1.2,3.3l145.5-0.4
                  c1.1,0,1.6-1.3,0.8-2l-23.8-21.2H544.1z" />
          <path style="fill:#A3A3A2;" d="M545.5,574l-0.6,1.3c-1,1-1.4,1.3-2,1.9l-4.7,3.7l109.2,0.4l-3-3.1c-0.4-0.4-0.9-0.8-1.2-1.2
                  c-0.7-0.8-0.7-0.6-1.1-1.7l0-1.3H545.5z" />
          <path style="fill:#A3A3A2;"
            d="M521.8,601.8c0.3,0.6,1.2,1.8,2,1.8h135.7c0.5,0,1.1-0.1,1.6-0.2c0.5-0.2,1.2-1.2,1.8-1.6H521.8z" />
          <circle style="fill:#5FBB46;" cx="593.8" cy="280.6" r="1.3" />
          <path style="fill:#2D2D2D;" d="M589.7,275.5L423.6,278c0,0-9.7,0.9-10.9,10.3c-1.2,9.4-1.9,118.4-3.4,138.9s0-138.9,0-138.9
                  s-1.9-13.4,14.2-13.1L589.7,275.5z" />
          <path style="fill:#2D2D2D;" d="M597.2,275.5l166.1,2.5c0,0,9.7,0.9,10.9,10.3c1.2,9.4,1.9,118.4,3.4,138.9
                  c1.5,20.5,0-138.9,0-138.9s1.9-13.4-14.2-13.1L597.2,275.5z" />
          <path style="fill:#CED1D3;" d="M763.9,555.4H422.6c-10.5,1-14.1-5.4-14.2-8.6l0,0c1.4,0.4,2.9,0.6,4.4,0.6l358.8,1.6
                  c2.5,0,4.9-0.4,7.2-1.3l0,0C777.7,551.1,775.2,556.4,763.9,555.4z" />
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#434445;" d="M593.3,525.8c0.6,0,1.4,0.1,2.2,0.4c0.9,0.3,1.5,0.4,1.7,0.4
                  c0.4,0,1-0.1,1.8-0.4c0.8-0.3,1.6-0.4,2.2-0.4c1,0,1.9,0.3,2.7,0.8c0.4,0.3,0.9,0.7,1.3,1.3c-0.7,0.6-1.1,1.1-1.4,1.5
                  c-0.5,0.8-0.8,1.7-0.8,2.6c0,1,0.3,2,0.9,2.8c0.6,0.8,1.2,1.4,2,1.6c-0.3,1-0.8,2.1-1.5,3.2c-1.1,1.6-2.2,2.5-3.2,2.5
                  c-0.4,0-1-0.1-1.8-0.4c-0.7-0.3-1.4-0.4-1.9-0.4c-0.5,0-1.1,0.1-1.8,0.4c-0.7,0.3-1.2,0.4-1.7,0.4c-1.3,0-2.5-1.1-3.8-3.3
                  c-1.2-2.2-1.9-4.3-1.9-6.3c0-1.9,0.5-3.5,1.4-4.7C590.6,526.4,591.8,525.8,593.3,525.8L593.3,525.8z" />
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#434445;" d="M601,521c0,0.1,0.1,0.2,0.1,0.3c0,0.1,0,0.2,0,0.2
                  c0,0.5-0.1,1.1-0.4,1.7c-0.2,0.6-0.6,1.2-1.2,1.7c-0.5,0.5-0.9,0.8-1.4,0.9c-0.3,0.1-0.7,0.2-1.3,0.2c0-1.2,0.3-2.3,1-3.2
                  C598.5,521.9,599.6,521.3,601,521L601,521z" />
        </g>
        <g id="keyboard">
          <path style="fill:#E5E9ED;stroke:#0D0D0D;stroke-miterlimit:10;" d="M692.9,606.8H363.5V602c0-4,3.2-7.2,7.2-7.2h315
                  c4,0,7.3,3.3,7.3,7.3V606.8z" />
          <polygon style="fill:#D2D6D8;" points="692,605.9 364.3,605.9 364.4,602.6 692.1,602.6  " />
          <rect x="376.7" y="593" width="21.4" height="1.9" />
          <rect x="469.8" y="593" width="21.4" height="1.9" />
          <rect x="492.8" y="592.9" width="95.4" height="1.9" />
          <rect x="399.6" y="593" width="21.4" height="1.9" />
          <rect x="422.8" y="593" width="21.4" height="1.9" />
          <rect x="445.9" y="593" width="21.4" height="1.9" />
          <rect x="590.3" y="592.9" width="21.4" height="1.9" />
          <rect x="613.2" y="592.9" width="21.4" height="1.9" />
          <rect x="636.3" y="592.9" width="21.4" height="1.9" />
          <rect x="659.5" y="592.9" width="21.4" height="1.9" />
          <path style="fill:#FFFFFF;stroke:#0D0D0D;stroke-miterlimit:10;" d="M397.1,593.9h-19.3v-2.1c0-0.6,1-1.2,2.3-1.2h14.6
                  c1.3,0,2.4,0.5,2.4,1.2V593.9z" />
          <path style="fill:#FFFFFF;stroke:#0D0D0D;stroke-miterlimit:10;" d="M419.9,593.9h-19.3v-2.1c0-0.6,1-1.2,2.3-1.2h14.6
                  c1.3,0,2.4,0.5,2.4,1.2V593.9z" />
          <path style="fill:#FFFFFF;stroke:#0D0D0D;stroke-miterlimit:10;" d="M443.1,593.9h-19.3v-2.1c0-0.6,1-1.2,2.3-1.2h14.6
                  c1.3,0,2.4,0.5,2.4,1.2V593.9z" />
          <path style="fill:#FFFFFF;stroke:#0D0D0D;stroke-miterlimit:10;" d="M466.3,593.9H447v-2.1c0-0.6,1-1.2,2.3-1.2h14.6
                  c1.3,0,2.4,0.5,2.4,1.2V593.9z" />
          <path style="fill:#FFFFFF;stroke:#0D0D0D;stroke-miterlimit:10;" d="M610.7,593.9h-19.3v-2.1c0-0.6,1-1.2,2.3-1.2h14.6
                  c1.3,0,2.4,0.5,2.4,1.2V593.9z" />
          <path style="fill:#FFFFFF;stroke:#0D0D0D;stroke-miterlimit:10;" d="M633.5,593.9h-19.3v-2.1c0-0.6,1-1.2,2.3-1.2h14.6
                  c1.3,0,2.4,0.5,2.4,1.2V593.9z" />
          <path style="fill:#FFFFFF;stroke:#0D0D0D;stroke-miterlimit:10;" d="M656.7,593.9h-19.3v-2.1c0-0.6,1-1.2,2.3-1.2h14.6
                  c1.3,0,2.4,0.5,2.4,1.2V593.9z" />
          <path style="fill:#FFFFFF;stroke:#0D0D0D;stroke-miterlimit:10;" d="M679.9,593.9h-19.3v-2.1c0-0.6,1-1.2,2.3-1.2h14.6
                  c1.3,0,2.4,0.5,2.4,1.2V593.9z" />
          <path style="fill:#FFFFFF;stroke:#0D0D0D;stroke-miterlimit:10;" d="M490.1,593.9h-19.3v-2.1c0-0.6,1-1.2,2.3-1.2h14.6
                  c1.3,0,2.4,0.5,2.4,1.2V593.9z" />
          <path style="fill:#FFFFFF;stroke:#0D0D0D;stroke-miterlimit:10;" d="M587.1,594h-93.6v-2.1c0-0.7,5-1.2,11.2-1.2h70.9
                  c6.3,0,11.5,0.5,11.5,1.2V594z" />
        </g>
        <g id="lamp">
          <g id="lamp-body">
            <g id="lamp-header">
              <g id="lamp-line-t">
                <polyline style="fill:#228370;stroke:#0B0B0B;stroke-miterlimit:10;" points="187.9,333.9 194.8,337.7 70.9,417.1 65.2,411.6 
                      187.9,333.9   " />
                <polyline style="fill:#228370;stroke:#0B0B0B;stroke-miterlimit:10;" points="198.6,342.1 205.5,346.9 84.1,425.2 79,419.7 
                      198.6,342.1   " />
              </g>
              <g id="lamp-head">
                <ellipse style="fill:#228370;stroke:#0B0B0B;stroke-miterlimit:10;" cx="193.8" cy="347.5" rx="18.5"
                  ry="19.3" />
                <path style="fill:#E8DF9A;stroke:#0B0B0B;stroke-miterlimit:10;" d="M225.9,393.2c0,0,13,10.9,26.6,2.5c2.4-1.5,4.4-3.9,5.7-6.6
              c3.3-6.8,7.6-20.6-5-31.8L225.9,393.2z" />
                <path style="fill:#3FBDA4;stroke:#0B0B0B;stroke-miterlimit:10;" d="M270.5,319.1c-20.6-7.9-47.5-7.3-64.6,4.4
                      c-11.4,7.8-20,19-24.3,33.7c-8.6,29.1,1.8,61,22.5,79.4c1.3,1.2,3.3,1,4.3-0.5L285.7,330c0.7-0.9,0.5-2.3-0.4-2.9
                      C280.8,323.8,275.9,321.1,270.5,319.1z" />
              </g>
            </g>
            <g id="lamp-line-b">
              <polyline style="fill:#228370;stroke:#0B0B0B;stroke-miterlimit:10;"
                points="69.7,432.6 74.6,426.3 125.8,567.8 119.5,572.6 69.7,432.6  " />
              <polyline style="fill:#228370;stroke:#0B0B0B;stroke-miterlimit:10;"
                points="81.6,429.1 87.5,422.9 138.2,561.8 132,566 81.6,429.1  " />
            </g>
            <ellipse id="lamp-circle" style="fill:#3FBDA4;stroke:#0B0B0B;stroke-miterlimit:10;" cx="80.2" cy="422.9"
              rx="19.7" ry="20.5" />
          </g>

          <path class="lamp-leg" style="fill:#228370;stroke:#0B0B0B;stroke-miterlimit:10;" d="M193.8,606.2H66.2v-11.6c0-1.6,2.1-2.9,4.7-2.9h121.2
                  c1,0,1.7,0.5,1.7,1.1V606.2z" />
          <g id="lamp-bottom">
            <path style="fill:#3FBDA4;stroke:#0B0B0B;stroke-miterlimit:10;" d="M81.6,591.6c0,0,10.6-32.8,48.4-31.4c0,0,39,2.3,48.7,31.4
            H81.6z" />
            <path style="fill:#70BAAF;stroke:#0B0B0B;stroke-miterlimit:10;" d="M147.9,564c0,0,8.8,4.6,17-0.4c0.5-0.3,1,0.1,1,0.8v9.2
                  C165.9,573.6,152.1,565.3,147.9,564z" />
          </g>

          <polyline class="light" style="opacity:0;fill:#FCF1C4;"
            points="276.4,343 781.8,605.3 312.8,606.8 223,418.9  " />
          <g id="lamp-line">
            <path style="fill:#E2E8C0;" d="M182.3,357.8c-8.4,28.4,1.9,61.2,23.2,78.5c1.2-0.5-1.2,0.5,0,0l-3.4-108.7
                  C192.9,335.1,186,345.2,182.3,357.8z" />
            <path style="fill:#2FAF97;" d="M61.3,422.9c0,10.7,8.4,19.6,18.2,19.6c0.2,0,0.4,0,0.6,0L74,404.3
                    C66.8,406.8,61.3,414.2,61.3,422.9z" />
            <path style="fill:#2FAF97;" d="M83,590.7H122l-8.3-27.8C90.4,569.8,83,590.7,83,590.7z" />
            <path style="fill:none;stroke:#BFE4E2;stroke-linecap:round;stroke-miterlimit:10;"
              d="M220.9,321.6c-0.4-0.1,26.1-7,46,3.5" />
            <line style="fill:none;stroke:#BFE4E2;stroke-linecap:round;stroke-miterlimit:10;" x1="271.7" y1="328.3"
              x2="274.8" y2="330" />
            <path style="fill:none;stroke:#BFE4E2;stroke-linecap:round;stroke-miterlimit:10;"
              d="M88.5,409.4c0,0,9.3,7.1,6.2,16.8" />
            <path style="fill:none;stroke:#BFE4E2;stroke-linecap:round;stroke-miterlimit:10;"
              d="M125.8,564.4c0,0,17,1,28.6,9.2" />
            <line style="fill:none;stroke:#BFE4E2;stroke-linecap:round;stroke-miterlimit:10;" x1="160.2" y1="577.1"
              x2="163.3" y2="579.5" />
          </g>
        </g>
        <g id="computer_mouse">
          <path style="fill:#E5E9ED;stroke:#0B0B0B;stroke-miterlimit:10;" d="M724.1,606.7c0,0,0-8.6,12.9-14.3c8.7-3.9,18.7-4,27.5-0.6
                  c6.8,2.6,13.7,7.2,13.7,15L724.1,606.7z" />
          <path style="fill:#D1D4D6;"
            d="M764.5,592.5c-3.9-1.4-9-2.6-13.3-2.4v15.7l26.1,0.1C777.2,601.6,773,595.6,764.5,592.5z" />
        </g>
        <g id="coffee_mug">
          <polyline style="fill:#F9EFE5;stroke:#0D0D0D;stroke-miterlimit:10;" points="849.8,516.5 865.1,606.8 908,606.8 922.4,516.5 
                  853.7,516.5   " />
          <polygon style="fill:#F3E5D4;" points="921.2,519.5 886.1,516.5 885.7,605.9 907.4,605.9  " />
          <polygon style="fill:#BE5532;stroke:#0D0D0D;stroke-miterlimit:10;"
            points="853.3,546.7 859.7,581.7 912.8,581.7 918.9,546.7  " />
          <polygon style="fill:#AD4025;" points="917.8,547.7 886.2,547.7 886.1,580.9 912.2,580.9  " />
          <line style="fill:none;stroke:#9B3021;stroke-linecap:round;stroke-miterlimit:10;" x1="858.3" y1="551.2"
            x2="914.7" y2="551.2" />
          <line style="fill:none;stroke:#9B3021;stroke-linecap:round;stroke-miterlimit:10;" x1="860.1" y1="557.9"
            x2="913.7" y2="557.9" />
          <line style="fill:none;stroke:#9B3021;stroke-linecap:round;stroke-miterlimit:10;" x1="861.1" y1="565.8"
            x2="911.6" y2="565.8" />
          <line style="fill:none;stroke:#9B3021;stroke-linecap:round;stroke-miterlimit:10;" x1="862.1" y1="573.1"
            x2="910.5" y2="573.1" />
          <line style="fill:none;stroke:#9B3021;stroke-linecap:round;stroke-miterlimit:10;" x1="862" y1="578.7"
            x2="909.5" y2="578.7" />
          <polygon style="fill:#BE5532;stroke:#0B0B0B;stroke-miterlimit:10;" points="845.3,524.5 926.2,524.5 926.2,516.5 849.8,516.5 
                  845.3,516.5   " />
          <polygon style="fill:#BE5532;stroke:#070808;stroke-miterlimit:10;"
            points="851.8,505.9 849.8,516.5 921.2,516.5 918.9,505.9  " />
          <polygon style="fill:#AD4025;" points="925.2,517.5 920,517.5 886.7,517.5 886.7,523.6 925.2,523.8  " />
          <polygon style="fill:#AD4025;" points="920,515.7 918.2,506.7 886.8,506.8 886.8,515.7  " />
          <polygon style="fill:#9B3021;" points="850.9,515.7 851.2,513.7 919.6,513.7 920,515.7  " />
        </g>
      </svg>
      <script>
        var tl = new TimelineMax();
        var bgd = $('#background rect');
        var table = $('#table_legs, #table');
        var lampLeg = $('#lamp > .lamp-leg');
        var lampbt = $('#lamp-bottom');
        var lampLight = $('#lamp > .light');
        var lampLine = $('#lamp-line');
        var lampLineB = $('#lamp-line-b');
        var lampLineT = $('#lamp-line-t');
        var lampCircle = $('#lamp-circle');
        var lampHead = $('#lamp-head');
        var lampHeader = $('#lamp-header');
        var lampBody = $('#lamp-body');
        var computer = $('#computer > *');
        var keyboard = $('#keyboard > *');
        var asset = $('#computer_mouse > * , #coffee_mug > *');

        tl.from(bgd, 0.2, { opacity: 0, scale: 0, transformOrigin: 'center center' })
          .staggerFrom(table, 0.2, { y: "-=200", opacity: 0, ease: Elastic.easeOut }, 0.1)
          .from(lampLeg, 0.2, { opacity: 0, x: "-200", ease: Elastic.easeOut })
          .from(lampbt, 0.2, { opacity: 0, scale: 0, transformOrigin: 'center center' })
          .from(lampLineB, 0.3, { opacity: 0, transformOrigin: '100% 100%', rotation: '-180deg' })
          .from(lampCircle, 0.1, { opacity: 0, x: '-=100', y: '-=100' })
          .from(lampLineT, 0.3, { opacity: 0, transformOrigin: '0% 100%', rotation: '-180deg' })
          .from(lampHead, 0.2, { opacity: 0, scale: 0, ease: Elastic.easeOut })
          .from(lampHeader, 0.5, { transformOrigin: '60% 60%', rotation: '60deg' })
          .from(lampBody, 0.5, { transformOrigin: '70% 70%', rotation: '-25deg' })
          .staggerFrom(computer, 1, { opacity: 0, scale: 0, transformOrigin: 'center center', ease: Back.easeOut }, 0.2)
          .staggerFrom(keyboard, 0.5, { opacity: 0, y: '-=100', ease: Linear.easeInOut }, 0.05)
          .staggerFrom(asset, 0.5, { opacity: 0 }, 0.05)
          .to(lampLight, 0.2, { opacity: 0.8, ease: Elastic.easeOut, delay: 0.5 }, "a")
          .to(lampLight, 0.1, { opacity: 0 }, "b")
          .to(lampLight, 0.1, { opacity: 0.5 }, "c")
          .to(bgd, 0.2, { opacity: 0.1, delay: 0.5 }, "a-=0.05")
          .to(bgd, 0.1, { opacity: 1 }, "b-=0.05")
          .to(bgd, 0.1, { opacity: 0.5 }, "c-=0.05")
          .to(bgd, 0.2, { opacity: 1, fill: '#E2E8C0' })
          .fromTo(lampLine, 0.2, { opacity: 0 }, { opacity: 0.2, delay: 0.5 }, "a-=0.05")
          .to(lampLine, 0.1, { opacity: 1 }, "b-=0.05")
          .to(lampLine, 0.1, { opacity: 0.5 }, "c-=0.05");
      </script>
    </div>
  </div>
  <div style="text-align:center; padding:15%;">
    <p style="font-size:50px; font-weight:bold;">
      Hello
      <?php
      if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while ($row = mysqli_fetch_array($query)) {
          echo $row['firstName'] . ' ' . $row['lastName'];
        }
      }
      ?>
      :)
    </p>
    <a href="index.php">Logout</a>
  </div>

</body>
<style>
  footer {
    width: 100%;
    background-color: blue;
    color: white;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bold;
    text-align: center;
  }
</style>
<footer>
  <p>&copy; 2024 Example Website</p>
  <p>Contact Us:8927760330 <a href="mailto:example@example.com">example@example.com</a></p>
  <ul>
    <li><a href="#">About Us</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
  <p>Follow us on social media:
    <a href="#" target="_blank">Facebook</a> |
    <a href="#" target="_blank">Twitter</a> |
    <a href="#" target="_blank">Instagram</a>
  </p>
</footer>

</html>