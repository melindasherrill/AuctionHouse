<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/format.css">
</head>
<body>
<h1 style = "color:grey">Employee Account Creation</h1>
<div id='center'>
    <form action = "employeecreate.php" method = "post">
        <div class="form-group">
            <label for="exampleInputEmail1" style = "color:grey">Email address</label>
            <input type="email" name = "vendorEmail" class="form-control" id="exampleInputEmail1" placeholder="Company Email" style="weight:50%;">
        </div>
        <p></p>
        <div class="form-group">
            <label for="exampleInputEmail1" style = "color:grey">Employee Number</label>
            <input type="email" name = "emNum" class="form-control" id="exampleInputEmail1" placeholder="Email" style="weight:50%;">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" style = "color:grey">Password</label>
            <input type="password" name = "venPW" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" style = "color:grey">Repeat Password</label>
            <input type="password" name = "venPWRE" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputName" style = "color:grey">Name</label>
            <input type="name" name = "venName" class="form-control" id="exampleInputName" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputName" style = "color:grey">Authorization Number</label>
            <input type="vendName" name = "venAuth" class="form-control" id="exampleInputName" placeholder="Number to Authorize Employee Account">
        </div>
        <button name = "submit" type="button" id= "button" class="btn btn-primary">Submit</button>
    </form>
</div>
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

        $link = mysql_connect($host,$user, $pass) or die("<html><script language='JavaScript'>alert('Unable to connect to db since Sam, our database programmer, is a noob.'),history.go(-1)</script></html>");
        mysql_select_db($dbname);


        $accountExists = mysql_query("CALL logIn('$email','$password')");//check is account is there
        if($accountExists){
            echo "<html><script language='JavaScript'>alert('This email is already associated with an account!.'),history.go(-1)</script></html>";
        }
        else{ //add account
            mysql_query("CALL addUser('$email', '$password','$name', 1)");//parameter: emailIN, passwordIN,nameIN, userTypeIN: 1-User, 2-auctionhouse 3-employee.
            //mysql_query("CALL addCard('$card', '$CSV')"); //add card
            //mysql_query("CALL addAddress('$companyname','$address')");//comapny name is null
        }
        mysql_close($link);

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
</body>

