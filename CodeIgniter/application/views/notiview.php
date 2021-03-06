<html>
<head>
	<style>
		table,th,td{

			margin:10px;
			padding: 10px;
			background-color: rgba(255,0,255,0.5);
			border:1px solid black;
			border-collapse: collapse;
			margin-left:350px;

			}
			table
			{
				border:1px solid black;
			}
			body{

				background-image:url('../img/2.png');
			}
			h1{
				color:fuchsia;
			}
	</style>
	</head>
	<body>
		<h1><center>NOTIFICATION VIEW</h1>

		<table>
			<tr>
					<th>TeacherName</th>
					<th>Phone No</th>
					<th>Notification</th>
					<th>current date</th>
					
			</tr>
			<?php
             
              if($b->num_rows()>0)
              {
                  foreach($b->result() as $row)

              {


         ?>
         <tr>
         	<td><?php echo $row->name;?></td>
         	<td><?php echo $row->phoneno;?></td>
         	<td><?php echo $row->noti;?></td>
         	<td><?php echo $row->ct_date;?></td>


         	</tr>
         	<?php
				}
			}
			?>

		</table>
		
	</body>
	</html>