function validate()
{
  var button_checked=getSelectedRadio(document.forms.selection.elements.FOSS);
  if(button_checked)
  {
  alert("done");
  document.getElementById("qtype").style.display='block';
  }
  else
  {
  alert("please select the FOSS");
  }
}
function getSelectedRadio(radio_name)
{
  for(var i=0; i < radio_name.length; i++)
  {
    if(radio_name[i].checked)
    {return radio_name[i];}
  }
   return undefined;
}


function show()
{
  var checked_value=getSelectedRadio(document.forms.qtype.elements.type);
  var value= checked_value.value;
  //alert(value);
  if(value=="multiple")
  {
     document.getElementById("mcq1").style.display="block";
     document.getElementById("tf2").style.display="none";
     document.getElementById("sa3").style.display="none";
   } 
   else if(value=="truefalse")
   {
     document.getElementById("tf2").style.display="block";
     document.getElementById("mcq1").style.display="none";
     document.getElementById("sa3").style.display="none";
   }
   else if(value=="shortanswer")
   {
     document.getElementById("sa3").style.display="block";
     document.getElementById("mcq1").style.display="none";
     document.getElementById("tf2").style.display="none";
   }
 //document.getElementById("mcq").style.display="block";
 /* else if(checked_value.value=="truefalse")
  {
   document.getElementById("tf2").style.display="block";
  }
  else
  {alert("done";)}
*/
}
