function validate()
{
    if(document.getElementById("id1").value=="")
	  document.getElementById("error1").style.visibility="visible";
  
    if(document.getElementById("id2").value=="")
	  document.getElementById("error2").style.visibility="visible";
}
  
  function val_user()
  {
	  if(document.getElementById("id1").value=="")
	  document.getElementById("error1").style.visibility="visible";
      else
		  document.getElementById("error1").style.visibility="hidden";
	  
  }
  
  function val_pass()
  {
	   if(document.getElementById("id2").value=="")
	  document.getElementById("error2").style.visibility="visible";
      else
		  document.getElementById("error2").style.visibility="hidden";
  }