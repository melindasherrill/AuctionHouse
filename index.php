<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/homepage.css">
<style>
    body {font-family: "Lato", sans-serif}
    .mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-pink w3-card-2">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <!-- <a href="viewevent.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">EVENTS</a>
        <a href="viewbid.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BIDS</a>
        <a href="settings.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SETTINGS</a> -->
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">ACCOUNT <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('loginModal').style.display='block'">LOGIN</a>
                <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('signupModal').style.display='block'">BUYER CREATE</a>
                <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('signupModal').style.display='block'">VENDOR CREATE</a>
                <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('signupModal').style.display='block'">EMPLOYEE CREATE</a>
            </div>
        </div>
        <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
        <img src="/img/PinkiePie.png" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>Hello</h3>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="/img/PinkiePie2.png" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>World</h3>
        </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
        <img src="/img/PinkiePie3.png" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>!</h3>
        </div>
    </div>

    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
        <h2 class="w3-wide">KEVIN IS THE BEST</h2>
        <p class="w3-opacity"><i>Pretty Page: Check!</i></p>
        <p class="w3-justify">Pretty body text: Check!</p>
        <div class="w3-row w3-padding-32">
            <div class="w3-third">
                <p>Meow</p>
                <img src="/img/buffalo.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
            </div>
            <div class="w3-third">
                <p>Meow</p>
                <img src="/img/chicken.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
            </div>
            <div class="w3-third">
                <p>Meow</p>
                <img src="/img/philly.jpg" class="w3-round" alt="Random Name" style="width:60%">
            </div>
        </div>
    </div>

    <!-- The Tour Section -->
    <div class="w3-pink" id="tour">
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
            <h2 class="w3-wide w3-center">UPCOMING AUCTIONS</h2>
            <p class="w3-opacity w3-center"><i></i></p><br>

            <ul class="w3-ul w3-border w3-white w3-text-grey">
                <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">5</span></li>
                <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">2</span></li>
                <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
            </ul>

            <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                <div class="w3-third w3-margin-bottom">
                    <img src="/img/red.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Red Clam Chowder</b></p>
                        <p class="w3-opacity">YUMMY YUMMY</p>
                        <p>NOM NOM NOM</p>
                        <button class="w3-button w3-pink w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">FOOD</button>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <img src="/img/ramen.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Ramen</b></p>
                        <p class="w3-opacity">YUMMY YUMMY</p>
                        <p>NOM NOM NOM</p>
                        <button class="w3-button w3-pink w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">FOOD</button>
                    </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                    <img src="/img/tortilla.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
                    <div class="w3-container w3-white">
                        <p><b>Tortilla Soup</b></p>
                        <p class="w3-opacity">YUMMY YUMMY</p>
                        <p>NOM NOM NOM</p>
                        <button class="w3-button w3-pink w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">FOOD</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ticket Modal -->
    <div id="ticketModal" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal w3-center w3-padding-32">
        <span onclick="document.getElementById('ticketModal').style.display='none'"
              class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>ITEM</h2>
            </header>
            <div class="w3-container">
                <p><label><i class="fa fa-shopping-cart"></i> Username</label></p>
                <input class="w3-input w3-border" type="text" placeholder="Username">
                <p><label><i class="fa fa-user"></i> Bid Amount</label></p>
                <input class="w3-input w3-border" type="text" placeholder="Amount">
                <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
                <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
                <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
            </div>
        </div>
    </div>
    <!-- Login Modal -->
     <form action="index.php" method="post">
    <div id="loginModal" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal w3-center w3-padding-32">
        <span onclick="document.getElementById('loginModal').style.display='none'"
              class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>LOGIN</h2>
            </header>
            <div class="w3-container">
                <p><label><i class="fa fa-shopping-cart"></i> Username </label></p>
                <input name="user" class="w3-input w3-border" type="text" placeholder="Username">
                <p><label><i class="fa fa-user"></i> Password </label></p>
                <input name="pass" class="w3-input w3-border" type="text" placeholder="Password">
                <button name="submit" type="submit" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">SUBMIT <i class="fa fa-check"></i></button>
                
            </div>
        </form>
            <?php

                $host = "localhost";
                $user = "root";
                $pass = "";
                $dbname = "auction";
              
                $con = mysqli_connect($host, $user, $pass, $dbname) or die("<html><script language='JavaScript'>alert('Did not connect'),history.go(-1)</script></html>");
                

                if(isset($_POST["submit"])) { //once submit button is hit, go here
                    $email = $_POST['user']; //loads email
                    $pass2 = $_POST['pass']; //loads password

                     //echo "<html><script language='JavaScript'>window.location.href='/buyercreate.php'</script></html>";
                    
                    if(mysqli_connect_errno()){
                        echo "<html><script language='JavaScript'>alert('Did not connect'),history.go(-1)</script></html>";
                    }

                    if(mysqli_query($con, "CALL logIn('$email', '$pass2')")==TRUE){
                         echo "<html><script language='JavaScript'>window.location.href='/main.php'</script></html>";
                    }
            }
            ?>
        </div>
    </div>
    <!-- Sign up Modal -->
    <form action="signup1.php" method="post">
    <div id="signupModal" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal w3-center w3-padding-32">
        <span onclick="document.getElementById('signupModal').style.display='none'"
              class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>CREATE ACCOUNT</h2>
            </header>
            <div class="w3-container">
                <p><label><i class="fa fa-shopping-cart"></i> Name </label></p>
                <input name="name" name= "user" class="w3-input w3-border" type="text" placeholder="Name">
                <p><label><i class="fa fa-shopping-cart"></i> Email </label></p>
                <input name= "user" class="w3-input w3-border" type="text" placeholder="Username">
                <p><label><i class="fa fa-user"></i>Password</label></p>
                <input name ="pass" class="w3-input w3-border" type="text" placeholder="Password">
                <p><label><i class="fa fa-user"></i>Repeat Password</label></p>
                <input name="pass2" class="w3-input w3-border" type="text" placeholder="Password">
                <p><label><i class="fa fa-shopping-cart"></i> Address </label></p>
                <input name= "address" class="w3-input w3-border" type="text" placeholder="Username">
                <p><label><i class="fa fa-shopping-cart"></i> Credit Card </label></p>
                <input name= "card" class="w3-input w3-border" type="text" placeholder="####-####-####">
                <p><label><i class="fa fa-shopping-cart"></i> CVV </label></p>
                <input name= "CVV" class="w3-input w3-border" type="text" placeholder="CVV">
                <button name = "submit" type="submit" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">SUBMIT <i class="fa fa-check"></i></button>
            </div>
        </div>
    </div>
</form>

    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
        <h2 class="w3-wide w3-center">CONTACT</h2>
        <p class="w3-opacity w3-center"><i>Keep Up to Date</i></p>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-map-marker" style="width:30px"></i> California, US<br>
                <i class="fa fa-phone" style="width:30px"></i> Phone: 123 456 7890<br>
                <i class="fa fa-envelope" style="width:30px"> </i> Email: blahblah@blahmail.com<br>
            </div>
            <div class="w3-col m6">
                <form action="/action_page.php" target="_blank">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                    <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
                </form>
            </div>
        </div>
    </div>

    <!-- End Page Content -->
</div>


<script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>