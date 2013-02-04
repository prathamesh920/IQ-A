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
echo "k".$dropdown;



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
 
 echo "mcq";
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
