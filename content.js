var value1="hello";
var change=0;
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
  change=0;
 // var checked_value=getSelectedRadio(document.forms.qtype.elements.type);
 // var value= checked_value.value;
  //alert(value);
  var dd = document.getElementById("dropdown");
  value1=(dd.options[dd.selectedIndex]).value
  if(value1=="multiple")
  {
     document.getElementById("mcq1").style.display="block";
     document.getElementById("tf2").style.display="none";
     document.getElementById("sa3").style.display="none";
     change=1;
   } 
   else if(value1=="truefalse")
   {
     document.getElementById("tf2").style.display="block";
     document.getElementById("mcq1").style.display="none";
     document.getElementById("sa3").style.display="none";
     change=1;
   }
   else if(value1=="shortanswer")
   {
     document.getElementById("sa3").style.display="block";
     document.getElementById("mcq1").style.display="none";
     document.getElementById("tf2").style.display="none";
     change=1;
   }
    else if(value1=="default")
   {
     document.getElementById("sa3").style.display="none";
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

function questionValidation()
{
  var i = 0;
  //alert(value1);
  if(value1=="shortanswer")
  {
   var q3 = document.getElementById("saq").value;
   var q4 = document.getElementById("saa").value;
    if(q3 == "" || q4 == "")
    {
      alert("enter");
     i++;
    }
    else if(q3.length < 16)
   {
      alert("Question too short!!!");
      i++;
   }
    
    
  }


 if(value1=="truefalse")
  {
    var q2 = document.getElementById("tfq").value;
    var checked2=getSelectedRadio(document.forms.qtype.elements.tf);  
   if(q2 == "")
    {
      alert("enter");
     i++;
    }
    else if(q2.length < 16)
   {
      alert("Question too short!!!");
      i++;
   }
   else if(!checked2)
   {
     alert("select the right option ");
     i++;
   }
  }


 if(value1=="multiple")
  { 
   var checked=getSelectedRadio(document.forms.qtype.elements.right);
   var q=document.getElementById("mcq").value;
   var o1 = document.getElementById("opt1").value;
   var o2 = document.getElementById("opt2").value;
   var o3 = document.getElementById("opt3").value;
   var o4 = document.getElementById("opt4").value;
   
   if(q == "")
    {
      alert("enter");
      i++;
    }
    else if(q.length < 16)
   {
      alert("Question too short!!!");
     i++;
   }
   else if(o1 == "" || o2 == "" || o3 == "" || o4 == "")
  {
     alert("Enter option");
     i++;
  }
  else if(!checked)
  {
    alert("select the right option");
    i++;
  }
  }
if(i==0 && change==1)
{
 alert("proper");
 (document.forms.qtype).submit();
  
}
/*else
{
 alert("not proper");
}*/
}
