<head>
<style>
.fragment {
    position:fixed;
    background:#FCDDA3; 
    font-size: 12px;
    font-family: tahoma;
    height: auto;
    width:334px;
    border: 2px solid #ccc;
    color: #555;
    display: block;

    box-sizing: border-box;
    text-decoration: none;
    bottom:0px;
    right=0px;
}

.fragment:hover {
    box-shadow: 2px 2px 5px rgba(0,0,0,.2);
}

.fragment h3 {
    padding: 0;
    margin: 0;
    color: #369;
}
.fragment h4 {
    padding: 0;
    margin: 0;
    color: #000;
}
#close {
    float:right;
    display:inline-block;
    padding:0px 2px;
    background:#ED8B29;
	margin-left:3px;
	 width:327px;
	 color: #FFF;
}

.h2{
    background:#ED8B29;
  width:100%;
  height:25px;
  padding-top:0px;
  font-size:26px;
  margin:0px;
}

h2{
font-size:25px;
}

.h3{
  color: black;
  font-size:16px;
  font-weight: bold;
  border: 3px solid #FFFFFF;
  width:100%;
  height:100%;
}

#hide{
margin:0px;
padding:2px;
}

#innerdiv{
margin:0px;
padding:2px;
}
.k{
    font-size: 20px;
	font-family: Tahoma;
	color: #404040;
}

.inputgrp{
width:280px;
height:30px;
    margin-top:10px;
    border-radius:3px;
    padding:2px;
    box-shadow:0px 1px 1px 0px darkgray;
    margin:10px;
}
.b1{
width:100px;
height:30px;
background:#ED8B29;
color:#FFF;
border-radius:3px;
 box-shadow:0px 1px 1px 0px darkgray;
 font-size: 20px;
    
}

textarea{
width:280px;
height:30px;
    margin-top:10px;
    border-radius:3px;
    padding:2px;
    box-shadow:0px 1px 1px 0px darkgray;
    margin:10px;

}

 </style>
</head>
<body>

		
	
        <form method=post>
<h3 class="h3">        
        <table>
            <tr><td><input type="text" name="name" placeholder="Name" class="inputgrp" /></td></tr>
            <tr><td><input type="email" name="email" placeholder="email@example.com" class="inputgrp" /></td></tr>
          
            <tr><td><textarea name="msg" class="inputgrp" placeholder="your message"></textarea> </td></tr>
            <tr><td><center><input type="submit" name="send" value="Send!" class="b1"/></center></td></tr>
        </table>
</h3>
    
</body>
<?php
include("connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];
if(isset($_POST['send'])){

        $insqry="INSERT INTO `contactusdata`(`id`, `name`, `email`, `message`, `date_time`) VALUES ('','$name','$email','$msg',now())";
		$var=mysql_query($insqry);
		if($var>0){
				echo"<script>alert('We will get back to you soon ')</script>";
			}
		    else{
				echo"<script>alert('please try again ')</script>";
		  }
}
mysql_close($conn);

?>
