<?php
	if(isset($_POST["submit"])){ //once submit button is hit, go here
        $email = $_POST['user']; //loads email
        $pass1 = $_POST['pass'];
        $pass2 = $_POST['pass2']; //loads password
        $name = $_POST['name']; //loads name
        $address = $_POST['address']; //loads address
        $card = $_POST['card']; //loads card
        $cvv = $_POST['CVV']; //loads CVV

    	//open db connection
		$host = "us-cdbr-azure-west-b.cleardb.com";
        $user = "b3c82d871b9b10";
        $pass = "329ebdbf";
        $dbname = "auctionhouse_se320";

        if(goodEmail($email)==false){ //checks for valid email
        	 echo "<html><script language='JavaScript'>alert('Please enter a valid email.'),history.go(-1)</script></html>";

        }
        if(goodPass($pass1, $pass2)){ //if eveyrthing is good, add to db and log in!
	
	      
	      	//establishes connection to db or throws error
	        $con = mysqli_connect($host, $user, $pass, $dbname) or die("<html><script language='JavaScript'>alert('Did not connect'),history.go(-1)</script></html>");
			
			//loads and processes query
            $query = mysqli_query($con, "INSERT INTO lgtable (email, password, name, userType) VALUES ('".$email."', '".$pass1."', '".$name."', 1 )");
            echo "<html><script language='JavaScript'>window.location.href='/main.php'</script></html>";

            mysqli_close($con);//close connection
        }

	}
	function goodPass($pass1, $pass2){ //validates the password
			if($pass1 != $pass2){
				echo "<html><script language='JavaScript'>alert('Passwords do not match.'),history.go(-1)</script></html>";
				return false;
			}
			if(strlen($pass1) < 8){
				echo "<html><script language='JavaScript'>alert('Password must be at least 8 characters.'),history.go(-1)</script></html>";
				return false;
			}
			if (preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/', $pass1)==false){
				echo "<html><script language='JavaScript'>alert('Password must contain a symbol.'),history.go(-1)</script></html>";
				return false;
			}
			else{
				return true;
			}
		}

	function goodEmail($email){ //checks valid email
		if(preg_match('/[\^£$%&*()}{@#~?><>,|=_+¬-]/', $email)==true){
			return true;
		}
		else{
			return false;
		}
	}

?>