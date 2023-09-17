var Name=document.forms['form']['name'];
var phone=document.forms['form']['phone'];
var popups=document.getElementById('enterNme');

function formValidation()
{
  if(Name.value==''|| Name.value==null)
  {
Name.style.border='1px solid red';
popups.style.display='block';
popups.style.color='red';
Name.focus();
return false;
  }
}
