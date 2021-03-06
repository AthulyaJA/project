<!DOCTYPE html>
<html>
<head>
	<style>
		table,th,td{

			margin:10px;
			padding: 10px;
			background-color: rgba(0,255,0,1);
			border:1px solid black;
			border-collapse: collapse;

			}
			table
			{
				border:1px solid black;
			}
	  

	</style>
	</head>
<body>
	<form action="<?php echo base_url()?>Athu/updatedetails" method="post">
	<h1>TABLE</h1>



	<table>
		<tr>
		 
		 <th>Name</th>
		 <th>Address</th>
		 <th>Gender</th>
		 <th>Age</th>
		 <th>Email</th>
		 <th>status</th>
		 
		</tr>
		<?php
             
              if($n->num_rows()>0)
              {
                  foreach($n->result() as $row )

              {


         ?>
         <tr>
         	<td><?php echo $row->Name;?></td>
         	<td><?php echo $row->Address;?></td>
         	<td><?php echo $row->Gender;?></td>
         	<td><?php echo $row->Age;?></td>
         	<td><?php echo $row->Email;?></td>
         	<td><?php echo $row->status;?></td>
         	<?php

			if($row->status==1)
			{
			?>

					<td>Approved</td>
					<td><a href="<?php echo base_url()?>Athu/rejected/<?php echo $row->id;?>">Reject</a>
					
			<?php
			}

		elseif($row->status==2)
		{
			?>
				<td>Rejected</td>
				<td><a href="<?php echo base_url()?>Athu/approvel/<?php echo $row->id;?>">Approve</a>
				
			<?php
		}
         else
         {
         	?>
         	<td><a href="<?php echo base_url()?>Athu/approvel/<?php echo $row->id;?>">Approvel</a></td>
         	<td><a href="<?php echo base_url()?>Athu/rejected/<?php echo $row->id;?>">Rejected</a></td>
         <?php 
    	 }
     ?>
         </tr>

         <?php
         }
          }

          else{
          ?>
          <tr>
          	  <td>NoData found</td>
          </tr>
 <?php
  }

?>

 </form>
</table>

</body>
</html>