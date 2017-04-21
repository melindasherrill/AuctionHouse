<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/format.css">
</head>
<body>
	<p></p>
	<center>
		<h2 style = "color:grey"> Welcome to AuctionCentral!</h2>
		<h1 style = "color:grey">New Vistor? Create an account!</h1>
		<p></p>
		<div id='main'>
			<button type='button' id= 'button' class='btn btn-info btn-md' onclick="window.location.href='/AuctionHouse/buyercreate.php'">  I am a Buyer </button>
			<button type='button' id= 'button' class='btn btn-info btn-md' onclick="window.location.href='/AuctionHouse/vendorcreate.php'">  I am an Auction Vendor </button>
			<button type='button' id= 'button' class='btn btn-info btn-md' onclick="window.location.href='/AuctionHouse/employeecreate.php'">  I am an AuctionCentral Employee </button>
		</div>
		<p></p>
		<h1 style = "color:grey">Are you a Returning Vistor?</h1>
		<div id ='center'>
			<form class="form-horizontal">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label" style = "color:grey">Email</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label" style = "color:grey">Password</label>
			    <div class="col-sm-10">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label style = "color:grey">
			          <input type="checkbox"> Remember me
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			       <button type="button" id= "button" class="btn btn-primary">Login</button>
			    </div>
			  </div>
			</form>
		</div>
		<p></p>
	</center>
	<?php
	if(isset($_POST["submit"])) {  
			$email = $_POST['userMAIL'];
			$password = $_POST['userPW'];
			$pass2 = $_POST['userPWRe'];
			$name = $_POST['userName'];

			if(goodPass($password, $pass2)){
			
				//DB STOOF
				$host = "us-cdbr-azure-west-b.cleardb.com";
				$user = "b3c82d871b9b10";
				$pass = "329ebdbf";
				$dbname = "auctionhouse_se320";
				$table = "testTable";
				//FIX ME mySQL->mySQLi
				$link = mysqli_connect($host,$user, $pass) or die("<html><script language='JavaScript'>alert('Unable to connect to db since Sam, our database programmer, is a noob.'),history.go(-1)</script></html>");
				mysql_select_db($dbname);
				mysql_query("CALL addUser('$email', '$password','$name', 1)");//parameter: emailIN, passwordIN,nameIN, userTypeIN: 1-User, 2-auctionhouse 3-employee.
				//mysql_query("CALL addCard('$card', '$CSV')"); //add card
				//mysql_query("CALL addAddress('$companyname','$address')");//comapny name is null
				// if($result){
				// 	while($row = mysql_fetch_array($result)){
				// 		$name = $row["intString"];
				// 		echo "Found in DB: ".$name."<br/>";
				// 	}
				// } 

				mysql_close($link);
				
			}
			else{
				echo "<html><script language='JavaScript'> window.location.href = '/employeecreate.php';</script></html>";
			}
		}


	?>
</body>