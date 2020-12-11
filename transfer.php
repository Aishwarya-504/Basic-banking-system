<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/image2.jpeg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#F5F7FF;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:30px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #F5F7FF;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Hariram"){
				 var arr=["Krishna","Ramadevi","Harika","Mohan","Priyanka","Ravina","Prabhu","Anjali","Sridhar"];
				 }
				 else if(a==="Krishna"){
					var arr=["Hariram","Ramadevi","Harika","Mohan","Priyanka","Ravina","Prabhu","Anjali","Sridhar"];
				}
				else if(a==="Ramadevi"){
					var arr=["Hariram","Krishna","Harika","Mohan","Priyanka","Ravina","Prabhu","Anjali","Sridhar"];
				}
				else if(a==="Harika"){
					var arr=["Hariram","Krishna","Ramadevi","Mohan","Priyanka","Ravina","Prabhu","Anjali","Sridhar"];
				 }
				 else if(a==="Mohan"){
					var arr=["Hariram","Krishna","Ramadevi","Harika","Priyanka","Ravina","Prabhu","Anjali","Sridhar"];
				 }
				 else if(a==="Priyanka"){
					var arr=["Hariram","Krishna","Ramadevi","Harika","Mohan","Ravina","Prabhu","Anjali","Sridhar"];
				 }
				 else if(a==="Ravina"){
					var arr=["Hariram","Krishna","Ramadevi","Harika","Mohan","Priyanka","Prabhu","Anjali","Sridhar"];
				 }
				 else if(a==="Prabhu"){
					var arr=["Hariram","Krishna","Ramadevi","Harika","Mohan","Priyanka","Ravina","Anjali","Sridhar"];
				 }
				 else if(a==="Anjali"){
					var arr=["Hariram","Krishna","Ramadevi","Harika","Mohan","Priyanka","Ravina","Prabhu","Sridhar"];
				 }
				 else if(a==="Sridhar"){
				 var arr=["Hariram","Krishna","Ramadevi","Harika","Mohan","Priyanka","Ravina","Prabhu","Anjali"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:55px;color:#e60000;text-shadow: 0px 0px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Hariram">Hariram</option>
			<option value="Krishna">Krishna</option>
			<option value="Ramadevi">Ramadevi</option>
			<option value="Harika">Harika</option>
			<option value="Mohan">Mohan</option>
			<option value="Priyanka">Priyanka</option>f
			<option value="Ravina">Ravina</option>
			<option value="Prabhu">Prabhu</option>
			<option value="Anjali">Anjali</option>
			<option value="Sridhar">Sridhar</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 16pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>