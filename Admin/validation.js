//Validation code for sign up

var firstname=document.forms['form']['firstname']
var email=document.forms['form']['email']
var username=document.forms['form']['username']
var password=document.forms['form']['password']
var confirmpassword=document.forms['form']['confirmpassword']
var format=/#/;
var eformat=/@/;

var name_error=document.getElementById('name_error')
var email_error=document.getElementById('email_error')
var user_error=document.getElementById('user_error')
var pass_error=document.getElementById('pass_error')
var cpass_error=document.getElementById('cpass_error')
//var error=document.getElementById('error')

firstname.addEventListener('textInput', firstname_Verify);
email.addEventListener('textInput', email_Verify);
username.addEventListener('textInput', username_Verify);
password.addEventListener('textInput', password_Verify);
confirmpassword.addEventListener('textInput', cpassword_Verify);

function validated(){

 if(firstname.value.length < 6)
{
    firstname.style.border="2px solid red";
  // name_error.innerHTML="Valid Name is required";
   name_error.style.display="block";
    firstname.focus();
    return false;
}
else if(email.value.length < 8)
{
    email.style.border="2px solid red";
   // email_error.innerHTML="Atleast 8 letter";
    email_error.style.display="block";
    email.focus();
    return false;
}  
else if(username.value.length < 5)
{
    username.style.border="2px solid red";
   // user_error.innerHTML="Valid Name is required";
    user_error.style.display="block";
    username.focus();
    return false;
}  
else if(password.value.length < 6)
{
    password.style.border="2px solid red";
    pass_error.style.display="block";
    //pass_error.innerHTML="Valid password is required";
    password.focus();
    return false;
}
else if( password.match(format)== false)
{
    password.style.border="2px solid red";
    pass_error.style.display="block";
    //pass_error.innerHTML="Valid password is required";
    password.focus();
    return false;
}
  
if(password.value.match != confirmpassword.value.match || confirmpassword==null)
{
    confirmpassword.style.border="2px solid red";
    // user_error.innerHTML="Valid Name is required";
     cpass_error.style.display="block";
     confirmpassword.focus();
     return false;

}
}
function firstname_Verify()
{

    if(firstname.value.length >= 7)
    {
        firstname.style.border="2px solid silver";
        name_error.style.display="none";
         return true;

    }
    
}
function email_Verify()
{

    if(email.value.length >= 9)
    {
        email.style.border="2px solid silver";
        email_error.style.display="none";
       // email_error.innerHTML="none";
         return true;

    }
   
}
function username_Verify()
{
    if(username.value.length >= 6)
    {
        username.style.border="2px solid silver";
        user_error.style.display="none";
         return true;

    }
}
function password_Verify()
{
    if(password.value.length >= 7)
    {
        password.style.border="2px solid silver";
        pass_error.style.display="none";
         return true;

    }
    if(password.match(format)==true)
    {
        password.style.border="2px solid silver";
        pass_error.style.display="none";
        //email_error.innerHTML="none";
        return true;

    }
}
function cpassword_Verify()
{
    if(password.value == confirmpassword.value)
    {
    confirmpassword.style.border="2px solid silver";
    // user_error.innerHTML="Valid Name is required";
     cpass_error.style.display="none";    
     return true;
    }

}