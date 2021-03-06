<html>
<body>
	<form  action="<?php echo base_url()?>Athu/upd" method="post">
    <?php

       if(isset($user_data))
       { 
           foreach($user_data as $row1)
           {
             
            echo $row1->first_name;
 }
}  
 ?>
</form>

</body>
</html>