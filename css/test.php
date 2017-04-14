<head>

</head>

<body>
	<?php
		require_once('db.php');
		DB::Query("SELECT * FROM `attendance` WHERE 'showid' = 2");
		//echo $db;
	?>
</body>