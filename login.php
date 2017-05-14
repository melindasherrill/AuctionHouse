 <?php
            //Info for connection to db
            $host = "us-cdbr-azure-west-b.cleardb.com";
            $user = "b3c82d871b9b10";
            $pass = "329ebdbf";
            $dbname = "auctionhouse_se320";
          
            //create db object and establish connection  
            $con = new mysqli($host, $user, $pass, $dbname) or die("<html><script language='JavaScript'>alert('Did not connect'),history.go(-1)</script></html>");
        
            if(isset($_POST["submit"])) { //once submit button is hit, go here
          
                if(mysqli_connect_errno()){ //throws a connect error
                    echo "<html><script language='JavaScript'>alert('Did not connect'),history.go(-1)</script></html>";
                }

                 $email = $_POST['user']; //loads email
                 $pass2 = $_POST['pass']; //loads password
        

                $result = $con->query("CALL logIn('".$email."','".$pass2."')"); //processes login query
                $row = $result->fetch_row();//get the query 
                if($row[0]==1){
                  echo "<html><script language='JavaScript'>window.location.href='/main.php'</script></html>";
                }
                else{
                    echo "<html><script language='JavaScript'>alert('Invalid email or password.'),history.go(-1)</script></html>";

                }
                $result->close();//free result query
                  
                $con->close(); //exit connection
            } 
?>