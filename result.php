<?php
session_start();
$cname=$_SESSION['cname'];
$branch=$_SESSION['branch'];
global $answer1;
global $answer2;
global $answer3;
global $answer4;
global $answer5;
global $answer6;
global $answer7;
global $answer8;
global $answer9;
global $answer10;
global $answer11;
global $answer12;
global $answer13;
global $answer14;
global $answer15;
global $answer16;
global $answer17;
global $answer18;
global $answer19;
global $answer20;
global $answer21;
global $answer22;
global $answer23;
global $answer24;
global $answer25;
global $answer26;
global $answer27;
global $answer28;
global $answer29;
global $answer30;
if(isset($_POST['an1']))
    {
$answer1=$_POST['an1'];
    }
if(isset($_POST['an2']))
    {
$answer2=$_POST['an2'];
    }
if(isset($_POST['an3']))
    {
$answer3=$_POST['an3'];
    }
if(isset($_POST['an4']))
    {
$answer4=$_POST['an4'];
    }
if(isset($_POST['an5']))
    {
$answer5=$_POST['an5'];
    }  
if(isset($_POST['an6']))
    {
$answer6=$_POST['an6'];
    }
if(isset($_POST['an7']))
    {
$answer7=$_POST['an7'];
    }
if(isset($_POST['an8']))
    {
$answer8=$_POST['an8'];
    }
if(isset($_POST['an9']))
    {
$answer9=$_POST['an9'];
    }
if(isset($_POST['an10']))
    {
$answer10=$_POST['an10'];
    }
if(isset($_POST['an11']))
    {
$answer11=$_POST['an11'];
    }
if(isset($_POST['an12']))
    {
$answer12=$_POST['an12'];
    }
if(isset($_POST['an13']))
    {
$answer13=$_POST['an13'];
    }
if(isset($_POST['an14']))
    {
$answer14=$_POST['an14'];
    }
if(isset($_POST['an15']))
    {
$answer15=$_POST['an15'];
    }  
if(isset($_POST['an16']))
    {
$answer16=$_POST['an16'];
    }
if(isset($_POST['an17']))
    {
$answer17=$_POST['an17'];
    }
if(isset($_POST['an18']))
    {
$answer18=$_POST['an18'];
    }
if(isset($_POST['an19']))
    {
$answer19=$_POST['an19'];
    }
if(isset($_POST['an20']))
    {
$answer20=$_POST['an20'];
    }
if(isset($_POST['an21']))
    {
$answer21=$_POST['an21'];
    }
if(isset($_POST['an22']))
    {
$answer22=$_POST['an22'];
    }
if(isset($_POST['an23']))
    {
$answer23=$_POST['an23'];
    }
if(isset($_POST['an24']))
    {
$answer24=$_POST['an24'];
    }
if(isset($_POST['an25']))
    {
$answer25=$_POST['an25'];
    }  
if(isset($_POST['an26']))
    {
$answer26=$_POST['an26'];
    }
if(isset($_POST['an27']))
    {
$answer27=$_POST['an27'];
    }
if(isset($_POST['an28']))
    {
$answer28=$_POST['an28'];
    }
if(isset($_POST['an29']))
    {
$answer29=$_POST['an29'];
    }
if(isset($_POST['an30']))
    {
$answer30=$_POST['an30'];
    }
$result;
$count=0;
?>
<!DOCTYPE html>
<!--
Author : Optimist Society
Designed and Edited By: Aishwary Sinha
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   
        <title>Reverse Gear</title>
        <?php
        if($answer1==30)
        {$count++; }
        if($answer2==20)
        {$count++; }
        if($answer3==40)
        {$count++; }
        if($answer4==20)
        {$count++; }
        if($answer5==10)
        {$count++; }
        if($answer6==30)
        {$count++; }
        if($answer7==20)
        {$count++; }
        if($answer8==30)
        {$count++; }
        if($answer9==10)
        {$count++; }
        if($answer10==20)
        {$count++; }
        if($answer11==10)
        {$count++; }
        if($answer12==30)
        {$count++; }
        if($answer13==30)
        {$count++; }
        if($answer14==10)
        {$count++; }
        if($answer15==40)
        {$count++; }
        if($answer16==30)
        {$count++; }
        if($answer17==40)
        {$count++; }
        if($answer18==40)
        {$count++; }
        if($answer19==10)
        {$count++; }
        if($answer20==30)
        {$count++; }
        if($answer21==30)
        {$count++; }
        if($answer22==20)
        {$count++; }
        if($answer23==30)
        {$count++; }
        if($answer24==40)
        {$count++; }
        if($answer25==20)
        {$count++; }
        if($answer26==10)
        {$count++; }
        if($answer27==30)
        {$count++; }
        if($answer28==30)
        {$count++; }
        if($answer29==30)
        {$count++; }
        if($answer30==20)
        {$count++; }
        $result=$count;
        ?>
    </head>
    <body background="back.jpg" style="background-repeat: no-repeat; background-position: cover;">
        <div class="container-fluid" style="background: rgba(0, 0, 0, 0.2);">
            <center><h1 class="display-4"><font face="Pasajero" color="white">REVERSE GEAR</font></h1></center>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
    <center><h1 class="display-3"><font color="white">Thank You!</font></h1></center><br/>
    <center><h4 class="display-6"><font color="white"><u><?php echo $cname;?></u> of <u><?php echo $branch;?></u> for your participation.</font></h4></center>
       <br/>
        <br/>
        <br/>
        <br/>
       <center><h1 class="display-5"><font color="white">Your Score : <?php echo $result;?></font></h1></center><br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <br/>
       <nav class="navbar navbar-expand-sm navbar-dark fixed-bottom" style=" background: rgba(0, 0, 0, 0.5);">
           <div class="mx-auto">
               <font color='white'> Created by <u>Optimists Society</u> Designed by <u>Aishwary Sinha</u></font>
           </div>
</nav>
    </body>
    <?php
    session_destroy();
    ?>
</html>
