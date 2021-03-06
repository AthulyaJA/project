<html>
<head>
	<style>

		input
		{

			border: 2px solid black;

		}
		body
		{
            text-align:center;
			background-image:url('../img/2.png');
			opacity: 0.5px;
			margin-top:250px;
		}
		a{
			font-size:15px;
		}
	</style>
	</head>
<body>
<form action="<?php echo base_url()?>Athu/noti" method="post" >
<h1>NOTIFICATION ADD</h1><b>
	<h1>Notification:<textarea type="text" name="not"></textarea><br><pre>

	<input style="color:blue" type="submit" value="submit">


</form>
<a href="<?php echo base_url()?>Athu/wow1">Back to profile</a>

</body>
</html>