<?php 
	session_start();

	$username = "";

	if(isset($_SESSION['username'])) 
	{
		$username = $_SESSION['username'];
	}

	
?>
<?php
include 'search.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>welcome</title>
</head>
<body>
<h1>Welcome, <?php echo $username; ?></h1>
<br><br>
<h1>Search</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" name="search" onsubmit="fetch()">
	<input type="text" name="username">
	<input type="submit" name="submit" value="Search">
</form>
<br>
<table>
<tr>
<th>Id</th> 
<th>Username</th>
<th>Password</th>
</tr>
<tr>
<td><p id="idxx"></p></td>
<td><p id="usernamexx" ></p></td>
<td><p id="passwordxx" ></p></td>
</tr>
<tr>
<td><?php if(!empty($person["idx"]))
{echo $person["idx"];} else { echo "";} ?> </td>
<td><?php if(!empty($person["usernamex"]))
{echo $person["usernamex"];} else { echo "";} ?> </td>
<td><?php if(!empty($person["passwordx"]))
{echo $person["passwordx"];} else { echo "";} ?> </td>
</tr>

<script >

function fetch() {
var xhttp=new XMLHttpRequest();
xhttp.onload = function() 
{
if(this.status === 200) 
{ 
document.getElementById("idxx").innerHTML = JSON.parse(this.responseText).idx;
document.getElementById("usernamexx").innerHTML = JSON.parse(this.responseText).usernamex;
document.getElementById("passwordxx").innerHTML = JSON.parse(this.responseText).passwordx;
}
}
xhttp.open("POST", "search.php");
xhttp.send();
}


</script>


</body>
</html>