<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/format.css">
</head>
<body>
<h1 style = "color:grey">Vendor Account Creation</h1>
<div id='center'>
    <form action = "buyercreate.php" method = "post">
        <div class="form-group">
            <label for="exampleInputEmail1" style = "color:grey">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" style="weight:50%;">
        </div>
        <p></p>
        <div class="form-group">
            <label for="exampleInputPassword1" style = "color:grey">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" style = "color:grey">Repeat Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputName" style = "color:grey">Name</label>
            <input type="name" class="form-control" id="exampleInputName" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputName" style = "color:grey">Company</label>
            <input type="name" class="form-control" id="exampleInputName" placeholder="Company Name">
        </div>
        <div class="form-group">
            <label for="exampleInputAddress" style = "color:grey">Company Address</label>
            <input type="address" class="form-control" id="exampleInputAddress" placeholder="# Street, City, State Zipcode ">
        </div>
        <div class="form-group">
            <label for="exampleInputCC" style = "color:grey">Credit Card Number</label>
            <input type="ccnum" class="form-control" id="exampleInputCC" placeholder="Credit Card Number">
        </div>
        <div class="form-group">
            <label for="exampleInputCVV" style = "color:grey">CVV</label>
            <input type="cvvnum" class="form-control" id="exampleInputCVV" placeholder="CVV Number">
        </div>
        <button name = "submit" type= "button" id = "button" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
