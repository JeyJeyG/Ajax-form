<?php
include ("code.php")?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ajax  form</title>
		<style>
			body{
				background: darkslateblue;

			}
			h1{
				font-style: italic;
				position: relative;

			}
			form{
				position: fixed;
				margin: 10px auto;
				right: 50%;
				box-sizing: border-box;
				background: darkgrey;
				border-radius: 5px;

			}
			form input{
				border-width: 1px;
				margin: 5px auto;
				padding: 20px;
				border-radius: 30px;
			}
		</style>
	</head>
	<body>
		
		<form  id="ajaxform" method="POST" accept-charset="uf8-8">
			<h1>User Info</h1>
			 <input type="text" name="name" placeholder="enter your name " required><br>
			 <input type="text" name="email" placeholder="enter your email" required><br>
			 <input type="radio" name="gender" value="m" required>male
			 <input type="radio" name="gender" value="f" required>female<br>
			 <input type="number" name="height" placeholder="enter your height in cm" required><br>
			 <input type="date" name="date" placeholder="date" required><br>
			 <input type="number" name="phone_number" placeholder="phone number required"><br>

			 

			 


			<input type="submit" name="submit" value="submit">
			<div id="resp" style=display: none; color: seagreen;>
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#ajaxform").submit(function(event){
					var postdata = $("#ajaxform").serialize();
					$.post("code.php",postdata,function(responce){
						// var re
						$("#resp").show().html(responce);

					})
					return false;
				})

			});
		</script>
	</body>
</html>


