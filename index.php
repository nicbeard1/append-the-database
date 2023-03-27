<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
        <meta name="description" content="" >
        <meta name="author" content="" >
        <title>TLOJ(test site) - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" >
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" >
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Test Site</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item"><a class="nav-link" href="members.autismman.php">TLOJ members</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">contact me</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="assets/legion.jpg" alt="..." >
                <h1 class="text-white fs-3 fw-bolder">TLOJ</h1>
                <p class="text-white-50 mb-0">Nicholas Beard</p>
            </div>
        </header>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>update TLOJ database</h2>
                       
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "test";
                             
                            // Create connection
                            $conn = new mysqli($servername,
                                $username, $password, $dbname);
                             
                            // Check connection
                            if ($conn == FALSE) {
                                die("Connection failed: "
                                    . $conn == FALSE);
                            }
                            // insert into database
                            $sql = "INSERT INTO tloj VALUES";
                            
                            // if connection to database is successful, tell the user, otherwise return an error
                            if ($conn>$sql === TRUE) {
                                echo "record inserted successfully" ;
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn == FALSE;
                            }

                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                             
                                // collect value of input field
                                $data = $_POST['val1'];
                             
                                if (empty($data)) {
                                    echo "data is empty";
                                } else {
                                    echo $data;
                                }
                            }
                                                     
                            // Closing the connection.
                            // $conn > close();

                        ?>
                        <!-- enter the hero's name, alias, powers and role to append the SQLMyAdmin database-->
                        <p>Storing Form data in Database</p>

                        <form action="insert.php" method="post">
                            <!-- enter name -->
                            <p>
                               <label for="name">name: </label>
                               <input type="text" name="name" id="name">
                            </p>
                 
                            <!-- enter superhero name (alias) -->
                            <p>
                               <label for="alias">alias: </label>
                               <input type="text" name="alias" id="alias">
                            </p>
                 
                            <!-- enter powers -->
                            <p>
                               <label for="powers">powers: </label>
                               <input type="text" name="powers" id="powers">
                            </p>
                 
                            <!-- enter team role (leader, medic E.T.C.) -->
                            <p>
                               <label for="role">role:</label>
                               <input type="text" name="role" id="role">
                            </p>
                 
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
        <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Forecast</h2>
                        
                        <!-- d63384 - pink, 303F9F - blue, 20c997 - Teal -->

                        <!-- live forecast -->
                        <div id="ww_f968e5855fb8e" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl8655"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#303F9F","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://sharpweather.com/weather_bradford_2977/" id="ww_f968e5855fb8e_u" target="_blank">forecast for Bradford</a>
                        </div>

                        <!-- air quality -->
                        <div _ngcontent-airvisual-web-c196="" name="airvisual_widget" key="oNC3J2eEmcsyXHEDQ" class="airvisual-widget-custom"><style>
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ ~ *,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ *,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ * { box-sizing: border-box;
                              -webkit-box-sizing: border-box; moz-box-sizing: border-box; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ p,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ p { margin: 0; padding: 0; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ:hover,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ:focus {
                                font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-weight: 200;
                                line-height: 12px; font-size: 13px; color: black; background-color: white;
                                width: auto; border-radius: 3px; text-decoration: none; display: inline-flex;
                                flex-direction: column; margin-right: 5px; text-align: center; box-shadow: 0px 0px 10px 0px #646464;
                                margin-bottom: 10px; }
                              .legendAirvisualWidget-oNC3J2eEmcsyXHEDQ {background-color: #f0f0f0;
                                width: 100%; font-size: 11px; line-height: 13px; height: 30px;
                                padding: 3px 0; text-transform: capitalize; border-radius: 3px 3px 0 0;
                                white-space: nowrap; text-overflow: ellipsis; overflow: hidden;
                                }
                              .legendAirvisualWidget-oNC3J2eEmcsyXHEDQ strong { font-size: 125%;
                                font-weight: 500; }
                              .bodyAirvisualWidget { display: inline-flex; height: 50px; }
                              .dividerAirvisualWidget{display: inline-flex; height: 50px; border-left: 1px solid #c7c7c7;}
                              .itemAirvisualWidget{display: inline-flex; height: 45px; margin-left: auto;
                                margin-right: auto; padding: 10px 5px; line-height: 1; vertical-align: top;}
                              .itemAirvisualWidget .rounded-icon { width: 35px; height: 35px; }
                              .AirvisualWidgetItemText{ width: 60px;}
                              .AirvisualWidgetItemText strong { font-size: 175%; margin-right: 1px; }
                              .monoline { font-size: 175%; margin-top: 7px; }
                              .monoline strong { font-weight: 500; font-size: 100%; }
                              .AirvisualWidgetItemText sup { position: relative; font-size: 75%;
                                line-height: 0; vertical-align: baseline; top: -.5em; }
                              .AirvisualWidgetPopUp { display: none; position: fixed;
                                -webkit-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.69);
                                -moz-box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.69);
                                box-shadow: 0px 0px 10px 1px rgba(0,0,0,0.69); border-radius: 10px;
                                font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 12px;
                                color: #27282b; overflow: hidden; height: 200px; width: 328px; z-index: 999;}
                              .AirvisualWidgetPopUp h2, .AirvisualWidgetPopUp h3 { font-weight: 500;
                                line-height: 1.1; font-size: 15px; text-transform: uppercase; display: inline; margin: 0; }
                              .AirvisualWidgetPopUp .pollution-img{ height: 30px; }
                              .AirvisualWidgetPopUp img { vertical-align: middle; }
                              .AirvisualWidgetPopUp .headerWidget{ height: 35px; background: #efefef; padding: 12px 15px;}
                              .AirvisualWidgetPopUp .station { white-space: nowrap; text-overflow: ellipsis; overflow: hidden; }
                              .AirvisualWidgetPopUp .temperature{ float: right;text-align: right; margin-top:-4px; }
                              .AirvisualWidgetPopUp .contentWidget{ padding: 5px 15px; text-align: center;
                                height: 140px; background-color:rgb(255,255,255) }
                              .AirvisualWidgetPopUp .forecastsImg{ margin: 2px 5px; }
                              .AirvisualWidgetPopUp .forecasts { padding-top: 15px; }
                              .AirvisualWidgetPopUp .forecastsCol { padding-left: 5px !important; padding-right: 5px !important; }
                              .AirvisualWidgetPopUp .footerWidget { padding-left: 15px; padding-right: 15px;
                                background: #efefef; height: 26px; line-height: 26px; font-size: 10px; color: #8c8c8c; }
                              .AirvisualWidgetPopUp .footerWidget div { padding-left: 5px; padding-right: 5px; }
                              .AirvisualWidgetPopUp .credits{ text-align:right; color: #8c8c8c; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .row,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .row { margin-left: -15px;
                                margin-right: -15px; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .row:after,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .row:after { clear: both; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .row:after,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .row:before,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .row:after,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .row:before { display: table;
                                content: ' '; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-1,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-1,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-2,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-2,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-3,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-3,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-4,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-4,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-5,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-5,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-6,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-6,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-7,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-7,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-8,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-8,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-9,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-9,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-10,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-10,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-11,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-11,
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-12,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-12 { float: left;
                                position: relative; min-height: 1px;  padding-left: 15px; padding-right: 15px; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-12,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-12 { width: 100%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-11,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-11 { width: 91.66666667%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-10,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-10 { width: 83.33333333%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-9,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-9 { width: 75%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-8,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-8 { width: 66.66666667%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-7,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-7 { width: 58.33333333%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-6,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-6 { width: 50%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-5,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-5 { width: 41.66666667%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-4,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-4 { width: 33.33333333%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-3,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-3 { width: 25%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-2,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-2 { width: 16.66666667%; }
                              .wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ .col-xs-1,
                              #outdoorAirvisualWidgetPopUp-oNC3J2eEmcsyXHEDQ .col-xs-1 { width: 8.33333333%; }
                              </style>
                              <a href="https://www.airvisual.com/uk/england/bradford" class="wrapperAirvisualWidget-oNC3J2eEmcsyXHEDQ"> 
                                <div class="legendAirvisualWidget-oNC3J2eEmcsyXHEDQ">
                                    <strong style="">Bradford</strong>
                                    <br>10:00AM
                                </div>
                                <div class="bodyAirvisualWidget">
                                    <div class="itemAirvisualWidget">
                                        <img src="https://d25jl8yaav4s0u.cloudfront.net/images/forecast_aqi1.png" class="rounded-icon">
                                        <div class="AirvisualWidgetItemText"> 
                                            <strong style="">8</strong>
                                            <br> US AQI 
                                        </div>
                                    </div>
                                    <div class="dividerAirvisualWidget"></div>
                                    <div class="itemAirvisualWidget">
                                        <img src="https://d25jl8yaav4s0u.cloudfront.net/images/03d.png" class="rounded-icon"><div class="AirvisualWidgetItemText monoline"> 
                                            <strong>5°</strong>C 
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- source for weather information -->
                        <script async src="https://app1.weatherwidget.org/js/?id=ww_f968e5855fb8e"></script>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <!-- copyright section -->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Test site 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
