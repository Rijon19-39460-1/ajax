    function isValid(){
    var flag = true;
    var username=document.forms["registration"]["username"].value;
    var password=document.forms["registration"]["password"].value;
    if(username ==="")
    {
        flag = false;
        document.getElementById('usernameErr').innerHTML=" User name can not be empty.";
        
    }
    if(password ==="")
    {
        flag = false;
        document.getElementById('passwordErr').innerHTML=" Password can not be empty.";
    0}  
    return flag;
    }