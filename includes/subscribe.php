<?php
include("connect.php");

if(isset($_POST['subscribe'])){
  $email=$_POST['email'];
$name=$_POST['name'];

        $insqry="INSERT INTO `subscribe`(`id`, `email`, `name`, `date_time`) VALUES ('','$email','$name',now())";
		$var=mysql_query($insqry);
		if($var>0){
				echo"<script>alert('registered sucessfully ')</script>";
			}
		    else{
				echo"<script>alert('please try again ')</script>";
		  }
}
mysql_close($conn);

?>


<html>
<head>

<style>
#demoform{
    margin-top:4px;
    padding-top:4px;
}    


#demoform fieldset{
    border: none;
}    




#demoform input[type="text"],
#demoform input[type="email"],
#demoform select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 5px;
    width: 33%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    
}
#demoform input[type="text"]:focus,
#demoform input[type="email"]:focus,
#demoform select:focus{
    background: #d2d9dd;

}

#demoform select{
    -webkit-appearance: menulist-button;

}


.btnExample {
  color: #FFF;
  background: black;
  font-size:13px;
  font-weight: bold;
  border: 3px solid #FFFFFF;
  width:80px;
  height:30px;
  
}
 
.btnExample:hover {
  color: black;
  background: #ee0000;
}

.search {
    padding-top:0;
margin-top=0;    
    font-family: Georgia, "Times New Roman", Times, serif;
    float:right; 
}
.subscribe {
    padding-top:0;
margin-top=0;    
    font-family: Georgia, "Times New Roman", Times, serif;
float:left;

}
</style>
</head>
<body>
<div id="demoform">
	<form method=post class="subscribe">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Name" /> <input type="email" name="email" placeholder="Email"  /><input type="submit" name="subscribe" value="Subscribe" class="btnExample"/>
        </form>
</div>
</body>

</html>

