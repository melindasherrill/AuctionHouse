<?php
                $host = "us-cdbr-azure-west-b.cleardb.com";
                $user = "b3c82d871b9b10";
                $pass = "329ebdbf";
                $dbname = "auctionhouse_se320";
    
            if(isset($_POST["submit"])) { //once submit button is hit, go here
                $name = $_POST["item"];
                $con = $_POST["con"]; 
                $bid = $_POST["bid"];
                $com = $_POST["comments"];      

                $con = mysqli_connect($host, $user, $pass, $dbname) or die("<html><script language='JavaScript'>alert('Did not connect'),history.go(-1)</script></html>");
                
                $query = mysqli_query($con, "CALL addItem(1,'".$name."','".$com."','".$bid."')");
               
                 echo "<html><script language='JavaScript'>window.location.href='/items.php'</script></html>";

                mysqli_close($con);
            }
?>