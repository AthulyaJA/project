<html>
<head>
	<style>
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
	




<nav class="menubar">
    <ul>
           <li><a href="<?php echo base_url()?>Athu/regst">Home</a></li>
            <li><a href="#">Register</a>
            	<div class="subclass">
     				<ul>
			        	<li><a href="<?php echo base_url()?>Athu/regst">student</a></li>
				    	<li><a href="<?php echo base_url()?>Athu/teach">teacher</a></li>
					</ul>
				</div>
    		 </li>	


            	<li><a href="">login</a>
						<div class="subclass">
						     <ul>
						        <li><a href="<?php echo base_url()?>Athu/logview">student</a></li>
							    <li><a href="<?php echo base_url()?>Athu/logview">teacher</a></li>
							</ul>
						</div>
				</li>	

<li><a href="#">contact us</a></li>
</ul>

</nav>
</body>
</html>