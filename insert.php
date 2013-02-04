<?php
require_once("../config.php");
$con = mysql_connect("localhost","root","root");
mysql_select_db("newmoodle2_4",$con);
require_login();
$PAGE->set_title('Contribute Question');
$site=get_site();
$loginsite='Contribute Question';
$PAGE->set_heading($site->fullname);
$PAGE->navbar->add($loginsite);
echo $OUTPUT -> header();
echo "ok";
//$tfq=$_POST["tfq"];

$dropdown=$_REQUEST['dropdown'];

//echo "k".$dropdown;
//$answer=$_POST['opt1'];
//echo $answer;


if($dropdown=="truefalse")
{
 $question = $_POST['tfq'];
 $answer = $_REQUEST['tf'];
 mysql_query("insert into con_question(questiontext,qtype,count) values ('$question','$dropdown',0)");
 mysql_query("insert into con_question_answer_truefalse(question_id,optiontrue,optionfalse,answer) values (last_insert_id(),'true','false','$answer')");
 echo "tf";
}
else if($dropdown=="multiple")
{
 $question= $_POST['mcq'];
 $opt1=$_POST['opt1'];
 $opt2=$_POST['opt2'];
 $opt3=$_POST['opt3'];
 $opt4=$_POST['opt4'];
 $option = $_POST['right'];
 if($option=="1")
 {
   $answer=$opt1;
 }
 else if($option=="2")
 {
   $answer=$opt2;
 }
 else if($option=="3")
 {
   $answer=$opt3;
 }
 else if($option=="4")
 {
   $answer=$opt4;
 }

if(! mysql_query("insert into con_question(questiontext,qtype,count) values ('$question','$dropdown',0)"))
{echo mysql_error();}

if(!mysql_query("insert into con_question_answer_mcq(question_id,option1,option2,option3,option4,answer) values (last_insert_id(),'$opt1','$opt2','$opt3','$opt4','$answer')"))
{echo "e2".mysql_error();}
 echo "mcq".$answer;
}
else if($dropdown=="shortanswer")
{
 $question = $_POST['saq'];
 $answer = $_POST['saa'];
try
{
if(!mysql_query("insert into con_question(questiontext,qtype,count) values ('$question','$dropdown',0)",$con))
{echo "ee ".mysql_error();}
 mysql_query("insert into con_question_answer_shortanswer(question_id,answer) values (last_insert_id(),'$answer')"); 
}catch(Exception $e){echo $e;}
echo "sa";
}

?>

<?php
 echo $OUTPUT->footer();
?>
