<?php
//function checkEligibilityToVote()
{
    $age=20;
    $myName="Jamal Abdallah";
    if($age >=18)
    {
        echo "$myName You are eligible to vote";
    }
    else
    {
        echo "$myName You are not eligble to vote";
    }
}

//checkEligibilityToVote()

//grading
function gradingSystem()
{
$marks=66;
if($marks>=80)
{
$grade="A (plain)";
}
else if($marks>=75)
{
    $grade="A- (minus)";
}
if($marks>=70)
{
    $grade="B+ (plus)";
}
else if($marks>=65)
{
    $grade="B";
}
else if($marks>=60)
{
    $grade="B (plain)";
}

    else if($marks>=50)
    {
    $grade="C+";
}
else
{
    $grade="FAIL";
}
echo "your grade is $grade";
}
gradingSystem()
?>