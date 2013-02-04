
<?php
require_once("../config.php");
require_login();
$PAGE->set_title('Contribute Question');
$site=get_site();
$loginsite='Contribute Question';
$PAGE->set_heading($site->fullname);
$PAGE->navbar->add($loginsite);
echo $OUTPUT -> header();
?>


<html>
<title>Contribute a question</title>
<head>
<script type="text/JavaScript" src="content.js"></script>
<marquee><h1> Welcome to Spoken Tutorial Website for Question Contribution </h1></marquee>
</head>


<body>
<div id="1">
<form id="selection">
<p><h3> Select the FOSS for which you would contribute a question </h3></p>
<input type="radio" name="FOSS" value="java">java</input><br></br>
<input type="radio" name="FOSS" value="blender">blender</input><br></br>
<input type="radio" name="FOSS" value="geogebra">geogebra</input><br></br>
<input type="button" name="select" value="Submit" onclick="validate()"></input>
</form>
</div>


<div id = "2">
<form id="qtype" name="qtype"  style="display:none" action="insert.php" method="POST">
<p><h3>Select the type of question</h3></p>
<select name="dropdown" id="dropdown" onchange="show()">
<option value="default">Select the type of question</option>
<option value="multiple">Multiple choice</option>
<option value="truefalse">True or False</option>
<option value="shortanswer">Short answer</option>
</select>
<!--<input type="radio" name="type" value="multiple" onclick="show()">multiple choice</input>--></br></br>
<div id = "mcq1"  style="display:none"><p id="mcqp">Question:</p><textarea id="mcq" name="mcq" cols="100" rows="2"></textarea></br>
<input type="radio" name="right" value="1">option 1</input><input type = "text" id="opt1" name="opt1"></br>
<input type="radio" name="right" value="2">option 2</input><input type = "text" id="opt2" name="opt2"></br>
<input type="radio" name="right" value="3">option 3</input><input type = "text" id="opt3" name="opt3"></br>
<input type="radio" name="right" value="4">option 4</input><input type = "text" id="opt4" name="opt4"></br></br>
<h3>Hint:</h3>Select the correct answer from the given options.
</div>
<!--<input type="radio" name="type" value="truefalse" onclick="show()">True or False</input><br></br>-->
<div id="tf2" style="display:none">
<p id="tfp">Question:</p><textarea id="tfq" name="tfq" cols="100" rows="2"></textarea></br>
False<input type = "radio" name="tf" value="false"></br>
True<input type = "radio" name="tf" value="true"></br>
</div>
<!--<input type="radio" name="type" value="shortanswer" onclick="show()">short answer</input><br></br>-->
<div id="sa3" style="display:none">
<p id="sap">Question:</p><textarea id="saq" name="saq" cols="100" rows="2"></textarea></br>
<p>Answer:</p><textarea id="saa" name="saa" cols="100" rows="2"></textarea></br>
</div>

<input type="button" name="click" value="Submit" onclick="questionValidation()"></input>
</form>

</div>

</body>


</html>
<?php
 echo $OUTPUT->footer();
?>
