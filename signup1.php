<?php
	if(isset($_POST["submit"])){ //once submit button is hit, go here
        $email = $_POST['user']; //loads email
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2']; //loads password
        $name = $_POST['name'];
        $address = $_POST['address'];
        $card = $_POST['card'];
        $cvv = $_POST['CVV'];

        if(goodPass($pass, $pass2)){
			$host = "us-cdbr-azure-west-b.cleardb.com";
            $user = "b3c82d871b9b10";
            $pass = "329ebdbf";
            $dbname = "auctionhouse_se320";
	      
	        $con = mysqli_connect($host, $user, $pass, $dbname) or die("<html><script language='JavaScript'>alert('Did not connect'),history.go(-1)</script></html>");
			
			
            $query = mysqli_query($con, "INSERT INTO lgtable (email, password, name, userType) VALUES ('".$email."', '".$pass."', '".$name."', 1 )");
            echo "<html><script language='JavaScript'>window.location.href='/main.php'</script></html>";

            mysqli_close($con);
        }
        else{
        	echo "<html><script language='JavaScript'>alert('Password is bad. Make sure passwords match, have less than 8 characters, and contain at least one special character.'),history.go(-1)</script></html>";
        }

	}
	function goodPass($pass1, $pass2){ //validates the password
			if($pass1 != $pass2){
				return false;
			}
			if(strlen($pass1) < 8){
				return false;
			}
			if (preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/', $pass1)==false){
				return false;
			}
			else{
				return true;
			}
		}

?>