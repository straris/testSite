<?php

	date_default_timezone_set ('Europe/Lisbon');	// lipsi oras toy server kai topo8etisi tou se metablites gia xrisi tou hmerologiou javascript
	$date = getdate();
	$year=$date['year'];
	$day=$date['mday'];
	$month=$date['mon'];
?>





<html>




 <head>

	<link rel="stylesheet" href="http://localhost/jQuery_UI_Datepicker/jquery-ui.css">
	<script src="http://localhost/jQuery_UI_Datepicker/jquery-1.9.1.js"></script>
	<script src="http://localhost/jQuery_UI_Datepicker/jquery-ui.js"></script>

	<script type="text/javascript">
		$(function() 	
		{
			$( "#SelectDate" ).datepicker({ dateFormat: "yy-mm-dd"}).val()  
		});
	</script>

</head > 




<body>



<div>
	<form action="../calls/insert_garage_to_database.php" method="get">
		
		Title
			<br>
			<input type="text" name="title">
			<br>
		
		Address
			<br>
			<input type="text" name="address">
			<br><br>
		
		Type
			<input type="radio" name="type" value="open">
			Open
			
			<input type="radio" name="type" value="sheltered">
			Sheltered
			
			<input type="radio" name="type" value="indoors">
			Indoors
			
			<br><br>
		Security
			<input type="radio" name="security" value="open">
			Open
			
			<input type="radio" name="security" value="locked">
			Locked
			
			<input type="radio" name="security" value="guarded">
			Guarded 
			
			<br><br>
			
		From
			<input type="text" name="from_start">
					To 
					<input type="text" name="from_end">
					<br><br>
					
		Price 
			<input type="text" name="price_start">
				
		
			<br><br><br>
			<input type="submit">
	</form>
	
</div>


</body>

</html>