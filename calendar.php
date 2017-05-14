<!DOCTYPE html>
<html>
<title>Auction Central</title>

    <link rel="stylesheet" href="css/calendar.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <link rel="shortcut icon" href="img/favicon.ico.png" type="image/x-icon"> 

<style>
    body {font-family: "Lato", sans-serif}
    .mySlides {display: none}
</style>
<body>
<div class="w3-top">
    <div class="w3-bar w3-pink w3-card-2">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="/main.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <a href="/calendar.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">EVENTS</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">SETTINGS <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="index.php" class="w3-bar-item w3-button">LOG OUT</a>
            </div>
        </div>        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">ITEMS <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="/viewitems.php" class="w3-bar-item w3-button" onclick="document.getElementById('loginMoal').style.display='block'">VIEW ITEMS</a>
                <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('itemsModal').style.display='block'">ADD ITEMS</a>
            </div>
        </div>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-padding-large w3-button" title="More">AUCTIONS <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="#" onclick="document.getElementById('AuctionModal').style.display='block'" class="w3-bar-item w3-button">REQUEST AUCTION</a>
            </div>
        </div> 
       
        <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
    </div>
</div>



<br/>
<br/>
        <div id="calendar-wrap">
            <header>
                <h1>May 2017</h1>
            </header>
            <div id="calendar">
                <ul class="weekdays">
                    <li>Sunday</li>
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                    <li>Saturday</li>
                </ul>

                <!-- Days from previous month -->

                <ul class="days">
                  <!--  <li class="day other-month">
                        <div class="date">27</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">28</div>
                        <div class="event">
                            <div class="event-desc">
                                HTML 5 lecture with Brad Traversy from Eduonix
                            </div>
                            <div class="event-time">
                                1:00pm to 3:00pm
                            </div>
                        </div>
                    </li>
                    <li class="day other-month">
                        <div class="date">29</div>
                    </li>-->
                    <li class="day other-month">
                        <div class="date">30</div>
                    </li>

                    <!-- Days in current month -->

                    <li class="day">
                        <div class="date">1</div>
                    </li>
                    <li class="day">
                        <div class="date">2</div>
                        <div class="event">
                            <div class="event-desc">
                                Cheep Cheep Auction
                            </div>
                            <div class="event-time">
                                2:00pm to 5:00pm
                            </div>
                        </div>
                    </li>
                </ul>

                <!-- Row #2 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">3</div>
                    </li>
                    <li class="day">
                        <div class="date">4</div>
                    </li>
                    <li class="day">
                        <div class="date">5</div>
                    </li>
                    <li class="day">
                        <div class="date">6</div>
                    </li>
                    <li class="day">
                        <div class="date">7</div>
                        <div class="event">
                            <div class="event-desc">
                                Quack Quack Auction
                            </div>
                            <div class="event-time">
                                6:00pm to 8:30pm
                            </div>
                        </div>
                    </li>
                    <li class="day">
                        <div class="date">8</div>
                    </li>
                    <li class="day">
                        <div class="date">9</div>
                    </li>
                </ul>

                <!-- Row #3 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">10</div>
                    </li>
                    <li class="day">
                        <div class="date">11</div>
                    </li>
                    <li class="day">
                        <div class="date">12</div>
                    </li>
                    <li class="day">
                        <div class="date">13</div>
                    </li>
                    <li class="day">
                        <div class="date">14</div><div class="event">
                            <div class="event-desc">
                                Meow Meow Auction
                            </div>
                            <div class="event-time">
                                1:00pm to 3:00pm
                            </div>
                        </div>
                    </li>
                    <li class="day">
                        <div class="date">15</div>
                    </li>
                    <li class="day">
                        <div class="date">16</div>
                    </li>
                </ul>

                <!-- Row #4 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">17</div>
                    </li>
                    <li class="day">
                        <div class="date">18</div>
                    </li>
                    <li class="day">
                        <div class="date">19</div>
                    </li>
                    <li class="day">
                        <div class="date">20</div>
                    </li>
                    <li class="day">
                        <div class="date">21</div>
                    </li>
                    <li class="day">
                        <div class="date">22</div>
                        <div class="event">
                            <div class="event-desc">
                                Rawr Rawr Auction
                            </div>
                            <div class="event-time">
                                9:00am to 12:00pm
                            </div>
                        </div>
                    </li>
                    <li class="day">
                        <div class="date">23</div>
                    </li>
                </ul>

                <!-- Row #5 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">24</div>
                    </li>
                    <li class="day">
                        <div class="date">25</div>
                        <div class="event">
                            <div class="event-desc">
                                Moo Moo Auction
                            </div>
                            <div class="event-time">
                                1:00pm to 3:00pm
                            </div>
                        </div>
                    </li>
                    <li class="day">
                        <div class="date">26</div>
                    </li>
                    <li class="day">
                        <div class="date">27</div>
                    </li>
                    <li class="day">
                        <div class="date">28</div>
                    </li>
                    <li class="day">
                        <div class="date">29</div>
                    </li>
                    <li class="day">
                        <div class="date">30</div>
                    </li>
                </ul>

                <!-- Row #6 -->

                <ul class="days">
                    <li class="day">
                        <div class="date">31</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">1</div> <!-- Next Month -->
                    </li>
                    <li class="day other-month">
                        <div class="date">2</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">3</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">4</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">5</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">6</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">7</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">8</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">9</div>
                    </li>
                    <li class="day other-month">
                        <div class="date">10</div>
                    </li>
                </ul>

            </div><!-- /. calendar -->
        </div><!-- /. wrap -->

<form action="addAuction.php" method="post">
    <div id="AuctionModal" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal w3-center w3-padding-32">
        <span onclick="document.getElementById('AuctionModal').style.display='none'"
              class="w3-button w3-teal w3-xlarge w3-display-topright">x</span>
                <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Request Auction</h2>
            </header>
            <div class="w3-container">
                <p><label><i class="fa fa-shopping-cart"></i> Name </label></p>
                <input name="name" class="w3-input w3-border" type="text" placeholder="Name of Auction">
                <p><label><i class="fa fa-user"></i> Charity</label></p>
                <input name="charity" class="w3-input w3-border" type="text" placeholder="Charity's Name">
                 <p><label><i class="fa fa-user"></i> Date</label></p>
                <input name="date" class="w3-input w3-border" type="text" placeholder="mm/dd/yyyy">
                 <p><label><i class="fa fa-user"></i> Comments</label></p>
                <input name="comments" class="w3-input w3-border" type="text" placeholder="Anything else?">
                <button type="submit" name="submit" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">REQUEST<i class="fa fa-check"></i></button>
            </div>
        </div>
    </div>
   </form>
    <!-- Items Modal -->
    <form action="additems.php" method="post">
    <div id="itemsModal" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal w3-center w3-padding-32">
        <span onclick="document.getElementById('itemsModal').style.display='none'"
              class="w3-button w3-teal w3-xlarge w3-display-topright">x</span>
                <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>ITEM</h2>
            </header>
            <div class="w3-container">
                <p><label><i class="fa fa-shopping-cart"></i> Item </label></p>
                <input name="item" class="w3-input w3-border" type="text" placeholder="item">
                <p><label><i class="fa fa-user"></i> Condition</label></p>
                <input name="con" class="w3-input w3-border" type="text" placeholder="good, fair, or poor">
                 <p><label><i class="fa fa-user"></i> Starting Bid</label></p>
                <input name="bid" class="w3-input w3-border" type="text" placeholder="$$">
                 <p><label><i class="fa fa-user"></i> Comments</label></p>
                <input name="comments" class="w3-input w3-border" type="text" placeholder="Anything else?">
                <button type="submit" name="submit" class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">SUBMIT<i class="fa fa-check"></i></button>
            </div>
        </div>
    </div>
   </form>
    
    </div>
   
</body>
   <!--
        /**
         * Created by PhpStorm.
         * User: kevin
         * Date: 5/10/2017
         * Time: 12:27 PM
         */

    -->

</html>