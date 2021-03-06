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
	<form action="<?php echo base_url()?>Athu/vie" method="post">
	<h1>TABLE</h1>



	<table>
		<tr>
		 
		 <th>fname</th>
		 <th>lname</th>
		 <th>Address</th>
		 <th>District</th>
		 <th>pincode</th>
		 <th>phone</th>
		 <th>DOB</th>
		 <th>Gender</th>
		 <th>Education</th>
		 <th>email</th>
		 
		
		 
		 
		</tr>
		<?php
             
              if($n->num_rows()>0)
              {
                  foreach($n->result() as $row )

              {


         ?>
         <tr>
         	<td><?php echo $row->fname;?></td>
         	<td><?php echo $row->lname;?></td>
         	<td><?php echo $row->Address;?></td>
         	<td><?php echo $row->District;?></td>
         	<td><?php echo $row->pincode;?></td>
         	<td><?php echo $row->phone;?></td>
         	<td><?php echo $row->DOB;?></td>
         	<td><?php echo $row->Gender;?></td>
         	<td><?php echo $row->Education;?></td>
         	<td><?php echo $row->email;?></td>
         	
<?php

			if($row->status=='1')
			{
			?>

				<td>Approved</td>
				<td><a href="<?php echo base_url(); ?>Athu/rej/<?php echo $row->ids; ?>">Reject</a></td>
					
			<?php
			}

		elseif($row->status=='2')
		{
			?>
				<td>Rejected</td>
				<td><a href="<?php echo base_url(); ?>Athu/app/<?php echo $row->ids; ?>">Approve</a>
		<?php
	    }
         else
         {
         	?>
         <td><a href="<?php echo base_url(); ?>Athu/app/<?php echo $row->ids; ?>">Approve</a></td>
         <td><a href="<?php echo base_url(); ?>Athu/rej/<?php echo $row->ids; ?>">Rejecte</a></td>
         	 </tr>
         <?php 
    	 }

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