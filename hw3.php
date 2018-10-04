<?php
$num=rand(1,100);
function isBitten($num){
  if($num>=50){
      return true;
}
  else return false;
}

if(isBitten($num)){
echo "<html>";
echo "<head><title>Charlie Ate it</title></head>";
echo "<body>";
echo "<h1 font-size=50px align=center>CHARLIE ATE MY LUNCH</h1>";
 echo"<p font-size=50px style=text-align:center>YOUR PROBABILITY WAS $num</p>";
echo "</body>";
// some PHP code here …
echo "</html>";
}
else{
echo "<html>";
echo "<head><title>Charlie Didn't Eat it</title></head>";
echo "<body>";
echo "<h1 font-size=50px align=center>CHARLIE DIDN'T EAT MY LUNCH</h1>";
echo "<p font-size=50px style=text-align:center>YOUR PROBABILITY WAS $num</p>";
echo "</body>";
// some PHP code here …
echo "</html>";
}


echo "<table width=300px cellpadding=1px border=1px cellspacing=1px>";
for($rows=1;$rows<=8;$rows++){
echo "<tr>";
for($cells=1;$cells<=8;$cells++){
if($cells%2==0)	{
echo "<td bgcolor=black width=35px height=35px></td>";
}
else{
echo "<td bgcolor=red width=35px height=35px></td>";
}
}
echo "</tr>";
}
echo "</table>";
echo"<br>";
echo"<br>";


 $month = array ('January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December');
for($count=0;$count<12;$count++){
  echo $month[$count];
  echo" ";
}
echo"<br>";
echo "<br>";
sort($month);
for($count=0;$count<12;$count++){
  echo $month[$count];
  echo" ";
}
echo "<br>";
echo"<br>";

$months = array ('January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December');

foreach($months as $value){
  echo $value;
  echo " ";
}
sort($months);
echo"<br>";
echo "<br>";
foreach($months as $value){
  echo $value;
  echo " ";
}

echo "<br>";
echo "<br>";
echo "<br>";

$rest=array("Chama Gaucha"=>"40.50", "Avia by Kameel"=>"15.00","Bone's Restraunt"=>"65.00","Umi Sushi Buckhead"=>"40.50","Fandangles"=>"30.00","Captain Grille"=>"60.50","Canoe"=>"35.50","One Flew South"=>"21.00","Fox Bros BBQ"=>"15.00","South City Kitchen Midtown"=>"29.00");

echo "<table cellpadding=1px border=1px cellspacing=1px>";
echo"<th>Restraunt</th>";
echo"<th>Average Price</th>";
foreach($rest as $n =>$p){
echo"<tr>";
echo"<td width=200px style=text-align:center>$n</td>";
echo"<td width=200px style=text-align:center>$$p</td>";
echo"</tr>";
}
echo "</table>";

echo "<br>";

function p(){
$price=array("Chama Gaucha"=>"40.50", "Avia by Kameel"=>"15.00","Bone's Restraunt"=>"65.00","Umi Sushi Buckhead"=>"40.50","Fandangles"=>"30.00","Captain Grille"=>"60.50","Canoe"=>"35.50","One Flew South"=>"21.00","Fox Bros BBQ"=>"15.00","South City Kitchen Midtown"=>"29.00");  
asort($price);
echo "<table cellpadding=1px border=1px cellspacing=1px>";
echo"<th>Restraunt</th>";
echo"<th>Average Price</th>";
foreach($price as $n =>$p){
echo"<tr>";
echo"<td width=200px style=text-align:center>$n</td>";
echo"<td width=200px style=text-align:center>$$p</td>";
echo"</tr>";
}
echo "</table>";

}
p();
echo "<br>";

function x(){
$price=array("Chama Gaucha"=>"40.50", "Avia by Kameel"=>"15.00","Bone's Restraunt"=>"65.00","Umi Sushi Buckhead"=>"40.50","Fandangles"=>"30.00","Captain Grille"=>"60.50","Canoe"=>"35.50","One Flew South"=>"21.00","Fox Bros BBQ"=>"15.00","South City Kitchen Midtown"=>"29.00");  
ksort($price);
echo "<table cellpadding=1px border=1px cellspacing=1px>";
echo"<th>Restraunt</th>";
echo"<th>Average Price</th>";
foreach($price as $n =>$p){
echo"<tr>";
echo"<td width=200px style=text-align:center>$n</td>";
echo"<td width=200px style=text-align:center>$$p</td>";
echo"</tr>";
}
echo "</table>";

}
x();



?>
 

