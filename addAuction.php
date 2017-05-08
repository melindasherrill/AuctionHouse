<?php
                $host = "us-cdbr-azure-west-b.cleardb.com";
                $user = "b3c82d871b9b10";
                $pass = "329ebdbf";
                $dbname = "auctionhouse_se320";
    
            if(isset($_POST["submit"])) { //once submit button is hit, go here
                $name = $_POST["name"];
                  

                $con = mysqli_connect($host, $user, $pass, $dbname) or die("<html><script language='JavaScript'>alert('Did not connect'),history.go(-1)</script></html>");
                
                
               //FIXME
                $query = mysqli_query($con, "INSERT INTO auctionHouse (houseName) VALUES ('".$name."')");
                echo "<html><script language='JavaScript'>window.location.href='/main.php'</script></html>";

                //$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

                //echo $row['email'];

                mysqli_close($con);
            }
?>