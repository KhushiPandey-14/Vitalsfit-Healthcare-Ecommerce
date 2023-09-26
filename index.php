<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VITALSFIT</title>
    <link rel="stylesheet" href="URL_TO_FONTAWESOME_CSS">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

</head>
<body>
    <header>
        <div class="navbar">
           <div class="nav-logo border">
            <div class="logo"></div>
           </div>
           <div class="nav-address border">
            <p class="add-first">Deliver to</p>
            <div class="add-icon">
                <i class="fa-solid fa-location-dot"></i>
                <p class="add-sec">India</p>
            </div>
           </div>
           <div class="nav-search">
            <select class="search-select" onchange="window.location.href=this.value;">
                <option value="index.php">All</option>
                <option value="Health care devices.php">Health care devices</option>
                <option value="Personal care.php">Personal care</option>
                <option value="Food.php">Health food & drinks</option>
                <option value="Mother& baby care.php">Mother & baby care</option>
                <option value="Elderly_care.php">Elderly care</option>
                <option value="Heath_supplements.php">Health supplements</option>
                <option value="Skin_care.php">Skin care</option>
                <option value="Yoga&Workout.php">Yoga and Workout</option>
            </select>
            <input placeholder="Search VitalsFit" class="search-input">
            <div class="search-icon">
                <i class="fa-solid fa-magnifying-glass" style="color: #073450;"></i>
            </div>
           </div>
           <div class="nav-signin border">
            <p><span><a href="login.php">Hello,sign in</span></p>
            <p class="nav-sec">Account</p>
            </a>
           </div>
           <div class="nav-return border">
            <p><span>Returns</span></p>
            <p class="nav-sec">& Orders</p>
           </div>
           <div class="nav-cart border">
            <i class="fa-solid fa-cart-shopping" style="color: #da9010;"></i>
            Cart
           </div>
        </div>
        <div class="panel">
            <div class="panel-all">
                <!-- <i class="fa-solid fa-bars"></i> -->
                <select onchange="window.location.href=this.value;">
                
                <option value="index.php">All</option>
                <option value="About_us.html">About us</option>
                <option value="bmi.html">Calculate BMI</option>
                <option value="Quiz.html">Quiz</option>
                <option value="Facts.html">Facts</option>
            </select>
            </div>
            <div class="panel-ops">
                <p><a href="About_us.html">About Us</a></p>
                <p><a href="bmi.html">Calculate BMI</a></p>
                <p><a href="Quiz.html">Quiz</a></p>
                <p><a href="Facts.html">Facts</a></p>
            </div>
        </div>
    </header>
    <div id="slideshow">
        <div class="slide-wrapper">
            <div class="slide">
                <img src="Images/hero2.jpg" id="img1" class="slide-num" style="width: 100%;">
                <div class="slide-text">"Connecting You to a Healthier Tomorrow"</div>
                </div>
                <div class="slide" id="second-slide">
                    <img src="Images/hero-image.jpg" id="img1" class="slide-num" style="width: 100%;">
                    <div class="slide-text">"Care in Every Click"</div>
                </div>
    
                <div class="slide" id="third-slide">
                    <img src="Images/hero_image.jpeg" id="img1" class="slide-num" style="width: 100%;">
                    <div class="slide-text">" Vitalsfit - Your symphony of wellness "</div>
                </div>
                
            </div>
        </div>
             
         <div class="hero-msg">
            <p>You are on VitalsFit.com. Click here to know more about us. <a href="About_us.html">About us</a>
            </p>
        </div>
    </div>
    <div class="shop-sec">
    <div class="box border1">
    <div class="box-content">
        <h2>Health care devices</h2>
        <div class="box-img" style="background-image:url('Images/box1_image.jpg');"></div>
        <p>
            <?php if(isset($_SESSION["login"])) { ?>
                <a href="Health care devices.php">Shop now</a>
             <?php } else { ?>
                <a href="Health care devices.php">Shop Now</a>
            <?php } ?> 
        </p>
    </div>
</div>


        <div class="box border1">
            <div class="box-content">
                <h2>Personal Care</h2>
                <div class="box-img" style="background-image:url('Images/box2_image.jpg');"></div>
                <p>
            <?php if(isset($_SESSION["login"])) { ?>
                <a href="Personal care.php">Shop now</a>
             <?php } else { ?>
                <a href="Personal care.php">Shop Now</a>
            <?php } ?> 
        </p>
            </div>
        </div>

        <div class="box border1">
            <div class="box-content">
                <h2>Health food and drinks</h2>
                <div class="box-img" style="background-image:url('Images/box3_image.jpg');"></div>
                <p>
            <?php if(isset($_SESSION["login"])) { ?>
                <a href="Food.php">Shop now</a>
             <?php } else { ?>
                <a href="Food.php">Shop Now</a>
            <?php } ?> 
        </p>
            </div>
        </div>
        <div class="box border1">
            <div class="box-content">
                <h2>Mother and baby care</h2>
                <div class="box-img" style="background-image:url('Images/box4_image.jpg');"></div>
                <p>
            <?php if(isset($_SESSION["login"])) { ?>
                <a href="Mother& baby care.php">Shop now</a>
             <?php } else { ?>
                <a href="Mother& baby care.php">Shop Now</a>
            <?php } ?> 
        </p>
            </div>
        </div>
        <div class="box border1">
            <div class="box-content">
                <h2>Elderly care</h2>
                <div class="box-img" style="background-image:url('Images/box5_image.jpg');"></div>
                <p>
            <?php if(isset($_SESSION["login"])) { ?>
                <a href="Mother& baby care.php">Shop now</a>
             <?php } else { ?>
                <a href="Mother& baby care.php">Shop Now</a>
            <?php } ?> 
             </p>
            </div>
        </div>
        <div class="box border1">
            <div class="box-content">
                <h2>Fitness supplements</h2>
                <div class="box-img" style="background-image:url('Images/box6_image.jpg');"></div>
                <p>
            <?php if(isset($_SESSION["login"])) { ?>
                <a href="Health_supplements.php">Shop now</a>
             <?php } else { ?>
                <a href="Health_supplements.php">Shop Now</a>
            <?php } ?> 
             </p>
            </div>
        </div>
        <div class="box border1">
            <div class="box-content">
                <h2>Skin care</h2>
                <div class="box-img" style="background-image:url('Images/box7_image.jpg');"></div>
                <p>
            <?php if(isset($_SESSION["login"])) { ?>
                <a href="Skin_care.php">Shop now</a>
             <?php } else { ?>
                <a href="Skin_care.php">Shop Now</a>
            <?php } ?> 
            </div>
        </div>
        <div class="box border1">
            <div class="box-content">
                <h2>Yoga and Workout</h2>
                <div class="box-img" style="background-image:url('Images/box8_image.jpg');"></div>
                <p>
            <?php if(isset($_SESSION["login"])) { ?>
                <a href="Yoga&Workout.php">Shop now</a>
             <?php } else { ?>
                <a href="Yoga&Workout.php">Shop Now</a>
            <?php } ?> 
            </div>
        </div>
    </div>
    <footer>
        <div class="foot-panel1" id="backToTop">Back to Top</div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
        const backToTop = document.getElementById('backToTop');
        
        backToTop.addEventListener('click', scrollToTop);
        
        function scrollToTop() {
            if (window.scrollY !== 0) {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        }
    });
</script>
    
            <div class="contact-panel">
                <p>Contact Us</p>
                <br>
                <div class="contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    Email: info@vitalsfit.com
                </div>
                <div class="contact-item">
                    <i class="fa-brands fa-instagram"></i>
                    Instagram: @vitalsfit_official
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-phone"></i>
                    Phone: +91 98765 43210
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-location-dot"></i>
                    Address: 123 Fitness Street, Healthville, Bangalore, India
                </div>
            </div>

        <div class="foot-panel3">
            <div class="logo1"></div>
        </div>
        <div class="foot-panel4">
        <div class="pages">
            <a>Conditions of Use</a>
            <a>Privacy Notice</a>
            <a>Your Ads Privacy Choices</a>
        </div>
        <div class="copyright">
            © 2022-2023, Vitalsfit.com, Inc. or its affiliates
        </div>
        </div>
    </footer>
</body>
</html>