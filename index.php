<?php
//all your code
//$myName = "Jamal Abdallah";
//echo $myName

//arrays
//$students = array("Purity","Annet","Roy","Jamal","Nathan");
//echo $students[3];

//Associative array
$myMarks = array( "Assessments"=> 25,
"CAT"=> 15,
"projects"=> 35,
"attendance" => 8,
);

echo "My Project Marks:".$myMarks["projects"];
//Multidimensional Arrays
$webDevTechnologies = array(
    'frontend' =>array('HTML', 'CSS', 'JS','Bootstrap'),
    'backend'=>array('PHP', 'Python', 'java', 'JS'),
    'frameworks'=>array('Laravel', 'Django', 'SpringBboot', 'Flutter'),
    'Database'=>array('MySQL', 'postgreSQL', 'MongoDB', 'Firebase'),
);
echo $webDevTechnologies['frontend'][3];
echo $webDevTechnologies['frameworks'][2];
echo $webDevTechnologies['Database'][0];




?>