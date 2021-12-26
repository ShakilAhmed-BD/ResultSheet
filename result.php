<?php
/////////////////////////////////////////////////////
// Input Area (Enter your Mark Here)****************
////////////////////////////////////////////////////
$Bangla1stWritten=55;
$Bangla1stObj=25;
$Bangla2ndwritten=52;
$Bangla2ndObj=23;
$English1st_Number=60;
$English2nd_Number=52;
$Math_Number=75;
$Physics_Number=62; 
$Chemistry_Number=82;
$Biology_Number=80; 
////////////////////////////////////////////////////
//End of Input Area
////////////////////////////////////////////////////

$writtenMark=$Bangla1stWritten+$Bangla2ndwritten;
$objMark=$Bangla1stObj+$Bangla2ndObj;
$Bangla1stMark=$Bangla1stWritten+$Bangla1stObj;
$Bangla2ndMark=$Bangla2ndwritten+$Bangla2ndObj;
$BanglaMark=$Bangla1stMark+$Bangla2ndMark;

echo"**See what you have got From your Examination".PHP_EOL;
echo"\n";

// Condition Starts from here
if($Bangla1stWritten>70 && $Bangla1stObj>30){
    echo "1. Enter Correct Bangla 1st paper Written & Objective Number!";
}elseif($Bangla1stWritten>70){
    echo "1. Enter Correct Bangla 1st paper Written Marks!";
}elseif($Bangla2ndwritten>70 && $Bangla2ndObj>30){
    echo "1. Enter Correct Bangla 2nd paper Written & Objective Number!";
}elseif($Bangla2ndwritten>70){
    echo "1. Enter Correct Bangla 2nd paper Written Marks!";
}elseif($Bangla1stObj>30){
    echo "1. Enter Correct Bangla 1st paper Objective Marks!";
}elseif($Bangla2ndObj>30){
    echo "1. Enter Correct Bangla 2nd paper Objective Marks!";
}elseif($Bangla1stObj<10){
    echo "1. Failed in Bangla 1st paper Objective and Number is {$Bangla1stObj}!";
}elseif($Bangla2ndObj<10){
    echo "1. Failed in Bangla 2nd paper Objective and Number is { $Bangla2ndObj}!";
}elseif($Bangla1stMark<33){
    echo "1. Failed in Bangla 1st paper and Number is {$Bangla1stMark}!";
}elseif($Bangla2ndMark<33){
    echo "1. Failed in Bangla 2nd paper and Number is {$Bangla2ndMark}!";
}elseif($objMark>60){
    echo "1. Enter Correct Bangla Objective Mark!";
}elseif($writtenMark>=46 && $objMark>=20){
    echo"1. Bangla marks is {$BanglaMark}";
}elseif($writtenMark<23 && $objMark<20){
    echo "1. Failed In Bangla Subject & Number is {$BanglaMark}!";
}else{
    echo "1. Failed In Bangla Subject & Number is {$BanglaMark}!";
}
echo"\n";
/////////////////////////////////////////////////////
// English Mark Calculation*************************
////////////////////////////////////////////////////
//*********** */ Input Area (Enter your Mark Here)
$English1st=$English1st_Number;
$English2nd=$English2nd_Number;
$EnglishMark=$English1st+$English2nd;
//End of English Input Area

// Condition Starts from here
if($English1st>100){
    echo "2. Enter Correct English 1st paper Marks!";
}elseif($English2nd>100){
    echo "2. Enter Correct English 2nd paper Marks!";
}elseif($English1st<33){
    echo "2. Failed in English 1st paper and Number is {$English1st}!";
}elseif($English2nd<33){
    echo "2. Failed in English 2nd paper and Number is {$English2nd}!";
}elseif($English1st>=33 && $English2nd>=33){
    echo"2. English marks is {$EnglishMark}";
}elseif($English1st<33 && $English2nd<33){
    echo "2. Failed In English Subject & Number is {$EnglishMark}!";
}else{
    echo "2. Failed In English Subject & Number is {$EnglishMark}!";
}
echo"\n";
/////////////////////////////////////////////////////
// Result Calculation*******************************
////////////////////////////////////////////////////
$Bangla=$BanglaMark;
$English=$EnglishMark;
$Math=$Math_Number;
if($Math<=100){
    echo"3. Math marks is $Math\n";
}
elseif($Math>100){
    echo"3. Enter Correct Math Marks!\n";
}
$Physics=$Physics_Number; 
if($Physics<100){
    echo"4. Physics marks is $Physics\n";
}
elseif($Physics>100){
    echo"4. Enter Correct Physics Marks!\n";
}
$Chemistry=$Chemistry_Number; 
if($Chemistry<100){
    echo"5. Chemistry marks is $Chemistry\n";
}
elseif($Chemistry>100){
    echo"5. Enter Correct Chemistry Marks!\n";
}
$Biology_op=$Biology_Number; 
if($Biology_op<=100){
    echo"6. Biology marks is $Biology_op\n";
}
elseif($Biology_op>100){
    echo"6. Enter Correct Biology Marks!\n";
}
echo"\n";
echo"**The Grade is given below in the following order (Bangla/English/Math/Physics/Chemistry/Biology)".PHP_EOL;
echo"\n";

// Condition Starts from here
/*Condition For Bangla Subject*/
$Bangla_grade=" ";
if($Bangla1stWritten<23||$Bangla2ndwritten<23||$Bangla1stObj<10||$Bangla2ndObj<10){
    echo $Bangla_grade="F";
}elseif($Bangla>200||$Bangla1stObj>30||$Bangla2ndObj>30||$Bangla1stWritten>70||$Bangla2ndwritten>70 ){
    echo $Bangla_grade="Error!";
}elseif($Bangla<66){
    echo $Bangla_grade="F";
}elseif(($Bangla/200)*100>=80 && ($Bangla/200)*100<=100){
    echo $Bangla_grade="A+";   
}elseif(($Bangla/200)*100>=70 && ($Bangla/200)*100<=79){
    echo $Bangla_grade="A"; 
}elseif(($Bangla/200)*100>=60 && ($Bangla/200)*100<=69){
    echo $Bangla_grade="A-"; 
}elseif(($Bangla/200)*100>=50 && ($Bangla/200)*100<=59){
    echo $Bangla_grade="B"; 
}elseif(($Bangla/200)*100>=40 && ($Bangla/200)*100<=49){
    echo $Bangla_grade="C"; 
}elseif(($Bangla/200)*100>=33 && ($Bangla/200)*100<=39){
    echo $Bangla_grade="D"; 
}else{
    echo $Bangla_grade="F";
};
echo"\n";

/*Condition For English Subject*/
$English_grade="";
if($English1st<33||$English2nd<33){
    echo $English_grade="F";
}elseif($English>200||$English1st>100||$English2nd>100){
    echo $English_grade="Error!";
}elseif(($English/200)*100>=80 && ($English/200)*100<=100){
    echo $English_grade="A+";   
}elseif(($English/200)*100>=70 && ($English/200)*100<=79){
    echo $English_grade="A"; 
}elseif(($English/200)*100>=60 && ($English/200)*100<=69){
    echo $English_grade="A-"; 
}elseif(($English/200)*100>=50 && ($English/200)*100<=59){
    echo $English_grade="B"; 
}elseif(($English/200)*100>=40 && ($English/200)*100<=49){
    echo $English_grade="C"; 
}elseif(($English/200)*100>=33 && ($English/200)*100<=39){
    echo $English_grade="D"; 
}elseif($English<66){
    echo $English_grade="F";
}else{
    echo $English_grade="F";
};
echo"\n";

/*Condition For Math Subject*/
$Math_grade="";
if($Math>100){
    echo $Math_grade="Error!";
}elseif(($Math/100)*100>=80 && ($Math/100)*100<=100){
    echo $Math_grade="A+";   
}elseif(($Math/100)*100>=70 && ($Math/100)*100<=79){
    echo $Math_grade="A"; 
}elseif(($Math/100)*100>=60 && ($Math/100)*100<=69){
    echo $Math_grade="A-"; 
}elseif(($Math/100)*100>=50 && ($Math/100)*100<=59){
    echo $Math_grade="B"; 
}elseif(($Math/100)*100>=40 && ($Math/100)*100<=49){
    echo $Math_grade="C"; 
}elseif(($Math/100)*100>=33 && ($Math/100)*100<=39){
    echo $Math_grade="D"; 
}elseif($Math<33){
    echo $Math_grade="F";
}else{
    echo $Math_grade="F";
};
echo"\n";

/*Condition For Physics Subject*/
$Physics_grade="";
if($Physics>100){
    echo $Physics_grade="Error!";
}elseif(($Physics/100)*100>=80 && ($Physics/100)*100<=100){
    echo $Physics_grade="A+";   
}elseif(($Physics/100)*100>=70 && ($Physics/100)*100<=79){
    echo $Physics_grade="A"; 
}elseif(($Physics/100)*100>=60 && ($Physics/100)*100<=69){
    echo $Physics_grade="A-"; 
}elseif(($Physics/100)*100>=50 && ($Physics/100)*100<=59){
    echo $Physics_grade="B"; 
}elseif(($Physics/100)*100>=40 && ($Physics/100)*100<=49){
    echo $Physics_grade="C"; 
}elseif(($Physics/100)*100>=33 && ($Physics/100)*100<=39){
    echo $Physics_grade="D"; 
}elseif($Physics<33){
    echo $Physics_grade="F";
}else{
    echo $Physics_grade="F";
};
echo"\n";

/*Condition For Chemistry Subject*/
$Chemistry_grade="";
if($Chemistry>100){
    echo $Chemistry_grade="Error!";
}elseif(($Chemistry/100)*100>=80 && ($Chemistry/100)*100<=100){
    echo $Chemistry_grade="A+";   
}elseif(($Chemistry/100)*100>=70 && ($Chemistry/100)*100<=79){
    echo $Chemistry_grade="A"; 
}elseif(($Chemistry/100)*100>=60 && ($Chemistry/100)*100<=69){
    echo $Chemistry_grade="A-"; 
}elseif(($Chemistry/100)*100>=50 && ($Chemistry/100)*100<=59){
    echo $Chemistry_grade="B"; 
}elseif(($Chemistry/100)*100>=40 && ($Chemistry/100)*100<=49){
    echo $Chemistry_grade="C"; 
}elseif(($Chemistry/100)*100>=33 && ($Chemistry/100)*100<=39){
    echo $Chemistry_grade="D"; 
}elseif($Chemistry<33){
    echo $Chemistry_grade="F";
}else{
    echo $Chemistry_grade="F";
};
echo"\n";

/*Condition For Biology_optional Subject*/
$Biology_grade=" ";
if($Biology_op>100){
    echo $Biology_grade="Error!";
}elseif(($Biology_op/100)*100>=80 && ($Biology_op/100)*100<=100){
    echo $Biology_grade="A+";   
}elseif(($Biology_op/100)*100>=70 && ($Biology_op/100)*100<=79){
    echo $Biology_grade="A"; 
}elseif(($Biology_op/100)*100>=60 && ($Biology_op/100)*100<=69){
    echo $Biology_grade="A-"; 
}elseif(($Biology_op/100)*100>=50 && ($Biology_op/100)*100<=59){
    echo $Biology_grade="B"; 
}elseif(($Biology_op/100)*100>=40 && ($Biology_op/100)*100<=49){
    echo $Biology_grade="C"; 
}elseif(($Biology_op/100)*100>=33 && ($Biology_op/100)*100<=39){
    echo $Biology_grade="D"; 
}else{
    echo $Biology_grade="F (Optional)";
};
echo"\n";
echo"\n";
echo"**The Grade point is given below in the following order (Bangla/English/Math/Physics/Chemistry/Biology)";
echo"\n";
echo"\n";
/////////////////////////////////////////////////////
// Grade Point Calculation**************************
////////////////////////////////////////////////////
//Bangla Grade Point///////////////////////////////
if($Bangla_grade=="A+"){
echo $BanglaPoint=5;
}elseif($Bangla_grade=="A"){
    echo $BanglaPoint=4;
}elseif($Bangla_grade=="A-"){
    echo $BanglaPoint=3.5;
}elseif($Bangla_grade=="B"){
    echo $BanglaPoint=3;
}elseif($Bangla_grade=="C"){
    echo $BanglaPoint=2;
}elseif($Bangla_grade=="D"){
    echo $BanglaPoint=1;
}elseif($Bangla_grade=="F"){
    echo $BanglaPoint=0;
}else{
    echo $BanglaPoint="Error!";
};

echo "\n";
//English Grade Point///////////////////////////////    
if($English_grade=="A+"){
    echo $EnglishPoint=5;
}elseif($English_grade=="A"){
    echo $EnglishPoint=4;
}elseif($English_grade=="A-"){
    echo $EnglishPoint=3.5;
}elseif($English_grade=="B"){
    echo $EnglishPoint=3;
}elseif($English_grade=="C"){
    echo $EnglishPoint=2;
}elseif($English_grade=="D"){
    echo $EnglishPoint=1;
}elseif($English_grade=="F"){
    echo $EnglishPoint=0;
}else{
    echo $EnglishPoint="Error!";
}
echo "\n";
//Math Grade Point///////////////////////////////

if($Math_grade=="A+"){
    echo $MathPoint=5;
}elseif($Math_grade=="A"){
    echo $MathPoint=4;
}elseif($Math_grade=="A-"){
    echo $MathPoint=3.5;
}elseif($Math_grade=="B"){
    echo $MathPoint=3;
}elseif($Math_grade=="C"){
    echo $MathPoint=2;
}elseif($Math_grade=="D"){
    echo $MathPoint=1;
}elseif($Math_grade=="F"){
    echo $MathPoint=0;
}else{
    echo $MathPoint="Error!";
}
echo "\n";
//Physics Grade Point///////////////////////////////

    if($Physics_grade=="A+"){
    echo $PhysicsPoint=5;
}elseif($Physics_grade=="A"){
    echo $PhysicsPoint=4;
}elseif($Physics_grade=="A-"){
    echo $PhysicsPoint=3.5;
}elseif($Physics_grade=="B"){
    echo $PhysicsPoint=3;
}elseif($Physics_grade=="C"){
    echo $PhysicsPoint=2;
}elseif($Physics_grade=="D"){
    echo $PhysicsPoint=1;
}elseif($Physics_grade=="F"){
    echo $PhysicsPoint=0;
}else{
    echo $PhysicsPoint="Error!";
}
echo "\n";
//Chemistry Grade Point///////////////////////////////
    if($Chemistry_grade=="A+"){
    echo $ChemistryPoint=5;
}elseif($Chemistry_grade=="A"){
    echo $ChemistryPoint=4;
}elseif($Chemistry_grade=="A-"){
    echo $ChemistryPoint=3.5;
}elseif($Chemistry_grade=="B"){
    echo $ChemistryPoint=3;
}elseif($Chemistry_grade=="C"){
    echo $ChemistryPoint=2;
}elseif($Chemistry_grade=="D"){
    echo $ChemistryPoint=1;
}elseif($Chemistry_grade=="F"){
    echo $ChemistryPoint=0;
}else{
    echo $ChemistryPoint="Error!";
}
echo "\n";  
//Biology Grade Point///////////////////////////////
if($Biology_grade=="A+"){
    echo $BiologyPoint=5;
}elseif($Biology_grade=="A"){
    echo $BiologyPoint=4;
}elseif($Biology_grade=="A-"){
    echo $BiologyPoint=3.5;
}elseif($Biology_grade=="B"){
    echo $BiologyPoint=3;
}elseif($Biology_grade=="C"){
    echo $BiologyPoint=2;
}elseif($Biology_grade=="D"){
    echo $BiologyPoint=1;
}elseif($Biology_grade=="F (Optional)"){
    echo $BiologyPoint=0;
}else{
    echo $BiologyPoint="Error!";
}
echo "\n";        
/////////////////////////////////////////////////////
// GPA Calculation**********************************
////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////




$Total_point=($BanglaPoint+$EnglishPoint+$MathPoint+$PhysicsPoint+$ChemistryPoint);
if($BiologyPoint>2){
    $Biology_optional=$BiologyPoint-2;
}else{
    $Biology_optional=0;
};

$GrandTotal=($Total_point+$Biology_optional)/5;
// echo "Your final GPA is {$GrandTotal}";
echo"\n";
$GoldenA_plus=$GrandTotal;
if($GoldenA_plus==28 && $BiologyPoint==5 ){
    $GoldenA_plus=5;
}elseif($GoldenA_plus>5){
    $GoldenA_plus=5;
};
echo "Your final GPA is {$GoldenA_plus}";
echo"\n";

if($BanglaPoint==0||$EnglishPoint==0||$MathPoint==0||$PhysicsPoint==0||$ChemistryPoint==0){
    $finalGrade="F";
}elseif($BanglaPoint==5 && $EnglishPoint==5 && $MathPoint==5 && $PhysicsPoint==5 && $ChemistryPoint==5 && $BiologyPoint==5){
    $finalGrade="Golden A+";
}elseif($BanglaPoint==5 && $EnglishPoint==5 && $MathPoint==5 && $PhysicsPoint==5 && $ChemistryPoint==5 && $BiologyPoint!=5){
    $finalGrade="A+";
}elseif($GrandTotal==5){
    $finalGrade="A+";
}elseif($GrandTotal>=4 && $GrandTotal<=4.99){
    $finalGrade="A";
}elseif($GrandTotal>=3.5 && $GrandTotal<=3.99 ){
    $finalGrade="A-";
}elseif($GrandTotal>=3 && $GrandTotal<=3.49){
    $finalGrade="B";
}elseif($GrandTotal=2 && $GrandTotal<=2.99){
    $finalGrade="C";
}elseif($GrandTotal=1 && $GrandTotal<=1.99){
    $finalGrade="D";
};
echo "Your Final Grade is $finalGrade".PHP_EOL;
echo "\n";


if($BanglaPoint==0){
    echo "Failed in Bangla Subject".PHP_EOL;
};
if($EnglishPoint==0){
    echo "Failed in English Subject".PHP_EOL;
};
if($MathPoint==0){
    echo "Failed in Math Subject".PHP_EOL;
};
if($PhysicsPoint==0){
    echo "Failed in Physics Subject".PHP_EOL;
};
if($ChemistryPoint==0){
    echo "Failed in Chemisry Subject".PHP_EOL;
};



    