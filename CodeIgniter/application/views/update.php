
<html>
<head>
<title>First site </title>
<style>
body{
   
    
    text-align:center;      
    padding:20px;
    background-image:url('../img/1.jpg');

}

a{
    text-decoration:none;
    
    
     
    
}

.menubar ul
{

    
    list-style:none;
    display:inline-flex;
    
    
    
}
.menubar{
    background-color:black;
    text-align:center;
    
    font-size:20px;
    }
.menubar a
{
    color:#ffffff;
    
    
    }
.subclass
{
    display:none;
    
}
.subclass ul{
    margin-left:-35px;
}
.menubar li
{
    
    padding:15px;
    
}
.menubar ul li:hover{
    background-color:red;
    border-radius:10px;

    }
.menubar ul li:hover .subclass
{
    display:block;
    position:absolute;
    background-color:black;
    margin-top:15px;
    margin-left:-15px;
    border-radius:10px;
    padding:10px;
}
.menubar ul li:hover .subclass ul
{
    display:block;
}
.menubar ul li:hover .subclass ul li
{
    padding:10px;
    border-bottom:1px solid red;
    
    
    
}
</style>
</head>
<body>


<form  action="<?php echo base_url()?>Athu/update_det" method="post">
    <nav class="menubar">
            <ul>
                    
                    <li><a href="<?php echo base_url()?>Athu/stud_profile">Profile</a></li>
                    <li><a href="<?php echo base_url()?>Athu/view_notification">view Notification</a></li></ul>
</nav>
    <?php

       if(isset($user_data))
       { 
           foreach($user_data->result() as $row1)
           {
             
            
    ?>

<h1>UPDATE FORM </h1>

    <pre>
    Firstname:<input type="text" name="first_name"  value="<?php echo $row1->first_name; ?>"></br></br>
    Lastname:<input type="text" name="last_name" value="<?php echo $row1->last_name;?>"></br></br>
    Address:<textarea type="text" name="address" ><?php echo $row1->address;?></textarea></br></br>
    District:<input list="district" name="district" value="<?php echo $row1->district;?>"></br></br>
                <datalist id="district">
                    <option value="TVM">
                    <option value="kollam">
                    <option value="kottayam">
                </datalist>
    Pincode:<input type="text" name="pincode" value="<?php echo $row1->pincode;?>"></br></br>
    Phone number:<input type="text" name="phoneno" value="<?php echo $row1->phoneno;?>"></br></br>
    Dob:<input type="date" name="dob" value="<?php echo $row1->dob;?>"></br></br>
    Gender:<input type="radio" name="gender" id="male"><label for="male">male</label><input type="radio" name="gender" id="female"><label for="female">Female</label></br></br>
    Education:<input list="education" name="education" value="<?php echo $row1->education;?>"></br></br>
                <datalist id="education">
                    <option value="SSLC">
                    <option value="plus two">
                    <option value="Bsc">
                    <option value="MCA">
                </datalist>
    Email:<input type="email" name="email" value="<?php echo $row1->email;?>"></br></br>
    
    <input type="submit" name="update" value="update"></br></br>
    <?php
        }
    }
    ?>
    </form>
    </body>
    </html>
    
