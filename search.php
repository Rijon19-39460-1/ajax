<?php
include 'action.php';

if(!empty($_GET['search']) or !empty($_GET["username"]))
{
	$users = getUsers($_GET['username']);
	for($i = 0; $i < count($users); $i++)
{
	 $person["idx"] = $users[$i]["id"];
	 $person["usernamex"] = $users[$i]["username"];
	 $person["passwordx"] = $users[$i]["password"];
}

 echo json_encode($person);
}
else
{
    echo"input first";
}



  
?>