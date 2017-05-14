<?php
                //set params for db
                $host = "us-cdbr-azure-west-b.cleardb.com";
                $user = "b3c82d871b9b10";
                $pass = "329ebdbf";
                $dbname = "auctionhouse_se320";
    
            if(isset($_POST["submit"])) { //once submit button is hit, go here
                $name = $_POST["item"]; //loads item name
                $con = $_POST["con"]; //loads condition
                $bid = $_POST["bid"]; //loads bid ammount
                $com = $_POST["comments"];      

                //connect to db
                $con = mysqli_connect($host, $user, $pass, $dbname) or die("<html><script language='JavaScript'>alert('Did not connect'),history.go(-1)</script></html>");
                
                //process query
                $query = mysqli_query($con, "CALL addItem(1,'".$name."','".$com."','".$bid."')");
               
                //redirects to see items
                 echo "<html><script language='JavaScript'>window.location.href='/viewitems.php'</script></html>";

                mysqli_close($con); //closes connection
            }
?>