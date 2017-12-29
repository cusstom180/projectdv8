/*INSERT THIS CODE INTO YOUR WEBSITE TO HAVE LEADS SUBMIT THEIR INFORMATION TO WODIFY REMOTELY*/

if(!document.getElementById('recaptcha')){var script=document.createElement('script');script.id='recaptcha';script.src='https://www.google.com/recaptcha/api.js';document.head.appendChild(script);}
var validationUrl='//app.wodify.com/API/WebToLeadFormPostEntry_v1.aspx?ResponseField=';var reCaptchaValidated=false;function callbackFunc(data){document.getElementById('recaptcha_response_field').value=data;validationUrl+=data;if(data){reCaptchaValidated=true;}}
function validateWodifyLeadForm()
{
var reEmail = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
var returnValue = true;var fieldname=document.forms['wodifyLeadForm']['name'].value;if(fieldname==null||fieldname=='')
{document.getElementById('errorname').style.display='inline';returnValue=false;}
else
{document.getElementById('errorname').style.display='none';}
var fieldemail=document.forms['wodifyLeadForm']['email'].value;if(fieldemail==null||fieldemail==''||!reEmail.test(fieldemail))
{document.getElementById('erroremail').style.display='inline';returnValue=false;}
else
{document.getElementById('erroremail').style.display='none';}var fieldlocation=document.forms['wodifyLeadForm']['location'].options[document.forms['wodifyLeadForm']['location'].selectedIndex].value;if(fieldlocation==null||fieldlocation=='')
{document.getElementById('errorlocation').style.display='inline';returnValue=false;}
else
{document.getElementById('errorlocation').style.display='none';}if(!reCaptchaValidated){document.getElementById('errorCAPTCHA').style.display='inline';return false;}return returnValue;
};
