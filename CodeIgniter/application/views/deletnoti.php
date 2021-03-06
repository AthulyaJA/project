<html>
<head>
	<style>
		table,th,td{

			margin:10px;
			padding: 10px;
			background-color: rgba(0,0,0,0.5);
			border:1px solid black;
			border-collapse: collapse;
			text-align:center;
			color:red;


			}
			table
			{
				border:1px solid black;
				text-align:center;
			}

			body{

				background-image:url('../img/2.png');
				
				margin-left:500px;
				
			}
	</style>
	</head>
	<body>
		<form action="<?php echo base_url()?>Athu/deletedetail" method="post">
<h1>NOTIFICATION VIEW </h1>
		<table><pre>

			<tr>
					
					
							<th>Notification</th>
							<th>current date</th>
							<th>Action</th>
					
			</tr>
			<?php
             
              if($b->num_rows()>0)
              {
                  foreach($b->result() as $row)

              {


         ?>
         <tr>
         	
            <td><?php echo $row->noti;?></td>
         	<td><?php echo $row->ct_date;?></td>
         	<td><a href="<?php echo base_url();?>Athu/deletedetail/<?php echo $row->id;?>">delete</a></td>


         	</tr>
         	<?php
				}
			}
			?>

		</table>
		<a href="<?php echo base_url()?>Athu/wow1">Back to profile</a>

	</body>
	</html>



