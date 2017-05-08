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
        <a href="viewevent.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">EVENTS</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">SETTINGS <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="index.php" class="w3-bar-item w3-button">LOG OUT</a>
            </div>
        </div>        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">ITEMS <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('loginMoal').style.display='block'">VIEW ITEMS</a>
                <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('itemsModal').style.display='block'">ADD ITEMS</a>
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

<div class="w3-content" style="max-width:1300px;margin-top:46px">
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