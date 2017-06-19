<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CSS seat booking</title>  
      <link rel="stylesheet" href="css/style.css">  
</head>

<body>
<center>
<div class="image">

      <img src="cal.jpg" alt="" />      
      <h2>
	  <span>TODAY<br></span></h2>
	  <h1><span>
<p id="date">19</p>
 
</span>
</h1>
</div>
</center>
<script>

function myFunction()
{
var today=new Date();
var h=today.getHours();
if(h<8||h>21)
  {
   alert("as this is a cooling time the price will be offer 10%");
  }
  else if(h>18&&h<20)
{
alert("as this is a peak time price will be slightly incresing than original price");
}

}
myFunction();
</script>

<?php 
$conn = new mysqli("localhost","root","","ticket")
or    die("Connection failed: " . $conn->connect_error);

 $sql="SELECT * FROM seat";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
	$array = new SplFixedArray(100);
	$n=1;
    while($row = $result->fetch_assoc()) {
      
$array[$n]=$row["no"];

$n++;
}

}
$conn->close();

echo '<form action="insert.php" method="post">';
echo '<div class="outfit">';
 echo '<div class="instruct"> ';
  echo '<h2>First Class RS.120</h2>';
 echo  '<ul style="list-style-type:none">';
    echo '<li class="row">';
 echo      '<ol class="seats" type="A">';
 
 for ($x = 1; $x <= 10; $x++)
 {	 
$f=0;
for($y=1;$y<=$n;$y++)	
{
	 if($x==$array[$y])
	 {
  $f=1;
  break;
	 }
}
if($f==1)
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' disabled="disabled"  />';
   
  echo "<label for=".$x.">".$x."</label>";
	   
     echo    '</li>';
	 
}
else
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' />';
   
  echo "<label for=".$x.">".$x."</label>";
	   
     echo    '</li>';
}

 }  
  echo    '</ol>';
  echo	    '</li>'; 
    echo '<li class="row">';
 echo      '<ol class="seats" type="B">';
    $q=1;
 for ($x = 11; $x <= 20; $x++)
 {	 
   $f=0;
for($y=1;$y<=$n;$y++)	
{
	 if($x==$array[$y])
	 {
  $f=1;
  break;
	 }
}
if($f==1)
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' disabled="disabled" />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
	 
}
else
{
	 echo      '<li class="seat">';
	   echo        "<input type='checkbox' id=".$x." name='check_list[]' value=".$x."  />";
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
}
$q++;
 }  
  echo    '</ol>';
  echo	    '</li>';
  
  echo    '</ol>';
  echo	    '</li>'; 
    echo '<li class="row">';
 echo      '<ol class="seats" type="C">';
  $q=1;
 for ($x = 21; $x <= 30; $x++)
 {	 
   $f=0;
for($y=1;$y<=$n;$y++)	
{
	 if($x==$array[$y])
	 {
  $f=1;
  break;
	 }
}
if($f==1)
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' disabled="disabled" />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
	 
}
else
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
}
$q++;
 }  
  echo    '</ol>';
  echo	    '</li>';
  
 echo '<h2>Second Class RS.100</h2>';
    echo '<li class="row">';
 echo      '<ol class="seats" type="D">';
$q=1;
 for ($x = 31; $x <= 40; $x++)
 {	 
   $f=0;
for($y=1;$y<=$n;$y++)	
{
	 if($x==$array[$y])
	 {
  $f=1;
  break;
	 }
}
if($f==1)
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' disabled="disabled" />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
	 
}
else
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
}
$q++;
 }  
  echo    '</ol>';
  echo	    '</li>'; 
    echo '<li class="row">';
 echo      '<ol class="seats" type="E">';
    $q=1;
 for ($x = 41; $x <= 50; $x++)
 {	 
    
  $f=0;
for($y=1;$y<=$n;$y++)	
{
	 if($x==$array[$y])
	 {
  $f=1;
  break;
	 }
}
if($f==1)
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' disabled="disabled" />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
	 
}
else
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
}
$q++;
 }  
  echo    '</ol>';
  echo	    '</li>';
  
  echo    '</ol>';
  echo	    '</li>'; 
    echo '<li class="row">';
 echo      '<ol class="seats" type="F">';
  $q=1;
 for ($x = 51; $x <= 60; $x++)
 {	 
  $f=0;
for($y=1;$y<=$n;$y++)	
{
	 if($x==$array[$y])
	 {
  $f=1;
  break;
	 }
}
if($f==1)
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' disabled="disabled" />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
	 
}
else
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
}
$q++;
 }  
  echo    '</ol>';
  echo	    '</li>'; 
   echo '<li class="row">';
 echo      '<ol class="seats" type="G">';
  $q=1;
 for ($x = 61; $x <= 70; $x++)
 {	 
  $f=0;
for($y=1;$y<=$n;$y++)	
{
	 if($x==$array[$y])
	 {
  $f=1;
  break;
	 }
}
if($f==1)
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' disabled="disabled" />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
	 
}
else
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
}
$q++;
 }  
  echo    '</ol>';
  echo	    '</li>';   
  echo '<h2>Third Class RS.85</h2>';
    echo '<li class="row">';
 echo      '<ol class="seats" type="H">';
$q=1;
 for ($x = 71; $x <= 80; $x++)
 {	 
   $f=0;
for($y=1;$y<=$n;$y++)	
{
	 if($x==$array[$y])
	 {
  $f=1;
  break;
	 }
}
if($f==1)
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' disabled="disabled" />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
	 
}
else
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
}
$q++;
 }  
  echo    '</ol>';
  echo	    '</li>'; 
    echo '<li class="row">';
 echo      '<ol class="seats" type="I">';
    $q=1;
 for ($x = 81; $x <= 90; $x++)
 {	 
  $f=0;
for($y=1;$y<=$n;$y++)	
{
	 if($x==$array[$y])
	 {
  $f=1;
  break;
	 }
}
if($f==1)
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' disabled="disabled" />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
	 
}
else
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
}
$q++;
 }  
  echo    '</ol>';
  echo	    '</li>';
  
  echo    '</ol>';
  echo	    '</li>'; 
    echo '<li class="row">';
 echo      '<ol class="seats" type="J">';
  $q=1;
 for ($x = 91; $x <= 100; $x++)
 {	 
  $f=0;
for($y=1;$y<=$n;$y++)	
{
	 if($x==$array[$y])
	 {
  $f=1;
  break;
	 }
}
if($f==1)
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' disabled="disabled" />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
	 
}
else
{
	 echo      '<li class="seat">';
	   echo        '<input type="checkbox" id='.$x.' name="check_list[]" value='.$x.' />';
   
  echo "<label for=".$x.">".$q."</label>";
	   
     echo    '</li>';
}
$q++;
 }  
  echo    '</ol>';
  echo	    '</li>';
 echo '<input type="submit" name="submit">';

 
 ?>
 <?php
 
 ?>

</body>
</html>
