    function isValid(){
    var flag = true;
    var fname=document.forms["registration"]["fname"].value;
    var lname=document.forms["registration"]["lname"].value;
    var gender=document.forms["registration"]["gender"].value;
    var dob=document.forms["registration"]["dob"].value;
    var religion=document.forms["registration"]["religion"].value;
    var email=document.forms["registration"]["email"].value;
    var username=document.forms["registration"]["username"].value;
    var password=document.forms["registration"]["password"].value;
    if(fname ==="")
    {
        flag = false;
        document.getElementById('fnameErr').innerHTML=" First name can not be empty.";
    }
    if(lname ==="")
    {
        flag = false;
        document.getElementById('lnameErr').innerHTML=" Last name can not be empty.";
        
    }
    if(gender ==="")
    {
        flag = false;
        document.getElementById('genderErr').innerHTML=" Gender can not be empty.";
        
    }
    if(dob ==="")
    {
        flag = false;
        document.getElementById('dobErr').innerHTML=" Date of birth can not be empty.";
        
    }
    if(religion ==="")
    {
        flag = false;
        document.getElementById('religionErr').innerHTML=" Religion can not be empty.";
        
    }
    if(email ==="")
    {
        flag = false;
        document.getElementById('emailErr').innerHTML=" Email can not be empty.";
        
    }
    if(username ==="")
    {
        flag = false;
        document.getElementById('usernameErr').innerHTML=" User name can not be empty.";
        
    }

    if(password ==="")
    {
        flag = false;
        document.getElementById('passwordErr').innerHTML=" Password can not be empty.";
        
    }
    return flag;
    }