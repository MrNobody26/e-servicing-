<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>e-servicing</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="just.css">
</head>
<body>

    <div class="header">
        <div style="position: absolute; width: 240px; height: 96px; left: 35px; top: 11px;"><img src="logo.png" width="230" /></div>
        <h1>E-SERVICING & VEHICLE MANAGEMENT SYSTEM</h1>
        <p>A easy way to keep your vehicle healthy.</p>
    </div>

    <div class="navbar">
        <a href="1HOME.html">Home</a>
        <a href="abt_us.html">About us</a>
        <div class="dropdown">
        <button class="dropbtn">Services
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="1washing.html" >washing</a>
            <a href="1advanceappointment.html">Service</a>
            <a href="shoppingindex.html" >Spare parts</a>
        </div>
        </div>
        <a href="logout.php" class="right"> LOG OUT</a>
    </div>
    <link href="sgnup.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <style>
        #msg {
            visibility: hidden;
            min-width: 250px;
            background-color:yellow;
            color: #000;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            right: 30%;
            top: 30px;
            font-size: 17px;
            margin-right:30px;
        }

        #msg.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {top: 0; opacity: 0;} 
            to {top: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {top: 0; opacity: 0;}
            to {top: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {top: 30px; opacity: 1;} 
            to {top: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {top: 30px; opacity: 1;}
            to {top: 0; opacity: 0;}
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>

<body>
    <div class="available_appointment_div">
        <section class="show_available_appointment_section">
            <div class="show_header">
                <b><p class="section_header" align="center">Available Slots for Appointment</p></b>
            </div>
            <br>
            <?php
                $available = array(
                    array(
                        "date" => "08/06/2020",
                        "time" => "02:00PM"
                    ),
                    array(
                        "date" => "08/06/2020",
                        "time" => "03:00PM"
                    ),
                    array(
                        "date" => "08/06/2020",
                        "time" => "04:00PM"
                    ),
                    array(
                        "date" => "08/06/2020",
                        "time" => "05:00PM"
                    ),
                    array(
                        "date" => "08/06/2020",
                        "time" => "06:00PM"
                    )
                );
                foreach($available as $a)
                {
                    echo("<center><article class='show_details'>");
                        echo("<center><b>Date</b>&nbsp<i>" . $a["date"] . "</i></center>");
                        // echo("&nbsp&nbsp&nbsp&nbsp");
                        echo("<center><b>Time</b>&nbsp<i>" . $a["time"] . "</i></center>");
                        echo("<input type='checkbox' name='book_now[]'>");
                        echo("<br>");
                    echo("</article</center>");
                    echo("<br>");
                }
                echo("<br>");echo("<br>");
                echo("<button type='submit' class='appointment_button'>Book Appointment</button>");
            ?>
        </div>
        <section class="show_booked_appointment_section">
            <div class="show_header">
                <b><p class="section_header" align="center">Booked Slots for Appointment</p></b>
            </div>
            <?php
                $free = array(
                    array(
                        "date" => "08/06/2020",
                        "time" => "07:00PM"
                    ),
                    array(
                        "date" => "08/06/2020",
                        "time" => "08:00PM"
                    ),
                    array(
                        "date" => "08/06/2020",
                        "time" => "09:00PM"
                    ),
                    array(
                        "date" => "08/06/2020",
                        "time" => "10:00PM"
                    ),
                    array(
                        "date" => "08/06/2020",
                        "time" => "11:00PM"
                    )
                );
                foreach($free as $f)
                {
                    echo("<article>");
                        echo("<center><b>Date</b>&nbsp<i>" . $f["date"] . "</i></center>");
                        // echo("&nbsp&nbsp&nbsp&nbsp");
                        echo("<center><b>Time</b>&nbsp<i>" . $f["time"] . "</i></center>");
                        echo("<b></b><i></i>");
                        echo("<br>");
                    echo("</article");
                    echo("<br>");
                }
            ?>
        </div>
    </div>
    <br>
</body>
<body>
    <!-- <div class="footer">
        <h2 style="color: white">Contact Us</h2><h4 style="text-align: left; color: white;">phone No: 1234567890</h4>
        !-- Add font awesome icons --
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
    </div> -->
    
</body>
</html>