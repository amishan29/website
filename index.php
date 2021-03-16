<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Weather Infinity</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />

    


</head>
<body>
    <header>
        <div class="logo">
            <a href="#"><img src="./img/logo5.png" alt=""></a>
        </div>
        
        <div class="login">
        <a href="login.php" name="login_logout">Login</a>
            
        </div>
    </header> 
    
    
    <div class="grid-container">
        <div class="container-1">
            <div class="weather-section" >
            
                <div class="search">
                    <input type="text" autocomplete="off" class="search-box" placeholder="Enter City">
                </div>
                <div class="location">
                    <div class="city"></div>
                    <div class="date"></div>
                 </div>
                <div class="current">
                    <div class="temp"><span></span></div>
                    <div class="weather"></div>
                    <div class="high-low"></div>
                </div>
            </div>  
            
            
            
            <div class="covid">
                <div class="latest-report">
                    <div class="country-name">
                        
                        <!-- <div class="search-country">
                            <div class="search-box-covid">
                                <input type="text" class="search-input" placeholder="Search Country...">
                            </div>
                        </div> -->
                        <div class="name">Loading...</div>
                        
                    </div>
                    <div class="total-cases">
                        <div class="title">Total Cases</div>
                        <div class="value">0</div>
                        <div class="new-value">+0</div>
                    </div>
                    <div class="recovered">
                        <div class="title">Recovered</div>
                        <div class="value">0</div>
                        <div class="new-value">+0</div>
                    </div>
                    <div class="deaths">
                        <div class="title">Deaths </div>
                        <div class="value"> 0</div>
                        <div class="new-value">+0</div>
                    </div>
                </div>      
            </div>
        </div>

        <div class="container-2">
            <div class="news" id="news_slider">
                 
                
            </div>
    
        </div>
         

    </div>
    <footer>
        <div class="info"><p>All Right Reserved</p></div>




    </footer>
    


    
</body>
<script src='weather.js'></script>
<script src='covid.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>
<script src="slider.js"></script>
<script src="news.js"></script>
</html>