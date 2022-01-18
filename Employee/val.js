
var firstname=document.forms['form']['firstname']
var email=document.forms['form']['email']
var username=document.forms['form']['username']
var gender=document.forms['form']['gender']
var password=document.forms['form']['password']
var mobilenumber=document.forms['form']['mobilenumber']
var address=document.forms['form']['address']
var registrationtime=document.forms['form']['registrationtime']
var birthdate=document.forms['form']['birthdate']
var format=/#/;
 
var name_error=document.getElementById('name_error')
var username_error=document.getElementById('username_error')
var email_error=document.getElementById('email_error')
var mobilenumber_error=document.getElementById('mobilenumber_error')
var password_error=document.getElementById('password_error')
var gender_error=document.getElementById('gender_error')
var address_error=document.getElementById('address_error')
var registrationtime_error=document.getElementById('registrationtime_error')
var birthdate_error=document.getElementById('birthdate_error')

 
function validated(){
 
 if(firstname.value.length < 5)
{
    firstname.style.border="4px solid red";
    name_error.innerHTML="invalid firstname";
    firstname.focus();
    return false;
}



else if(password.value.length < 10 || password.match(format)== false)
{
    password.style.border="4px solid red";
    pass_error.innerHTML="inValid password ";
    password.focus();
    return false;
}


else if(address.value.length < 10 || address.match(format)== false)
{
    address.style.border="4px solid red";
    address_error.innerHTML="inValid address ";
    address.focus();
    return false;
}



if(username.value.length < 10)
{
    username.style.border="4px solid red";
    username_error.innerHTML="inValid usereName ";
    username.focus();
    return false;
}

if(mobilenumber.value.length < 15)
{
    mobilenumber.style.border="4px solid red";
    mobilenumber_error.innerHTML="inValid mobilenumber ";
    mobilenumber.focus();
    return false;
}

if(birthdate.value.length < 15)
{
    birthdate.style.border="4px solid red";
    birthdate_error.innerHTML="inValid birthdate";
    birthdate.focus();
    return false;
}


if(registrationtime.value.length < 15)
{
    registrationtime.style.border="4px solid red";
    registrationtime_error.innerHTML="inValid registrationtime";
    registrationtime.focus();
    return false;
}
 
     
}